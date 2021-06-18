<?php

include 'conexao.php';

if((isset($_POST['busca_livros']) != '') and (isset($_POST['titulo']) == 'titulo')) {
	$sql = mysql_query("SELECT tb_livros.id_livro, tb_livros.titulo, tb_livros.autor, tb_livros.tema, 
		  tb_livros.data_pub, tb_categorias.cat_descricao, tb_livros.qtd_copias
          FROM tb_livros INNER JOIN tb_categorias ON ( tb_livros.id_categoria = tb_categorias.id_categoria ) 
		  WHERE tb_livros.titulo like  '%{$_POST['busca_livros']}%' order by tb_livros.titulo asc");
} else {
	if((isset($_POST['busca_livros']) != '') and (isset($_POST['autor']) == 'autor')){
		$sql = mysql_query("SELECT tb_livros.id_livro, tb_livros.titulo, tb_livros.autor, tb_livros.tema, 
		  tb_livros.data_pub, tb_categorias.cat_descricao, tb_livros.qtd_copias
          FROM tb_livros INNER JOIN tb_categorias ON ( tb_livros.id_categoria = tb_categorias.id_categoria )  
		  WHERE tb_livros.autor like  '%{$_POST['busca_livros']}%' order by tb_livros.autor asc");
	}
	else{
		if((isset($_POST['busca_livros']) != '') and (isset($_POST['categoria']) == 'categoria')){
			$sql = mysql_query("SELECT tb_livros.id_livro, tb_livros.titulo, tb_livros.autor, tb_livros.tema, 
		  tb_livros.data_pub, tb_categorias.cat_descricao, tb_livros.qtd_copias
          FROM tb_livros INNER JOIN tb_categorias ON ( tb_livros.id_categoria = tb_categorias.id_categoria )  
		  WHERE tb_categorias.cat_descricao like  '%{$_POST['busca_livros']}%' order by tb_categorias.cat_descricao asc");
		}
		else{
		  $sql = mysql_query("SELECT tb_livros.id_livro, tb_livros.titulo, tb_livros.autor, tb_livros.tema, 
		  tb_livros.data_pub, tb_categorias.cat_descricao, tb_livros.qtd_copias
          FROM tb_livros INNER JOIN tb_categorias ON ( tb_livros.id_categoria = tb_categorias.id_categoria ) 
		  order by tb_livros.titulo asc");
	  }
	}
	  
}

if(isset($_GET['apagar'])){
	$sql = mysql_query("delete from tb_livros where id_livro=". $_GET['apagar']);
	 echo "<br>";
	 echo "<center>";
	 echo "<hr>";
	 echo "REGISTRO EXCLU&Iacute;DO COM SUCESSO!!!";
	 echo "<br>";
	 echo "<br>";  
	 echo "<a href=\"buscar_livros.php\">VOLTAR</a>"; 
	 echo "<hr>";
	return false;
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
<form name="form_listar" method="post" action="buscar_livros.php">
<div class="logo">
<a href="index.php"><img src='./img/indice.png'></a>
</div>
<hr>
<center>
<br>
<h1>GERENCIAMENTO DE LIVROS</h1>
<br>
<hr>
<p>
<fieldset>
<legend>Selecione o tipo de busca:</legend>
<input id="radio" type="radio" name="titulo" value="titulo">Buscar por título &nbsp;&nbsp;
<input id="radio" type="radio" name="autor" value="autor">Buscar por autor &nbsp;&nbsp;
<input id="radio" type="radio" name="categoria" value="categoria">Buscar por categoria
</fieldset>
<br>
<b>DIGITE A SUA PESQUISA:</b> <input type="text" name="busca_livros">&nbsp;&nbsp;<input class="botao_cat" type="submit" value="FILTRAR">
</center>
</form> 
<table border="1" align="center">
<tr>
<td><u><b>ID</b></u></td>
<td><u><b>TÍTULO</b></u></td>
<td><u><b>AUTOR</b></u></td>
<td><u><b>TEMA</b></u></td>
<td><u><b>DATA DE PUBLICAÇÃO</b></u></td>
<td><u><b>CATEGORIA</b></u></td>
<td><u><b>CÓPIAS</b></u></td>
</tr>

<tr>

<?php
while($linha=mysql_fetch_assoc($sql)){
	?>
    <td align="center"><?php echo $linha['id_livro'];?></td>
	<td align="center"><?php echo $linha['titulo'];?></td>
	<td align="center"><?php echo $linha['autor'];?></td>
	<td align="center"><?php echo $linha['tema'];?></td>
	<td align="center"><?php echo $linha['data_pub'];?></td>
	<td align="center"><?php echo $linha['cat_descricao'];?></td>
	<td align="center"><?php echo $linha['qtd_copias'];?></td>
	<th><a href="buscar_livros.php?apagar='<?php echo $linha['id_livro']; ?>'"><img src='./img/excluir.png'</a></th>
    <th><a href="atualizacao_livro.php?atualizar='<?php echo $linha['id_livro']; ?>'"><img src='./img/editar.png'</a></th>
	<tr>
	<?php
}
?>	
</table>
</body>
</html>