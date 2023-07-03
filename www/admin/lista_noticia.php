<fieldset>
    <span class="box_titulo"><label>Lista de notícia<label></span>
    <form method="POST" action="?pagina=lista_noticia" id="form-topo-tabela" name="formPaginas">
        Quantidade por página: 
        <select name="quant_paginas" onchange="document.forms['formPaginas'].submit();">
            <option value="10" <?php if(isset($_POST['quant_paginas'])){if($_POST['quant_paginas'] == 10) echo "selected"; }?> >10</option>
            <option value="20" <?php if(isset($_POST['quant_paginas'])){if($_POST['quant_paginas'] == 20) echo "selected"; }else{echo "selected";}?>>20</option>
            <option value="30" <?php if(isset($_POST['quant_paginas'])){if($_POST['quant_paginas'] == 30) echo "selected"; }?>>30</option>
        </select>
    </form>
    <form method="POST" action="?pagina=lista_noticia" id="form-topo-tabela">
        Pesquisar: 
        <input type="text" name="pesquisa">
        <input type="submit" value="ok">
    </form>
    <div id="botao_novo">
        <a href="?pagina=form_noticia">Novo</a>
     </div>

     <?php
        if(isset($_POST['quant_paginas'])){
            $qp = $_POST['quant_paginas'];
        }else{
            $qp = 20;
        }
        $pg = 0;
        $pag = 0;

        if(isset($_GET['pg'])){
            $pg = $_GET['pg'];
            $pag = $qp * $pg - $qp;
        }
        $consulta = "";
        if(isset($_POST['pesquisa'])){
            $pesquisa = $_POST['pesquisa'];
            $consulta = "select lower( titulo ) as titulo , lower( texto ) as texto, id_noticia, nome, data from noticia, municipio where municipio_id_municipio = id_municipio and titulo like '%$pesquisa%' and texto like '%$pesquisa%' order by data desc limit $pag,$qp";
        }else{
            $consulta = "select * from noticia, municipio where municipio_id_municipio = id_municipio order by data desc limit $pag,$qp";
        }
         $query = $bd->query($consulta);
        
     ?>

     <table id="tablesorter">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Município</th>
                    <th>Título</th>
                    <th>Data</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php
                    while($linha = $query->fetch_array()){
                        echo "<tr>";
                            echo "<td>$linha[id_noticia]</td>";
                            echo "<td>$linha[nome]</td>";
                            echo "<td>$linha[titulo]</td>";

                            $dt = $linha['data'];

                            $ano = substr($dt, 0, 4);
                            $mes = substr($dt, 5, 2);
                            $dia = substr($dt, 8, 2);
                            $dt = "$dia/$mes/$ano";

                            echo "<td>$dt</td>";                                
                            echo "<td><a href='?pagina=form_edit_noticia&id=$linha[id_noticia]'><img id='table-icon' src='img/edit.png' alt='edita' title='editar'></a></td>";
                            echo "<td><a href='?pagina=controle/noticia&op=excluir&id=$linha[id_noticia]' onClick='return confirm(\" Deseja apagar esta notícia? \")' ><img id='table-icon' src='img/delete.png' alt='apagar' title='apagar'></a></td>";
                        echo "</tr>";
                    }
                ?>
            

            </tbody>         
      </table>
      <ul class="pagination">
            <?php
              if($pg > 1){
            ?>
                <li><a href="?pagina=lista_noticia&pg=<?php echo $pg-1?>" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>
            <?php
            }
            ?>
            <?php
                $query = $bd->query("select * from noticia, municipio where municipio_id_municipio = id_municipio order by data desc");
                $paginas = ceil($query->num_rows/$qp);
               
          
                for($i = 1; $i <= $paginas; $i++){
                   echo "<li><a href='?pagina=lista_noticia&pg=$i'>$i</a></li>";
                }
                if($pg < $paginas){
            ?>
			     <li><a href="?pagina=lista_noticia&pg=<?php echo $pg+1?>" aria-label="Next"><span aria-hidden="true">&raquo;</span></a></li>
            <?php
                }
            ?>
        </ul>    
</fieldset>
