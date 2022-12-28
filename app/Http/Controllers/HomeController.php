<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tarefa;

class HomeController extends Controller
{
    public function __invoke() {
        //$list = Tarefa::where('resolvido', 0)->get()->count();
        //$item = Tarefa::find(2);
        //foreach($list as $item) {
            //echo $item->titulo;
            $t = new Tarefa;
            $t->titulo = 'Testando pelo Eloquent';
            $t->save();

            echo "Salvo com sucesso!";
        }

        //return view('welcome');
    }

