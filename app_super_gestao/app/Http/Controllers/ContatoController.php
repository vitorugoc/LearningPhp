<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\SiteContato;
use Illuminate\Http\Request;

class ContatoController extends Controller
{

    public function contato(Request $request)
    {
        $motivo_contatos = [
            1 => 'Dúvida',
            2 => 'Elogio',
            3 => 'Reclamação'
        ];

        return view('site.contato', ['motivo_contatos' => $motivo_contatos]);
    }

    public function salvar(Request $request){
        $contato = new SiteContato();

        $request->validate([
            'nome' => 'required|min:3|max:4014',
            'telefone' => 'required',
            'email' => 'required',
            'motivo_contato' => 'required',
            'mensagem' => 'required|max:2000'
        ]);

        if(!empty($request->all())){
            $contato->fill($request->all());
            $contato->save();
        }
    }
}
