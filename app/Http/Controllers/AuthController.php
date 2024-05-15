<?php

namespace App\Http\Controllers;

use App\Http\Requests\ApiLoginRequest;
use App\Traits\ApiRespones;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    use ApiRespones;

    public function login(ApiLoginRequest $request) {
        return $this->ok($request->get('username'));
    }
}
