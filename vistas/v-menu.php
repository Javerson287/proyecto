<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <title>menu</title>
    
    </head>
<body>
<div id = centrar>
    <h1>TypKey</h1>
    <hr style="height:2px;border-width:0;background-color:blue">
            
  </div>
  
	<div class="caja1">
		<ul class="nav">	
			<li><a href="controladores/c-iniciar_seccion.php"><span class="material-icons">account_circle</span>cerrar</a>

			</li>
		</ul>
</div>
	

<div class="cuerpo">
  <div class="for1">
    <a href="controladores/c-historial.php">Historial</a>
    <a href="controladores/c-prestamo.php">Prestamamo ambientes</a>
  </div>
    
  <div class="formularios">
    
      <form id="form">

        <fieldset>
          <h2 class="fs-title">Ingresar </h2>
          <a href="vistas/agregar_ambiente.php">Ambiente</a><br>
          <a href="vistas/agregar_instructor.php">Instructor</a><br>
          <a href="vistas/agregar_programa.php">Programas</a><br>
          <a href="vistas/agregar_relacion.php">Asignar</a><br>
      </fieldset></form>
    
  
      <form id="form">
        <fieldset>
          <h2 class="fs-title">Actualizar </h2>
          <a href="controladores/c-editar_ambientes.php">Ambiente</a><br>
          <a href="controladores/c-editar_instructores.php">Instructor</a><br>
          <a href="controladores/c-editar_programas.php">Programas</a><br>
          <a href="controladores/c-relacion.php">asignacion</a><br>
      </fieldset></form>

    
    
    
  </div>

</div>

    
</body>
</html>