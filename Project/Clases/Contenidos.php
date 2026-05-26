<?php
class Secciones
{

  function getContenidos($id_seccion)
  {
    include'connect.php';
    $contenido='';
    $sql="SELECT * FROM `Contenidos` WHERE Id_seccion=".$id_seccion." ORDER BY orden";
    $result=$conn->query($sql);
    if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {
        //tipo 1 card
        if ($row['Tipo']==1) {
          $contenido .='
          <div class="col-sm-3 mt-5 text-left">
          <div class="card">
            <img class="card-img-top" src="'.$row['Img'].'" alt="Card image">
            <div class="card-body">
              <a href="" class="stretched-link font2 text-secondary">'.$row['Titulo'].'</a>
              <p class="card-text">'.$row['Texto'].'</p>
            </div>
          </div>
          </div>
          ';
        }
      }
    }
    $conn->close();
    return $contenido;
  }


  function getMenu()
  {
    include'connect.php';
    $menu='';
    $sql="SELECT * FROM `secciones`";
    $result=$conn->query($sql);
    if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {
        if ($row['Activo']) {
          $menu .='
          <li class="nav-item">
            <a class="nav-link" href="inicio.php?idSeccion='.$row['Id_secciones'].'">'.$row['Seccion'].'</a>
          </li> ';
        }
        else {
          $menu .='
          <li class="nav-item">
            <a class="nav-link" href="javascript:void(0)">'.$row['Seccion'].'</a>
          </li>';
        }
      }
    }
    else {
      $menu .='
      "444"
      ';
    }
    $conn->close();
    return $menu;
  }
}

 ?>
