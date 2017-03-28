<div class="col-sm-12">
    <hr>
    <h3><i class="fa fa-files-o" aria-hidden="true"></i> Archivos</h3>  
    <div class="col-sm-8">

        <?php echo form_open_multipart('tarea/cargarArchivo/'.$tarea);?>

            <input type="file" name="archivo" size="20" />
            <input type="submit" value="upload" />

        </form>
        <table class="archivos" style="margin-bottom: 3em">
            
            <?php foreach ($archivos as $archivo) :?>
            <tr archivo="<?= $archivo->id;  ?>" style="font-size: 0.85em">
                <td><i class="fa fa-file-excel-o" aria-hidden="true"></i> <a><?= $archivo->nombre_orig;  ?></a> &nbsp;&nbsp; </td><td><?= $archivo->fecha ; ?> &nbsp;&nbsp;</td><td><?= $archivo->primer_nombre .' '. $archivo->primer_apellido.' '; ?></td>
            </tr>
            <?php endforeach; ?>
            
        </table>
    </div>
    <div class="col-sm-4">
        <a href="<?= base_url() ?>tarea/editarTarea/<?= $tarea; ?>" style="margin-top:-2.5em" type="button" class="pull-right btn btn-lg"> Agregar <i class="fa fa-plus-circle" aria-hidden="true"></i> </a>
    </div>
   
<div class="modal fade confimaEliminarTarea" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel">Está seguro de que desea eliminar esta tarea?</h4>
        </div>
        <div class="modal-body">
            <form  id="loginForm" data-toggle="validator" role="form">
                <input id="id" required type="number" class="invisible" style="position:absolute" value="<?= $tarea; ?>">
            </form>
            <p>Esto no se puede reversar.</p>
        </div>
        <div class="modal-footer">
              <button id="eliminarTarea" type="submit" class="btn btn-danger">Si</button>
              <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
        </div>
    </div>
  </div>
</div>
    

<script src="<?= base_url() ?>js/archivos.js"></script>
