<!DOCTYPE html>
<link rel="shortcut icon" href="img/icon-vtv.ico">
<html>
<head>
<meta charset="utf-8">
<title>SIDI</title>
<link rel="stylesheet" href="css/login.css">
  
       
<?php
unset($usu);
$usu1=$_GET["usu"];


      if($usu1<8){

      
    } else{

require ("mensajes/error-usuario.php");



    }


    
   
?>
</head>
<body>

<div class="login">

   
   <a href="#" class="btn btn-primary btn-lg"></a > 
</div>


<div class="login">
<img src="img/avatar-login.jpg" class="avatar" alt="Avatar Image">
<CENTER><h2>Tic</h2></CENTER>
<form name="formulario" id="formlg" method="post" action="sql/validacion.php">

Usuario: 
<input type="text" name="usuario" class="form-control name"   placeholder="&#128273" required>
Contraseña: 
<input type="Password" name="pass" class="form-control lastName"   placeholder="&#128274" required><br><br>

<input type="submit"  class="btn-warning btnAction"  name="loguearse" value="Entrar">
<input type="submit"  class="btn-warning btnAction" onClick="window.location='http://192.168.6.35/Sidi/'" value="Salir" >

<div>
  

  
 
 

</div>








<br><br>
</form>
<span class="codigo"> <MARQUEE>Sistema de Inventario de Soporte y Tecnologia </MARQUEE> </span>



</div>

