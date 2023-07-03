@extends('layouts.master')

@section('content')
    <div class="panel panel-widget ">
            
        <div class="progressbar-heading general-heading">
            <h2>Atualizar dados</h2>
            @isset($msg)
                <div class="aviso-ok">{{ $msg }}</div>
            @endisset
        </div>
        <div class="forms">
                
                <div class="form-three">
                    <form class="form-horizontal" role="form" method="POST" action="users/update">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-2 control-label">Nome</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ Auth::user()->name }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-2 control-label">E-Mail</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ Auth::user()->email }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-3 col-md-offset-6">
                                <button type="submit" class="btn btn_5 btn-lg btn-primary">
                                   Salvar
                                </button>
                            </div>
                        </div>
                    </form>
                    <a href="users/editar/password" class="btn btn_5 btn-lg btn-primary" >Editar senha</a>
                </div>
            </div>
    </div>
@endsection
