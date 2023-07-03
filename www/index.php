<?php
    //gerar resumo das noticias
    function resumir($texto){
        $frases = explode(".", strip_tags($texto));
        $resumo = $frases[0];
        
        if(strlen($resumo) >= 150){
            return substr($resumo,0,150);
        }else{
            if(count($frases) > 1){
                $i = 1;
                while(strlen($resumo) < 150 && $i < count($frases)){
                    if(strlen($frases[$i]) < 150 ){
                        $resumo =  $resumo.$frases[$i];
                    }else{
                        $pedaco = substr($frases[$i], 0, 150);
                        $resumo = $resumo.$pedaco;
                    }
                    $i++;
                } 
            }
            return $resumo;
        }
        
    }

    function convert_data($data){
        $ano = substr($data, 0, 4);
        $mes = substr($data, 5, 2);
        $dia = substr($data, 8, 2);
        $dt = "$dia/$mes/$ano";
        return $dt;
    }

    require_once "includes/topo.php";

    //carrega a página solicitada
    if(!isset($_GET["pagina"])){
        require_once "home.php";
        require_once "includes/rodape-box.php";
    }else{
        if(($_GET["pagina"] != "") && ($_GET["pagina"] != "home")){
                    $pagina = $_GET["pagina"];
                    require "paginas/".$pagina.".php";
        }else{
                   require_once "home.php";
                   require_once "includes/rodape-box.php";
        }
    }
    
    require_once "includes/rodape.php";

?>