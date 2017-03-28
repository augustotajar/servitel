<div class="col-sm-12">

    <h3><i class="fa fa-users"></i> Usuarios</h3>  
    <a href="<?= base_url() ?>usuario/agregarUsuario" style="margin-top:-2.5em" type="button" class="pull-right btn btn-primary btn-lg"> Agregar <i class="fa fa-plus-circle"></i>  </a>
    <hr>
    
    <div class="col-md-12">
        <table class="table table-condensed table-hover">
            <thead>
                <tr>
                    <th style="text-align:center">NOMBRE</th>
                    <th style="width: 7em; text-align:center">CORREO</th>
                    <th style="width: 7em; text-align:center">TIPO</th>
                    <th style="width: 7em; text-align:center">CREADO</th>
                </tr>
            </thead>
            <tbody style="font-size: 0.85em">
                <?php foreach($usuarios as $usuario): ?>
                <tr>
                    <td>
                        <a href="<?= site_url() ?>/usuario/index/<?php echo $usuario->uid; ?>">
                            <?php echo $usuario->primer_nombre; ?>
                            <?php echo $usuario->segundo_nombre; ?>
                            <?php echo $usuario->primer_apellido; ?>
                            <?php echo $usuario->segundo_apellido; ?>
                        </a>
                    </td>
                    <td style="text-align:center"><?php echo $usuario->email; ?></td>
                    <td style="text-align:center"><?php echo $usuario->tipo; ?></td>
                    <td style="text-align:center"><?php echo $usuario->created_at; ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        
        <hr>
    </div>
</div>
    
 
<!-- /Main -->

