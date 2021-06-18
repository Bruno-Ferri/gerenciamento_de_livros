<?php

include 'conexao.php';

$sql=mysql_query("select * from tb_emprestimos where id_emprestimo =". $_GET['atualizar']);
while($linha = mysql_fetch_array($sql)){
	$id_emprestimo = $linha['id_emprestimo'];
	$id_usuario = $linha['id_usuario_emp'];
	$id_livro = $linha['id_livro_emprestado'];
	}

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
<h1>ATUALIZAÇÃO DE EMPRÉSTIMO</h1>
<br>
</center>
<hr>
<p>

<div class="container">
ID EMPRÉSTIMO:<br>
<input class="textbox" type="text" name="txt_id_emprestimo" value=<?php echo"$id_emprestimo"?> size="80" readonly><p>

ID USUÁRIO:<br>
<input class="textbox" type="text" name="txt_id_usuario" value="<?php echo"$id_usuario"?>" size="80"><p>

ID LIVRO:<br>
<input class="textbox" type="text" name="txt_id_livro" value="<?php echo"$id_livro"?>" size="80"><p>
</div>
<br>
<br>

<hr>
<center>
<input class="botao" type="submit" name="btn_gravar" value="ATUALIZAR" OnClick="document.cadcon.action='atualizar_emprestimo.php'">
</center>
</form>
</body>
</html>