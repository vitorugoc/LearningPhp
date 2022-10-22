<?php

namespace App\Http\Controllers;

use App\Models\User;

class ContatoController extends Controller
{

    public function contato()
    {
        return view('site.contato');
    }
}
