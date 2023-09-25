<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreUpdateTypeUser extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        $rules = [
            'type' => 'required|min:3|max:50|unique:type_users'
        ];

        if ($this->method() === 'PUT') {
            $rules['type'] = [
                'required',
                'min:3',
                'max:50',
                'alpha',
                //"unique:type_users,type,{$this->id},id"
                Rule::unique('type_users')->ignore($this->id)
            ];
        }

        return $rules;
    }

    public function messages()
    {

        return [

            'type.required' => 'Tipo de Usuário Obrigatório!',
            'type.min' => 'Tipo de Usuário Mínimo 3 Letras!',
            'type.max' => 'Tipo de Usuário Máximo 50 letras!',
            'type.alpha' => 'Deve possuir apenas caracteres!',
            'type.unique' => 'Este Tipo de Usuário já existe!'
        ];

    }
}
