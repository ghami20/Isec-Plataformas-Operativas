
<?php 
$nombre = $_POST["nombre"];
$apellido= $_POST["apellido"];
$carrera = $_POST["carrera"];
$dni = $_POST["dni"];
$edad = $_POST["edad"];
    echo "<h1> Hola $nombre  $apellido $carrera </h1>";
if($nombre=="" || $apellido=="" || $carrera==""|| $dni=="" ){
    echo " <h1> Ingrese de nuevo la info</h1> ";
    echo " <a href='/index.html'/> Volver atras <a /> ";
}else{
   if($edad>18){
        echo " <h1> Se pudo inscribir</h1> ";
   }else{
    echo " <h1>No se pudo inscribir</h1> ";

   }
}
?>