
<?php 
$nombre = $_POST["nombre"];
$apellido= $_POST["apellido"];
$carrera = $_POST["carrera"];
//CRear en el formulario las inputs de, apellido, dni, edad
//y validar que edad sea mayor a 18, y
// que los demas campos no esten vacios 
// section con las opciones de carrera
// a elegir, y en archivo php
// tomar la opcion selecionada y si es Comunicacion multimedial
// y edad sea mayor a 18
//Mostrar un mensaje de se pudo inscribir
    echo "<h1> Hola $nombre  $apellido $carrera </h1>";
if($nombre=="Gamaliel"){
    echo " <h1> Es el profesor </h1> ";
}else{
    echo " <h1> Es un alumno </h1> ";
}
?>