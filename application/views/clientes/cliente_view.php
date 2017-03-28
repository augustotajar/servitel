<div class="col-sm-12">

    <h3><i class="fa fa-file-text-o"></i> <?php echo $cliente[0]->nombre  ?></h3>  
    <a href="<?= base_url() ?>cliente/editarCliente/<?= $cliente[0]->id; ?>" style="margin-top:-2.5em" type="button" class="pull-right btn btn-warning btn-lg"> Editar <i class="fa fa-pencil-square-o" aria-hidden="true"></i>  </a>
    <hr>
    
    <div class="col-sm-8">
        <dl class="dl-horizontal">
          <dt>Nombre</dt>
          <dd><?= $cliente[0]->nombre; ?></dd>
          <dt>R.I.F.</dt>
          <dd><?= $cliente[0]->rif; ?></dd>
          <dt>Correo electrónico</dt>
          <dd><?= $cliente[0]->email; ?></dd>
          <dt>Teléfono 1</dt>
          <dd><?= $cliente[0]->telefono1; ?></dd>
          <dt>Teléfono 2</dt>
          <dd><?= $cliente[0]->telefono2; ?></dd>
          <dt>Dirección</dt>
          <dd><?= $cliente[0]->direccion; ?></dd>
        </dl>    
    </div>
    <div class="col-sm-4">
        <div class="dropdown pull-right">
            <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
              Más opciones
              <span class="caret"></span>
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                <li><a data-toggle="modal" data-target=".confimaEliminarCliente">Eliminar Cliente</a></li>
            </ul>
          </div>
    </div>
   
    <div class="modal fade confimaEliminarCliente" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
      <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="myModalLabel">Está seguro de que desea eliminar esta cliente?</h4>
            </div>
            <div class="modal-body">
                <form  id="loginForm" data-toggle="validator" role="form">
                    <input id="id" required type="number" class="invisible" style="position:absolute" value="<?= $cliente[0]->id; ?>">
                </form>
                <p>Esto no se puede reversar.</p>
            </div>
            <div class="modal-footer">
                  <button id="eliminarCliente" type="submit" class="btn btn-danger">Si</button>
                  <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
            </div>
        </div>
      </div>
    </div>
</div>
<script src="<?= base_url() ?>js/clientes.js"></script>
