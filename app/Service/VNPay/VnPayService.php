<?php

namespace App\Service\VNPay;

use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class VnPayService
{
    protected  $vnp_TmnCode = "WG9G2BRL"; //Website ID in VNPAY System
    protected  $vnp_HashSecret = "RMTCYZAVLOOVMBYMQZRHXAPEMLEWCUNP"; //Secret key
    protected $vnp_Url = "http://sandbox.vnpayment.vn/paymentv2/vpcpay.html";
    protected $vnp_Returnurl = "http://localhost/vnpay_php/vnpay_return.php" ;
    protected $vnp_apiUrl = "http://sandbox.vnpayment.vn/merchant_webapi/merchant.html";


    public function __construct()
    {
    }

    public function createVnPay() {

    }
    public function return(Request $request)
    {
//        return $request;
        $transaction_id = session('transaction_id');
        if($request->vnp_ResponseCode == "00") {
            $transaction = Transaction::find($transaction_id);
            $transaction->update(['status' => "success"]);
            $new_balance = Auth::user()->balance + $transaction->amount ;
            Auth::user()->update(['balance' => $new_balance]);

            if($new_balance != Auth::user()->balance) return false;
            session()->forget('transaction_id');
            return true;
        }
        Transaction::find($transaction_id)->update(['status' => "unsuccessfully"]);
        session()->forget('transaction_id');
        return false;
    }
    public function createPaymentUrl(Request $request ,string $returnUrl)
    {
//        $membership = $this->membershipRepository->get($request->membership_id);
        $user = Auth::user();
        $request['amount'] = Str::replace(',', '', $request->amount);

        $transation = Transaction::create([
            'created_by' => Auth::id(),
            'amount' => $request->amount,
            'transaction_type' => "add credit",
            'balance_before_transaction'        => $user->balance,
            'status'   => "unsuccessfully",
            'payment_method' => "Online"

        ]);
        session(['transaction_id' => $transation->id]);
        $vnp_TmnCode = "WG9G2BRL"; //Mã website tại VNPAY
        $vnp_HashSecret = "RMTCYZAVLOOVMBYMQZRHXAPEMLEWCUNP"; //Chuỗi bí mật
        $vnp_Url = "http://sandbox.vnpayment.vn/paymentv2/vpcpay.html";
        $vnp_Returnurl = $returnUrl;
        $vnp_TxnRef = date("YmdHis"); //Mã đơn hàng. Trong thực tế Merchant cần insert đơn hàng vào DB và gửi mã này sang VNPAY
        $vnp_OrderInfo = "Nạp tiền vào tài khoản";
        $vnp_OrderType = 'billpayment';
//        $vnp_Amount = $request->input('amount') * 100;
        $vnp_Amount = doubleval($request->amount)*100;
        $vnp_Locale = 'vn';
        $vnp_IpAddr = request()->ip();

        $inputData = array(
            "vnp_Version" => "2.0.0",
            "vnp_TmnCode" => $vnp_TmnCode,
            "vnp_Amount" => $vnp_Amount,
            "vnp_Command" => "pay",
            "vnp_CreateDate" => date('YmdHis'),
            "vnp_CurrCode" => "VND",
            "vnp_IpAddr" => $vnp_IpAddr,
            "vnp_Locale" => $vnp_Locale,
            "vnp_OrderInfo" => $vnp_OrderInfo,
            "vnp_OrderType" => $vnp_OrderType,
            "vnp_ReturnUrl" => $vnp_Returnurl,
            "vnp_TxnRef" => $vnp_TxnRef,
        );

        if (isset($vnp_BankCode) && $vnp_BankCode != "") {
            $inputData['vnp_BankCode'] = $vnp_BankCode;
        }
        ksort($inputData);
        $query = "";
        $i = 0;
        $hashdata = "";
//        return $inputData;
        foreach ($inputData as $key => $value) {
            if ($i == 1) {
                $hashdata .= '&' . $key . "=" . $value;
            } else {
                $hashdata .= $key . "=" . $value;
                $i = 1;
            }
//            return $hashdata;
            $query .= urlencode($key) . "=" . urlencode($value) . '&';

        }
//        return $query;
        $vnp_Url = $vnp_Url . "?" . $query;

        if (isset($vnp_HashSecret)) {
            // $vnpSecureHash = md5($vnp_HashSecret . $hashdata);
            $vnpSecureHash = hash('sha256', $vnp_HashSecret . $hashdata);
            $vnp_Url .= 'vnp_SecureHashType=SHA256&vnp_SecureHash=' . $vnpSecureHash;

        }
        return redirect($vnp_Url);
    }



}
