<?php
   include 'conexao.php';
		 
		$categoria = $_POST ["txt_categoria"];
		
		$sql =mysql_query ("SELECT * FROM tb_categorias WHERE cat_descricao='$categoria'") ; 
				
		if(($categoria == "")){
			echo"PREENCHA O CAMPO CORRETAMENTE!";
			echo "<p><a href=\"gerenciar_categorias.php\"> VOLTAR </a>";
			exit;
		}
		
		if  (( mysql_num_rows($sql) > 0 )) 
		   { 
		    echo "CATEGORIA J&Aacute; REGISTRADA!!";
			echo "<p><a href=\"gerenciar_categorias.php\"> VOLTAR </a><p>";	
		   }			   
		else 
		   {
		   $sql =mysql_query ("INSERT INTO tb_categorias (cat_descricao) VALUES ('$categoria')") ; 
		   echo "CATEGORIA REGISTRADA COM SUCESSO!!!";
		   echo "<p><a href=\"gerenciar_categorias.php\"> VOLTAR </a>";
		   }
?>