<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class KmRequest extends FormRequest
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
            'WalletNumber'=> 'required',
            'Id'=> 'required',
            'FullName' => 'required',
            'FirstName'=> 'required',
            'LastName'=> 'required',
            'MidName' =>  'required',
            'BirthDate' => 'required',
            'CellPhone' => 'required',
            'Type' => 'required',
            'Sex' => 'required',
            'SecretPhrase' => 'required',
            'Address' => 'required',
            'CodeConfirmation' => 'required'
        ];
    }
}
