<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateUser extends FormRequest
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
            'name' => 'required|min:5|max:80',
            'cpf' => 'required|unique:users',
            'email' => 'required|email_ck|unique:users',
            'gender' => 'required',
            'profession' => 'required|min:5|max:30',
            'birth_date' => 'required',
            'fixed' => ['required', 'phone'],
            'mobile' => ['required', 'mobile'],
            'public_place_id' => ['required', 'integer'],
            'description' => ['required'],
            'complement' => ['required'],
            'number' => ['required'],
            'zip_code' => ['required', 'cep'],
            'neighborhood' => ['required'],
            'citie' => ['required'],
            'state_id' => ['required'],
            'photo' => ['required', 'image', 'mimes:jpg,bmp,png,jpeg', 'max:100']

        ];

        if ($this->method() === 'PUT') {
            $rules['name'] = [
                'required',
                'min:5',
                'max:80',
                'alpha'
            ];
        }

        return $rules;
    }

    public function withValidator($validator)
    {
        $validator->addExtension('phone', function ($attribute, $value, $parameters, $validator)
        {

            $valor = preg_replace("/[^0-9]/", "", $value);

            $lenValor = (int) strlen($valor);

            if ($lenValor < 10)
                return false;

            if ($valor[0] == "0" || $valor[2] == "0")
                return false;

            return true;

        });

        $validator->addExtension('mobile', function ($attribute, $value, $parameters, $validator)
        {

            $valor = preg_replace("/[^0-9]/", "", $value);

            $lenValor = (int) strlen($valor);

            if ($lenValor < 11)
                return false;

            if ($valor[0] == "0" || $valor[2] == "0")
                return false;

            return true;

        });

        $validator->addExtension('cep', function ($attribute, $value, $parameters, $validator)
        {

            $valor =  preg_replace("/[^0-9]/", "", $value);

            $lenValor = (int) strlen($valor);

            if ($lenValor < 8)
                return false;

            return true;

        });

        $validator->addExtension('email_ck', function ($attribute, $value, $parameters, $validator)
        {

            if (!preg_match("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^", $value))
                return false;

            return true;

        });


    }

    public function messages()
    {
        return [

            'name.required' => 'Nome Completo Obrigatório!',
            'name.min' => 'Nome Completo Mínimo 5 Letras!',
            'name.max' => 'Nome Completo Máximo 80 letras!',
            'name.alpha' => 'Deve possuir apenas caracteres!',
            'cpf.required' => 'CPF Obrigatório!',
            'cpf.unique' => 'CPF já cadastrado!',
            'email.required' => 'E-mail Obrigatório!',
            'email.email_ck' => 'E-mail Inválido!',
            'email.unique' => 'E-mail já cadastrado!',
            'gender.required' => 'Sexo Obrigatório!',
            'profession' => 'Profissão Obrigatória',
            'birth_date' => 'Data de Nascimento Obrigatória!',
            'fixed.required' => 'Telefone Obrigatório!',
            'fixed.phone' => 'O Telefone informado é inválido!',
            'mobile.required' => 'Celular Obrigatório!',
            'mobile.mobile' => 'O Celular informado é inválido!',
            'public_place_id.required' => 'Logradouro Obrigatório!',
            'public_place_id.integer' => 'Erro no Logradouro!',
            'description.required' => 'Endereço Obrigatório!',
            'complement.required' => 'Complemento Obrigatório!',
            'number.required' => 'Número Obrigatório!',
            'zip_code.required' => 'CEP Obrigatório!',
            'zip_code.cep' => 'CEP Inválido!',
            'zip_code.integer' => 'Erro no CEP!',
            'neighborhood.required' => 'Bairro Obrigatório!',
            'citie.required' => 'Cidade Obrigatório!',
            'state_id.required' => 'UF Obrigatória!',
            'photo.required' => 'Foto Obrigatória',
            'photo.mimes' => 'Formatos Permitidos jpg, bmp, png e jpeg!',
            'photo.max' => 'Tamanho da Foto Superior a 100 Kb!'
        ];

    }
}
