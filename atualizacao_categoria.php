<?php

include 'conexao.php';

$sql=mysql_query("select * from tb_categorias where id_categoria =". $_GET['atualizar']);
while($linha = mysql_fetch_array($sql)){
	$id_categoria = $linha['id_categoria'];
	$descricao = $linha['cat_descricao'];
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
<h1>ATUALIZAÇÃO DE CATEGORIA</h1>
<br>
</center>
<hr>
<p>

<div class="container">
ID CATEGORIA:<br>
<input class="textbox" type="text" name="txt_id_categoria" value=<?php echo"$id_categoria"?> size="80" readonly><p>

DESCRIÇÂO:<br>
<input class="textbox" type="text" name="txt_desc_cat" value="<?php echo"$descricao"?>" size="80"><p>
</div>
<br>
<br>

<hr>
<center>
<input class="botao" type="submit" name="btn_gravar" value="ATUALIZAR" OnClick="document.cadcon.action='atualizar_categoria.php'">
</center>
</form>
</body>
</html>