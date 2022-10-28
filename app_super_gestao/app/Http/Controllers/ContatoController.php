<?php

namespace App\Http\Controllers;

use App\Models\User;

class ContatoController extends Controller
{

    public function contato()
    {
        var_dump($_POST);
        return view('site.contato');
    }
}
