<!DOCTYPE html>
<html>
<head>
	<title>CURSO PWA</title>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


	<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">

<link rel="Manifest" type="manifest" href="./manifest.json">
<meta name="theme-color" content="#000">

<link rel="icon" type="image/png" href="./img/icopwa.png">

<link rel="stylesheet" type="text/css" href="css/estilos.css">


</head>
<body>

<section>
<div class="container-fluid">
	<div class="row">
		<div class="col-12 jumbotron">
			<h1 class="text-center mt-2 textheader">Curso PWA EDteam</h1>
		</div>
	</div>
</div>
</section>

<section>

<div class="container-fluid">
	<div class="row">
		<div class="col-12">
	<h3>Apuntes y temas principales</h3>
	<div class="accordion" id="accordionExample">

  <div class="card">
    <div class="card-header" id="head0">
      <h2 class="mb-0">
        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse0" aria-expanded="true" aria-controls="collapse0">
          Caracteristicas de las PWA y links de recursos
        </button>
      </h2>
    </div>

    <div id="collapse0" class="collapse" aria-labelledby="head0" data-parent="#accordionExample">
      <div class="card-body">

      	<p class="alert alert-warning"><i class="material-icons">add_alert</i> Tecnica css: para evitar el desplazamiento en horizontal de la web aplicar overflow hidden en el eje x</p>
      	<p class="alert alert-warning"><i class="material-icons">add_alert</i> Investigar sobre las media query de css</p>
      	<ul>
      		<li><a href="https://github.com/jonmircha/edhtml5-pwa2017" target="_blank">Respositorio Curso EDteam</a></li>
      		<li><a href="https://material.io/tools/icons/?icon=add_alert&style=baseline" target="_blank">Iconos material google</a></li>
      		<li><a href="https://escss.blogspot.com/2014/10/responsive-images-picture-srcset.html" target="_blank">Guia para tratar la insercion de imagenes </a></li>
      	</ul>

      </div>
    </div>
  </div>

  <div class="card">
    <div class="card-header" id="head1">
      <h2 class="mb-0">
        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
          Archivo Manifest
        </button>
      </h2>
    </div>

    <div id="collapse1" class="collapse" aria-labelledby="head1" data-parent="#accordionExample">
      <div class="card-body">
        <p>Permite controlar como se va mostrar la PWA el navegador del usuario(nombre de app, icono, url de inicio, orientacion, color de fondo)</p>
        <p>Orientacion de la PWA: portrait(vertical) o landscape(horizontal)</p>
        <p>Display: standalone(que se comporte como app nativa) o browser</p>
        <p>start_url: ./?utm=homescreen (pasar esa variable utm para ayudar que la app sola sugiera al usuario instalarla)</p>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="head2">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
          Service Worker
        </button>
      </h2>
    </div>
    <div id="collapse2" class="collapse" aria-labelledby="head2" data-parent="#accordionExample">
      <div class="card-body">
        <p class="alert alert-warning">Son secuensis de comando que el navegador ve ejecutar en segundo plano. Esto va permitir acceder a funciones sin la intervencion del usuario como las notificaciones push y soporte offline</p>
        <p class="alert alert-warning">Requiere https y localhost</p>
        <p class="alert alert-warning">Nos permite mantener una web trabajando en segundo plano</p>

      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="head3">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
    		API Fetch
        </button>
      </h2>
    </div>
    <div id="collapse3" class="collapse" aria-labelledby="head3" data-parent="#accordionExample">
      <div class="card-body">
        <p class="alert alert-warning">Nos permite hacer peticiones asincronas al servidor(Evolucion de ajax)</p>
        <p class="alert-warning alert">Necesita como parametro un origen: una url u archivo</p>
      </div>
    </div>
  </div>


  <div class="card">
    <div class="card-header" id="head4">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
        Promesas en JS
        </button>
      </h2>
    </div>
    <div id="collapse4" class="collapse" aria-labelledby="head4" data-parent="#accordionExample">
      <div class="card-body">
        
        <p class="alert alert-warning">La salida de una promesa se convierte en la entrada de la siguiente dentro de los <span>then</span> y con el <span>catch</span> capturamos el posible error</p>

        <p class="alert-warning alert">Si el then es de una sola linea de codigo no es necesario escrivir el ruturn para que pase el dato al siguiente then. En caso contrario deberia escribir <span>return</span> para trabajar con la respuesta en el siguiente then</p>

        <p class="alert-warning alert"></p>

        </div>
    </div>
  </div>


  <div class="card">
    <div class="card-header" id="head5">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
        Media Queries CSS
        </button>
      </h2>
    </div>
    <div id="collapse5" class="collapse" aria-labelledby="head5" data-parent="#accordionExample">
      <div class="card-body">
        <p class="alert alert-warning">Permite crear condicionales segun el tipo de medio utilizado por el usuario y ejecutar reglas css segun si es verdadero o falso. </p>
        <p class="alert alert-warning">Ejemplo de condicional: @media all and (min-width: 400px) and (max-width: 800px) {  </p>
      </div>
    </div>
  </div>


</div>


</div></div></div>
</section>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script type="text/javascript" src="http://localhost/cursopwa/script.js"></script>


<script type="text/javascript">
  //console.log(9)
  console.log(window.caches)
</script>


</body>
</html>