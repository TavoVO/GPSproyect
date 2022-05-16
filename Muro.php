<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="Estilos/nov.css">
</head>
<body>

<div class="container mt-3">
    
  <div class="responsive">
    <div class="gallery">
      <a target="_blank" href="img_5terre.jpg">
        <img src="img/GOBMxlogo.png" alt="Cinque Terre" width="600" height="400">
      </a>
    </div>
  </div>
  
  
  <div class="responsive">
    <div class="gallery">
      <a target="_blank" href="img_forest.jpg">
        <img src="img/SEPlogo.png" alt="Forest" width="600" height="400">
      </a>
    </div>
  </div>
  
  <div class="responsive">
    <div class="gallery">
      <a target="_blank" href="img_lights.jpg">
        <img src="img/TECNMlogo.jpg" alt="Northern Lights" width="600" height="400">
      </a>
    </div>
  </div>
  

  <div class="clearfix"></div>

  </div>

  

  <ul class="topnav">
    <li><a  href="Pprincipal.php">INICIO</a></li>
    <li><a href="BolsaTrabajo.php">Bolsa de Trabajo</a></li>
    <li><a href="SeguimientoEgresados.php">Perfil egresado</a></li>
    <li><a class="active" href="Muro.php">Muro</a></li>
  </ul>

<div class="divconteiner">
<div class="container mt-3">
  <a href="#demo" class="btn btn-primary" data-bs-toggle="collapse">Publicar</a>
  <div id="demo" class="collapse">
    <div class="publi">
     <form method="post">
        <label for="nombre" class="left">Titulo:</label><br>
        <input type="text" name="nombre" ><br><br>
        Descripción<br> 
        <textarea name="comment" rows="5" cols="40"></textarea><br><br>
        <label for="myfile">Subir una foto:</label><br>
        <input type="file" id="myfile" name="myfile"><br><br>
        <input type="submit" name="submit" value="Publicar">
     </form> 
    </div>
  </div>
</div>
</div>

<div class="row">
  <div class="leftcolumn">

    <div class="card">
      <h6>Practicas para Harman</h6>
      <div class="newspaper">
        <div class="fakeimg">
          <img src="img/PracticasHarman.jpg" width="100%" height="auto";>
        </div>
        <p></p>       
      </div>      
    </div>


    </div>  
  </div>

  </div>
</div>
</body>
</html>