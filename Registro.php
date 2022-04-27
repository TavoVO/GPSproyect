<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="forms.css">
</head>
<body>
<h2>Registro de Usuario</h2>
<div>
 <form method="post">
  <table style="width: 100%;">
   <tr>
     <td>
      <label for="nombre" class="left">Nombre:</label><br>
      <input type="text" name="nombre" ><br><br>
     </td>
     <td>
      <label for="ApellidoPa" class="left">Apellido Paterno:</label><br>
      <input type="text" name="ApellidoPa" ><br><br>
     </td>
     <td>
      <label for="ApellidoPa" class="left">Apellido Materno:</label><br>
      <input type="text" name="ApellidoMa" ><br><br>
     </td>
   </tr>
  <tr>
    <td>
      <label for="correo" class="left">Correo:</label><br>
      <input type="email" name="correo"><br>
     </td>
     <td> 
      <br><label for="pwd" class="left">Contraseña:</label><br>
      <input type="password" name="pwd"><br><br>
    </td>
    <td>
      <br><label for="cpwd" class="left">Confirmar Contraseña:</label><br>
      <input type="password" name="cpwd"><br><br>
    </td>
  </tr> 
   <tr>
     <td>
      <label for="usuario" class="left">Usuario:</label><br>
      <input type="text" name="usuario" ><br><br>
     </td> 
     <td>
      <p class="p1">Genero:<br></p>
      <input type="radio" name="genero" value="Masculino">
      <label for="masculino">Masculino</label>

      <input type="radio" name="genero" value="Femenino">
      <label for="femenino">Femenino</label>

      <input type="radio" name="genero" value="otro">
      <label for="otro">Otro</label><br>
    </td>
    <td>
      <label for="birthday" class="left">Fecha de Nacimiento:</label><br>
      <input type="date" name="birthday"><br>
    </td>
   </tr>
   <tr>
     <td>
       <br><input type="checkbox" id="terminos" name="terminos" value="condiciones">
       <label for="terminos"> Acepto terminos y condiciones</label>
     </td>
     <td><input type="submit" value="Registrar" name="registrar" class="left"><br></td>
     <td><input type="button" class="left"  onclick="document.location='Pprincipal.html'" value="Regresar"><br></td>
   </tr>
</table>       
</form> 
</div>

<?php

$servername = "localhost";/*LPT-OVO\SERVIDOR1*/
$username = "root";/*sa*/
$password = "19120248";
$dbname = "dbusuarios";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
$usuario= $nombre= $Apaterno= $Amaterno= $correo= $contraseña= $contraseñac= $genero= $Fnacimiento="";
//onclick="document.location='Login.php'  $_SERVER["REQUEST_METHOD"] == "POST"
 if(isset($_POST['registrar'])){
     $usuario=test_input($_POST["usuario"]);
     $nombre=test_input($_POST["nombre"]);
     $Apaterno=test_input($_POST["ApellidoPa"]);
     $Amaterno=test_input($_POST["ApellidoMa"]);
     $correo=test_input($_POST["correo"]);
     $contraseña=test_input($_POST["pwd"]);
     $contraseñac=test_input($_POST["cpwd"]);
     $genero=test_input($_POST["genero"]);
     $Fnacimiento=test_input($_POST["birthday"]);
 }
 function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

  if($usuario=="" | $nombre=="" | $Apaterno=="" | $Amaterno=="" | $correo==""| $contraseña==""| $contraseñac=="" |$genero==""| $Fnacimiento==""){
    mysqli_close($conn);
    echo "No se llenaron los espacios";
  }else{
    $sql = "INSERT INTO USUARIOS (Usuario, Nombre, Apaterno, Amaterno, Correo, Password, CPassword, Gender, FechaNacimiento )
    VALUES ( '$usuario','$nombre', '$Apaterno', '$Amaterno', '$correo', '$contraseña', '$contraseñac', '$genero', '$Fnacimiento')";

     $bandera= 0;

     if (mysqli_query($conn, $sql)) {
         echo "Sus datos se registraron exitosamente";
         $bandera = 1;
        } else {
          echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
        $nombre= $Apaterno= $Amaterno= $correo= $contraseña= $contraseñac= $genero= $Fnacimiento="";
        mysqli_close($conn);
  }
/*if($bandera==1){
    echo readfile("Login.php");
    echo closefile("Registro.php");
    echo readfile("Login.php");
}*/
?>

</body>
</html>