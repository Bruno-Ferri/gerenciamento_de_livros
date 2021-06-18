<?php

include 'conexao.php';

if((isset($_POST['busca_categorias']) != '')) 
{
	$sql = mysql_query("select * from tb_categorias where cat_descricao like  '%{$_POST['busca_categorias']}%' order by cat_descricao asc");
}
else{
   $sql = mysql_query("select * from tb_categorias order by cat_descricao asc");
}

if(isset($_GET['apagar'])){
	$sql = mysql_query("delete from tb_categorias where id_categoria=". $_GET['apagar']);
	 echo "<br>";
	 echo "<center>";
	 echo "<hr>";
	 echo "REGISTRO EXCLU&Iacute;DO COM SUCESSO!!!";
	 echo "<br>";
	 echo "<br>";  
	 echo "<a href=\"gerenciar_categorias.php\">VOLTAR</a>"; 
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
<form name="form_listar" method="post">
<div class="logo">
<a href="index.php"><img src='./img/indice.png'></a>
</div>
<hr>
<center>
<br>
<h1>GERENCIAMENTO DE CATEGORIAS</h1>
<br>
</center>
<hr>
<p>

<br>
<div class="container">
   <div class="cat_opcoes">
      DIGITE A SUA PESQUISA:
	  <input class="textbox" type="text" name="busca_categorias"><input class="botao_cat" type="submit" value="FILTRAR" OnClick="document.form_listar.action='gerenciar_categorias.php'"><br>
   </div>
   <div class="cat_opcoes">
     CADASTRE UMA NOVA CATEGORIA:
	<input class="textbox" type="text" name="txt_categoria"><input class="botao_cat" type="submit" value="CADASTRAR" OnClick="document.form_listar.action='cadastrar_categoria.php'">
   </div>
</div>

</form> 
<table border="1" align="center">
<tr>
<td><u><b>ID</b></u></td>
<td><u><b>CATEGORIA</b></u></td>
</tr>

<tr>

<?php
while($linha=mysql_fetch_assoc($sql)){
	?>
    <td align="center"><?php echo $linha['id_categoria'];?></td>
	<td align="center"><?php echo $linha['cat_descricao'];?></td>
	<th><a href="gerenciar_categorias.php?apagar='<?php echo $linha['id_categoria']; ?>'"><img src='./img/excluir.png'</a></th>
    <th><a href="atualizacao_categoria.php?atualizar='<?php echo $linha['id_categoria']; ?>'"><img src='./img/editar.png'</a></th>
	<tr>
	<?php
}
?>	
</table>
</body>
</html>