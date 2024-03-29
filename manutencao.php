
<?php
$conexao = new PDO('sqlite:manutencao.sqlite');
?>
<!DOCTYPE html>

<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="Daniela">
		<title>Dany - Manutenção de Veículos</title>
		<link href="css/bootstrap.css" rel="stylesheet">
		<link href="css/carousel.css" rel="stylesheet">
	</head>
	<body>
	
		<nav class="navbar navbar-inverse navbar-fixed-top">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#">Dany - Manutenção de Veículos</a>
				</div>
				<div id="navbar" class="navbar-collapse collapse">
					<ul class="nav navbar-nav">
						<li><a href="manutencao.php">Home</a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Cadastro<span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="modelo.php">Modelo</a></li>
							</ul>
						</li>
					</ul>
				</div><!--/.nav-collapse -->
			</div>
		</nav>

		<!-- Carousel
		================================================== -->
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
			<!-- Indicators -->
			<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>
				<li data-target="#myCarousel" data-slide-to="2"></li>
			</ol>
			<div class="carousel-inner" role="listbox">
				<div class="item active">
					<img class="first-slide" src="imagens/slide1.jpg" alt="First slide">
					<div class="container">
						<div class="carousel-caption">
							<p><a class="btn btn-lg btn-primary" href="#" role="button">Ver mais</a></p>
						</div>
					</div>
				</div>
				<div class="item">
					<img class="second-slide" src="imagens/slide2.jpg" alt="Second slide">
					<div class="container">
						<div class="carousel-caption">
							<p><a class="btn btn-lg btn-primary" href="#" role="button">Ver mais</a></p>
						</div>
					</div>
				</div>
				<div class="item">
					 <img class="third-slide" src="imagens/slide3.jpg" alt="Third slide">
					<div class="container">
						<div class="carousel-caption">
							<p><a class="btn btn-lg btn-primary" href="#" role="button">Ver mais</a></p>
						</div>
					</div>
				</div>
			</div>
			<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div><!-- /.carousel -->

		<!-- Bootstrap core JavaScript
		================================================== -->
		<script src="js/jquery.min.js"></script>		
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>
