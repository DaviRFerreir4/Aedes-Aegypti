<?php

$nome=$_POST["nome"];
$email=$_POST["email"];
$assunto=$_POST["assu"];
$mensagem=$_POST["msg"];
$desti="davi.rferreira@gmail.com";
$vddmsg="Nome: ";
$vddmsg.= $nome;
$vddmsg.= "\nEmail: ";
$vddmsg.= $email;
$vddmsg.= "\nAssunto: ";
$vddmsg.= $assunto;
$vddmsg.= "\nMensagem: ";
$vddmsg.= $mensagem;

mail($desti,$assunto,$vddmsg);

?>

<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<title>Fale conosco</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width">
		<link rel="shortcut icon" type="image/x-png" href="../img/mosquito.png">
		<link rel="stylesheet" type="text/css" href="../css/estilo.css">
	</head>

	<body>
		<header>
			<div id="cabecalho">
				<a href="../index.html"><img src="../img/logo.png" title="Visitar a página principal" alt="Aedes Aegypti" id="logo"></a><br>
			</div>
			<div id="cabecalho2">
				<nav>
					<a href="../zika.html" title="Zika Vírus" class="link caberoda">Zika Vírus</a><a href="../febre.html" title="Febre Amarela" class="link caberoda">Febre Amarela</a><a href="../dengue.html" title="Dengue" class="link caberoda">Dengue</a><a href="../chiku.html" title="Chikungunya" class="link caberoda">Chikungunya</a>
				</nav>
			</div>
		</header>

		<div id="msgsucesso">
			<center><br>
				<p>Sua mensagem foi enviada com sucesso!</p>
				<p>Obrigado pela sua opnião, trabalharemos mais para uma melhor experiência.</p><br><br>
				<nav>
					<a href="../comuni.html" class="linkcomuni">Enviar outra mensagem</a><a href="../index.html" class="linkcomuni">Voltar para página inicial</a>
				</nav><br><br><br>
			</center>
		</div>

		<footer>
			<div id="rodape">
				<nav>
					<a href="../comuni.html" class="roda caberoda">Fale conosco</a><a href="../proj.html" class="roda caberoda">Sobre o projeto</a>
				</nav>
			</div>
		</footer>
	</body>
</html>