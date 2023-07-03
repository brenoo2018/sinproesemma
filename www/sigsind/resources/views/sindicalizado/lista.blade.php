@extends('layouts.master')

@section('content')

<div class="panel panel-widget">
    <div class="progressbar-heading general-heading">
        <h2>Sindicalizados</h2>
        @php
            if(isset($_GET['msg'])){
                echo "<div class='aviso-ok'>";
                    if($_GET['msg'] == "ok"){
                        echo "Dados excluidos com sucesso.";
                    }
                echo "</div>";
            }
        @endphp
    </div>
    <div class="tables">
        <form class="form-horizontal" action="sindicalizado/buscar" method="POST" >
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group">
                <div class="col-sm-12">
                    <div class="col-sm-5">
                        <input type="text" class="form-control" id="chave" name="chave" placeholder="Pesquisar..." >
                    </div>
                    <div class="col-sm-3">
                        <button type="submit" class="btn btn_3 btn-primary">Pesquisar</button>
                    </div>
                </div>											
            </div>
        </form>
        <table class="table table-bordered table-hover "> 
          <thead> <tr><th>Nome</th> <th>Matrícula</th> <th>CPF</th> <th>Telefone celular</th> <th>E-mail</th> <th></th><th></th> </tr> </thead> 
          @foreach ($sindicalizados as $sindicalizado) 
          <tr>
            <td>{{{ $sindicalizado->nome }}}</td>
            <td>{{{ $sindicalizado->matricula }}}</td>
            <td>{{{ $sindicalizado->cpf }}}</td>
            <td>{{{ $sindicalizado->fone_celular }}}</td>
            <td>{{{ $sindicalizado->email }}}</td>
            <td><a href="sindicalizado/{{ $sindicalizado->id }}"> <img src="{{URL::asset('public/images/more.png')}}" width=30 alt="ver mais" title="ver mais"></a></td>            
            <td><a href="sindicalizado/apagar/{{ $sindicalizado->id }}"> <img src="{{URL::asset('public/images/delete.png')}}" width=30 alt="apagar" title = "apagar"></a></td>            
          </tr>
          @endforeach
        </table>
    </div>
    
    {!! $sindicalizados->links() !!}
    
    
</div>

@endsection