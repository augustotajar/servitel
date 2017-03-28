<div class="col-sm-12">
    <h3><i class="fa fa-file-text-o"></i></i> Agregar Tarea</h3>
    <hr>
    
    <form  id="loginForm" data-toggle="validator" role="form">
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Titulo</label>*
                        <div class="controls">
                            <input id="titulo" data-error='Campo Obligatorio.' required type="text" class="form-control" placeholder="Descripción corta">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>    
                    <div class="form-group">
                        <label>Cliente</label>*
                        <div class="controls">
                            <select id="cliente" required data-error='Campo Obligatorio.' type="text" class="form-control" placeholder="Cliente"></select>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>    
                    <div class="form-group">
                        <label>Descripción</label>
                        <div class="controls">
                            <textarea id="descripcion" class="form-control" rows="5"> </textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Prioridad</label>*
                            <select id="prioridad" class="form-control">
                                <option value="0">Baja</option>
                                <option value="1">Normal</option>
                                <option value="2">Alta</option></select>
                    </div> 
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Estatus</label>*
                        <div class="controls">
                            <select id="estatus" class="form-control">
                                <option value="0">Por empezar</option>
                                <option value="1">En curso</option>
                                <option value="2">Retrasada</option>
                                <option value="3">Completada</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Progreso</label>
                        <div class="controls">
                            <div class="input-group">
                                <input id="progreso" value=0 type="number" max="100" min="0" class="form-control">
                                <div class="input-group-addon">%</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Responsable</label>*
                        <div class="controls">
                            <select id="responsable"  required data-error='Campo Obligatorio.'  placeholder="Responsable" class="form-control" ></select>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Fecha de Inicio</label>
                        <div class="controls">
                            <input id="fecha_inicio" type="date" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Fecha de Vencimiento</label>
                        <div class="controls">
                            <input id="fecha_fin" type="date" class="form-control">
                        </div>
                    </div>
                </div>
            </div>

        </div><!--/col-->
        <div class="form-group">
            <button id="guardarTarea" type="submit" style="margin-top: 1em" class="pull-right btn btn-primary">Guardar</button>    
        </div>
    </form>  
</div>

<script src="<?= base_url() ?>js/tareas.js"></script>
<script src="<?= base_url() ?>js/template/validator.js"></script>
