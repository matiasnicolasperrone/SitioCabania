<?php
session_start(); // Inicio de sesion
// comprobar si un campo de formulario esta vacio: if(empty($_POST['NAMEFORM']) 
?> 
<html lang="en">
<head>
  <title>CabanaElIndiecito</title>
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/>
  <link rel="stylesheet" type="text/css" href="css/estilo2.css">
</head>
<body>
  <div id="contenedor">
    <header>
      <div id="bloquelogo">
      <img src="img/loguete2.png" id="logo">
      </div>
      <div id="cabeza">
        <img src="img/texto.png" id="marca">
      </div>
      <div id="div3">
        <h5>Gualeguaychu, Entre Ri­os</h5>
      </div>
    </header>
    <nav>
      <div id="menu">
        <ul>
          <li id="li1"><a href="/index.html">Home</a></li>
          <li id="li2"><a href="/fotos2.html">Fotos</a></li>
          <li id="li3"><a href="/servicios.html">Servicios</a></li>
          <li id="li4"><a href="/contacto1.php">Contacto</a></li>
        </ul>
      </div>
    </nav>
    <section>
      <div>
		<?php 
			$nombre=$_POST['nombre'];
			$apellido=$_POST['apellido'];
			$telefono=$_POST['telefono'];
			$email=$_POST['mail'];
			$mensaje=$_POST['mensaje'];

if($_SESSION['numeroaleatorio']==$_REQUEST['numero']){//creo la conexion y registro los datos//
    $conexion=mysqli_connect("mysql.hostinger.com.ar", "u912516447_17x45", "17101945", "u912516447_contc") or die ("Problemas en la conexion");
    $registro=mysqli_query(
    	$conexion, "INSERT INTO contacto (nombre, apellido, telefono, email, mensaje) values ('$nombre', '$apellido', '$telefono', '$email', '$mensaje')"
    	) or die ('Hubo un error al intentar enviar la informacion.');
    
//variables de mail//
$destino = "mnperrone@gmail.com";
$asunto = "CabanaElIndiecito";
$cuerpo = "Nombre: ".$nombre. ". Apellido: ".$apellido.". Email: ".$email.". Telefono: ".$telefono.". Consulta: ".$mensaje;
$headers = "MIME-Version: 1.0"."\r\n";

//Funcion envio del mail//
@$envio = mail($destino,$asunto,$cuerpo,$headers);

//Mensajes de error o confirmacion//
if($envio == true){
				echo "<h3>Gracias <u>".$nombre."</u> por escribirnos.</h3>";
				echo "<p>Nos comunicaremos a la brevedad</p>";
			}else{
				echo "<h3>Hubo un error en el envio, por favor comuni­quese a nuestro email: <a href='mailto:".$destino."'>".$destino."</a></h3>";
			} 
}else{
        echo "No has puesto bien los numeros"."<br><a href='http://www.xn--cabaaelindiecito-9tb.com.ar/contacto1.php'>Volver</a>";
}
//$conexion->close();//
?>
	</div>
    </section>
    <footer>
          <div id="facebook">
          <p>__Sitio creado por__</p>
            <a href="https://www.facebook.com/mpdesarrolloswebs/">MP Desarrollos Webs</a></div>
</footer>
  </div>
</body>
</html>