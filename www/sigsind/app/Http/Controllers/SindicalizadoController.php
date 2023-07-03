<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sindicalizado;
use App\Contato;

class SindicalizadoController extends Controller
{
    //
    function index(){
        $sindicalizados = Sindicalizado::paginate(30);   
        return view('sindicalizado.lista')->with("sindicalizados", $sindicalizados);
    }
    
    function buscar(Request $request){
        $sindicalizados = Sindicalizado::where('nome', 'LIKE', '%'.$request->chave.'%')->orWhere('cpf', 'LIKE', '%'.$request->chave.'%')->paginate(10);   
        return view('sindicalizado.lista')->with("sindicalizados", $sindicalizados);
    }
    
    function show($id){
        $sindicalizado = Sindicalizado::findOrFail($id);
        return view('sindicalizado.show')->with("sindicalizado", $sindicalizado);
    }
    
    function editar($id){
        $sindicalizado = Sindicalizado::findOrFail($id);
        return view('sindicalizado.form_edit')->with("sindicalizado", $sindicalizado);
    }
    function apagar($id){
        $sindicalizado = Sindicalizado::findOrFail($id);
        return view('sindicalizado.show_delete')->with("sindicalizado", $sindicalizado);
    }
        
    function cadastrar(Request $request){
        $sindicalizado = new Sindicalizado;
        $sindicalizado->nome = $request->nome;
        $sindicalizado->matricula = $request->matricula;
        $sindicalizado->nivel = $request->nivel;
        $sindicalizado->cpf = $request->cpf;
        $sindicalizado->rg = $request->rg;
        $sindicalizado->rg_orgao_expedidor = $request->org_exped;
        $sindicalizado->sexo = $request->sexo;
        //$data_formatada = date_create_from_format('d/m/Y', $request->dt_nasc);
        //$sindicalizado->dt_nascimento = date_format($data_formatada,"Y-m-d"); 
        $sindicalizado->dt_nascimento = $request->dt_nasc;
        $sindicalizado->estado_civil = $request->estado_civil;
        $sindicalizado->fone_residencial = $request->fone_res;
        $sindicalizado->fone_trabalho = $request->fone_trab;
        $sindicalizado->fone_celular = $request->fone_cel;
        $sindicalizado->email = $request->email;
        $sindicalizado->logradouro = $request->logradouro;
        $sindicalizado->numero = $request->numero;
        $sindicalizado->cep = $request->cep;
        $sindicalizado->bairro = $request->bairro;
        $sindicalizado->cidade = $request->cidade;
        $sindicalizado->uf = $request->uf;
        $sindicalizado->regime = $request->regime;
        $sindicalizado->lotacao_municipio = $request->lotacao_municipio;        
        $sindicalizado->lotacao_escola = $request->lotacao_escola;
        if(isset($request->turno)){
            $sindicalizado->lotacao_turno = implode(",", $request->turno); /*verificar*/
        }
        $sindicalizado->rede_ensino = $request->rede_ensino;
        $sindicalizado->situacao = $request->situacao;
        $sindicalizado->atividade_funcional = $request->atividade;
        $sindicalizado->disciplina = $request->disciplina;
        $sindicalizado->escolaridade = $request->escolaridade;
        $sindicalizado->faixa_salarial = $request->salario;
                
        $contato = new Contato;
        $contato->nome = $request->nome;
        $contato->fone_res = $request->fone_res;
        $contato->fone_trab = $request->fone_trab;
        $contato->fone_cel = $request->fone_cel;
        $contato->email = $request->email;
        $contato->fk_sindicalizado = $request->cpf;
        $contato->save();
        
        if($sindicalizado->save()){
            return view('sindicalizado.form_cadastro')->with('msg','Cadastro realizado com sucesso!');
        }else{
            return view('sindicalizado.form_cadastro')->with('msg','Ocorreu um erro no cadastro!');
        }
        
    }
    
    public function atualizar(Request $request){
        $sindicalizado = Sindicalizado::findOrFail($request->id);
        $sindicalizado->nome = $request->nome;
        $sindicalizado->matricula = $request->matricula;
        $sindicalizado->nivel = $request->nivel;
        $sindicalizado->cpf = $request->cpf;
        $sindicalizado->rg = $request->rg;
        $sindicalizado->rg_orgao_expedidor = $request->org_exped;
        $sindicalizado->sexo = $request->sexo;
        $data_formatada = date_create_from_format('d/m/Y', $request->dt_nasc);
        $sindicalizado->dt_nascimento = date_format($data_formatada,"Y-m-d"); 
        $sindicalizado->estado_civil = $request->estado_civil;
        $sindicalizado->fone_residencial = $request->fone_res;
        $sindicalizado->fone_trabalho = $request->fone_trab;
        $sindicalizado->fone_celular = $request->fone_cel;
        $sindicalizado->email = $request->email;
        $sindicalizado->logradouro = $request->logradouro;
        $sindicalizado->numero = $request->numero;
        $sindicalizado->cep = $request->cep;
        $sindicalizado->bairro = $request->bairro;
        $sindicalizado->cidade = $request->cidade;
        $sindicalizado->uf = $request->uf;
        $sindicalizado->regime = $request->regime;
        $sindicalizado->lotacao_municipio = $request->lotacao_municipio;
        $sindicalizado->lotacao_escola = $request->lotacao_escola;
        $sindicalizado->lotacao_turno = implode(",", $request->turno); /*verificar*/
        $sindicalizado->rede_ensino = $request->rede_ensino;
        $sindicalizado->situacao = $request->situacao;
        $sindicalizado->atividade_funcional = $request->atividade;
        $sindicalizado->disciplina = $request->disciplina;
        $sindicalizado->escolaridade = $request->escolaridade;
        $sindicalizado->faixa_salarial = $request->salario;
        
        Contato::where('fk_sindicalizado', $request->cpf)
                    ->update(['nome' => $request->nome,
                              'fone_res' => $request->fone_res,
                              'fone_trab' => $request->fone_trab,
                              'fone_cel' => $request->fone_cel,
                              'email' => $request->email]);                    
        
        if($sindicalizado->update()){
            return view('sindicalizado.show',['sindicalizado' => $sindicalizado, "msg" => "Dados atualizados com sucesso"]);
        }else{
            return view('sindicalizado.show',['sindicalizado' => $sindicalizado, "msg" => "Houve um erro na atualização"]);
        }
    }
    
    function excluir($id){
        $sindicalizado = Sindicalizado::findOrFail($id);
        $sindicalizados = Sindicalizado::paginate(10); 
        if($sindicalizado->delete()){
            return redirect()->route('lista', ['sindicalizados' => $sindicalizados, 'msg' => "ok"]);
        }else{
            return redirect()->route('lista', ['sindicalizados' => $sindicalizados, 'msg' => "erro"]);
        }
    }
}
