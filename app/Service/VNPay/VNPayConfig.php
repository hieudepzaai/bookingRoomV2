<?php

namespace App\Service\VNPay;

class VNPayConfig
{
    public static $vnp_TmnCode = ""; //Website ID in VNPAY System
    public static $vnp_HashSecret = ""; //Secret key
    public static $vnp_Url = "https://sandbox.vnpayment.vn/paymentv2/vpcpay.html";
    public static$vnp_Returnurl = "http://localhost/vnpay_php/vnpay_return.php";
    public static $vnp_apiUrl = "http://sandbox.vnpayment.vn/merchant_webapi/merchant.html";

    public function  returnUrl() {

    }



}
