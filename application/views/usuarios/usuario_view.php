<div class="col-sm-12">

    <h3><i class="fa fa-file-text-o"></i> <?php echo $usuario[0]->primer_nombre.' '.$usuario[0]->primer_apellido  ?></h3>  
    <? if($tipo==3): ?>
            <a href="<?= base_url() ?>usuario/editarUsuario/<?= $usuario[0]->uid; ?>" style="margin-top:-2.5em" type="button" class="pull-right btn btn-warning btn-lg"> Editar <i class="fa fa-pencil-square-o" aria-hidden="true"></i>  </a>
    <? endif; ?>
    <hr>
    
    <div class="col-sm-8">
        <dl class="dl-horizontal">
          <dt>Primer nombre</dt>
          <dd><?= $usuario[0]->primer_nombre; ?></dd>
          <dt>ID</dt>
          <dd><?= $usuario[0]->unique_id; ?></dd>
          <dt>Segundo nombre</dt>
          <dd><?= $usuario[0]->segundo_nombre; ?></dd>
          <dt>Primer apellido</dt>
          <dd><?= $usuario[0]->primer_apellido; ?></dd>
          <dt>Segundo apellido</dt>
          <dd><?= $usuario[0]->segundo_apellido; ?></dd>
          <dt>Correo Electrónico</dt>
          <dd><?= $usuario[0]->email; ?></dd>
          <dt>Tipo de Usuario</dt>
          <dd><?= $usuario[0]->tipo; ?></dd>
          <dt>Salt</dt>
          <dd><?= $usuario[0]->salt; ?></dd>
          <dt>Fecha de creación</dt>
          <dd><?= $usuario[0]->created_at; ?></dd>
        </dl>    
    </div>
    <div class="col-sm-4">
        <div class="dropdown pull-right">
            <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
              Más opciones
              <span class="caret"></span>
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                <li><a href="<?= base_url() ?>index.php/usuario/cambiarContrasena/<?php echo $uid; ?>" >Cambiar contraseña</a></li>
                <? if($tipo==3): ?>
                        <li><a data-toggle="modal" data-target=".confimaEliminarUsuario">Eliminar Usuario</a></li>
                <? endif; ?>
            </ul>
          </div>
    </div>
   
    <div class="modal fade confimaEliminarUsuario" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
      <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="myModalLabel">Está seguro de que desea eliminar esta usuario?</h4>
            </div>
            <div class="modal-body">
                <form  id="loginForm" data-toggle="validator" role="form">
                    <input id="uid" required type="number" class="invisible" style="position:absolute" value="<?= $usuario[0]->uid; ?>">
                </form>
                <p>Esto no se puede reversar.</p>
            </div>
            <div class="modal-footer">
                  <button id="eliminarUsuario" type="submit" class="btn btn-danger">Si</button>
                  <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
            </div>
        </div>
      </div>
    </div>
</div>
<script src="<?= base_url() ?>js/usuarios.js"></script>
<script src="<?= base_url() ?>js/template/validator.js"></script>
