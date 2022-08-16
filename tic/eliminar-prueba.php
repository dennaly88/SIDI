
<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    
    <link rel="stylesheet" href="css/bootstrap.min.css">


    <?php
include ('conexion.php');
$id = $_GET['id'];




$query = "SELECT * FROM usuarios WHERE id ='$id'";
     $result = pg_query($query) or die('Query failed: ' .pg_last_error());
     $row = pg_fetch_array($result) ;

     

      $row['id'] ;
      $row['usuario'];
      $row['pass'];
      $row['perfil']; 
      $row['correo'];
      $row['nombre'];
      $row['apellido']; 
      $row['telefono'];
      $row['cedula'];







     
?>



    <div class="modal fade" id="danny" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                      <div class="modal-content">
                      <div class="modal-header btn btn-secondary">
                      <h5 class="modal-title" id="exampleModalLabel"><button type="button" class="btn-close btn btn-info" data-dismiss="modal" >
                      <span aria-hidden="true">Deseas Eliminar el Usurio</span>
                      </button>

                      

                      </h5>  
                              </div>
                              <div class="modal-body">
                                <div class="card border mb-3" style="max-width: 50rem;">
                                 <div class="card-body text-secondary">
                                 

                                  
           <center>
            <form method="post"  action="sql/eliminar-usuario.php?id=<?php echo $id;?>">
            <input class="input form-control" type="text" name="edit_id" readonly id="edit_id" placeholder="id"  value="<?php echo $row['usuario'];?>" required >
   </div>   
    </div>
  </div>
   <div class="modal-footer btn btn-secondary">
                 <input class="btn-submit btn btn-danger"  type="submit" size="35" value="SI "> 
                 <button type="button" class="btn-close btn btn-info" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">NO</span>
                                   </button>
</div>
</div> 
</div>
</div>
</div>
</div>


    
    
  <script src="js/editar-usuario.js"></script>
  </body>
</html>