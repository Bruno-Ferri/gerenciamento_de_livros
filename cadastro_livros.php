<?php

include 'conexao.php';
$sql = mysql_query("select * from tb_categorias order by id_categoria asc");
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
<h1>CADASTRO DE LIVROS</h1>
<br>
</center>
<hr>
<p>

<div class="container">
   TÍTULO:<br>
   <input class="textbox" "type="text" name="txt_titulo" size="80"><p>

   AUTOR:<br>
   <input class="textbox" type="text" name="txt_autor" size="80"><p>

   TEMA:<br>
   <input class="textbox" type="text" name="txt_tema" size="80"><p>

   DATA DE PUBLICAÇÃO:<br>
   <input type="date" name="txt_dtd_pub" size="80"><p>

   CATEGORIA:<br> 
   <select name="cmb_categoria">
   <option value="--">--</option>
   <?php
   while($linha=mysql_fetch_assoc($sql)){
   ?>
   <option value="<?php echo $linha['id_categoria'];?>"><?php echo $linha['cat_descricao'];?></option>
   <?php
   }
   ?>
	</select><p>

    QUANTIDADE DE CÓPIAS:<br>
   <input type="text" name="txt_qtd_copias" size="5"><p>
</div>
<hr>
<center>
<input class="botao" type="submit" name="btn_gravar" value="GRAVAR" OnClick="document.cadcon.action='cadastrar_livro.php'">
<center>
</form>
</body>
</html>