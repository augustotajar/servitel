<div class="col-sm-12">

    <h3><i class="fa fa-users"></i>Editar Usuario</h3>
    <hr>
    <form  data-toggle="validator" role="form">
        <div class="col-md-10">
            <div class="row">
                <div class="col-md-12">
                    <input id="uid" required type="number" class="invisible" style="position:absolute" value="<?= $usuario[0]->uid; ?>">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Primer Nombre*</label>
                            <div class="controls">
                                <input value="<?= $usuario[0]->primer_nombre; ?>" id="primer_nombre" data-error="Campo Obligatorio" required type="text" class="form-control">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Segundo Nombre</label>
                            <div class="controls">
                                <input value="<?= $usuario[0]->segundo_nombre; ?>" id="segundo_nombre" type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Primer Apellido</label>
                            <div class="controls">
                                <input value="<?= $usuario[0]->primer_apellido; ?>" id="primer_apellido" data-error="Campo Obligatorio" type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Segundo Apellido</label>
                            <div class="controls">
                                <input value="<?= $usuario[0]->segundo_apellido; ?>" id="segundo_apellido" type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Correo electrónico*</label>
                            <div class="controls">
                                <input value="<?= $usuario[0]->email; ?>" id="email" data-error="Correo inválido" required type="email" class="form-control">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-md-offset-6"></div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Tipo*</label>
                            <select required id="tipo" class="form-control">
                                <option <?php echo $usuario[0]->tipo==1 ? "selected":""; ?> value="1">Estandar</option>
                                <option <?php echo $usuario[0]->tipo==2 ? "selected":""; ?> value="2">Cliente</option>
                                <option <?php echo $usuario[0]->tipo==3 ? "selected":""; ?> value="3">Administrador</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Contraseña*</label>
                            <div class="controls">
                                <input id="password" data-minlength="6"  data-error="Mínimo 6 caracteres" type="password" class="form-control">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Repita Contraseña*</label>
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
                    <button id="actualizarUsuario" type="submit" class="pull-right btn btn-primary btn-lg" style="margin-top: 1em">Actualizar</button>
                </div>
            </div>
        </div>
    </form> 

</div>
<script src="<?= base_url() ?>js/template/validator.js"></script>
<script src="<?= base_url() ?>js/usuarios.js"></script>
