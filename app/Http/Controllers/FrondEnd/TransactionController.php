<?php

namespace App\Http\Controllers\FrondEnd;

use App\Http\Controllers\Controller;
use App\Service\VNPay\VnPayService;
use Illuminate\Http\Request;
use function route;
use function view;

class TransactionController extends  Controller
{
    private  $vnPayService;
    public function __construct(VnPayService $VnPayService)
    {
        $this->vnPayService = $VnPayService;
    }
    public function AddCredit() {
        return view('frontend.page.payment.addCredit');
    }
    public function createPaymentUrl(Request $request)
    {
        return $this->vnPayService->createPaymentUrl($request , route('return_payment'));
    }
    public function return(Request $request)
    {
        $transaction = $this->vnPayService->return($request);
//        return $transaction;

        if($transaction['status'] == null ) return redirect('/');
        if($transaction['status']=="success") {
            return view('frontend.page.payment.addCreditSuccess' , [
                'transaction' => $transaction
            ]);
        }
        else return view('frontend.page.payment.addCreditFail' , [
            'transaction' => $transaction
        ]);
    }



}
