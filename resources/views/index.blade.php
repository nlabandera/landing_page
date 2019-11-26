<!DOCTYPE html>
<html>
<head>
	<title>TownOut</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<script type="text/javascript" src="{{asset('/bootstrap/js/jquery-3.3.1.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('/bootstrap/js/bootstrap.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('/bootstrap/js/popper.js}')}}"></script>
	
	<link rel="stylesheet" type="text/css" href="{{asset('/bootstrap/css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('/css/styles.css')}}">
	<script type="text/javascript" src="{{asset('/js/efectos.js')}}"></script>
</head>
<body>
	<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
		<!--Logo-->
		<a class="navbar-brand" href="#">
			<img src="img/brujula1.png">
			<span>TownOut</span>
		</a>

		<!-- Navegador -->
		<ul class="navbar-nav">
			<li class="nav-item">
				<a class="nav-link" href="#">TownOut</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#recorridos">EscapeRooms</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#contacto">Contacta con nosotros</a>
			</li>
		</ul>
	</nav>

	<!--COntenido de la web-->
	<div id="contenido" class="">
		<!--Inicio y presentacion de la web-->
		<header>
			<div id="inicio">
				<div>
					<img src="img/townOut.png">
				</div>	
				<h4>Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</h4>
			</div>
			<div class="img">
				<img id="mobile" src="img/Mobile-PNG3.png">				
			</div>		
		</header>
		
		<!--EscapeRooms -->
		<div id="recorridos" class="bg-dark">
			<a href="">
				<div class="card">
					<img src="img/parte-vieja.jpg">
					<div class="info">
						<h4>Descubre la parte vieja</h4>
						<p>Excepteur sint occaecat upidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>			
					</div>
				</div>
			</a>
			<a href="">
				<div class="card">
					<img src="img/gros.jpg">
					<div class="info">
						<h4>El barrio del surf</h4>
						<p>Excepteur sint occaecat upidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>			
					</div>
				</div>
			</a>
			<a href="">
				<div class="card">
					<img src="img/urgull.jpg">
					<div class="info">
						<h4>Donosti Napoleonica</h4>
						<p>Excepteur sint occaecat upidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>			
					</div>
				</div>
			</a>

			<!--Formulario de contacto-->	
		</div>
		<div id="contacto" class="bg-dark text-white">
			<h3>Envianos tu consulta y estaremos encantados de responderte</h3>
			<form method="POST" action="{{route('/')}}">
				@csrf
				<input id="name" class="datos" type="text" name="name" placeholder="Nombre y apellido" value="{{old('nombre')}}">
				<input id="email" class="datos" type="text" name="email" value="E-mail" pattern="^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$" value="{{old('email')}}">
				<br>
				<textarea id="message" class="mensaje" placeholder="Hola, me gustaria saber..." name="message"></textarea>
				<br>
				<div id="ofertas">
					<input type="checkbox" name="">
					<label >Deseo recibir ofertas a mi correo electrónico</label>
				</div>
				<br>
				<input class="btn btn-warning" type="submit" name="" value="Enviar">
				
			</form>
			
		</div>		
	</div>
	<footer class="bg-dark">
		<span id="propiedad">Nerea Labandera &copy</span>
		<div id="rrss">
			<span>Encuentranos también en </span>
			<a href="#"><img src="img/icons/icons8-facebook.svg"></a>
			<a href="#"><img src="img/icons/icons8-instagram.svg"></a>
		</div>
		
	</footer>




</body>
</html>