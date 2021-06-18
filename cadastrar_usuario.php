<?php
   include 'conexao.php';
		 
		 $nome = $_POST ["txt_nome"];
		 $dtd_nsc = $_POST [ "txt_dtd_nsc"];
		 $genero = $_POST ["cmb_genero"];
		 $escolaridade = $_POST ["cmb_escolaridade"];
		 $endereco = $_POST ["txt_endereco"];
		 $numero = $_POST ["txt_numero"];
		 $complemento = $_POST ["txt_comp"];
		 $bairro = $_POST ["txt_bairro"];
		 $cidade = $_POST ["txt_cidade"];
		 $estado = $_POST ["cmb_estado"];
		 $telefone = $_POST ["txt_fone"];
		 $email = $_POST ["txt_email"];
		
		$sql =mysql_query ("SELECT * FROM tb_usuarios WHERE telefone='$telefone'") ; 
		$sql2 =mysql_query ("SELECT * FROM tb_usuarios WHERE email='$email'") ; 
	
		
		if(($nome == "") or ($dtd_nsc == "") or ($genero == "--") or ($escolaridade == "--") or ($endereco == "") or ($numero== "") or ($bairro == "")
			or ($cidade == "") or ($estado == "--") or ($telefone == "") or ($email == "")){
			echo"PREENCHA OS CAMPOS CORRETAMENTE!";
			echo "<p><a href=\"cadastro_pessoas.php\"> VOLTAR </a>";
			exit;
		}
		
		if  (( mysql_num_rows($sql) > 0 ) or ( mysql_num_rows($sql2) > 0 )) 
		   { echo "USU&Aacute;RIO J&Aacute; REGISTRADO!!!";
			 echo "<p><a href=\"cadastro_pessoas.php\"> VOLTAR </a>";
		   } 
		   else {
		     $sql =mysql_query ("INSERT INTO tb_usuarios (nome,genero,data_nasc,escolaridade,endereco,numero,complemento,bairro,cidade,estado,telefone,email) VALUES ('$nome','$genero','$dtd_nsc','$escolaridade','$endereco','$numero','$complemento','$bairro','$cidade','$estado','$telefone','$email')") ; 
		   echo "USU&Aacute;RIO CRIADO!!!";
		   echo "<p><a href=\"cadastro_pessoas.php\"> VOLTAR </a>";
		}
?>