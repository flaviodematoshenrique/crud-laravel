<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class ConfigController extends Controller
{
    public function index(Request $request) {

       $nome = 'Flavio';
       $idade = 121;
       $cidade = $request->input('cidade');

        $lista = [
            ['nome'=>'farinha','qt'=>'2'],
            ['nome'=>'ovo','qt'=>'4'],
            ['nome'=>'fermento','qt'=>'1'],
            ['nome'=>'leite','qt'=>'2'],

        ];

        $data = [
            'nome' => $nome,
            'idade' => $idade,
            'cidade' => $cidade,
            'lista' => $lista
        ];

        return view('admin.config', $data);
    }

    public function info() {
        echo 'Configurações INFO 3';
    }

    public function permissoes() {
        echo 'Configurações Permissões 3';
    }
}
