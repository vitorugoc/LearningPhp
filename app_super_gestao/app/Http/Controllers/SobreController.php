<?php

namespace App\Http\Controllers;

use App\Http\Middleware\LogAcessoMiddleware;
use App\Models\User;

class SobreController extends Controller
{

    public function __construct()
    {
        $this->middleware('log.acesso');
    }

    public function sobre()
    {
        return view('site.sobre-nos');
    }
}
