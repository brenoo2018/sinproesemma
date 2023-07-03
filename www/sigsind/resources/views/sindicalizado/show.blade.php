@extends('layouts.master')

@section('content')
    
    <div class="panel panel-widget">
        <div class="progressbar-heading general-heading">
            <h2>Dados do sindicalizado</h2>
            @isset($msg)
                <div class="aviso-ok">{{ $msg }}</div>
            @endisset
        </div>
        <div class="sind-dados col-md-12">
            
                
                
                <div class="info-label-group col-md-12">
                    <h3>Dados pessoais:</h3>
                    <label class="col-md-2 info-label">Nome:</label>
                    <label class="col-md-10 info-label-data">{{$sindicalizado->nome}}</label>
                                        
                    <label class="col-md-2 info-label">CPF:</label>
                    <label class="col-md-10 info-label-data">{{$sindicalizado->cpf}}</label>
                    
                    <label class="col-md-2 info-label">RG:</label>
                    <label class="col-md-10 info-label-data">{{$sindicalizado->rg}} - {{$sindicalizado->rg_orgao_expedidor}}</label>
                    
                    <label class="col-md-2 info-label">Estado Civil:</label>
                    <label class="col-md-4 info-label-data">{{$sindicalizado->estado_civil}}</label>
                                        
                    <label class="col-md-3 info-label">Data de nascimento:</label>
                    <label class="col-md-3 info-label-data">{{Carbon\Carbon::parse($sindicalizado->dt_nascimento)->format('d/m/Y')}}</label>
                    
                    <label class="col-md-2 info-label">Sexo:</label>
                    <label class="col-md-10 info-label-data">{{$sindicalizado->sexo}}</label>
                    
                    
                </div>
            
            <div class="info-label-group col-md-12">
                <h3>Contatos: </h3>
                
                <label class="col-md-3 info-label">Tel. residencial: </label>
                <label class="col-md-3 info-label-data">{{$sindicalizado->fone_residencial}}</label>
                
                <label class="col-md-3 info-label">Tel. de trabalho: </label>
                <label class="col-md-3 info-label-data">{{$sindicalizado->fone_trabalho}}</label>
                
                <label class="col-md-3 info-label">Celular: </label>
                <label class="col-md-9 info-label-data">{{$sindicalizado->fone_celular}}</label>
                
                <label class="col-md-3 info-label">E-mail: </label>
                <label class="col-md-9 info-label-data">{{$sindicalizado->email}}</label>
            </div>
            
            <div class="info-label-group col-md-12">
                <h3>Endereço: </h3>
                
                <label class="col-md-2 info-label">Logradouro: </label>
                <label class="col-md-7 info-label-data">{{$sindicalizado->logradouro}}</label>
                
                <label class="col-md-1 info-label">Número: </label>
                <label class="col-md-2 info-label-data">{{$sindicalizado->numero}}</label>
                
                <label class="col-md-2 info-label">Bairro: </label>
                <label class="col-md-6 info-label-data">{{$sindicalizado->bairro}}</label>
                
                <label class="col-md-2 info-label">CEP: </label>
                <label class="col-md-2 info-label-data">{{$sindicalizado->cep}}</label>
                
                <label class="col-md-2 info-label">Cidade: </label>
                <label class="col-md-6 info-label-data">{{$sindicalizado->cidade}}</label>
                
                <label class="col-md-2 info-label">Estado: </label>
                <label class="col-md-2 info-label-data">{{$sindicalizado->uf}}</label>
            </div>
            
            <dic class="info-label-group col-md-12">
                <h3>Dados profissionais</h3>
                
                <label class="col-md-2 info-label">Matrícula: </label>
                <label class="col-md-4 info-label-data">{{$sindicalizado->matricula}}</label>
                
                <label class="col-md-2 info-label">Nível: </label>
                <label class="col-md-4 info-label-data">{{$sindicalizado->nivel}}</label>
                
                <label class="col-md-2 info-label">Regime: </label>
                <label class="col-md-4 info-label-data">{{$sindicalizado->regime}}</label>
                
                <label class="col-md-3 info-label">Rede de ensino: </label>
                <label class="col-md-3 info-label-data">{{$sindicalizado->rede_ensino}}</label>
                
                <label class="col-md-2 info-label">Município: </label>
                <label class="col-md-10 info-label-data">{{$sindicalizado->lotacao_municipio}}</label>
                
                <label class="col-md-2 info-label">Escola: </label>
                <label class="col-md-10 info-label-data">{{$sindicalizado->lotacao_escola}}</label>
                
                <label class="col-md-2 info-label">Turno: </label>
                <label class="col-md-4 info-label-data">{{$sindicalizado->lotacao_turno}}</label>
                
                <label class="col-md-3 info-label">Atividade funcional:</label>
                <label class="col-md-3 info-label-data">{{$sindicalizado->atividade_funcional}}</label>
                
                @if(strtolower($sindicalizado->atividade_funcional) == "professor")                    
                    <label class="col-md-2 info-label">Disciplina:</label>
                    <label class="col-md-10 info-label-data">{{$sindicalizado->disciplina}}</label>                
                @endif
                
                <label class="col-md-2 info-label">Escolaridade:</label>
                <label class="col-md-10 info-label-data">{{$sindicalizado->escolaridade}}</label>
                
                <label class="col-md-2 info-label">Situação:</label>
                <label class="col-md-4 info-label-data">{{$sindicalizado->situacao}}</label>
                
                <label class="col-md-2 info-label">Faixa salarial:</label>
                <label class="col-md-4 info-label-data">{{$sindicalizado->faixa_salarial}}</label>
                
            </dic>
            
            <div class="col-md-10"></div><div class="col-md-2"><a href="sindicalizado/editar/{{$sindicalizado->id}}" class="btn btn_5 btn-lg btn-primary">Atualizar dados</a></div>

        </div>    
        <div class="clearfix">
    </div>


@endsection