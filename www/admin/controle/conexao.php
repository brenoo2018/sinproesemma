<?php

  $host = "mysql.sinproesemmabdc.com.br";
  $user = "sinproesemmabd";
  $senha = "barradocorda";
  $banco = "sinproesemmabd";

  $bd = new mysqli($host,$user,$senha, $banco);
  $bd->set_charset("utf8");    
  if (mysqli_connect_errno()){
      trigger_error(mysqli_connect_error()); 
  }
?>
