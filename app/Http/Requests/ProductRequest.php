<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class ProductRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            
                'product_name' => 'required|min:6',
                'product_price' => 'required|integer'
            
        ];
    }

    public function messages() {
        return [
            'product_name.required' => 'Vui long nhap :attribute day du'
        ];
    }

    public function attributes()
    {
        return [
            'product_name' => 'Ten san pham'
        ];
    }

    public function withValidator($validator){
        $validator -> after(function ($validator){
            if($this->somethingElseIsInvalid()){
                $validator->errors()->add('msg','Da co loi xay ra');
            }
        });
    }

    protected function failedAuthorization()
    {
        throw new HttpResponseException(abort(404));
    }
}
