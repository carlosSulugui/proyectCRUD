
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel = "preconnect" href = "https://fonts.googleapis.com">
  <link rel = "preconnect" href = "https://fonts.gstatic.com" crossorigin>
  <link href = "https: //fonts.googleapis.com/css2? family = IBM + Plex + Sans + Thai: wght @ 200; 700 & family = PT + Sans + Caption: wght @ 400; 700 & display = swap "rel =" stylesheet ">
  <link rel="stylesheet" href="./style/style.css">
  <title>Document</title>
</head>
<body>
  <header>
    <div class="header">
      <h1> Formulario de Registro</h1>
    </div>
  </header>  
  <!-- header --> 
  <div class="container">
    <div class="card-center">
      <div class="columns-2">
        <div class="card">
          <h1>Agregar usuarios</h1>
          <div class="register">
            <form action="" method="post">
              <input class="campos-user" type="text" name="nombre" id=""   placeholder="Nombre" >
              <input class="campos-user" type="text" name="estado" id="" placeholder="Status">
              <button class="btn btn-primary"type="submit" name="registrar">Registrar</button>
              <?php
                include("./includes/create.php")
                ?>
           </form>
          </div>
        </div>   
           <!-- Registro -->
           <div class="table-wraper">
              <div class="table-title">
                  <div class="card">
                      <div class="col-ms-8"><h2>Lista de personas</h2></div>
                        <table class="table table-border">
                          <thead>
                            <tr>
                              <th>codigo</th>
                              <th>Nombre</th>
                              <th>Status</th>
                              <th>Accion</th>
                            </tr>
                          </thead>
                        </table>
                        <tbody>
                        
                        
                      </tbody>
                  </div>
              </div>
           </div>
      </div>
    </div>
  </div>
</body>
</html>