<div class="col-sm-12">

    <h3><i class="fa fa-users"></i>Agregar Usuario</h3>
    <hr>
    <form  data-toggle="validator" role="form">
        <div class="col-md-10">
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Primer Nombre*</label>
                            <div class="controls">
                                <input id="primer_nombre" data-error="Campo Obligatorio" required type="text" class="form-control">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Segundo Nombre</label>
                            <div class="controls">
                                <input id="segundo_nombre" type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Primer Apellido</label>
                            <div class="controls">
                                <input id="primer_apellido" data-error="Campo Obligatorio" type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Segundo Apellido</label>
                            <div class="controls">
                                <input id="segundo_apellido" type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Correo electrónico*</label>
                            <div class="controls">
                                <input id="email" data-error="Correo inválido" required type="email" class="form-control">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-md-offset-6"></div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Tipo*</label>
                            <select required id="tipo" class="form-control">
                                <option value="1">Estandar</option>
                                <option value="2">Cliente</option>
                                <option value="3">Administrador</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Contraseña*</label>
                            <div class="controls">
                                <input id="password" data-minlength="6"  data-error="Mínimo 6 caracteres" required type="password" class="form-control">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Repita Contraseña*</label>
                            <div class="controls">
                                <input data-error="Campo obligatorio" data-match="#password" data-match-error="La contraseña no coincide"  required type="password" class="form-control">
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
                    <button id="guardarUsuario" type="submit" class="pull-right btn btn-primary btn-lg" style="margin-top: 1em">Guardar</button>
                </div>
            </div>
        </div>
    </form> 

</div>
<script src="<?= base_url() ?>js/template/validator.js"></script>
<script src="<?= base_url() ?>js/usuarios.js"></script>
