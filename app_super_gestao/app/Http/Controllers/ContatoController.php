<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\SiteContato;
use Illuminate\Http\Request;
use App\Models\MotivoContato;

class ContatoController extends Controller
{

    public function contato()
    {
        $motivo_contatos = MotivoContato::all();

        return view('site.contato', ['motivo_contatos' => $motivo_contatos]);
    }

    public function salvar(Request $request){
        $contato = new SiteContato();

        $regras = [
            'nome' => 'required|min:3|max:4014',
            'telefone' => 'required',
            'email' => 'email',
            'motivo_contatos_id' => 'required',
            'mensagem' => 'required|max:2000'
        ];
        
        $feedback = [
            'nome.min' => 'O campo nome precisa ter no mínimo 3 caracteres.',
            'nome.max' => 'O campo nome precisa ter no máximo 40 caracteres.',
            'email.email' => 'O email informado não é válido',
            'mensagem.max' => 'A mensagem deve ter no máximo 2000 caracteres',
            'required' => 'O campo :attribute deve ser preenchido.',

        ];

        $request->validate($regras, $feedback);

        if(!empty($request->all())){
            $contato->fill($request->all());
            $contato->save();
        }
        return redirect()->route('site.index');
    }
}
