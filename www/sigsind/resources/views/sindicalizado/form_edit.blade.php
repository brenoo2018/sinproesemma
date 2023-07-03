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
							<h2>Cadastrar um novo sindicalizado</h2>
                            @isset($msg)
                                <div class="aviso-ok">{{ $msg }}</div>
                            @endisset
						</div>
						<div class="forms">
								<h3 class="title1"></h3>
								<div class="form-three">
									<form class="form-horizontal" action="sindicalizado/atualizar" method="POST" >
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
										<input type="hidden" name="id" value="{{$sindicalizado->id}}">
                                        <h3 class="col-sm-12">Dados pessoais:</h3>
                                        <div class="form-group">
											<label for="nome" class="col-sm-2 control-label">Nome: </label>
											<div class="col-sm-8">
												<input type="text" class="form-control" id="nome" name="nome" placeholder="nome" autofocus required value="{{$sindicalizado->nome}}">
											</div>											
										</div>                                                                
										
                                        <div class="form-group">
											<label for="cpf" class="col-sm-2 control-label">CPF: </label>
											<div class="col-sm-8">
												<input type="text" class="form-control" id="cpf" name="cpf" placeholder="CPF" required  value="{{$sindicalizado->cpf}}">
											</div>
										</div>
										
                                        <div class="form-group">
											<label for="rg" class="col-sm-2 control-label">RG: </label>
											<div class="col-sm-4">
												<input type="text" class="form-control" id="rg" name="rg" size="10" placeholder="RG" required  value="{{$sindicalizado->rg}}">
											</div>
                                            <label for="org_exped" class="col-sm-2 control-label">Orgão expedidor: </label>
											<div class="col-sm-2">
												<input type="text" class="form-control" id="org_exped" name="org_exped" placeholder="Orgão expedidor" required value="{{$sindicalizado->rg_orgao_expedidor}}">
											</div>
										</div>
                                        
                                        <div class="form-group">
											<label for="checkbox" class="col-sm-2 control-label">Sexo: </label>
											<div class="col-sm-2">
												<div class="checkbox-inline1"><label><input type="radio" name="sexo" value="masculino" @if($sindicalizado->sexo == "masculino") checked @endif > Masculino</label></div>
												<div class="checkbox-inline1"><label><input type="radio" name="sexo" value="feminino" @if($sindicalizado->sexo == "feminino") checked @endif> Feminino</label></div>												
											</div>
                                            
                                            <label for="dt_nasc" class="col-sm-3 control-label">Data de nascimento:</label>
                                            <div class="col-sm-3">
                                                <input type="text" class="form-control" id="dt_nasc" name="dt_nasc" placeholder="99/99/9999" required value="{{Carbon\Carbon::parse($sindicalizado->dt_nascimento)->format('d/m/Y')}}">
                                            </div>                                            
										</div>
                                        
                                        <div class="form-group">
											<label for="estado_civil" class="col-sm-2 control-label">Estado civil: </label>
											<div class="col-sm-6"><select name="estado_civil" id="estado_civil" class="form-control">
												<option value="">--Selecionte o estado civil--</option>
												<option value="solteiro" @if($sindicalizado->estado_civil == "solteiro") selected @endif >Solteiro</option>
												<option value="casado" @if($sindicalizado->estado_civil == "casado") selected @endif >Casado</option>
												<option value="divorciado" @if($sindicalizado->estado_civil == "divorciado") selected @endif >Divorciado</option>
                                                <option value="viuvo" @if($sindicalizado->estado_civil == "viuvo") selected @endif >Viúvo</option>
											</select></div>
										</div>
                                        
                                        
                                        <h3 class="col-sm-12">Contatos:</h3>
                                        <div class="form-group">
                                            <label for="fone_res" class="col-sm-2 control-label">Telefone residencial</label>
                                            <div class="col-sm-3">
                                                <input type="text" class="form-control" id="fone_res" name="fone_res" placeholder="Telefone residencial" value="{{$sindicalizado->fone_residencial}}">
                                            </div>
                                            
                                            <label for="fone_res" class="col-sm-2 control-label">Telefone de trabalho: </label>
                                            <div class="col-sm-3">
                                                <input type="text" class="form-control" id="fone_trab" name="fone_trab" placeholder="Telefone de trabalho" value="{{$sindicalizado->fone_trabalho}}">
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="fone_cel" class="col-sm-2 control-label">Telefone celular: </label>
                                            <div class="col-sm-5">
                                                <input type="text" class="form-control" id="fone_cel" name="fone_cel" placeholder="Telefone celular" required value="{{$sindicalizado->fone_celular}}">
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">                                        
                                            <label for="email" class="col-sm-2 control-label">E-mail: </label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" id="email" name="email" placeholder="E-mail" value="{{$sindicalizado->email}}">
                                            </div>
                                        </div>
                                        
                                        
                                        
                                        <h3 class="col-sm-12">Endereço:</h3>
                                        
                                        <div class="form-group">
                                            <label for="logradouro" class="col-sm-2 control-label">Logradouro: </label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" id="logradouro" name="logradouro" placeholder="Logradouro" required value="{{$sindicalizado->logradouro}}">
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="bairro" class="col-sm-2 control-label">Bairro: </label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" id="bairro" name="bairro" placeholder="bairro" required value="{{$sindicalizado->bairro}}">
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="numero" class="col-sm-2 control-label">Número: </label>
                                            <div class="col-sm-3">
                                                <input type="text" class="form-control" id="numero" name="numero" placeholder="Número" required value="{{$sindicalizado->numero}}">
                                            </div>
                                            <label for="cep" class="col-sm-2 control-label">CEP: </label>
                                            <div class="col-sm-3">
                                                <input type="text" class="form-control" id="cep" name="cep" placeholder="CEP" required value="{{$sindicalizado->cep}}">
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="cidade" class="col-sm-2 control-label">Cidade: </label>
                                            <div class="col-sm-5">
                                                <input type="text" class="form-control" id="cidade" name="cidade" placeholder="cidade" required value="{{$sindicalizado->cidade}}">
                                            </div>
                                            <label for="uf" class="col-sm-1 control-label">Estado</label>
											<div class="col-sm-2">
                                                <select id="uf" name="uf" class="form-control">
												    <option value="ac" @if($sindicalizado->uf == "ac") selected @endif >Acre</option> 
                                                    <option value="al" @if($sindicalizado->uf == "al") selected @endif >Alagoas</option> 
                                                    <option value="am" @if($sindicalizado->uf == "am") selected @endif >Amazonas</option> 
                                                    <option value="ap" @if($sindicalizado->uf == "ap") selected @endif >Amapá</option> 
                                                    <option value="ba" @if($sindicalizado->uf == "ba") selected @endif >Bahia</option> 
                                                    <option value="ce" @if($sindicalizado->uf == "ce") selected @endif >Ceará</option> 
                                                    <option value="df" @if($sindicalizado->uf == "df") selected @endif >Distrito Federal</option> 
                                                    <option value="es" @if($sindicalizado->uf == "es") selected @endif >Espírito Santo</option> 
                                                    <option value="go" @if($sindicalizado->uf == "go") selected @endif >Goiás</option> 
                                                    <option value="ma" @if($sindicalizado->uf == "ma") selected @endif >Maranhão</option> 
                                                    <option value="mt" @if($sindicalizado->uf == "mt") selected @endif >Mato Grosso</option> 
                                                    <option value="ms" @if($sindicalizado->uf == "ms") selected @endif >Mato Grosso do Sul</option> 
                                                    <option value="mg" @if($sindicalizado->uf == "mg") selected @endif >Minas Gerais</option> 
                                                    <option value="pa" @if($sindicalizado->uf == "pa") selected @endif >Pará</option> 
                                                    <option value="pb" @if($sindicalizado->uf == "pb") selected @endif >Paraíba</option> 
                                                    <option value="pr" @if($sindicalizado->uf == "pr") selected @endif >Paraná</option> 
                                                    <option value="pe" @if($sindicalizado->uf == "pe") selected @endif >Pernambuco</option> 
                                                    <option value="pi" @if($sindicalizado->uf == "pi") selected @endif >Piauí</option> 
                                                    <option value="rj" @if($sindicalizado->uf == "rj") selected @endif >Rio de Janeiro</option> 
                                                    <option value="rn" @if($sindicalizado->uf == "rn") selected @endif>Rio Grande do Norte</option> 
                                                    <option value="ro" @if($sindicalizado->uf == "ro") selected @endif >Rondônia</option> 
                                                    <option value="rs" @if($sindicalizado->uf == "rs") selected @endif >Rio Grande do Sul</option> 
                                                    <option value="rr" @if($sindicalizado->uf == "rr") selected @endif >Roraima</option> 
                                                    <option value="sc" @if($sindicalizado->uf == "sc") selected @endif >Santa Catarina</option> 
                                                    <option value="se" @if($sindicalizado->uf == "se") selected @endif >Sergipe</option> 
                                                    <option value="sp" @if($sindicalizado->uf == "sp") selected @endif >São Paulo</option> 
                                                    <option value="to" @if($sindicalizado->uf == "to") selected @endif >Tocantins</option> 									
											     </select>
                                            </div>
                                        </div>
                                        
                                        <h3 class="col-sm-12">Dados profissionais:</h3>
                                        
                                        <div class="form-group">
											<label for="matricula" class="col-sm-2 control-label">Matrícula: </label>
											<div class="col-sm-3">
												<input type="text" class="form-control" id="matricula" name="matricula" placeholder="Matrícula" required value="{{$sindicalizado->matricula}}">
											</div>
                                            <label for="nivel" class="col-sm-2 control-label">Nível: </label>
											<div class="col-sm-3">
												<input type="text" class="form-control" id="nivel" name="nivel" placeholder="Nível" required value="{{$sindicalizado->nivel}}">
											</div>
										</div>
                                        
                                        <div class="form-group">
											<label for="radio" class="col-sm-2 control-label">Regime: </label>
											<div class="col-sm-8">
												<div class="radio-inline"><label><input type="radio" name="regime" value="efetivo" @if($sindicalizado->regime == "efetivo") checked @endif >Efetivo</label></div>
												<div class="radio-inline"><label><input type="radio" name="regime" value="contratado"  @if($sindicalizado->regime == "contratado") checked @endif >Contratado</label></div>						
											</div>
										</div>
                                        
                                        <div class="form-group">
											<label for="lotacao_municipio" class="col-sm-2 control-label">Município:</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" id="lotacao_municipio" name="lotacao_municipio" placeholder="Município de lotação" required value="{{$sindicalizado->lotacao_municipio}}" >
                                            </div>
										</div>
                                        
                                        <div class="form-group">
											<label for="lotacao_escola" class="col-sm-2 control-label">Escola:</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" id="lotacao_escola" name="lotacao_escola" placeholder="Escola de trabalho" value="{{$sindicalizado->lotacao_escola}}">
                                            </div>
										</div>                                                                                                                    										
                                        <div class="form-group">
											<label for="radio" class="col-sm-2 control-label">Rede de ensino:</label>
											<div class="col-sm-4"> 
												<div class="radio block"><label><input type="radio" name="rede_ensino" value="municipal" @if($sindicalizado->rede_ensino == "municipal") checked @endif > Rede municipal</label></div>
												<div class="radio block"><label><input type="radio" name="rede_ensino" value="estadual" @if($sindicalizado->rede_ensino == "estadual") checked @endif > Rede estadual</label></div>							
											</div>
                                            <label for="checkbox" class="col-sm-1 control-label">Turno: </label>
											<div class="col-sm-4">
                                                @php
                                                    $turnos = explode(',', $sindicalizado->lotacao_turno);
                                                    $checked_m = " ";
                                                    $checked_t = " ";
                                                    $checked_n = " ";
                                                    foreach($turnos as $turno){
                                                        if($turno == "manha"){
                                                            $checked_m = "checked";
                                                        }
                                                        if($turno == "tarde"){
                                                            $checked_t = "checked";
                                                        }
                                                        if($turno == "noite"){
                                                            $checked_n = "checked";
                                                        }
                                                    }
                                                @endphp
												<div class="checkbox-inline1"><label><input type="checkbox" name="turno[]" value="manha" {{$checked_m}} > Manhã</label></div>
												<div class="checkbox-inline1"><label><input type="checkbox" name="turno[]" value="tarde" {{$checked_t}}> Tarde</label></div>
												<div class="checkbox-inline1"><label><input type="checkbox" name="turno[]" value="noite" {{$checked_n}}> Noite</label></div>										
											</div>                                            
										</div>
                                        
                                        
                                                                                                                        
                                        <div class="form-group">
											<label for="estado_civil" class="col-sm-2 control-label">Atividade funcional: </label>
											<div class="col-sm-4">
                                                <select name="atividade" id="estado" class="form-control" onchange="abilita(this.value);">
												<option value="">--Selecione a atividade funcional--</option>
												<option value="professor" @if($sindicalizado->atividade_funcional == "professor") selected @endif >Professor</option>
                                                <option value="diretor" @if($sindicalizado->atividade_funcional == "diretor") selected @endif >Diretor</option>
												<option value="tecnico" @if($sindicalizado->atividade_funcional == "tecnico") selected @endif >Técnico administrativo</option>
												<option value="asg" @if($sindicalizado->atividade_funcional == "asg") selected @endif >Assitente de serviços gerais</option>
                                                <option value="vigia" @if($sindicalizado->atividade_funcional == "vigia") selected @endif >Vigia</option>
                                                <option value="merendeira" @if($sindicalizado->atividade_funcional == "merendeira") selected @endif >Merendeira</option>
											</select></div>
                                            
                                            <label for="estado_civil" class="col-sm-1 control-label">Disciplina: </label>
											<div class="col-sm-3">
                                                <input type="text" class="form-control" id="disciplina" name="disciplina" placeholder="Disciplina" @if($sindicalizado->atividade_funcional == "professor")  value="{{$sindicalizado->disciplina}}" @else disabled="true"  @endif>
                                            </div>
										</div>
                                                                    
                                        <div class="form-group">
											<label for="estado_civil" class="col-sm-2 control-label">Escolaridade: </label>
											<div class="col-sm-8">
                                                <select name="escolaridade" id="escolaridade" class="form-control" >
												<option value="">--Selecionte a escolaridade--</option>
												<option value="fundamental" @if($sindicalizado->escolaridade == "fundamental") selected @endif >Fundamental</option>
                                                <option value="medio_incompleto" @if($sindicalizado->escolaridade == "medio_incompleto") selected @endif >Médio incompleto</option>
                                                <option value="medio" @if($sindicalizado->escolaridade == "medio") selected @endif >Médio</option>
                                                <option value="superior_incompleto" @if($sindicalizado->escolaridade == "superior_incompleto") selected @endif >Superior incompleto</option>
                                                <option value="superior" @if($sindicalizado->escolaridade == "superior") selected @endif >Superior</option>
                                                <option value="pos-graduacao" @if($sindicalizado->escolaridade == "pos-graduacao") selected @endif >Pós-graduação</option>
                                                <option value="mestrado" @if($sindicalizado->escolaridade == "mestrado") selected @endif >Mestrado</option>
                                                <option value="doutorado" @if($sindicalizado->escolaridade == "doutorado") selected @endif >Doutorado</option>
											</select></div>                                                               
										</div>
                                        
                                        <div class="form-group">
											<label for="radio" class="col-sm-2 control-label">Situação: </label>
											<div class="col-sm-8">
												<div class="radio-inline"><label><input type="radio" name="situacao" value="ativo" @if($sindicalizado->situacao == "ativo") checked @endif> Ativo</label></div>
												<div class="radio-inline"><label><input type="radio" name="situacao" value="aposentado" @if($sindicalizado->situacao == "aposentado") checked @endif> Aposentado</label></div>						
											</div>
										</div>
                                        
                                        
                                        <div class="form-group">
											<label for="radio" class="col-sm-2 control-label">Faixa salarial:</label>
											<div class="col-sm-10"> 
												<div class="radio-inline"><label><input type="radio" name="salario" value="1 salário" @if($sindicalizado->faixa_salarial == "1 salário") checked @endif >1 salário mínimo</label></div>
												<div class="radio-inline"><label><input type="radio" name="salario" value="2 salários" @if($sindicalizado->faixa_salarial == "2 salários") checked @endif  >2 salários mínimos</label></div>				
                                                <div class="radio-inline"><label><input type="radio" name="salario" value="3 salários" @if($sindicalizado->faixa_salarial == "3 salários") checked @endif  >3 salários mínimos</label></div>				
                                                <div class="radio-inline"><label><input type="radio" name="salario" value="4 salários" @if($sindicalizado->faixa_salarial == "4 salários") checked @endif  >4 salários mínimos</label></div>				
                                                <div class="radio-inline"><label><input type="radio" name="salario" value="5 salários" @if($sindicalizado->faixa_salarial == "5 salários") checked @endif  >Acima de 5 salários mínimos</label></div>				
											</div>                                                                         
										</div>
                                        
                                        
										<!--<div class="form-group">
											<label for="checkbox" class="col-sm-2 control-label">Checkbox Inline</label>
											<div class="col-sm-8">
												<div class="checkbox-inline"><label><input type="checkbox"> Unchecked</label></div>
												<div class="checkbox-inline"><label><input type="checkbox" checked=""> Checked</label></div>
												<div class="checkbox-inline"><label><input type="checkbox" disabled=""> Disabled Unchecked</label></div>
												<div class="checkbox-inline"><label><input type="checkbox" disabled="" checked=""> Disabled Checked</label></div>
											</div>
										</div>
										<div class="form-group">
											<label for="selector1" class="col-sm-2 control-label">Dropdown Select</label>
											<div class="col-sm-8"><select name="selector1" id="selector1" class="form-control">
												<option>Lorem ipsum dolor sit amet.</option>
												<option>Dolore, ab unde modi est!</option>
												<option>Illum, fuga minus sit eaque.</option>
												<option>Consequatur ducimus maiores voluptatum minima.</option>
											</select></div>
										</div>
										<div class="form-group">
											<label class="col-sm-2 control-label">Multiple Select</label>
											<div class="col-sm-8">
												<select multiple="" class="form-control">
													<option>Option 1</option>
													<option>Option 2</option>
													<option>Option 3</option>
													<option>Option 4</option>
													<option>Option 5</option>
												</select>
											</div>
										</div>
										<div class="form-group">
											<label for="txtarea1" class="col-sm-2 control-label">Textarea</label>
											<div class="col-sm-8"><textarea name="txtarea1" id="txtarea1" cols="50" rows="4" class="form-control"></textarea></div>
										</div>
										<div class="form-group">
											<label for="radio" class="col-sm-2 control-label">Radio</label>
											<div class="col-sm-8">
												<div class="radio block"><label><input type="radio"> Unchecked</label></div>
												<div class="radio block"><label><input type="radio" checked=""> Checked</label></div>
												<div class="radio block"><label><input type="radio" disabled=""> Disabled Unchecked</label></div>
												<div class="radio block"><label><input type="radio" disabled="" checked=""> Disabled Checked</label></div>
											</div>
										</div>
										<div class="form-group">
											<label for="radio" class="col-sm-2 control-label">Radio Inline</label>
											<div class="col-sm-8">
												<div class="radio-inline"><label><input type="radio"> Unchecked</label></div>
												<div class="radio-inline"><label><input type="radio" checked=""> Checked</label></div>
												<div class="radio-inline"><label><input type="radio" disabled=""> Disabled Unchecked</label></div>
												<div class="radio-inline"><label><input type="radio" disabled="" checked=""> Disabled Checked</label></div>
											</div>
										</div>
										<div class="form-group">
											<label for="smallinput" class="col-sm-2 control-label label-input-sm">Small Input</label>
											<div class="col-sm-8">
												<input type="text" class="form-control input-sm" id="smallinput" placeholder="Small Input">
											</div>
										</div>
										<div class="form-group">
											<label for="mediuminput" class="col-sm-2 control-label">Medium Input</label>
											<div class="col-sm-8">
												<input type="text" class="form-control" id="mediuminput" placeholder="Medium Input">
											</div>
										</div>
										<div class="form-group mb-n">
											<label for="largeinput" class="col-sm-2 control-label label-input-lg">Large Input</label>
											<div class="col-sm-8">
												<input type="text" class="form-control input-lg" id="largeinput" placeholder="Large Input">
											</div>
										</div> -->
                                        <div class="form-group">
                                            <div class="col-md-2 col-md-offset-10">
                                                <button type="submit" class="btn btn_5 btn-lg btn-primary">Salvar</button>
                                            </div>
                                        </div>
									</form>
								</div>
						</div>
                </div>

@endsection