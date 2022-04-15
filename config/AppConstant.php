<?php

return [
    "post_status" => [
        "draft",
        "deleted" ,
        "published",
        "booked",
        "deposited",
        "unknown"
    ],
    "price_unit" => [
        [
            "name" => "day",
            "description" =>"Ngay"
        ],
        [
            "name" => "hour",
            "description" =>"Gio"
        ],
        [
            "name" => "month",
            "description" =>"Thang"
        ],
        [
            "name" => "Year",
            "description" =>"Thang"
        ],

    ],
    "currency_unit" => [
        [
            "name" => "VND",
            "description" =>"Viet Nam Dong"
        ],
        [
            "name" => "$",
            "description" =>"USD"
        ],
        [
            "name" => "EURO",
            "description" =>"Europe"
        ],
        [
            "name" => "rup",
            "description" =>"Europe"
        ],
    ],
    "system_currency_unit" =>"VND",
    "system_area_unit" => [
        "name" => "m2",
        "display_html" => "M<sup>2</sup>"
    ],

    "items_per_page" => 10,
    "image_upload_path" => [
        "post" => "images/post",
        "user" => "images/user"

    ],





];
