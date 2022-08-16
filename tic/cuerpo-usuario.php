<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" >
<link rel="stylesheet" type="text/css" href="css/jquery.dataTables.css">
<link rel="stylesheet" type="text/css" href="css/jquery.dataTables.css">


                               <title>SIDI</title>
                                   </head> 
         <center>
          <div class="card border-secondary mb-3" style="max-width: 80rem;">
          <div class="card-header card text-white bg-secondary mb-3">
          
          
          
          <center><button type="button" class="btn-close btn btn-info" data-dismiss="modal" style="max-width: 10rem;" >
                      <span aria-hidden="true" class="text-light">Usuario</span>
                      </button>

          
          
          
          
          
          
          
          </div>
          <div class="card-body text-secondary"> 
          <button type="button" title="Crear" class="btn btn-info" data-toggle="modal" data-target="#ex" data-whatever="">&#x2795;</button>
          <table id="p" class="table active border-secondary responsive"style="max-width: 80rem";>
          <thead>
         <tr class="bg-secondary text-white">
                  <h4>
                       <td>Id</td><center>
                        <td>Usuario</td>
                        <td>Contraseña</td>
                        <td>Perfil</td>
                        <td>Correo</td>
                        <td>Nombre</td>
                        <td>Apellido</td>
                        <td>Telefono</td>
                        <td>Cedula</td>
                        <td>Accion</td >
                 </h4>
      </tr>
  </thead>
<?php
$query = 'SELECT * FROM usuarios ';
$result = pg_query($query) or die('Query failed: ' . pg_last_error());
while ($mostrar=pg_fetch_array($result)) {
                $id=$mostrar['id'];
                $usu=$mostrar['usuario'];
                $pass=$mostrar['pass'];
                $per=$mostrar['perfil'];
                $cor=$mostrar['correo'];
                $nom=$mostrar['nombre'];
                $ape=$mostrar['apellido'];
                $tel=$mostrar['telefono'];
                $ced=$mostrar['cedula'];               
?>  

  <tr>
              <center><td><?php echo $mostrar['id'] ?></td><center>
              <center><td><?php echo $mostrar['usuario'] ?></td><center>
              <center><td><?php echo $mostrar['pass'] ?></td><center>
              <center><td><?php echo $mostrar['perfil'] ?></td><center>
              <center><td><?php echo $mostrar['correo'] ?></td><center>
              <center><td><?php echo $mostrar['nombre'] ?></td><center>
              <center><td><?php echo $mostrar['apellido'] ?></td><center>
              <center><td><?php echo $mostrar['telefono'] ?></td><center>
              <center><td><?php echo $mostrar['cedula']?></td><center><td>
<!--___________________________BOTON ELIMINAR_________________________________________________________________________-->
        

<a href="principal-eliminar.php?id=<?php echo $id;?>"> 
       
        <button type= 'button' class= 'btn btn-danger'  title="editar">&#x274e;</button>


<!--__________________________________________________________________________________________________________________-->
                     <a href="#"  data-target="#myModal" class="edit" data-toggle="modal"
                     data-id="<?php echo $id;?> "
                     data-usu="<?php echo $usu;?>"
                     data-pass="<?php echo $pass;?>" 
                     data-per="<?php echo $per;?>"
                     data-cor="<?php echo $cor;?>"
                     data-nom="<?php echo $nom;?>"
                     data-ape="<?php echo $ape;?>"
                     data-tel="<?php echo $tel;?>"
                     data-ced="<?php echo $ced;?>" >

<!--_____________________________________BOTON EDITAR_________________________________________________________________-->
                    

                    
                    
                     

                       <a href="principal-editar.php?id=<?php echo $id;?>"> 
       
        <button type= 'button' class= 'btn btn-info'  title="editar"> &#x1f4dd; </button>


                       
<!--__________________________________________________________________________________________________________________-->
                      <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                      <div class="modal-content">
                      <div class="modal-header btn btn-secondary">
                      <h5 class="modal-title" id="exampleModalLabel"><button type="button" class="btn-close btn btn-info" data-dismiss="modal" >
                      <span aria-hidden="true">Editar Usuario</span>
                      </button>
                      </h5>  
                              </div>
                              <div class="modal-body">
                                <div class="card border mb-3" style="max-width: 50rem;">
                                 <div class="card-body text-secondary">
           <center>
            <form method="post"  action="sql/modificar-usuario.php">
Id<input class="input form-control" type="text" name="edit_id" readonly id="edit_id" placeholder="id"  value="<?php echo $row['id'] ?>" required >
Usuario<input class="input form-control" type="text" name="edit_usu" id="edit_usu" placeholder="usuario" value="" required >
Contraseña<input class="input form-control" type="text" name="edit_pass" id="edit_pass" placeholder="pass" value="" required >
Perfil<input class="input form-control" type="text" name="edit_per" id="edit_per" placeholder="perfil" value="" required >
Correo<input class="input form-control" type="text" name="edit_cor"  id="edit_cor" placeholder="correo" value="" required >
Nombre<br><input class="input form-control" type="text" name="edit_nom" id="edit_nom" placeholder="nombre" value="" required >
Apellido<input class="input form-control" type="text" name="edit_ape" id="edit_ape" placeholder="apellido" value="" required >
Telefono<input class="input form-control" type="text" name="edit_tel" id="edit_tel" placeholder="telefono" value="" required >
Cedula<input class="input form-control" type="text" name="edit_ced" id="edit_ced" placeholder="cedula" value="" required >
   </div>   
    </div>
  </div>
   <div class="modal-footer btn btn-secondary">
                 <input class="btn-submit btn btn-primary"  type="submit" size="35" value="Modificar"> 
                 <input class="btn-reset btn btn-success"  type="reset" size="35" value="Limpiar">
                 <button type="button" class="btn-close btn btn-danger" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">Cerrar</span>
                                   </button>
</div>
</div> 
</div>
</div>
</div>
</div>

</form>

         </td><center >
    </tr>

<?php 
    } 
 ?>
 
    <div class="modal fade " id="ex" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog  mb-3" role="document">
    <div class="modal-content">
<!--___________________________________________________CABEZERA DEL MODAL________________________________________________________________________________________-->


<div class="modal-header btn btn-secondary mb-3">
<button type="button" class="btn-close btn btn-info" data-dismiss="modal" >
<span aria-hidden="true">Crear Usuario</span>
              </div>
                              <div class="modal-body">
                                <div class="card border mb-3" style="max-width: 50rem;">
                                 <div class="card-body text-secondary">
           <center>
            <form method="post"  action="sql/crear-usuario.php">


              Id<input class="input form-control" type="text" name="id" readonly id="id" placeholder=""  value="" required >
              Usuario<input class="input form-control" type="text" name="usu" id="usu" placeholder="" value="" required >
               Contraseña<input class="input form-control" type="password" name="pass" id="pass" placeholder="" value="" required >
                                  <?php     
                                     
                                              $query = 'SELECT * FROM perfil;';
                                              $resulatdo = pg_query($query) or die ("error ");
                                              $numReg = pg_num_rows($resulatdo);

                                    ?>

        <div class="form-group">

            
                        <label for="recipient-name" class="col-form-label">Perfil:</label>
                          <select class="input form-control" placeholder name="per" required>
                                <option selected>Elige una opción</option>
                                              <?php
                                              while ($fila=pg_fetch_array($resulatdo)){
                                                    echo "<option values".$fila['id'].">".$fila['nombre']."</option>";
                                              }
                                              ?>
                          </select>
          </div>
                              Correo<input class="input form-control" type="email" name="cor"  id="cor" placeholder="" value="" required >
                              Nombre<br><input class="input form-control" type="text" name="nom" id="nom" placeholder="" value="" required >
                              Apellido<input class="input form-control" type="text" name="ape" id="ape" placeholder="" value="" required >
                              
                              Telefono<br><input class="input form-control" type="tel" name="tel" list="tel">





<datalist id="tel">

<option value="(0414) ">

<option value="(0424) ">

<option value="(0416) ">

<option value="(0426) ">

<option value="(0412) ">

</datalist>

<br>


                              
                              
                              Cedula<input class="input form-control" type="text" name="ced" id="ced" placeholder="" value="" required ><br>
</div> 
</div>
</div>
<div class="modal-footer btn btn-secondary">
<input class="btn-submit btn btn-primary"  type="submit" size="35" value="Crear">
<input class="btn-reset btn btn-success"  type="reset" size="35" value="Limpiar">
<button type="button" class="btn-close btn btn-danger" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">Cerrar</span>
</button>
</div>
</div>         
</div>
</div>
</form>
                                                                                            
</table>


</div>
</div>
<script type="text/javascript" charset="utf8" src="js/jquery.dataTables.js"></script>
<script type="text/javascript"src="js/bootstrap.js"></script>
</body>
<center>
<script type="text/javascript">
$(document).ready( function () {
    $('#p').DataTable();


} );
</script>
