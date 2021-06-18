<?php
   include 'conexao.php';
		 
		 $id_usuario = $_POST [ "txt_id_usuario"];
		 $id_livro_emp = $_POST ["txt_id_livro_emp"];
		 
		
		$sql =mysql_query ("SELECT * FROM tb_usuarios WHERE id_usuario='$id_usuario'") ; 
		$sql2 =mysql_query ("SELECT * FROM tb_livros WHERE id_livro='$id_livro_emp'") ; 
	
		
		if(($id_usuario == "") or ($id_livro_emp == "")){
			echo"PREENCHA OS CAMPOS CORRETAMENTE!";
			echo "<p><a href=\"cadastro_emprestimos.php\"> VOLTAR </a>";
			exit;
		}
		
		if  (( mysql_num_rows($sql) == 0 ) or ( mysql_num_rows($sql2) == 0 ) ) 
		   { 
		     if (( mysql_num_rows($sql) == 0 ))
			    {
		         echo "USU&Aacute;RIO N&Atilde;O REGISTRADO!!";
			     echo "<p><a href=\"cadastro_emprestimos.php\"> VOLTAR </a><p>";
				}
		     if (( mysql_num_rows($sql2) == 0 ))
			    {
		         echo "LIVRO N&Atilde;O REGISTRADO!!!";
			     echo "<p><a href=\"cadastro_emprestimos.php\"> VOLTAR </a>";
				}
		   }			   
		else 
		   {
		   $sql =mysql_query ("INSERT INTO tb_emprestimos (id_usuario_emp, id_livro_emprestado) VALUES ('$id_usuario','$id_livro_emp')") ; 
		   echo "EMPR&Eacute;STIMO REGISTRADO";
		   echo "<p><a href=\"cadastro_emprestimos.php\"> VOLTAR </a>";
		   }
?>