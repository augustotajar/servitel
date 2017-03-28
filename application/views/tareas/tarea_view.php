<div class="col-sm-12">

    <h3><i class="fa fa-file-text-o"></i> <?php echo $tarea[0]->titulo ?></h3>  
    <? if($tipo!=2): ?>
        <a href="<?= base_url() ?>tarea/editarTarea/<?= $tarea[0]->id; ?>" style="margin-top:-2.5em" type="button" class="pull-right btn btn-warning btn-lg"> Editar <i class="fa fa-pencil-square-o" aria-hidden="true"></i>  </a>
    <? endif; ?>    
    <hr>
    <div class="col-sm-8">
        <dl class="dl-horizontal">
          <dt>Titulo</dt>
          <dd><?= $tarea[0]->titulo; ?></dd>
          <dt>Descripción</dt>
          <dd><?= $tarea[0]->descripcion; ?></dd>
          <dt>Cliente</dt>
          <dd><?= $tarea[0]->nombre; ?></dd>
          <dt>Prioridad</dt>
          <dd><?= $tarea[0]->prioridad==0 ? 'Baja':''; ?>
              <?= $tarea[0]->prioridad==1 ? 'Media':''; ?>
              <?= $tarea[0]->prioridad==2 ? 'Alta':''; ?></dd>
          <dt>Estatus</dt>
          <dd><?= $tarea[0]->estatus==0 ? 'Por Empezar':''; ?>
              <?= $tarea[0]->estatus==1 ? 'En Curso':''; ?>
              <?= $tarea[0]->estatus==2 ? 'Retrasada':''; ?>
              <?= $tarea[0]->estatus==3 ? 'Completada':''; ?></dd>
          <dt>Progreso</dt>
          <dd><?= $tarea[0]->progreso; ?>%
              <div class="progress">
                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="<?= $tarea[0]->progreso; ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?= $tarea[0]->progreso; ?>%">
                        <span class="sr-only"><?= $tarea[0]->progreso; ?>%</span>
                    </div>
              </div>
          </dd>
          <dt>Responsable</dt>
          <dd><?= $tarea[0]->primer_nombre; ?> <?= $tarea[0]->primer_apellido; ?></dd>
          <dt>Inicio</dt>
          <dd><?= $tarea[0]->fecha_inicio; ?></dd>
          <dt>Vencimiento</dt>
          <dd><?= $tarea[0]->fecha_fin; ?></dd>
        </dl>    
    </div>
    <div class="col-sm-4">
        <div class="dropdown pull-right">
            <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
              Más opciones
              <span class="caret"></span>
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                <? if($tipo!=2): ?>
                    <li><a data-toggle="modal" data-target=".confimaEliminarTarea">Eliminar Tarea</a></li>
                <? endif; ?>
            </ul>
          </div>
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
                <input id="id" required type="number" class="invisible" style="position:absolute" value="<?= $tarea[0]->id; ?>">
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
    

<script src="<?= base_url() ?>js/tareas.js"></script>
