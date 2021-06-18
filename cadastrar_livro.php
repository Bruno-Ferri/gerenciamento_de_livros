<?php

   include 'conexao.php';
		 
		 $titulo = $_POST ["txt_titulo"];
		 $autor = $_POST ["txt_autor"];
		 $tema = $_POST ["txt_tema"];
		 $dtd_pub = $_POST ["txt_dtd_pub"];
		 $categoria = $_POST ["cmb_categoria"];
		 $qtd_copias = $_POST ["txt_qtd_copias"];
	
		
		if(($titulo == "") or ($autor == "") or ($tema == "") or ($dtd_pub == "") or ($categoria == "--") or ($qtd_copias == "")){
			echo"PREENCHA OS CAMPOS CORRETAMENTE!";
			echo "<p><a href=\"cadastro_livros.php\"> VOLTAR </a>";
			exit;
		}
		
		
		   $sql =mysql_query ("INSERT INTO tb_livros (titulo,autor,tema,data_pub,id_categoria,qtd_copias) VALUES ('$titulo','$autor','$tema','$dtd_pub','$categoria','$qtd_copias')") ; 
		   echo "CADASTRO DE LIVRO EFETUADO!!!";
		   echo "<p><a href=\"cadastro_livros.php\"> VOLTAR </a>";
		
?>