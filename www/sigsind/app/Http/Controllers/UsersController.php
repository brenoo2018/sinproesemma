<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{
    //
     function index(){
        $users= User::paginate(5);   
        return view('auth.lista')->with("users", $users);
    }
    public function update(Request $request){
        $usuario = Auth::user(); // resgata o usuario

        $usuario->name = $request->name; // pega o valor do input username
        $usuario->email = $request->email; // pega o valor do input email

        
        $usuario->save(); // salva o usuario alterado =)

        return view('auth.edit')->with("msg","Dados atualizados com sucesso");
    }
    
    public function update_senha(Request $request){
        $usuario = Auth::user(); // resgata o usuario
        if ( $request->password != '' && $request->password == $request->password_confirmation){ // verifica se a senha foi alterada
            $usuario->password = bcrypt($request->password); // muda a senha do seu usuario já criptografada pela função bcrypt
            $usuario->save(); // salva o usuario alterado =)

            return view('auth.edit')->with("msg","Dados atualizados com sucesso");
        }else{
            return view('auth.edit')->with("msg","Senha inválida");
        }
        
    }
}
