<div class="col-sm-12">

    <h3><i class="fa fa-file-text-o"></i> Tareas</h3>  
    <? if ($tipo !=2): ?>
        <a href="<?= base_url()?>tarea/agregarTarea"style="margin-top:-2.5em" type="button" class="pull-right btn btn-primary btn-lg"> Agregar <i class="fa fa-plus-circle"></i>  </a>
    <? endif; ?>
    <hr>
    <div class="col-md-12">
        <div class="alert alert-info">
            <button type="button" class="close" data-dismiss="alert">×</button>
            Mensaje para mostrar información eventual.
        </div>
        <table class="table table-condensed table-hover">
            <thead>
                <tr>
                    <th style="text-align:center">TITULO</th>
                    <th style="width: 3em; text-align:center">CLIENTE</th>
                    <th style="width: 5em; text-align:center">PRIORIDAD</th>
                    <th style="text-align:center">ESTATUS</th>
                    <th style="width: 6em; text-align:center">PROGRESO</th>
                    <th style="width: 7em; text-align:center">RESPONSABLE</th>
                    <th style="width: 6em; text-align:center">INICIO</th>
                    <th style="text-align:center">VENCIMIENTO</th>
                </tr>
            </thead>
            <tbody style="font-size: 0.85em">
                <?php foreach($tareas as $tarea): ?>
                <tr <?php 
                if( $tarea->progreso == 100 || $tarea->estatus == 3 ){ echo 'class="alert-success"';}else{
                if(($tarea->fecha_fin < date("Y-m-d") && $tarea->fecha_fin != '' ) || $tarea->estatus == 2 ){ echo 'class="alert-danger"';}else{
                if($tarea->fecha_fin < date("Y-m-d", strtotime("+10 days")) && $tarea->fecha_fin != '' ){ echo 'class="alert-warning"';}}}
                                  
                ?> >
                    <td><a href="<?= site_url() ?>/tarea/index/<?php echo $tarea->id; ?>"><?php echo $tarea->titulo; ?></a>
                    <td><?php echo $tarea->nombre; ?></td>
                    <td style="text-align:center">
                        <?php echo  $tarea->prioridad==0 ? 'Baja':''; ?>
                        <?php echo  $tarea->prioridad==1 ? 'Media':''; ?>
                        <?php echo  $tarea->prioridad==2 ? 'Alta':''; ?>
                    </td>
                    <td style="text-align:center">
                        <?php echo  $tarea->estatus==0 ? 'Por Empezar':''; ?>
                        <?php echo  $tarea->estatus==1 ? 'En curso':''; ?>
                        <?php echo  $tarea->estatus==2 ? 'Retrasada':''; ?>
                        <?php echo  $tarea->estatus==3 ? 'Completada':''; ?>
                    </td>
                    <td style="text-align:center"><?php echo $tarea->progreso; ?>%</td>
                    <td style="text-align:center"><?= $tarea->primer_nombre; ?> <?= $tarea->primer_apellido; ?></td><td style="text-align:center"><?php echo $tarea->fecha_inicio; ?></td>
                    <td style="text-align:center"><?php echo $tarea->fecha_fin; ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        
        <hr>
    </div>
    
 
<!-- /Main -->
