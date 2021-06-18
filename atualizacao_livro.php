<?php

include 'conexao.php';
//$sql=mysql_query("select * from tb_livros where id_livro=". $_GET['atualizar']);
$sql=mysql_query("SELECT tb_livros.id_livro, tb_livros.titulo, tb_livros.autor, tb_livros.tema, tb_livros.data_pub, 
tb_livros.id_categoria, tb_categorias.cat_descricao, tb_livros.qtd_copias
FROM tb_livros
INNER JOIN tb_categorias ON ( tb_livros.id_categoria = tb_categorias.id_categoria )  
WHERE tb_livros.id_livro =". $_GET['atualizar']);
while($linha = mysql_fetch_array($sql)){
	$id_livro = $linha['id_livro'];
	$titulo = $linha['titulo'];
	$autor = $linha['autor'];
	$tema = $linha['tema'];
	$data_pub = $linha['data_pub'];
	$id_categoria = $linha['id_categoria'];
	$cat_descricao = $linha['cat_descricao'];
	$qtd_copias = $linha['qtd_copias'];
	}
	
$sql2 = mysql_query("select * from tb_categorias order by id_categoria asc");	
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
<h1>ATUALIZAÇÃO DE LIVRO</h1>
<br>
</center>
<hr>
<p>

<div class="container">
ID DO LIVRO:<br>
<input type="text" name="txt_id_livro" value=<?php echo"$id_livro"?> size="5" readonly><p>


TÍTULO:<br>

<input class="textbox" type="text" name="txt_titulo" value="<?php echo "$titulo"?>" size="80"><p>

AUTOR:<br>
<input class="textbox" type="text" name="txt_autor" value="<?php echo"$autor"?>" size="80"><p>

TEMA:<br>
<input class="textbox" type="text" name="txt_tema" value="<?php echo"$tema"?>" size="80"><p>

DATA DE PUBLICAÇÂO:<br>
<input type="date" name="txt_data_pub"  value="<?php echo"$data_pub"?>" size="80"><p>

CATEGORIA:<br>
<select name="cmb_categoria">
   <option value="<?php echo "$id_categoria"?>"><?php echo "$cat_descricao"?></option>
   <?php
   while($linha2=mysql_fetch_assoc($sql2)){
   ?>
   <option value="<?php echo $linha2['id_categoria'];?>"><?php echo $linha2['cat_descricao'];?></option>
   <?php
   }
   ?>
</select><p>
QUANTIDADE DE CÓPIAS:<br>
<input type="text" name="txt_copias" value="<?php echo"$qtd_copias"?>" size="5"><p>
<br>
<br>
</div>
<hr>
<center>
<input class="botao" type="submit" name="btn_gravar" value="ATUALIZAR" OnClick="document.cadcon.action='atualizar_livro.php'">
</center>
</form>
</body>
</html>