<?php
include 'conexao.php';

	$id_categoria = $_POST["txt_id_categoria"];
	$desc_nova = $_POST["txt_desc_cat"];


$up=mysql_query("update tb_categorias set cat_descricao='$desc_nova' where id_categoria='{$id_categoria}'");
echo "CATEGORIA ALTERADA COM SUCESSO!!!";
echo "<p><a href=\"gerenciar_categorias.php\"> VOLTAR </a>";

?>