<!DOCTYPE html>
<html>
<head>
	<title>Projeto 03</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400" rel="stylesheet">
	<link href="<?php echo BASE_URL; ?>/assets/css/style.css" rel="stylesheet" type="text/css">
	<meta charset="utf-8" />
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0" />
</head>
<body>

<header>
	<div class="container">
	<div class="logo"></div><!--logo-->
	<nav class="desktop-menu">
		<ul>
			<li><a href="">home</a></li>
			<li><a href="#servicos">serviços</a></li>
			<li><a href="#sobre">sobre</a></li>
			<li><a href="#contato">contato</a></li>
		</ul>
	</nav>

	<nav class="mobile-menu">
		<ul>
			<li><a href="">home</a></li>
			<li><a href="#servicos">serviços</a></li>
			<li><a href="#sobre">sobre</a></li>
			<li><a href="#contato">contato</a></li>
		</ul>
	</nav>


	<div class="clear"></div><!--clear-->

	<div class="chamada1">
		<h2>Sistemas Próprios<br />
		Para Empresas Autênticas</h2>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi eleifend commodo ipsum, vitae malesuada nisi convallis eget.</p>
	</div><!--chamada1-->

	</div><!--container-->
</header>

<section id="servicos" class="sessao1">
	<div class="container">
		<div class="texto-sessao1">
			<h2>Desenvolvemos Sistema Únicos</h2>
			<p>Lorem Ipsum silor domor amet</p>
			<ul>
				<li>Sites</li>
				<li>Lojas Virtuais</li>
				<li>Sistemas</li>
			</ul>
			<div class="clear"></div>
			<div class="btn1-texto">Entre em contato</div>
		</div><!--texto-sessao1-->
		<div class="device-sessao1"></div><!--device-->
		<div class="clear"></div>
	</div><!--container-->
</section><!--sessao1-->

<section id="sobre" class="sessao2">
	<div class="container">
		<h2>Desenvolvido de pessoas para pessoas</h2>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin sagittis, risus ut tempus condimentum, urna est volutpat augue, a placerat ligula magna tincidunt sapien. Ut tempus pulvinar ante, at euismod orci commodo suscipit. Nunc ut viverra dui. Ut efficitur cursus diam a volutpat. Sed sagittis pharetra dolor, ac mollis sapien condimentum vitae. Ut in interdum tortor. 
		</p>
		<img src="<?php echo BASE_URL; ?>/assets/imagens/mockup.jpg" />
	</div><!--container-->
</section><!--sessao2-->

<section class="sessao3">

<div class="part1">
<div class="wraper-part1">
<h2>Nosso time</h2>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin sagittis, risus ut tempus condimentum, urna est volutpat augue, a placerat ligula magna tincidunt sapien. Ut tempus pulvinar ante, at euismod orci commodo suscipit.</p>
</div>
</div><!--part1-->

<div class="part2">
	<div class="scrollEquipe">
	<div class="scroll-wraper">
	<div class="sobre-autor">
		<div class="titulo-autor">
			<div class="wraper-titulo-autor">
				<h2>Hernany Dias</h2>
				<p>Estudante / ENG. Computação</p>
			</div><!--wraper-titulo-autor-->
			<div class="img-autor"></div>
		</div><!--titulo-autor-->
		<div class="texto-autor">
		<p>Proin sagittis, risus ut tempus condimentum, urna est volutpat augue, a placerat ligula magna tincidunt sapien.
		Ut tempus pulvinar ante, at euismod orci.</p>
		</div><!--texto-autor-->
	</div><!--sobre-autor-->
	<div class="sobre-autor">
		<div class="titulo-autor">
			<div class="wraper-titulo-autor">
				<h2>Hernany Dias</h2>
				<p>Estudante / ENG. Computação</p>
			</div><!--wraper-titulo-autor-->
			<div class="img-autor"></div>
		</div><!--titulo-autor-->
		<div class="texto-autor">
		<p>Proin sagittis, risus ut tempus condimentum, urna est volutpat augue, a placerat ligula magna tincidunt sapien.
		Ut tempus pulvinar ante, at euismod orci.</p>
		</div><!--texto-autor-->
	</div><!--sobre-autor-->

	<div class="sobre-autor">
		<div class="titulo-autor">
			<div class="wraper-titulo-autor">
				<h2>Hernany Dias</h2>
				<p>Estudante / ENG. Computação</p>
			</div><!--wraper-titulo-autor-->
			<div class="img-autor"></div>
		</div><!--titulo-autor-->
		<div class="texto-autor">
		<p>Proin sagittis, risus ut tempus condimentum, urna est volutpat augue, a placerat ligula magna tincidunt sapien.
		Ut tempus pulvinar ante, at euismod orci.</p>
		</div><!--texto-autor-->
	</div><!--sobre-autor-->
	</div><!--scroll-wraper-->
	</div><!--scrollEquipe-->
	<div class="slider-bullets">
		
	</div><!--slider-bullets-->
</div><!--part2-->
<div class="clear"></div>
</section><!--sessao3-->

<section id="contato" class="sessao4">
	<div class="container">
		<div class="form">
			<h2>Entre em contato</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam scelerisque lobortis iaculis. In hac habitasse platea dictumst. Cras vitae purus metus.</p>

			<form method="POST" action="/home">
				<input type="text" name="nome" placeholder="Nome*">
				<input type="text" name="email" placeholder="E-mail*">
				<textarea name="mensagem" placeholder="Mensagem*"></textarea>
				<div class="clear"></div>
				<div><input type="submit" value="Enviar"></div>
			</form>

		</div><!--form-->

	<div class="map-wraper">
	<h2>Faça uma visita</h2>
		<div class="map-wraper3">
		<div class="map-wraper2">
		<div class="map" id="mapa"></div>
		</div><!--map-wraper2-->
		</div><!--map-wraper-3-->
	</div><!--map-wraper-->

		<div class="clear"></div>
	</div><!--container-->
</section><!--sessao4-->

<footer>
	<div class="container">
		<p>Todos os direitos reservados</p>
		<p>contatohernany@gmail.com</p>
		<div class="clear"></div>
	</div><!--container-->
</footer>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBnv7y3NuVB3H7-6XXXbtFUYOsvWql_d-8&"></script>
<script src="<?php echo BASE_URL; ?>/assets/js/jquery.js"></script>
<script src="<?php echo BASE_URL; ?>/assets/js/functions.js"></script>
<script src="<?php echo BASE_URL; ?>/assets/js/menu_responsivo.js"></script>
<script src="<?php echo BASE_URL; ?>/assets/js/menuScroll.js"></script>
<script src="<?php echo BASE_URL; ?>/assets/js/sliderEquipe.js"></script>
</body>
</html>