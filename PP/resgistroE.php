<?php
include("layout/menu.php");
include("layout/header.php");
include("database/conexion.php");
?>
<script src="resource/js/alertarta.js"></script>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Estados</h1>

        <a href="views/estados/add.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
        class="bi bi-plus-lg"></i>  Añadir  </a>
    </div>
    <style>

    /* Estilos para los botones */
    .btn {
      display: inline-block;
      padding: 6px 12px;
      text-align: center;
      text-decoration: none;
      background-color: #4CAF50;
      color: white;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    .btn-editar {
      background-color: #008CBA;
    }

    .btn-vista {
      background-color: #555555;
    }

    .btn-eliminar {
      background-color: #f44336;
    }
  </style>
    
  <table id="myTable" class="display">
    <thead>
      <tr>
        <th>Id</th> 
        <th>Estados</th>
        <th>Acciones</th>
        
      </tr>
    </thead>
    <tbody>
      
      <?php
      $sql= "SELECT * from estado";
      $mostar=mysqli_query($cone,$sql);

      while($most=mysqli_fetch_array($mostar)){

      ?>      
    
      <tr>
        <td><?=$most['Id']?></td>
        <td><?=$most['Nombre']?></td>
        
        <td>
          <center>
          <a href="views/sstados/edit.php?id=<?=$most['Id']?>"><button class="btn btn-editar"><i class="bi bi-pencil-fill"></i></button></a>
          <a href="views/estados/show.php?id=<?=$most['Id']?>"><button class="btn btn-vista"><i class="bi bi-binoculars-fill"></i></button></a>
          <a href="views/estados/delete.php?id=<?=$most['Id']?>" onclick="return confirmar()"><button class="btn btn-eliminar"><i class="bi bi-trash3-fill"></i></button></a>
          </center>
        </td>
      </tr>
      <?php } ?>
      <!-- Puedes agregar más filas aquí -->
    </tbody>
  </table>
</div>
<!-- /.container-fluid -->


</div>
<!-- End of Main Content -->
<?php
include("layout/footer.php");
?>
