<?php

namespace App\Http\Requests\Post;

use Illuminate\Foundation\Http\FormRequest;

class ClientCreatePostRequest extends FormRequest
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
            'title' => "required|string",
            'description' =>"required|string",
            'category_id'=>"required|integer",
            'street_id'=>"nullable|integer",
            'ward_id'=>"required|integer",
            'district_id'=>"required|integer",
            'province_id'=>"required|integer",
            'address_detail'=>"required|string|max:255",
            'price'=>"required|string",
            'price_type_id'=>"required|integer",
            'area'=>"required|numeric",
            'deposit_amount'=>"required|string",
            'img'=>"required",
            'bed_room_count'=>"required|numeric",
            'wc_count'=>"required|numeric",
            'type_of_apartment'=>"required|string",
            'balcony_direction'=>"required|string",
            'interior_condition'=>"required|string",
            'number_of_post_time_unit' =>"required|numeric",
        ];
    }
}
