

<div class="single">
		<div class="container">
			<div class="single-page-artical">
				<div class="artical-content">
					<h3>Sobre o SIMPROESEMMA - Barra do Corda </h3>
                        
					
					<p>
                     <?php
                        $query = $bd->query("select * from quemsomos");
                        $quemsomos = $query->fetch_array();
                        echo $quemsomos['texto'];
                    ?>  
                    </p>
				</div>
				
				
			</div>
		</div>
	</div>

