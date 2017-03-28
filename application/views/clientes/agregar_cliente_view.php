<div class="col-sm-12">

    <h3><i class="fa fa-users"></i>Agregar Cliente</h3>
    <hr>
    <form  data-toggle="validator" role="form">
        <div class="col-md-10">
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Nombre*</label>
                            <div class="controls">
                                <input id="nombre" data-error="Campo Obligatorio" required type="text" class="form-control">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>R.I.F.</label>
                            <div class="controls">
                                <input id="rif" data-error="Campo Obligatorio" required type="text" class="form-control">
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
                                <input id="email" data-error="Correo inválido" required type="email" class="form-control">
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
                                <input id="telefono1" type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Teléfono 2</label>
                            <div class="controls">
                                <input id="telefono2" type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Dirección</label>
                            <div class="controls">
                                <input id="direccion" type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
                </div>
                   
            </div><!--/row--> 
        </div>


        <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                    <button id="guardarCliente" type="submit" class="pull-right btn btn-primary btn-lg" style="margin-top: 1em">Guardar</button>
                </div>
            </div>
        </div>
    </form> 

</div>
<script src="<?= base_url() ?>js/template/validator.js"></script>
<script src="<?= base_url() ?>js/clientes.js"></script>
