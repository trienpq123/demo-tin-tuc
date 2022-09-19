<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Unique;

class UserRequest extends FormRequest
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
        $uniqueEmail = 'unique:users';
        if(session('id')){
            $id = session('id');
            $uniqueEmail = 'unique:users,email'.$id;
        }
        return [
            'fullname' => 'required|min:5',
            'group_id' => ['required','integer',function($attribute,$value,$fail){
                if($value == 0){
                    $fail = 'Bắt buộc chọn nhóm';
                };
            }]
        ];
    }

    public function messages()
    {
        [
            'fullname.required' => 'Không được bỏ trống'
        ];
    }


}
