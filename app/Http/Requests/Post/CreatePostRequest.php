<?php

namespace App\Http\Requests\Post;

use Illuminate\Foundation\Http\FormRequest;

class CreatePostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //
            "title"=>"",
            "description"=>"",
            "category_id"=>"",
            "street_id"=>"",
            "ward_id"=>"",
            "district_id"=>"",
            "province_id"=>"",
            "address_detail"=>"",
            "price"=>"",
            "price_type"=>"",
            "is_disabled"=>"",
            "area"=>"",
            "priority"=>"",
            "expired_at"=>"",
            "deposit_amount"=>"",
            "status"=>"",
            "created_by"=>"",
        ];
    }
}
