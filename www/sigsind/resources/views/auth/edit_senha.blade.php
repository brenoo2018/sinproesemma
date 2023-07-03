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
                    <form class="form-horizontal" role="form" method="POST" action="users/update_senha">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-2 control-label">Senha</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-2 control-label">Confirme a senha</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
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
                </div>
            </div>
    </div>
@endsection
