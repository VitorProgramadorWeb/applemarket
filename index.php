<!DOCTYPE html>
<html lang="pt-BR">

<head>
	<title>Apple Market</title>

	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="estilos/reset.css" type="text/css">
	<link rel="stylesheet" href="estilos/menu.css" type="text/css">
	<link rel="stylesheet" href="estilos/estilo.css" type="text/css">
	<link rel="icon" href="imagens/favicon.ico" type="image/x-icon">
</head>

<body>

	<?php include 'menu.php' ?>

	<?php
		
		$txt = "Vítor";
		echo "<h1>Olá mundo!</h1>";

		date_default_timezone_set("America/Sao_Paulo");
		echo "Olá $txt!" . date("h:i");

		echo "<br>";
		$email = "vitor.programadoweb@gmail.com";
		echo "O meu e-mail é:     $email";
	?>

	<br><br><br><br><br><br>

	<article>
		<h1>Este é o corpo do HTML</h1>
		<p class="primeiro-p">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Necessitatibus nemo quia obcaecati natus quis eum tenetur eaque similique labore. Esse error fugit ea eos tempora eligendi quos perferendis, est magnam?</p>
	
		<h2>Lista Ordenada</h2>
		<ol>
			<li>item 1</li>
			<li>item 2</li>
			<li>item 3</li>
		</ol>
	
		<h2>Lista Não Ordenada</h2>
		<ul>
			<li>item</li>
			<li>item</li>
			<li>item</li>
		</ul>
	</article>
	<article>
		<h1>Este é o corpo do HTML</h1>
		<p class="primeiro-p">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Necessitatibus nemo quia obcaecati natus quis eum tenetur eaque similique labore. Esse error fugit ea eos tempora eligendi quos perferendis, est magnam?</p>
	
		<h2>Lista Ordenada</h2>
		<ol>
			<li>item 1</li>
			<li>item 2</li>
			<li>item 3</li>
		</ol>
	
		<h2>Lista Não Ordenada</h2>
		<ul>
			<li>item</li>
			<li>item</li>
			<li>item</li>
		</ul>
	</article>
	<article>
		<h1>Este é o corpo do HTML</h1>
		<p class="primeiro-p">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Necessitatibus nemo quia obcaecati natus quis eum tenetur eaque similique labore. Esse error fugit ea eos tempora eligendi quos perferendis, est magnam?</p>
	
		<h2>Lista Ordenada</h2>
		<ol>
			<li>item 1</li>
			<li>item 2</li>
			<li>item 3</li>
		</ol>
	
		<h2>Lista Não Ordenada</h2>
		<ul>
			<li>item</li>
			<li>item</li>
			<li>item</li>
		</ul>
	</article>

	<aside>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit consequatur blanditiis sunt corrupti nulla dolores vel cum fugit laborum voluptatum aliquid, sequi porro, distinctio libero debitis ex sed asperiores vero. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nobis quas at odit obcaecati, doloremque distinctio quod, esse et rerum explicabo nam ut voluptatem modi, suscipit nesciunt quam? Repellendus, praesentium commodi!</p>
	</aside>

	<?php include 'rodape.php' ?>

</body>
</html>