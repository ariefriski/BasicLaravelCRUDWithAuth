<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class MahasiswaRequest extends FormRequest
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
        $rule_unique = Rule::unique('mahasiswas','nama');
        if ($this->method() !== 'POST')
        {
            $rule_unique->ignore($this->route()->parameter('id'));
        }
        return [
            //
            'nama'=>['required',$rule_unique],
            'usia'=>['required'],
            'jurusan'=>['required']
        ];
    }

    public function messages()
    {
        return [
            'required'=>'Error :attribute field',
            'nama.required'=>"nama harus diisi"
        ];
    }
}
