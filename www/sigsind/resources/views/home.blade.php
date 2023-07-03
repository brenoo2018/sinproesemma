@extends('layouts.master')

@section('content')
<link href="{{URL::asset('public/fullcalendar/fullcalendar.min.css')}}" rel='stylesheet' />
<link href="{{URL::asset('public/fullcalendar/fullcalendar.print.min.css')}}" rel='stylesheet' media='print' />
<script src="{{URL::asset('public/fullcalendar/lib/moment.min.js')}}"></script>
<script src="{{URL::asset('public/fullcalendar/fullcalendar.min.js')}}"></script>
<script src="{{URL::asset('public/fullcalendar/locale-all.js')}}" ></script>
<script>

	$(document).ready(function() {

		$('#calendar').fullCalendar({
			defaultDate: new Date,
            locale: 'pt-br',
			editable: true,
			eventLimit: true, // allow "more" link when too many events
			events: [
				/*{
					title: 'All Day Event',
					start: '2017-05-01'
				},
				{
					title: 'Long Event',
					start: '2017-05-07',
					end: '2017-05-10'
				},
				{
					id: 999,
					title: 'Repeating Event',
					start: '2017-05-09T16:00:00'
				},
				{
					id: 999,
					title: 'Repeating Event',
					start: '2017-05-16T16:00:00'
				},
				{
					title: 'Conference',
					start: '2017-05-11',
					end: '2017-05-13'
				},
				{
					title: 'Meeting',
					start: '2017-05-12T10:30:00',
					end: '2017-05-12T12:30:00'
				},
				{
					title: 'Lunch',
					start: '2017-05-12T12:00:00'
				},
				{
					title: 'Meeting',
					start: '2017-05-12T14:30:00'
				},
				{
					title: 'Happy Hour',
					start: '2017-05-12T17:30:00'
				},
				{
					title: 'Dinner',
					start: '2017-05-12T20:00:00'
				},
				{
					title: 'Birthday Party',
					start: '2017-05-13T07:00:00'
				},
				{
					title: 'Click for Google',
					url: 'http://google.com/',
					start: '2017-05-28'
				}*/
			]
		});
		
	});

</script>

    <div class="grids">
        <div class="panel panel-widget ">
            <h1>Bem vindo!</h1>
            <h2 class="titulo-prog" >Sistema de Gerenciamento de Sindicatos</h2>
        </div>
        
        <div class="panel panel-widget col-md-5 painel-rapido">
            <h3>Acesso rápido</h3>
            <a href="sindicalizado/lista" class="hvr-shutter-out-vertical col-md-10"><li class="fa fa-user"></li> Sindicalizados</a>
            <a href="/contatos/lista" class="hvr-shutter-out-vertical col-md-10"><li class="fa fa-phone"></li> Agenda telefônica</a>
            <a href="http://www.sinproesemmabdc.com.br/admin" target="_blank" class="hvr-shutter-out-vertical col-md-10"><li class="fa fa-cog"></li> Gerenciar site</a>
            <a href="http://streaming.kshost.com.br/" target="_blank" class="hvr-shutter-out-vertical col-md-10"><li class="fa fa-headphones"></li> Gerenciar rádio</a>              
        </div>
        
        
            
        <div class="panel panel-widget col-md-6">
            <div id='calendar'></div>  
            <br><br>
            <div class="col-md-12" id="aniversariantes">
                <h3>Aniversariantes do mês</h3>
                <table class="table table-sm table-striped table-bordered">
                <?php
                    
                    $aniversariantes = App\Sindicalizado::orderBy('nome')->get();
                    foreach($aniversariantes as $aniversariante){
                        $data = explode('-',$aniversariante->dt_nascimento);                        
                        $hoje = explode('-', date('Y-m-d'));
                        if($data[1] == $hoje[1]){
                            if($data[2] == $hoje[2]){
                                echo "<tr><td><b>$data[2]/$data[1]</b></td><td><b>$aniversariante->nome</b></td></tr>";      
                            }else{
                                echo "<tr><td>$data[2]/$data[1]</td><td>$aniversariante->nome</td></tr>";      
                            }
                            
                        }
                    }

                ?>
                </table>
            </div>      
        </div>
        
        <!--<div class="panel panel-widget col-md-12">
						<div class="inbox-page">
                            <h3>Mensagens</h3>
                            <h4>Caixa de entrada / <a href="#">Nova mensagem</a></h4> 
							<div class="inbox-row widget-shadow" id="accordion" role="tablist" aria-multiselectable="true">
								<div class="mail "> <input type="checkbox" class="checkbox"> </div>
								<div class="mail"><img src="images/i1.png" alt=""></div>
								<div class="mail mail-name"> <h6>Janiya</h6> </div>
								<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
									<div class="mail"><p>Nullam quis risus eget urna mollis ornare</p></div>
								</a>
								<div class="mail-right">
									<div class="dropdown">
										<a href="#" data-toggle="dropdown" aria-expanded="false">
											<p><i class="fa fa-ellipsis-v mail-icon"></i></p>
										</a>
										<ul class="dropdown-menu float-right">
											<li>
												<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
													<i class="fa fa-reply mail-icon"></i>
													Reply
												</a>
											</li>
											<li>
												<a href="#" title="">
													<i class="fa fa-download mail-icon"></i>
													Archive
												</a>
											</li>
											<li>
												<a href="#" class="font-red" title="">
													<i class="fa fa-trash-o mail-icon"></i>
													Delete
												</a>
											</li>
										</ul>
									</div> 
								</div>
								<div class="mail-right"><p>30 Dec</p></div>
								<div class="clearfix"> </div>
								<div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
									<div class="mail-body">
										<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor.</p>
										<form>
											<input type="text" placeholder="Reply to sender" required="">
											<input type="submit" value="Send">
										</form>
									</div>
								</div>
							</div>
							<div class="inbox-row widget-shadow" id="accordion1" role="tablist" aria-multiselectable="true">
								<div class="mail "> <input type="checkbox" class="checkbox"> </div>
								<div class="mail"><img src="images/i2.png" alt=""></div>
								<div class="mail mail-name"><h6>Walsh</h6></div>
								<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
									<div class="mail"><p>Mollis nullam quis risus eget ornare</p></div>
								</a>
								<div class="mail-right">
									<div class="dropdown">
										<a href="#" data-toggle="dropdown" aria-expanded="false">
											<p><i class="fa fa-ellipsis-v mail-icon"></i></p>
										</a>
										<ul class="dropdown-menu float-right">
											<li>
												<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
													<i class="fa fa-reply mail-icon"></i>
													Reply
												</a>
											</li>
											<li>
												<a href="#" title="">
													<i class="fa fa-download mail-icon"></i>
													Archive
												</a>
											</li>
											<li>
												<a href="#" class="font-red" title="">
													<i class="fa fa-trash-o mail-icon"></i>
													Delete
												</a>
											</li>
										</ul>
									</div> 
								</div>
								<div class="mail-right"><p>30 Dec</p></div>
								<div class="clearfix"> </div>	
								<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
									<div class="mail-body">
										<p>Quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.</p>
										<form>
											<input type="text" placeholder="Reply to sender" required="">
											<input type="submit" value="Send">
										</form>
									</div>
								</div>
							</div>
							<div class="inbox-row widget-shadow">
								<div class="mail "> <input type="checkbox" class="checkbox"> </div>
								<div class="mail"><img src="images/i3.png" alt=""></div>
								<div class="mail mail-name"><h6>Skolski</h6></div>
								<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="true" aria-controls="collapsethree">
									<div class="mail"><p>Ornare vel eu leo nullam quis urna mollis </p></div>
								</a>
								<div class="mail-right">
									<div class="dropdown">
										<a href="#" data-toggle="dropdown" aria-expanded="false">
											<p><i class="fa fa-ellipsis-v mail-icon"></i></p>
										</a>
										<ul class="dropdown-menu float-right">
											<li>
												<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
													<i class="fa fa-reply mail-icon"></i>
													Reply
												</a>
											</li>
											<li>
												<a href="#" title="">
													<i class="fa fa-download mail-icon"></i>
													Archive
												</a>
											</li>
											<li>
												<a href="#" class="font-red" title="">
													<i class="fa fa-trash-o mail-icon"></i>
													Delete
												</a>
											</li>
										</ul>
									</div> 
								</div>
								<div class="mail-right"><p>30 Dec</p></div>
								<div class="clearfix"> </div>
								<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
									<div class="mail-body">
										<p>Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.</p>
										<form>
											<input type="text" placeholder="Reply to sender" required="">
											<input type="submit" value="Send">
										</form>
									</div>
								</div>
							</div>
							<div class="inbox-row widget-shadow">
								<div class="mail "> <input type="checkbox" class="checkbox"> </div>
								<div class="mail"><img src="images/i4.png" alt=""></div>
								<div class="mail mail-name"><h6>Emoori</h6></div>
								<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
									<div class="mail"><p>Vely Ornare  leo nullam quis risus mollis </p></div>
								</a>
								<div class="mail-right">
									<div class="dropdown">
										<a href="#" data-toggle="dropdown" aria-expanded="false">
											<p><i class="fa fa-ellipsis-v mail-icon"></i></p>
										</a>
										<ul class="dropdown-menu float-right">
											<li>
												<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="true" aria-controls="collapsefour">
													<i class="fa fa-reply mail-icon"></i>
													Reply
												</a>
											</li>
											<li>
												<a href="#" title="">
													<i class="fa fa-download mail-icon"></i>
													Archive
												</a>
											</li>
											<li>
												<a href="#" class="font-red" title="">
													<i class="fa fa-trash-o mail-icon"></i>
													Delete
												</a>
											</li>
										</ul>
									</div> 
								</div>
								<div class="mail-right"><p>30 Dec</p></div>
								<div class="clearfix"> </div>
								<div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
									<div class="mail-body">
										<p> Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.</p>
										<form>
											<input type="text" placeholder="Reply to sender" required="">
											<input type="submit" value="Send">
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>-->
        
    </div>
@endsection
