@extends('layouts.master')

@section('content')

<div class="panel panel-widget" id="painel-fixo">
    <div class="progressbar-heading general-heading">
        <h2>Contatos</h2>
        @php
            if(isset($_GET['msg'])){
                echo "<div class='aviso-ok'>";
                    if($_GET['msg'] == "ok"){
                        echo "Operação realizada com sucesso.";
                    }
                echo "</div>";
            }
        @endphp
        
    </div>
    
    
    
    
    @php
        $alfabeto = ['A', 'B', 'C', 'D','E', 'F', 'G', 'H', 'I', 'J',
                      'K', 'L','M','N','O','P', 'Q', 'R','S','T','U','V','W','X','Y','Z'];
    @endphp
    
    
    <div class="col-md-10 lista-letras">
        @foreach($alfabeto as $letra)
            <a href="contatos/lista/#{{$letra}}" >{{ $letra }}</a>
        @endforeach
    </div>
    
    <div class="col-md-2">
        <a href="contatos/novo" class="btn btn-primary">Novo contato</a>
    </div>
    
    <div class="col-md-12" id="box_out_fones">
        @foreach($alfabeto as $letra)
            <div class="tables col-md-12">
                <h2 class="letra-contato">{{{ $letra }}}</h2>
                <table class="table table-bordered table-hover " id={{$letra}}> 
                  <thead> 
                      <tr>
                          <th>Nome</th>                  
                          <th>Telefone residencial</th>
                          <th>Telefone de trabalho</th>
                          <th>Telefone celular</th>
                          <th>E-mail</th>
                          <th></th>
                      </tr>
                  </thead>

                  @foreach ($contatos as $contato) 
                    @php
                        if(str_is(strtolower($letra).'*',strtolower($contato->nome))){
                    @endphp    
                    <tr>            
                        <td>{{{ $contato->nome }}}</td>
                        <td>{{{ $contato->fone_res }}}</td>                        
                        <td>{{{ $contato->fone_trab }}}</td>                        
                        <td>{{{ $contato->fone_cel }}}</td>                        
                        <td>{{{ $contato->email }}}</td>                        
                        <td><a href="contatos/editar/{{$contato->id}}"><img src="{{URL::asset('public/images/edit.png')}}" width=30 alt="editar" title="editar"></a></td>                        
                    </tr>
                    @php
                    }
                    @endphp
                  @endforeach
                </table>
            </div>
            <div class="clearfix"></div>
        @endforeach
    </div>
        
        
    <div class="clearfix"></div>
    
       
    
</div>

@endsection