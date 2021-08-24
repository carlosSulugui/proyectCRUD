<?php
  include("./clases/DataBase.php");
  $user = new Database();

  if (isset($_POST) && !empty($_POST)) {
    $nombre = $user -> sanitiza($_POST['nombre']);
    $status = $user -> sanitiza($_POST['estado']);
    //instanciar de la clase base de datos abstraendo el metodo create resive como argumentos los capos de formulario
    $res = $user ->insert($nombre , $status);

    if ($res) {
      $message = "Datos insertados con exito";
    }else{
      $message = "error al insertar los datos";
      $class = "alert aler-danger";
    }
    ?>
      <div class="<?php $class ?>">
        <?php echo $message ?>
      </div>
    <?php
  }

?>