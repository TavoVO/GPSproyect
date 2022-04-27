<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="Estilo.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<ul class="topnav">
  <li><a class="active" href="Pprincipal.php">INICIO</a></li>
  <li><a href="BolsaTrabajo.php">Bolsa de Trabajo</a></li>
  <li><a href="SeguimientoEgresados.php">Perfil egresado</a></li>
</ul>

  

<div class="sec">
  <div class="gallery">
    <a target="_blank" href="BolsaTrabajo.html">
      <img src="BolsaTrabajo4.jpg" alt="">
    </a>
    <div class="desc">Bolsa de Trabajo</div>
  </div>
  
  <div class="gallery">
    <a target="_blank" href="SeguimientoEgresados.html">
      <img src="SeguEgresados2.png" alt="">
    </a>
    <div class="desc">Seguimiento de Egresados</div>
  </div>
</div>

<div class="sec1">
  <form action="Pbienvenida.php" method="post" class="lg">
      <table style="width: 100%;">
        <td> 
        <label>Usuario:</label><br>
        <input type="text" width="300px" name="user">
        <br><label>Contraseña:</label><br>
        <input type="text" width="300px" name="pass"><br>
        <input type="submit" value="Entrar" ><br>
        <br><input type="button" width="300px" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal" value="Registrar"><br>
        </td>
      </table>       
  </form> 
</div>
<!-- The Modal -->
<div class="modal fade" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Registro de Datos</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <form method="post">
              <label for="nombre" class="left">Nombre:</label><br>
              <input type="text" name="nombre" ><br><br>
           
              <label for="ApellidoPa" class="left">Apellido Paterno:</label><br>
              <input type="text" name="ApellidoPa" ><br><br>
            
              <label for="ApellidoPa" class="left">Apellido Materno:</label><br>
              <input type="text" name="ApellidoMa" ><br><br>
          
              <label for="correo" class="left">Correo:</label><br>
              <input type="email" name="correo"><br><br>
            
              <label for="pwd" class="left">Contraseña:</label><br>
              <input type="password" name="pwd"><br><br>
         
              <label for="cpwd" class="left">Confirmar Contraseña:</label><br>
              <input type="password" name="cpwd"><br><br>
          
              <label for="usuario" class="left">Usuario:</label><br>
              <input type="text" name="usuario" ><br><br>

              <p class="p1">Genero:<br></p>
              <input type="radio" name="genero" value="Masculino">
              <label for="masculino">Masculino</label>
        
              <input type="radio" name="genero" value="Femenino">
              <label for="femenino">Femenino</label>
        
              <input type="radio" name="genero" value="otro">
              <label for="otro">Otro</label><br><br>

              <label for="birthday" class="left">Fecha de Nacimiento:</label><br>
              <input type="date" name="birthday"><br><br>

              <br><input type="checkbox" id="terminos" name="terminos" value="condiciones">
              <label for="terminos"> Acepto terminos y condiciones</label><br><br>

              <input type="submit" value="Registrar" name="registrar" class="left"><br><br>
          
        </form> 
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>

</body>
</html>