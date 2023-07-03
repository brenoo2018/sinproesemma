<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Contato;

class ContatoController extends Controller
{
    //
    function index(){
        $contatos = Contato::all();
        $contatos = $contatos->sortBy('nome');
        return view('contato.lista')->with("contatos", $contatos);
    }
    
    function cadastrar(Request $request){
        $contato = new Contato;
        $contato->nome = $request->nome;
        $contato->fone_res = $request->fone_res;
        $contato->fone_trab = $request->fone_trab;
        $contato->fone_cel = $request->fone_cel;
        $contato->email = $request->email;
        $contato->fk_sindicalizado = "";

        if($contato->save()){
            $contatos = Contato::all();
            $contatos = $contatos->sortBy('nome');
            return view('contato.lista')->with("contatos", $contatos);
        }else{
            return view('contato.form_contato')->with('msg', 'Ouve ume erro ao cadastrar um novo contato!');
        }
        
    }
    
    function show($id){
        $contato = Contato::findOrFail($id);
        return view('contato.edita')->with('contato', $contato);
    }
    
    function atualizar(Request $request){
        $contato = Contato::findOrFail($request->id);
        $contato->nome = $request->nome;
        $contato->fone_res = $request->fone_res;
        $contato->fone_trab = $request->fone_trab;
        $contato->fone_cel = $request->fone_cel;
        $contato->email = $request->email;
        $contatos = Contato::all(); 
        $contatos = $contatos->sortBy('nome');
        if($contato->update()){
            return redirect()->route('lista_contato', ['contatos' => $contatos, 'msg' => "ok"]);
        }else{
            return redirect()->route('lista_contato', ['contatos' => $contatos, 'msg' => "erro"]);
        }
    }
    
    function excluir($id){
        $contato = Contato::findOrFail($id);
        $contatos = Contato::all(); 
        $contatos = $contatos->sortBy('nome');
        if($contato->delete()){
            return redirect()->route('lista_contato', ['contatos' => $contatos, 'msg' => "ok"]);
        }else{
            return redirect()->route('lista_contato', ['contatos' => $contatos, 'msg' => "erro"]);
        }
    }
}
