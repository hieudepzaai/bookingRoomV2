<?php

namespace App\Service\VNPay;

class PaymentService
{
    protected  $vnp_TmnCode = ""; //Website ID in VNPAY System
    protected  $vnp_HashSecret = ""; //Secret key
    protected $vnp_Url = "https://sandbox.vnpayment.vn/paymentv2/vpcpay.html";
    protected $vnp_Returnurl = "http://localhost/vnpay_php/vnpay_return.php" ;
    protected $vnp_apiUrl = "http://sandbox.vnpayment.vn/merchant_webapi/merchant.html";


    public function __construct()
    {
    }

    public function createVnPay() {

    }

}
