<div class="col-sm-12">

    <h3><i class="fa fa-users"></i> Clientes</h3>  
    <a href="<?= base_url() ?>cliente/agregarCliente" style="margin-top:-2.5em" type="button" class="pull-right btn btn-primary btn-lg"> Agregar <i class="fa fa-plus-circle"></i>  </a>
    <hr>
    
    <div class="col-md-12">
        <table class="table table-condensed table-hover">
            <thead>
                <tr>
                    <th style="text-align:center">NOMBRE</th>
                    <th style="width: 7em; text-align:center">R.I.F.</th>
                    <th style="width: 7em; text-align:center">CORREO</th>
                    <th style="width: 7em; text-align:center">TELEFONO 1</th>
                    <th style="width: 7em; text-align:center">TELEFONO 2</th>
                    <th style="width: 7em; text-align:center">DIRECCIÓN</th>
                </tr>
            </thead>
            <tbody style="font-size: 0.85em">
                <?php foreach($clientes as $cliente): ?>
                <tr>
                    <td>
                        <a href="<?= site_url() ?>/cliente/index/<?php echo $cliente->id; ?>">
                            <?php echo $cliente->nombre; ?>
                        </a>
                    </td>
                    <td style="text-align:center"><?php echo $cliente->rif; ?></td>
                    <td style="text-align:center"><?php echo $cliente->email; ?></td>
                    <td style="text-align:center"><?php echo $cliente->telefono1; ?></td>
                    <td style="text-align:center"><?php echo $cliente->telefono2; ?></td>
                    <td style="text-align:center"><?php echo $cliente->direccion; ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        
        <hr>
    </div>
</div>
    
 
<!-- /Main -->

