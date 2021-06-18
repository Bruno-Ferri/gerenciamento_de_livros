<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Biblioteca</title>
</head>
<form name="cadcon" method="post">

<body>
<div class="logo">
<a href="index.php"><img src='./img/indice.png'></a>
</div>
<hr>
<center>
<br>
<h1>CADASTRO DE USUÁRIOS</h1>
<br>
</center>
<hr>
<p>

<div class="container">
NOME:<br>
<input class="textbox" type="text" name="txt_nome" size="80"><p>


DATA DE NASCIMENTO:<br>
<input type="date" name="txt_dtd_nsc" size="60"><p>

GÊNERO:<br>
<select name="cmb_genero"><p>
<option value="--">--</option>
<option value="F">Feminino</option>
<option value="M">Masculino</option>
<option value="O">Outros</option>
</select><p>

ESCOLARIDADE:<br>
<select name="cmb_escolaridade"><p>
<option value="--">--</option>
<option value="Educação Infantil">Educação infantil</option>
<option value="Ensino Fundamental">Ensino Fundamental</option>
<option value="Ensino Médio">Ensino Médio</option>
<option value="Ensino Superior">Ensino Superior</option>
<option value="Pós Graduação">Pós Graduação</option>
<option value="Mestrado">Mestrado</option>
<option value="Doutorado">Doutorado</option>
</select><p>

ENDEREÇO:<br>
<input class="textbox" type="text" name="txt_endereco" size="100"><p>

NÚMERO:<br>
<input tipe="text" name="txt_numero" size="10"><p>

COMPLEMENTO:<br>
<input class="textbox" type="text" name="txt_comp" size="30"><p>

BAIRRO:<br>
<input class="textbox" type="text" name="txt_bairro" size="30"><p>

CIDADE:<br>
<input class="textbox" type="text" name="txt_cidade" size="20" align="right"><p>

ESTADO:<br>
<select name="cmb_estado">
<option value="--">--</option>
<option value="ac">AC</option>
<option value="al">AL</option>
<option value="ap">AP</option>
<option value="am">AM</option>
<option value="ba">BA</option>
<option value="ce">CE</option>
<option value="df">DF</option>
<option value="es">ES</option>
<option value="go">GO</option>
<option value="ma">MA</option>
<option value="mt">MT</option>
<option value="ms">MS</option>
<option value="mg">MG</option>
<option value="pa">PA</option>
<option value="pb">PB</option>
<option value="pr">PR</option>
<option value="pe">PE</option>
<option value="pi">PI</option>
<option value="rj">RJ</option>
<option value="rn">RN</option>
<option value="rs">RS</option>
<option value="ro">RO</option>
<option value="rr">RR</option>
<option value="sc">SC</option>
<option value="sp">SP</option>
<option value="se">SP</option>
<option value="to">TO</option>
</select><p>

TELEFONE:<br>
<input class="textbox" tipe="text" name="txt_fone" size="20"><p>


E-MAIL:<br>
<input class="textbox" tipe="text" name="txt_email" size="60"><p>
</div>
<p>
<hr>
<center>
<input class="botao" type="submit" name="btn_gravar" value="GRAVAR" OnClick="document.cadcon.action='cadastrar_usuario.php'">
</center>
</form>
</body>
</html>