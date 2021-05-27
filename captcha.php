<?php
$ancho=100; //definimos ancho de la imagen
$alto=30;
$imagen=imageCreate($ancho,$alto); //creamos la imagen con las dimensiones ancho y alto
$amarillo = ImageColorAllocate($imagen,255,255,0); //definimos el color amarillo
ImageFill($imagen,0,0,$amarillo); //lleva a cabo el relleno comenzando en 0,0 de imagen
$rojo=ImageColorAllocate($imagen,255,0,0); //definimos el rojo
$valoraleatorio=rand(10000,999999); //generamos un valor aleatorio con funcion rand
session_start(); //iniciamos la sesion
$_SESSION['numeroaleatorio']=$valoraleatorio; //definimos que la "cookie" sea igual al valoraleatorio generado en rand
ImageString($imagen,16,25,5,$valoraleatorio,$rojo); //coordenadas en las que se pondra  el valoraleatorio y el color del msmo
for($c=0;$c<=5;$c++){ //creamos lineas
$x1=rand(0,$ancho);
$y1=rand(0,$alto);
$x2=rand(0,$ancho);
$y2=rand(0,$alto);
ImageLine($imagen,$x1,$y1,$x2,$y2,$rojo);

}
Header("Content-type: image/jpeg");
ImageJPEG($imagen);
ImageDestroy($imagen); //vaciamos memoria
?>