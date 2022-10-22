<?php

namespace App\Http\Controllers;

use App\Models\User;

class SobreController extends Controller
{

    public function sobre()
    {
        return view('site.sobre-nos');
    }
}
