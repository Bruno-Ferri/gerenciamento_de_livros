<?php

include 'conexao.php';

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Biblioteca</title>
</head>
<body>
<form name="cadcon" method="post">
<div class="logo">
<a href="index.php"><img src='./img/indice.png'></a>
</div>
<hr>
<center>
<br>
<h1>EMPRÉSTIMO DE LIVROS</h1>
<br>
</center>
<hr>
<p>
<div class="container">
ID USUÁRIO:<br>
<input type="text" name="txt_id_usuario" size="5"><p>

ID LIVRO EMPRESTADO:<br>
<input type="text" name="txt_id_livro_emp" size="5"><p>
</div>
<hr>
<center>
<input class="botao" type="submit" name="btn_gravar" value="GRAVAR" OnClick="document.cadcon.action='cadastrar_emprestimo.php'">
</center>
</form>
</body>
</html>