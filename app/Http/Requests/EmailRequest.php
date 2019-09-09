<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmailRequest extends FormRequest
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
       switch ($this->route()->getName()) {
           case 'ver_email':
               $rules = [
                   'email' => 'required|email|unique:users',
               ];
               break;
           case 'ver_password':
               $rules = [
                   'password' => 'required|alpha_dash|min:8|max:30',
               ];
               break;
       }
       return $rules;
    }

    /**
     * Custom message for validation
     *
     * @return array
     */
    public function messages()
    {
        return [
            'email.email' => 'Это не похоже на E-mail =(',
            'email.required' => 'E-mail не должен быть пустым.',
            'email.unique' => 'Данный E-mail уже зарегистрирован!',
            'password.required' => 'Пароль не должен быть пустым.',
            'password.alpha_dash' => 'Пароль содержит недопустимые символы.',
            'password.min' => 'Пароль должен состоять минимум из 8 символов.',
            'password.max' => 'Пароль должен состоять максимум из 30 символов.'
        ];
    }
}
