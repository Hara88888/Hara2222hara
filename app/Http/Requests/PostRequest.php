<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     *
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'post.title' => 'required|max:40',
            'post.body'=> 'required|max:400',
        ];
    }
    
    public function messages(){
    
    return[
        'post.title.required' =>'入力が必要です',
        'post.title.max' =>'40文字以内で入力してください',
        'post.body.required' =>'入力が必要です',
        'post.body.max' =>'400文字以内で入力してください'
        ];
    }
}
