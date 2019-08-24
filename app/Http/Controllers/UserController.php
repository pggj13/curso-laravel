<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\User;

class UserController extends Controller {

    public function index() {

        $users = User::all();
        return view('home', compact('users'));
    }
    
    public function cadastrar() {
        return view('adicionar');
    }

    public function salvar(Request $req) {

        $dados = $req->all();

        if (in_array('', $dados)):
            echo 'Todos os campos devem ser preenchido!';
            exit;
        else:
            User::create($dados);
        endif;
        return redirect()->route('user.home');
    }

}
