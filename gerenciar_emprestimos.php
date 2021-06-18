<?php

include 'conexao.php';

if((isset($_POST['busca_emprestimos']) != '') and (isset($_POST['titulo']) == 'titulo')) {
	$sql = mysql_query("select tb_emprestimos.id_emprestimo, tb_usuarios.nome, tb_livros.titulo  
                       from 
                       tb_emprestimos
                       inner join tb_livros on tb_emprestimos.id_livro_emprestado=tb_livros.id_livro
                       inner join tb_usuarios on tb_emprestimos.id_usuario_emp=tb_usuarios.id_usuario  
		               WHERE tb_livros.titulo like  '%{$_POST['busca_emprestimos']}%' order by tb_livros.titulo asc");
} else {
	if((isset($_POST['busca_emprestimos']) != '') and (isset($_POST['usuario']) == 'usuario')){
		$sql = mysql_query("select tb_emprestimos.id_emprestimo, tb_usuarios.nome, tb_livros.titulo  
                            from 
                            tb_emprestimos
                            inner join tb_livros on tb_emprestimos.id_livro_emprestado=tb_livros.id_livro
                            inner join tb_usuarios on tb_emprestimos.id_usuario_emp=tb_usuarios.id_usuario  
		                    WHERE tb_usuarios.nome like  '%{$_POST['busca_emprestimos']}%' order by tb_usuarios.nome asc");
	}
	else{
		if((isset($_POST['busca_emprestimos']) != '') and (isset($_POST['emprestimo']) == 'emprestimo')){
			$sql = mysql_query("select tb_emprestimos.id_emprestimo, tb_usuarios.nome, tb_livros.titulo  
                                from 
                                tb_emprestimos
                                inner join tb_livros on tb_emprestimos.id_livro_emprestado=tb_livros.id_livro
                                inner join tb_usuarios on tb_emprestimos.id_usuario_emp=tb_usuarios.id_usuario  
		                        WHERE tb_emprestimos.id_emprestimo like  '%{$_POST['busca_emprestimos']}%' order by tb_emprestimos.id_emprestimo asc");
		}
		else{
		  $sql = mysql_query("select tb_emprestimos.id_emprestimo, tb_usuarios.nome, tb_livros.titulo   
                              from 
                              tb_emprestimos
                              inner join tb_livros on tb_emprestimos.id_livro_emprestado=tb_livros.id_livro
                              inner join tb_usuarios on tb_emprestimos.id_usuario_emp=tb_usuarios.id_usuario order by tb_emprestimos.id_emprestimo asc");
	  }
	}
	  
}

if(isset($_GET['apagar'])){
	$sql = mysql_query("delete from tb_emprestimos where id_emprestimo=". $_GET['apagar']);
	 echo "<br>";
	 echo "<center>";
	 echo "<hr>";
	 echo "REGISTRO EXCLU&Iacute;DO COM SUCESSO!!!";
	 echo "<br>";
	 echo "<br>";  
	 echo "<a href=\"gerenciar_emprestimos.php\">VOLTAR</a>"; 
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
<form name="form_listar" method="post" action="gerenciar_emprestimos.php">
<div class="logo">
<a href="index.php"><img src='./img/indice.png'></a>
</div>
<hr>
<center>
<br>
<h1>GERENCIAMENTO DE EMPRÉSTIMOS</h1>
<br>
<hr>
<p>
<fieldset>
<legend>Selecione o tipo de busca:</legend>
<input id="radio" type="radio" name="titulo" value="titulo">Buscar por título &nbsp;&nbsp;
<input id="radio" type="radio" name="usuario" value="usuario">Buscar por usuário &nbsp;&nbsp;
<input id="radio" type="radio" name="emprestimo" value="emprestimo">Buscar por empréstimo
</fieldset>
<br>
<b>DIGITE A SUA PESQUISA:</b> <input type="text" name="busca_emprestimos">&nbsp;&nbsp;<input class="botao_cat" type="submit" value="FILTRAR">
</center>
</form> 
<table border="1" align="center">
<tr>
<td><u><b>ID</b></u></td>
<td><u><b>USUÀRIO</b></u></td>
<td><u><b>LIVRO</b></u></td>
</tr>

<tr>

<?php
while($linha=mysql_fetch_assoc($sql)){
	?>
    <td align="center"><?php echo $linha['id_emprestimo'];?></td>
	<td align="center"><?php echo $linha['nome'];?></td>
	<td align="center"><?php echo $linha['titulo'];?></td>
	<th><a href="gerenciar_emprestimos.php?apagar='<?php echo $linha['id_emprestimo']; ?>'"><img src='./img/excluir.png'</a></th>
    <th><a href="atualizacao_emprestimo.php?atualizar='<?php echo $linha['id_emprestimo']; ?>'"><img src='./img/editar.png'</a></th>
	<tr>
	<?php
}
?>	
</table>
</body>
</html>