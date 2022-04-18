<?php

namespace App\Http\Controllers\FrondEnd\transaction;

use App\Http\Controllers\Controller;
use App\Models\Transaction;
use App\Models\User;
use App\Models\UserMembership;
use App\Service\VNPay\VnPayService;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

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
        $status = $this->vnPayService->return($request);
        if($status) {
            return "success";
        }
        else return "false";
    }



}
