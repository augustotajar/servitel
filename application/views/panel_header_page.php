<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Servitel Latinoamérica</title>
    <!-- Bootstrap Core CSS -->
    <link href="<?= base_url() ?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>css/select2.min.css" rel="stylesheet">
    <!-- Font awesome CSS -->
    <link href="<?= base_url() ?>libraries/font-awesome-4.2.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- script references -->
    <script src="<?= base_url() ?>js/template/jquery-1.11.0.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="<?= base_url() ?>js/template/bootstrap.min.js"></script>
    <script src="<?= base_url() ?>js/template/select2.full.min.js"></script>
    
</head>
<body>

    <!-- Header -->
    <div id="top-nav" class="navbar navbar-inverse navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="icon-toggle"></span>
          </button>
          <a class="navbar-brand" href="#">Servitel Latinoamerica</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">

            <li class="dropdown">
              <a class="dropdown-toggle" role="button" data-toggle="dropdown" href="#">
                  <i class="fa fa-user"></i> <?php echo $primer_nombre.' '.$primer_apellido;  ?> <span class="caret"></span></a>
              <ul id="g-account-menu" class="dropdown-menu" role="menu">
                <li><a href="<?= base_url() ?>index.php/usuario/index/<?php echo $uid; ?>">Mi Perfil</a></li>
                <li><a href="<?= base_url() ?>panel/logOut"><i class="fa fa-sign-out"></i> Logout</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div><!-- /container -->
    </div>
    <!-- /Header -->

    <!-- Main -->
    <div class="container">

      <!-- upper section -->
      <div class="row">
            <div class="col-sm-2">
          <!-- left -->
                <h3><i class="fa fa-wrench"></i> Opciones</h3>
                <hr>

                <ul class="nav nav-stacked">
                  <li><a href="<?= base_url() ?>panel/listarTareas"><i class="fa fa-file-text-o"></i> Tareas</a></li>
                  <? if ($tipo !=2): ?>
                  <li><a href="<?= base_url() ?>panel/listarClientes"><i class="fa fa-black-tie"></i> Clientes</a></li>
                  <? endif; ?>
                   <? if ($tipo ==3): ?>
                  <li><a href="<?= base_url() ?>panel/listarUsuarios"><i class="fa fa-users"></i></i> Usuarios</a></li>
                  <? endif; ?>
                  <li><a href="<?= base_url() ?>panel/blog"><i class="fa fa-newspaper-o"></i> Blog</a></li>
                  <li><a href="<?= base_url() ?>panel/archivos"><i class="fa fa-files-o"></i></i> Archivos</a></li>
                </ul>

                <hr>
            </div><!-- /span-3 -->
            <div class="col-sm-10">
        