<div class="col-sm-12">

    <h3><i class="fa fa-users"></i> Cambia la contraseña</h3>
    <hr>
    <form  data-toggle="validator" role="form">
        <div class="col-md-10">
            <div class="row">
                <input id="uid" required type="number" class="invisible" style="position:absolute" value="<?= $usuario[0]->uid; ?>">
                <div class="col-md-12">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Contraseña</label>
                            <div class="controls">
                                <input id="password" data-minlength="6"  data-error="Mínimo 6 caracteres" required type="password" class="form-control">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Repita Contraseña</label>
                            <div class="controls">
                                <input data-error="Campo obligatorio" data-match="#password" data-match-error="La contraseña no coincide" type="password" class="form-control">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/row--> 
        </div>


        <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                    <button id="cambiarContrasena" type="submit" class="pull-right btn btn-primary btn-lg" style="margin-top: 1em">Actualizar</button>
                </div>
            </div>
        </div>
    </form> 

</div>
<script src="<?= base_url() ?>js/template/validator.js"></script>
<script src="<?= base_url() ?>js/usuarios.js"></script>
