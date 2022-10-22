<?php

namespace App\Http\Controllers;

use App\Models\User;

class PrincipalController extends Controller
{

    public function principal()
    {
        return view('site.principal');
    }
}
