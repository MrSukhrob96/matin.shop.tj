<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\KmRequest;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Http;

class KmController extends Controller
{
    public const IP_ADDRESS = 'http://192.168.10.14:8089';
    public $token;


    public function token()
    {
        $response = Http::asForm()->post('http://nanana/api/token', [
            'username' => 'lalala',
            'password' => 'Password',
            'grant_type' => 'password',
        ]);

        if ($response->successful()) {
            return $response['access_token'];
        }

        return false;
    }

    public function identificate(KmRequest $request)
    {
        $this->token = $this->token();

        if ($this->token == false) {
            return response()->json(["error" => 1, "Token is not defined"]);
        }

        $response = Http::withToken($this->token)->post('http://192.168.10.114:8089/api/Customer/IdentificationWallet', $request->only(
            'WalletNumber', 'Id', 'FullName', 'FirstName', 'LastName', 'MidName', 'BirthDate', 'CellPhone', 'Type', 'Sex', 'SecretPhrase', 'Address', 'CodeConfirmation'
        ));

        if ($response->successful()) {
            return response()->json($response);
        }

        return response()->json(["error" => 1, "Client is not identified"], 400);
    }
}
