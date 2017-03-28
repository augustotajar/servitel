<div class="col-sm-12">

    <h3><i class="fa fa-users"></i>Editar Cliente</h3>
    <hr>
    <form  data-toggle="validator" role="form">
        <div class="col-md-10">
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-12">
                        <input id="id" required type="number" class="invisible" style="position:absolute" value="<?= $cliente[0]->id; ?>">
                        <div class="form-group">
                            <label>Nombre*</label>
                            <div class="controls">
                                <input id="nombre" value="<?= $cliente[0]->nombre; ?>" data-error="Campo Obligatorio" required type="text" class="form-control">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>R.I.F.</label>
                            <div class="controls">
                                <input id="rif" value="<?= $cliente[0]->rif; ?>" data-error="Campo Obligatorio" required type="text" class="form-control">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Correo electrónico*</label>
                            <div class="controls">
                                <input id="email" value="<?= $cliente[0]->email; ?>" data-error="Correo inválido" required type="email" class="form-control">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Teléfono 1</label>
                            <div class="controls">
                                <input id="telefono1" value="<?= $cliente[0]->telefono1; ?>" type="text" class="form-control">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Teléfono 2</label>
                            <div class="controls">
                                <input id="telefono2" value="<?= $cliente[0]->telefono2; ?>" type="text" class="form-control">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Dirección</label>
                            <div class="controls">
                                <input id="direccion" value="<?= $cliente[0]->direccion; ?>" type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
                   
            </div><!--/row--> 
        </div>


        <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                    <button id="actualizarCliente" type="submit" class="pull-right btn btn-primary btn-lg" style="margin-top: 1em">Actualizar</button>
                </div>
            </div>
        </div>
    </form> 

</div>
<script src="<?= base_url() ?>js/template/validator.js"></script>
<script src="<?= base_url() ?>js/clientes.js"></script>
