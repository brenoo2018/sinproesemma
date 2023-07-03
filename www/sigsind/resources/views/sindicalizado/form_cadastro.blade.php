@extends('layouts.master')

@section('content')

        <script type="text/javascript">
            function abilita(atividade){                
                if(atividade == "professor"){
                    document.getElementById('disciplina').disabled=false;
                 Diretor         
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
									<form class="form-horizontal" action="sindicalizado/enviar" method="POST" >
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
										
                                        <h3 class="col-sm-12">Dados pessoais:</h3>
                                        <div class="form-group">
											<label for="nome" class="col-sm-2 control-label">Nome: </label>
											<div class="col-sm-8">
												<input type="text" class="form-control" id="nome" name="nome" placeholder="nome" autofocus required>
											</div>											
										</div>                                                                
										
                                        <div class="form-group">
											<label for="cpf" class="col-sm-2 control-label">CPF: </label>
											<div class="col-sm-8">
												<input type="text" class="form-control" id="cpf" name="cpf" placeholder="CPF" required >
											</div>
										</div>
										
                                        <div class="form-group">
											<label for="rg" class="col-sm-2 control-label">RG: </label>
											<div class="col-sm-4">
												<input type="text" class="form-control" id="rg" name="rg" size="10" placeholder="RG" required >
											</div>
                                            <label for="org_exped" class="col-sm-2 control-label">Orgão expedidor: </label>
											<div class="col-sm-2">
												<input type="text" class="form-control" id="org_exped" name="org_exped" placeholder="Orgão expedidor" required >
											</div>
										</div>
                                        
                                        <div class="form-group">
											<label for="checkbox" class="col-sm-2 control-label">Sexo: </label>
											<div class="col-sm-2">
												<div class="checkbox-inline1"><label><input type="radio" name="sexo" value="masculino"> Masculino</label></div>
												<div class="checkbox-inline1"><label><input type="radio" name="sexo" value="feminino"> Feminino</label></div>												
											</div>
                                            
                                            <label for="dt_nasc" class="col-sm-3 control-label">Data de nascimento:</label>
                                            <div class="col-sm-3">
                                                <input type="date" class="form-control" id="dt_nasc" name="dt_nasc" placeholder="dd/mm/aaaa" required >
                                            </div>                                            
										</div>
                                        
                                        <div class="form-group">
											<label for="estado_civil" class="col-sm-2 control-label">Estado civil: </label>
											<div class="col-sm-6"><select name="estado_civil" id="estado_civil" class="form-control">
												<option value="" selected>--Selecionte o estado civil--</option>
												<option value="solteiro">Solteiro</option>
												<option value="casado">Casado</option>
												<option value="divorciado">Divorciado</option>
                                                <option value="viuvo">Viúvo</option>
											</select></div>
										</div>
                                        
                                        
                                        <h3 class="col-sm-12">Contatos:</h3>
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
                                        
                                        
                                        
                                        <h3 class="col-sm-12">Endereço:</h3>
                                        
                                        <div class="form-group">
                                            <label for="logradouro" class="col-sm-2 control-label">Logradouro: </label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" id="logradouro" name="logradouro" placeholder="Logradouro" required >
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="bairro" class="col-sm-2 control-label">Bairro: </label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" id="bairro" name="bairro" placeholder="bairro" required >
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="numero" class="col-sm-2 control-label">Número: </label>
                                            <div class="col-sm-3">
                                                <input type="text" class="form-control" id="numero" name="numero" placeholder="Número" required >
                                            </div>
                                            <label for="cep" class="col-sm-2 control-label">CEP: </label>
                                            <div class="col-sm-3">
                                                <input type="text" class="form-control" id="cep" name="cep" placeholder="CEP" required >
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="cidade" class="col-sm-2 control-label">Cidade: </label>
                                            <div class="col-sm-5">
                                                <input type="text" class="form-control" id="cidade" name="cidade" placeholder="cidade" required >
                                            </div>
                                            <label for="uf" class="col-sm-1 control-label">Estado</label>
											<div class="col-sm-2">
                                                <select id="uf" name="uf" class="form-control">
                                                            <option value="ac">Acre</option> 
                                                            <option value="al">Alagoas</option> 
                                                            <option value="am">Amazonas</option> 
                                                            <option value="ap">Amapá</option> 
                                                            <option value="ba">Bahia</option> 
                                                            <option value="ce">Ceará</option> 
                                                            <option value="df">Distrito Federal</option> 
                                                            <option value="es">Espírito Santo</option> 
                                                            <option value="go">Goiás</option> 
                                                            <option value="ma">Maranhão</option> 
                                                            <option value="mt">Mato Grosso</option> 
                                                            <option value="ms">Mato Grosso do Sul</option> 
                                                            <option value="mg">Minas Gerais</option> 
                                                            <option value="pa">Pará</option> 
                                                            <option value="pb">Paraíba</option> 
                                                            <option value="pr">Paraná</option> 
                                                            <option value="pe">Pernambuco</option> 
                                                            <option value="pi">Piauí</option> 
                                                            <option value="rj">Rio de Janeiro</option> 
                                                            <option value="rn">Rio Grande do Norte</option> 
                                                            <option value="ro">Rondônia</option> 
                                                            <option value="rs">Rio Grande do Sul</option> 
                                                            <option value="rr">Roraima</option> 
                                                            <option value="sc">Santa Catarina</option> 
                                                            <option value="se">Sergipe</option> 
                                                            <option value="sp">São Paulo</option> 
                                                            <option value="to">Tocantins</option> 									
											         </select>
                                            </div>
                                        </div>
                                        
                                        <h3 class="col-sm-12">Dados profissionais:</h3>
                                        
                                        <div class="form-group">
											<label for="matricula" class="col-sm-2 control-label">Matrícula: </label>
											<div class="col-sm-3">
												<input type="text" class="form-control" id="matricula" name="matricula" placeholder="Matrícula" required >
											</div>
                                            <label for="nivel" class="col-sm-2 control-label">Nível: </label>
											<div class="col-sm-3">
												<input type="text" class="form-control" id="nivel" name="nivel" placeholder="Nível" required >
											</div>
										</div>
                                        
                                        <div class="form-group">
											<label for="radio" class="col-sm-2 control-label">Regime: </label>
											<div class="col-sm-8">
												<div class="radio-inline"><label><input type="radio" name="regime" value="efetivo">Efetivo</label></div>
												<div class="radio-inline"><label><input type="radio" name="regime" value="contratado">Contratado</label></div>						
											</div>
										</div>
                                        
                                        <div class="form-group">
											<label for="lotacao_municipio" class="col-sm-2 control-label">Município:</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" id="lotacao_municipio" name="lotacao_municipio" placeholder="Município de lotação" required >
                                            </div>
										</div>
                                        
                                        <div class="form-group">
											<label for="lotacao_escola" class="col-sm-2 control-label">Escola:</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" id="lotacao_escola" name="lotacao_escola" placeholder="Escola de trabalho">
                                            </div>
										</div>                                                                                                                    										
                                        <div class="form-group">
											<label for="radio" class="col-sm-2 control-label">Rede de ensino:</label>
											<div class="col-sm-4"> 
												<div class="radio block"><label><input type="radio" name="rede_ensino" value="municipal"> Rede municipal</label></div>
												<div class="radio block"><label><input type="radio" name="rede_ensino" value="estadual"> Rede estadual</label></div>							
											</div>
                                            <label for="checkbox" class="col-sm-1 control-label">Turno: </label>
											<div class="col-sm-4">
												<div class="checkbox-inline1"><label><input type="checkbox" name="turno[]" value="manha"> Manhã</label></div>
												<div class="checkbox-inline1"><label><input type="checkbox" name="turno[]" value="tarde"> Tarde</label></div>
												<div class="checkbox-inline1"><label><input type="checkbox" name="turno[]" value="noite"> Noite</label></div>										
											</div>                                            
										</div>
                                        
                                        
                                                                                                                        
                                        <div class="form-group">
											<label for="estado_civil" class="col-sm-2 control-label">Atividade funcional: </label>
											<div class="col-sm-4">
                                                <select name="atividade" id="estado" class="form-control" onchange="abilita(this.value);">
												<option value="" selected>--Selecione a atividade funcional--</option>
												<option value="professor">Professor</option>
												<option value="diretor">Diretor</option>
												<option value="tecnico">Técnico administrativo</option>
												<option value="asg">Assitente de serviços gerais</option>
                                                <option value="vigia">Vigia</option>
                                                <option value="merendeira">Merendeira</option>
											</select></div>
                                            
                                            <label for="estado_civil" class="col-sm-1 control-label">Disciplina: </label>
											<div class="col-sm-3">
                                                <input type="text" class="form-control" id="disciplina" name="disciplina" placeholder="Disciplina" disabled="true">
                                            </div>
										</div>
                                                                    
                                        <div class="form-group">
											<label for="estado_civil" class="col-sm-2 control-label">Escolaridade: </label>
											<div class="col-sm-8">
                                                <select name="escolaridade" id="escolaridade" class="form-control" >
												<option value="" selected>--Selecionte a escolaridade--</option>
												<option value="Fundamental">Fundamental</option>
                                                <option value="medio_incompleto">Médio incompleto</option>
                                                <option value="medio">Médio</option>
                                                <option value="superior_incompleto">Superior incompleto</option>
                                                <option value="superior">Superior</option>
                                                <option value="pos-graduacao">Pós-graduação</option>
                                                <option value="mestrado">Mestrado</option>
                                                <option value="doutorado">Doutorado</option>
											</select></div>                                                               
										</div>
                                        
                                        <div class="form-group">
											<label for="radio" class="col-sm-2 control-label">Situação: </label>
											<div class="col-sm-8">
												<div class="radio-inline"><label><input type="radio" name="situacao" value="ativo"> Ativo</label></div>
												<div class="radio-inline"><label><input type="radio" name="situacao" value="aposentado"> Aposentado</label></div>						
											</div>
										</div>
                                        
                                        
                                        <div class="form-group">
											<label for="radio" class="col-sm-2 control-label">Faixa salarial:</label>
											<div class="col-sm-10"> 
												<div class="radio-inline"><label><input type="radio" name="salario" value="1 salário">1 salário mínimo</label></div>
												<div class="radio-inline"><label><input type="radio" name="salario" value="2 salários">2 salários mínimos</label></div>				
                                                <div class="radio-inline"><label><input type="radio" name="salario" value="3 salários">3 salários mínimos</label></div>				
                                                <div class="radio-inline"><label><input type="radio" name="salario" value="4 salários">4 salários mínimos</label></div>				
                                                <div class="radio-inline"><label><input type="radio" name="salario" value="5 salários">Acima de 5 salários mínimos</label></div>				
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
                                                <button type="submit" class="btn btn_5 btn-lg btn-primary">Cadastrar</button>
                                            </div>
                                        </div>
									</form>
								</div>
						</div>
                </div>

@endsection