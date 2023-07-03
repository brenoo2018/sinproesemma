<?php
    require_once "includes/conexao.php";

    global $query;
    $query = $bd->query("SELECT * FROM noticia WHERE imagem <>  '' ORDER BY data DESC LIMIT 0,3");

    
?>

<div class="banner">
    <div class="banner-transp">
		<div class="container"> 
            <section class="slider">
				<div class="flexslider  col-md-12">
					<ul class="slides">
						<?php
                            while($noticias = $query->fetch_array()){
                        ?>
                        <li>
							<div class="banner-top">
                                <div class="box-img-slide  col-md-5">
                                    <img src="arquivos/noticias/<?php echo $noticias['imagem']?>" class="img-responsive img-noticia" >
                                </div>
                                <div class="col-md-6">
								<h1><?php echo $noticias['titulo'];  ?></h1>
								<!--<h2>Phasellus quis nunc odio</h2>-->
                                    <?php
                                        echo "<p>".resumir($noticias['texto'])."</p>";    
                                    ?>
                                    
								<div class="bnr-btn">
									<a href="?pagina=noticia&id=<?php echo $noticias['id_noticia']?>" class="hvr-bounce-to-bottom">Leia mais</a>
								</div>
                                
							     </div>
							</div>
						</li>
                        <?php
                            }
                        ?>						
					</ul>
				</div>
			</section>
		</div>
       </div>
	</div>
    <!--FlexSlider-->
	<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
	<script defer src="js/jquery.flexslider.js"></script>
	<script type="text/javascript">
    $(function(){
      SyntaxHighlighter.all();
    });
    $(window).load(function(){
      $('.flexslider').flexslider({
        animation: "slide",
        start: function(slider){
          $('body').removeClass('loading');
        }
      });
    });
  </script>
	<!--End-slider-script-->
<!-- //banner -->
<!-- about -->
	<div class="about">
		<div class="container">
			<div class="about-grids">
				<div class="col-md-5 about-grid-left">
                    <a href=""><img src="images/2.png" alt=" " class="img-responsive" /></a>
				</div>
				<div class="col-md-7 about-grid-right">
					<h3>Sobre o SINPROESEMMA</h3>
					<h4>Conhecça mais sobre o SINPROESEMMA - Barra do Corda e nossas ações</h4>
					<p>O Sindicato dos Trabalhadores em Educação Básica das Redes Públicas Estadual  e Municipais do Maranhão, delegacia de Barra do Corda, é responsável pelas negociações coletivas e pela manutenção e ampliação sistemática dos direitos e garantias que cercam a atividade profissional docente...</p>
                                <div class="bnr-btn-link">
									<a href="?pagina=quem_somos" class="hvr-bounce-to-bottom">Conheça mais</a>
								</div>
					
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //about -->
<!-- lema -->
    <div id="lema" class="container">
        <h1>Gestão Unidade para Avançar nas Conquistas</h1>
    </div>
<!-- fim-lema -->

<!-- videos 
    <div class="videos">
        <div class="container">
            <div class="col-md-5">
                <h1>Uma homenagem do SINPROESEMMA ao Dia do Professor</h1>
                <h4>Uma breve descrição sobre o conteudo do vídeo.</h4>
                <div class="bnr-btn">
				    <a href="#" class="hvr-bounce-to-bottom">Mais vídeos</a>
				</div>
            </div>
            <div class="col-md-5">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/OIB3tKtseDY" frameborder="0" allowfullscreen></iframe>
            </div>
            
        </div>
    </div>
    
<!-- fim-videos -->

    <!--start-news-->


    <?php
        $query = $bd->query("select * from noticia where destaque = 0 order by data desc");
        $query_img = $bd->query("select * from noticia where destaque = 0 and imagem != ''  order by data desc");
    ?>
	<div class="news">
		<div class="container">
			<div class="news-top">
				<div class="col-md-7 news-left">
					<div class="news-heading">
						<h3>Mais notícias</h3>
						<h4>Notícias atualizadas sobre o SIMPROESEMMA - Barra do Corda</h4>
					</div>
					 <div class="news-bottom">
                       
                         
						<div class="news-one">
                            <?php 
                                $noticias_img = $query_img->fetch_array();
                            ?>
							<div class="news-one-left">
								<img src="arquivos/noticias/<?php echo $noticias_img['imagem']?>" alt="" />
							</div>
							<div class="news-one-right">
                                
                                <h4><a href="?pagina=noticia&id=<?php echo $noticias_img['id_noticia']?>"><?php echo $noticias_img['titulo']?></a></h4>
								<p>
                                    <?php
echo "<p>".resumir($noticias_img['texto'])."...<a href='?pagina=noticia&id=".$noticias_img['id_noticia']."'>Continue lendo</a></p>";    
                                    ?>
                                </p>
							</div>
							<div class="clearfix"></div>
						</div>
                        
                        <div class="news-one"> 
                            <?php $mais_noticias = $query->fetch_array(); ?>
                            <?php $mais_noticias = $query->fetch_array(); ?>
                            <h4><a href="?pagina=noticia&id=<?php echo $mais_noticias['id_noticia']?>"><?php echo $mais_noticias['titulo']?></a></h4>
                            <p>
                                <?php
                                            echo "<p>".resumir($mais_noticias['texto'])."...<a href='?pagina=noticia&id=".$mais_noticias['id_noticia']."'>Continue lendo</a></p>";      
                                ?>
                            </p>
                        </div>  
                        
						<div class="news-one">
                            <?php $mais_noticias = $query->fetch_array(); ?>
                            <h4><a href="?pagina=noticia&id=<?php echo $mais_noticias['id_noticia']?>"><?php echo $mais_noticias['titulo']?>.</a></h4>
							<p>
                                <?php
                                            echo "<p>".resumir($mais_noticias['texto'])."...<a href='?pagina=noticia&id=".$mais_noticias['id_noticia']."'>Continue lendo</a></p>";     
                                ?>
                            </p>
						</div>
                         
                        <div class="news-one">
                            <?php $mais_noticias = $query->fetch_array(); ?>
                            <h4><a href="?pagina=noticia&id=<?php echo $mais_noticias['id_noticia']?>"><?php echo $mais_noticias['titulo']?>.</a></h4>
							<p>
                                <?php
                                            echo "<p>".resumir($mais_noticias['texto'])."...<a href='?pagina=noticia&id=".$mais_noticias['id_noticia']."'>Continue lendo</a></p>";     
                                ?>
                            </p>
						</div>
                        <div class="bnr-btn-link">
									<a href="?pagina=noticias" class="hvr-bounce-to-bottom">Mais notícias</a>
				        </div>
					</div>
                    
				</div>
                
    <!--Enquete -->                            
				<div class="col-md-4 news-right">
                    <?php
                        require "includes/enquete.php";
                    ?>					
                    <div class="box-publicidade">
                        <a href=""><h1>Conheça nossa sede recreativa</h1></a>
                    </div>
                    
                    
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!-- fim da Enquete -->                            
    
    <!-- municipios
    
    


	<div class="join" >
        
        <div class="join-cont">
            <h1>Núcleos Sindicais</h1>
            <h2>Conheça os municípios onde o SINPROESEMMA - Barra do Corda esta presente.</h2>
        </div>
        <div id="municipios">
		  
			
				<div class="col-md-4 join-left join-left-center">
					<a href="">
                        <span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>
					   <span class="nome-municipio">Arame</span>
                    </a>
					
				</div>
				<div class="col-md-4 join-left join-left-center">
					<a href="">
                        <span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>
					   <span class="nome-municipio">Fernando Falcão</span>
                    </a>
					
				</div>
				<div class="col-md-4 join-left join-left-center">
					<a href="">
                        <span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>
					   <span class="nome-municipio">Grajau</span>
                    </a>
					
				</div>
				<div class="col-md-4 join-left join-left-center">
					<a href="">
                        <span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>
					   <span class="nome-municipio">Itaipava do Grajau</span>
                    </a>
					
				</div>
                <div class="col-md-4 join-left join-left-center">
					<a href="">
                        <span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>
					   <span class="nome-municipio">Jenipapo dos Vieiras</span>
                    </a>
					
				</div>
                <div class="col-md-4 join-left join-left-center">
					<a href="">
                        <span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>
					   <span class="nome-municipio">Sítio Novo</span>
                    </a>
					
				</div>
				<div class="clearfix"></div>
			
		
		</div>
		
		
	</div>
    
<!-- fim munidipios-->
    <!-- portifolios -->