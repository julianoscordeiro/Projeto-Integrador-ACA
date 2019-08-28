<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $title = 'Inicio | ';
        return view('home.index', [
            'title' => $title
        ]);
    }


    /**
     * Show the user dashboard.
     */

    public function home()
    {   
        $title = 'Painel | ';
        return view('home.home', [
            'title' => $title
        ]);
    }

    public function questoes()
    {   
        $title = 'Questões | ';
        return view('home.questoes', [
            'title' => $title
        ]);
    }
    public function criarquestao()
    {   
        $title = 'Criar Questão | ';
        return view('home.criarquestao', [
            'title' => $title
        ]);
    }
    public function provas()
    {   
        $title = 'Provas | ';
        return view('home.provas', [
            'title' => $title
        ]);
    }
    public function criarProva()
    {   
        $title = 'Criar Prova | ';
        return view('home.criarprova', [
            'title' => $title
        ]);
    }
}
