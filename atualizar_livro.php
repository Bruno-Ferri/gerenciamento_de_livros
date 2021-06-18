<?php
include 'conexao.php';


    $id_livro = $_POST["txt_id_livro"];
	$titulo_novo = $_POST["txt_titulo"];
	$autor_novo = $_POST["txt_autor"];
	$tema_novo = $_POST["txt_tema"];
	$data_pub_nova = $_POST["txt_data_pub"];
	$id_categoria_novo = $_POST["cmb_categoria"];
	$qtd_copias_nova = $_POST["txt_copias"];


$up=mysql_query("update tb_livros set titulo='$titulo_novo', autor='$autor_novo', tema='$tema_novo', 
data_pub='$data_pub_nova', id_categoria='$id_categoria_novo', qtd_copias='$qtd_copias_nova' where id_livro='{$id_livro}'");
echo "LIVRO ALTERADO COM SUCESSO!!!";
echo "<p><a href=\"buscar_livros.php\"> VOLTAR </a>";

?>