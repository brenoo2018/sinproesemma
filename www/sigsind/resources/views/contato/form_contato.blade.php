@extends('layouts.master')

@section('content')

        <script type="text/javascript">
            function abilita(atividade){                
                if(atividade == "professor"){
                    document.getElementById('disciplina').disabled=false;
                }else{
                    document.getElementById('disciplina').value="";
                    document.getElementById('disciplina').disabled=true;
                }
            }
        </script>
        
        <div class="panel panel-widget ">
            
						<div class="progressbar-heading general-heading">
							<h2>Cadastrar um novo contato</h2>
                            @isset($msg)
                                <div class="aviso-ok">{{ $msg }}</div>
                            @endisset
						</div>
						<div class="forms">
								<h3 class="title1"></h3>
								<div class="form-three">
									<form class="form-horizontal" action="contatos/enviar" method="POST" >
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
										
                                        <h3 class="col-sm-12">Dados pessoais:</h3>
                                        <div class="form-group">
											<label for="nome" class="col-sm-2 control-label">Nome: </label>
											<div class="col-sm-8">
												<input type="text" class="form-control" id="nome" name="nome" placeholder="nome" autofocus required>
											</div>											
										</div>                                                                
										                                
                                        <div class="form-group">
                                            <label for="fone_res" class="col-sm-2 control-label">Telefone residencial</label>
                                            <div class="col-sm-3">
                                                <input type="text" class="form-control" id="fone_res" name="fone_res" placeholder="Telefone residencial">
                                            </div>
                                            
                                            <label for="fone_res" class="col-sm-2 control-label">Telefone de trabalho: </label>
                                            <div class="col-sm-3">
                                                <input type="text" class="form-control" id="fone_trab" name="fone_trab" placeholder="Telefone de trabalho">
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="fone_cel" class="col-sm-2 control-label">Telefone celular: </label>
                                            <div class="col-sm-5">
                                                <input type="text" class="form-control" id="fone_cel" name="fone_cel" placeholder="Telefone celular" required >
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">                                        
                                            <label for="email" class="col-sm-2 control-label">E-mail: </label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" id="email" name="email" placeholder="E-mail">
                                            </div>
                                        </div>
                                                                            								
                                        <div class="form-group">
                                            <div class="col-md-2 col-md-offset-10">
                                                <button type="submit" class="btn btn_5 btn-lg btn-primary">Cadastrar</button>
                                            </div>
                                        </div>
									</form>
								</div>
						</div>
                </div>

@endsection