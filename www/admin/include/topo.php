<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pt-br" lang="pt-br">

<head>
 <meta http-equiv="Content-Type" content="text/html" charset="utf-8" />   
  <title></title>
  <link rel="stylesheet" type="text/css" href="css/estilo.css">
  <link rel="stylesheet" type="text/css" href="css/estilo_table.css">
  <link rel="stylesheet" type="text/css" href="css/pagination.css">

  <script type="text/javascript" src="./js/jquery.js"></script>
  <script type="text/javascript" src="./js/jquery.tablesorter.js"></script>

  <script type="text/javascript">
                $(function() {
                        $("#tablesorter").tablesorter();
                });
  </script>

  <!--<script type="text/javascript" src="./js/tinymce/tinymce.min.js"></script>
  <script type="text/javascript">
        tinymce.init({
            selector: "textarea",
            language: 'pt_BR',
            plugins: "textcolor",
            plugins: "image",
             image_list: [
                 {title: 'My image 1', value: 'http://www.tinymce.com/my1.gif'},
                 {title: 'My image 2', value: 'http://www.moxiecode.com/my2.gif'}
             ]
        });
  </script>-->
    
  <script type="text/javascript" src="./js/nicEdit.js"></script>
  <script type="text/javascript">
//<![CDATA[
        bkLib.onDomLoaded(function() { nicEditors.allTextAreas({fullPanel : true}) });
  //]]>
  </script>

</head>

<body>
       <div id="corpo">
            <div id="topo">
                <img src="img/logo.png"  >
                <div id="titulo">
                    <h1>SINPROESEMMA - Barra do Corda<br>Ambiente Administrativo</h1>
                    <span id="usuario"><?php echo $logado?> - <a href="controle/sessao.php?op=logoff">Sair</a></span>
                </div>
                <div id="menu">
                    <ul>
                        <li><a href="?pagina=lista_noticia">Notícias</a></li>
                        <li><a href="?pagina=lista_leis">Leis e estatutos</a></li>
                        <!--<li><a href="?pagina=lista_publicacao">Publicações locais</a></li>-->
                        <li><a href="?pagina=lista_convenios">Convênios</a></li>
                        <li><a href="?pagina=quemsomos">Quem somos</a></li>
                        <li><a href="?pagina=lista_evento">Eventos</a></li>
                        <!--<li><a href="?pagina=lista_links">Links</a></li>-->
                        <li><a href="?pagina=lista_enquete">Enquete</a></li>
                        <li><a href="?pagina=fale_conosco">Fale conosco</a></li>
                        <li><a href="?pagina=lista_usuario">Usuários</a></li>
                    </ul>
                </div>
            </div>
            <div id="conteudo">

