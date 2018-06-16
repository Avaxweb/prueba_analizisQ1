<?php  
$conectar=@mysqli_connect('localhost','root','')or die("conexion fallida");
$db=@mysqli_select_db($conectar,'web1') or die("conexion exitosa");
?>