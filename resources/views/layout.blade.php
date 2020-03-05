<!DOCTYPE html>
<html lang="en">
<head>
	<title>@yield('title')</title>
	<!-- Bootstrap CDN -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<meta charset="utf-8">
	<style>
		.img-fluid{
			width: 100%;
			height: 140px;
		}
		.img-me{
			width: 20%;
			height: 30%;
			display: block;
			margin-top: 20px;
			margin-left: auto;
			margin-right: auto;

		}
		.socials { background: url() repeat-x 0 0;  height: 49px;  }
		.socials-inner { background: url() repeat-x 0 0; padding-left: 158px;}
		.socials h3 { float: left; font-size: 18px; line-height: 49px; padding-right: 19px; padding-bottom: 0; font-family: 'Ubuntu', sans-serif; font-weight: 500;  }
		.socials ul { list-style: none; list-style-position: outside; line-height: 49px;  }
		.socials ul li { font-size: 11px; padding-right: 18px;  color: #7c7c7c; background: transparent; text-transform: uppercase; float: left; }
		.socials ul li a { color: #7c7c7c; text-decoration: none; display: block; padding-left: 28px; position: relative;  }
		.socials ul li a span { background: url() no-repeat 0 0; position: absolute; width: 20px; height: 20px; top: 13px; left: 0; }
		.socials ul li a:hover { color: #333; }

		.socials-inner{
			bottom: 0;
			position: fixed;
			width: 100%;
			height: 50px;
		}
		h1{
			font-size: 60px;
			font-weight: bold;
			text-align: center;
			margin-top: 40px;
		}
		h2{
			font-size: 35px;
			font-weight: bold;
			margin-top: 40px;
		}
		h3{
			font-size: 35px;
			font-weight: bold;
			margin-top: 40px;
			text-align: center;
		}
		p{
			font-size: 15px;
			font-weight: bold;
			margin-top: 10px;
			text-align: center;
		}
		.formulario{
			margin-top: 40px;
			margin-left: auto;
			margin-right: auto;
			width: 90%;
		}
		.btn-btn{
			color:  #74F5FF;
		}
	</style>
</head>
<body>
	<img class="img-fluid" src="{{ asset ('/bootstrap/images/bannr.png')}}" />
	<nav class="navbar navbar-dark bg-dark">
	  <a href="{{ route('inicio') }}" class="btn-btn">Inicio</a>
	  <a href="{{ route('quiensy') }}" class="btn-btn">¿Quién soy?</a>
		<a href="{{ route('arbol') }}" class="btn-btn">Mi árbol familiar</a>
		<a href="{{ route('hobbies') }}" class="btn-btn">Mis hobbies</a>
		<a href="{{ route('experiencia') }}" class="btn-btn">Experiencia Profesional</a>
		<a href="{{ route('contactame') }}" class="btn-btn">Contáctame</a>
	</nav>

    @yield('bnd')

</body>

<footer>
	<div class="socials">
		<div class="socials-inner">			
			<ul>
				<li><a href="#" class="facebook-ico"><span></span>Facebook</a></li>
				<li><a href="#" class="twitter-ico"><span></span>Twitter</a></li>
				<li><a href="#" class="rss-feed-ico"><span></span>Instagram</a></li>
				<li><a href="#" class="myspace-ico"><span></span>YouTube</a></li>
			</ul>
			<div class="cl">&nbsp;</div>
		</div>
	</div>
</footer>
</html>