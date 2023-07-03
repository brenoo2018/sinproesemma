
<div id="cont_in">
    <div id="noticia">
<?php
    $id = $_GET['id'];
    $query = $bd->query("select * from noticia where id_noticia = $id");
    $noticia = $query->fetch_array();

    $dt = convert_data($noticia['data'])
    

?>
    </div>
</div>
<?php
    //require "includes/noticias.php"
?>

<div class="single">
		<div class="container">
			<div class="single-page-artical">
				<div class="artical-content">
					<h3><?php echo $noticia['titulo']; ?></h3>
                    
                    <?php
                        if($noticia['imagem'] != "")
                            echo "<img class='img-responsive' src='arquivos/noticias/$noticia[imagem]' alt=' ' />";     
                    ?>
					
					<p>
                        <?php
                            echo $noticia['texto'];
                        ?>
                    </p>
				</div>
				<div class="artical-links">
					<ul>
						<li><span class="glyphicon glyphicon-calendar glyphicon-border-other" aria-hidden="true"></span><?php echo $dt?></li>
						<li><a href="#"><span class="glyphicon glyphicon-user glyphicon-border-other" aria-hidden="true"></span>Fonte: <?php echo $noticia['fonte'];?></a></li>
					</ul>
				</div>
				<!--<div class="comment-grid-top">
					<h4>Comentários</h4>
					<div class="comments-top-top">
						<div class="top-comment-left">
							<a href="#"><img class="img-responsive" src="images/co.png" alt=""></a>
						</div>
						<div class="top-comment-right">
							<ul>
								<li><span class="left-at"><a href="#">Admin</a></span></li>
								<li><span class="right-at">September 15, 2015 at 10.30am</span></li>
								<li><a class="reply" href="#">Reply</a></li>
							</ul>
						<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.The point of using Lorem Ipsum is that it has a more-or-less </p>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="comments-top-top top-grid-comment">
						<div class="top-comment-left">
							<a href="#"><img class="img-responsive" src="images/co.png" alt=""></a>
						</div>
						<div class="top-comment-right">
							<ul>
								<li><span class="left-at"><a href="#">Admin</a></li>
								<li><span class="right-at">September 15, 2015 at 10.30am</span></li>
							</ul>
						<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.The point of using Lorem Ipsum is that it has a more-or-less </p>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>			
				<div class="artical-commentbox">
					<h4>Deixe seu comentário:</h4>
					<div class="table-form">
						<form>
							<input type="text" value="Nome" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Nome';}" required="">
							<input type="email" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
							<textarea value="Message:" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message';}" required="">Comentário</textarea>	
							<input type="submit" value="Send">
						</form>
					</div>
				</div>	-->
			</div>
		</div>
	</div>