<?php
$servidor="127.0.0.1";
$user="root";
$senha="usbw";
$banco="biblioteca";
$conecta_db=mysql_connect($servidor, $user, $senha) or die (mysql_error()); 
mysql_select_db($banco) or die("Erro_conexao ");
?>