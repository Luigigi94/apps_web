<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="UTF-8">
        <title>Inicio</title>
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <script type="text/javascript" src={{asset('js/jquery.js')}}></script>
        <script type="text/javascript" src="{{asset('js/app.js')}}"></script>
    </head>
    <body>
    	<nav class="navbar navbar-default">
    	<ul class = "nav navbar-nav">
    		<li><a href="productos">Productos</a></li>
    		<li><a href="proveedores">Proveedores</a></li>
    		<li><a href="clientes">Clientes</a></li>
    		<li><a href="ventas">Ventas</a></li>
    	</ul>  
    	</nav>
    	<section class="container">
		    @yield("container")	
    	</section>

    </body>
</html>
