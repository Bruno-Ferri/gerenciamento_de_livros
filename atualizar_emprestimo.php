<?php
include 'conexao.php';

	$id_emprestimo = $_POST["txt_id_emprestimo"];
	$id_usuario_novo= $_POST["txt_id_usuario"];
	$id_livro_novo= $_POST["txt_id_livro"];

    $sql =mysql_query ("SELECT * FROM tb_usuarios WHERE id_usuario='$id_usuario_novo'") ; 
    $sql2 =mysql_query ("SELECT * FROM tb_livros WHERE id_livro='$id_livro_novo'") ;

	
	if  (( mysql_num_rows($sql) == 0 ) or ( mysql_num_rows($sql2) == 0 ) ) 
		   { 
		     if (( mysql_num_rows($sql) == 0 ))
			    {
		         echo "USU&Aacute;RIO N&Atilde;O REGISTRADO!!";
			     echo "<p><a href=\"gerenciar_emprestimos.php\"> VOLTAR </a><p>";
				}
		     if (( mysql_num_rows($sql2) == 0 ))
			    {
		         echo "LIVRO N&Atilde;O REGISTRADO!!!";
			     echo "<p><a href=\"gerenciar_emprestimos.php\"> VOLTAR </a>";
				}
		   }			   
		else 
		   {
		   $up=mysql_query("update tb_emprestimos set id_usuario_emp='$id_usuario_novo', id_livro_emprestado='$id_livro_novo' where id_emprestimo='{$id_emprestimo}'");
           echo "EMPR&Eacute;STIMO ALTERADO COM SUCESSO!!!";
           echo "<p><a href=\"gerenciar_emprestimos.php\"> VOLTAR </a>";
		   }
?>