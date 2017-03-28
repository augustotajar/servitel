<div class="col-sm-12">
    <h3><i class="fa fa-file-text-o"></i></i> Editar Tarea</h3>
    <hr>
    
    <form  id="loginForm" data-toggle="validator" role="form">
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-12">
                    <input id="id" required type="number" class="invisible" style="position:absolute" value="<?= $tarea[0]->id; ?>">
                    <div class="form-group">
                        <label>Titulo</label>*
                        <div class="controls">
                            <input id="titulo" value="<?= $tarea[0]->titulo; ?>" data-error='Campo Obligatorio.' required type="text" class="form-control" placeholder="Descripción corta">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>    
                    <div class="form-group">
                        <label>Cliente</label>*
                        <div class="controls">
                            <select id="cliente" value="<?= $tarea[0]->cliente; ?>"  required data-error='Campo Obligatorio.' type="text" class="form-control" placeholder="Cliente">
                                <option 
                                        value="<?= $tarea[0]->cid; ?>" selected="selected" >
                                        <?= $tarea[0]->nombre; ?>
                                </option>
                            </select>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>    
                    <div class="form-group">
                        <label>Descripción</label>
                        <div class="controls">
                            <textarea id="descripcion"  class="form-control" rows="5"><?= $tarea[0]->descripcion; ?></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Prioridad</label>*
                            <select id="prioridad" class="form-control">
                                <option <?php echo $tarea[0]->prioridad==0 ? "selected":""; ?> value="0">Baja</option>
                                <option <?php echo $tarea[0]->prioridad==1 ? "selected":""; ?> value="1">Normal</option>
                                <option <?php echo $tarea[0]->prioridad==2 ? "selected":""; ?> value="2">Alta</option></select>
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
                                <option <?php echo $tarea[0]->estatus==0 ? "selected":""; ?>  value="0">Por empezar</option>
                                <option <?php echo $tarea[0]->estatus==1 ? "selected":""; ?>  value="1">En curso</option>
                                <option <?php echo $tarea[0]->estatus==2 ? "selected":""; ?>  value="2">Retrasada</option>
                                <option <?php echo $tarea[0]->estatus==3 ? "selected":""; ?>  value="3">Completada</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Progreso</label>
                        <div class="controls">
                            <div class="input-group">
                                <input id="progreso"  value="<?= $tarea[0]->progreso; ?>"  type="number" max="100" min="0" class="form-control">
                                <div class="input-group-addon">%</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Responsable</label>*
                        <div class="controls">
                            <select id="responsable"  required data-error='Campo Obligatorio.'  placeholder="Responsable" class="form-control" >
                                <option 
                                    value="<?= $tarea[0]->responsable; ?>" selected="selected" >
                                    <?= $tarea[0]->primer_nombre; ?> <?= $tarea[0]->primer_apellido; ?>
                                </option>
                            </select>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Fecha de Inicio</label>
                        <div class="controls">
                            <input id="fecha_inicio"  value="<?= $tarea[0]->fecha_inicio; ?>"  type="date" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Fecha de Vencimiento</label>
                        <div class="controls">
                            <input id="fecha_fin" value="<?= $tarea[0]->fecha_fin; ?>"  type="date" class="form-control">
                        </div>
                    </div>
                </div>
            </div>

        </div><!--/col-->
        <div class="form-group">
            <button id="actualizarTarea" type="submit" style="margin-top: 1em" class="pull-right btn btn-primary">Actualizar</button>    
        </div>
    </form>  
</div>

<script src="<?= base_url() ?>js/tareas.js"></script>
<script src="<?= base_url() ?>js/template/validator.js"></script>
