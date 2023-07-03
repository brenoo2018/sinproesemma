<div class="single">
		<div class="container">
			<div class="single-page-artical">
				<div class="artical-content">
                    <h3>Convênios</h3>
                        <?php
                            $query = $bd->query("select * from convenios order by titulo");
                            while($convenio = $query->fetch_array()){

                        ?>
                        <div class="box-convenio">
                                <span><?php echo $convenio['titulo']?></span>
                                <?php echo $convenio['descricao']?>
                        </div>

                        <?php
                            }
                        ?>
                   
                </div>
				
				
			</div>
		</div>
	</div>
