<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>SINPROESEMMA - Barra do Corda - MA</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html" charset="utf-8" />
<meta name="keywords" content="sinproesemma, barra do corda, sinproesemma-barra do corda, sinproesemmabdc, bdc, professores de barra do corda, sindicato dos professores, sindicato dos trabalhadores em educação básica das redes estatual e municipais do estado do maranhão" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="./css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="./css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="./css/lightbox.css" rel="stylesheet" type="text/css"  media="all"/>
<!-- js -->
<script src="./js/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="js/lightbox-2.6.min.js"></script>    
<!-- //js -->
    
<script>
    function verificaEnquete(){

        var ops = document.getElementsByName('op_enquete');
        var quantos = document.getElementsByName('op_enquete').length;
        var valor = 0;

        for(var i=0; i < quantos; i++) {
            if(ops[i].checked) {
                valor++;
            }
        }

        if(valor==0) {
            alert("Escolha uma opção para votar")
            return false;
        }else{
            return true;
        }

    }
</script>    

    
    <script src='https://www.google.com/recaptcha/api.js'></script>  
    
</head>
	
<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.8";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>    
<!-- header -->
	<!--<div class="header_top">
		<div class="container">
			<div class="header_top_left">
				<ul>
					<li>+133 3456 1234 /</li>
					<li><a href="mailto:info@example.com">info@example.com</a></li>
				</ul>
			</div>
			<div class="header_top_right">
				<p>cupidatat non proident, sunt in culpa qui.</p>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>-->
	<div class="logo_social_icons">
		<div class="container">
			<div class="logo">
				<h1><a href="http://sinproesemmabdc.com.br/"><img src="images/logo.png" alt=" " class="img-responsive" /></a></h1>
			</div>
			<!--<div class="social_icons">
				<div class="component">
					<a href="#" class="icon icon-cube facebook"></a>
					<a href="#" class="icon icon-cube rss"></a>
					<a href="#" class="icon icon-cube instagram"></a>
					<a href="#" class="icon icon-cube t"></a>
					<div class="clearfix"> </div>
				</div>
			</div>-->
			<div class="clearfix"> </div>
		</div>
	</div>
	<div class="header">
		<div class="container">
			<nav class="navbar navbar-default">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Menu</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
					<nav class="stroke">
						<ul class="nav navbar-nav">
							<li class="active"><a href="?pagina=home">Início</a></li>
							<li><a href="?pagina=noticias" class="hvr-bounce-to-bottom">Notícias</a></li>
							<li><a href="?pagina=eventos" class="hvr-bounce-to-bottom">Eventos</a></li>
							<li><a href="?pagina=convenios" class="hvr-bounce-to-bottom">Convênios</a></li>
							<li><a href="?pagina=quem_somos" class="hvr-bounce-to-bottom">Quem somos</a></li>
							<li><a href="?pagina=filie_se" class="hvr-bounce-to-bottom">Filie-se</a></li>
							<li><a href="?pagina=fale_conosco" class="hvr-bounce-to-bottom">Fale conosco</a></li>
						</ul>
						<div class="search-box">
							<div id="sb-search" class="sb-search">
								<form>
									<input class="sb-search-input" placeholder="Digite aqui a sua pesquisa" type="search" id="search">
									<input class="sb-search-submit" type="submit" value="">
									<span class="sb-icon-search"> </span>
								</form>
							</div>
						</div>
					<!-- search-scripts -->
					<script src="./js/classie.js"></script>
					<script src="./js/uisearch.js"></script>
						<script>
							new UISearch( document.getElementById( 'sb-search' ) );
						</script>
					<!-- //search-scripts -->
					</nav>
				</div>
				<!-- /.navbar-collapse -->
			</nav>
		</div>
	</div>
    
    <?php
        require_once "includes/conexao.php";
    ?>