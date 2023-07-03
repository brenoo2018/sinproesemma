@extends('layouts.master')

@section('content')

<div class="panel panel-widget">
    <div class="progressbar-heading general-heading">
        <h2>Usuários</h2>
        
        
    </div>
    
    
    
    <div class="tables">
        <table class="table table-bordered table-hover "> 
          <thead> <tr><th>Nome</th> <th>E-mail</th> </tr> </thead> 
          @foreach ($users as $user) 
          <tr>
            <td>{{{ $user->name }}}</td>
            <td>{{{ $user->email }}}</td>                        
          </tr>
          @endforeach
        </table>
    </div>
    
    {!! $users->links() !!}
    
        <div class="col-md-8">
            <a href="/register" class="btn btn_5 btn-lg btn-primary">Novo usuário</a>
        </div>
    
    <div class="clearfix"></div>
    
</div>

@endsection