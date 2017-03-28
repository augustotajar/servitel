<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Servitel Latinoamérica Blog</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?= base_url() ?>css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?= base_url() ?>css/blog-home.css" rel="stylesheet">

    <link href="<?= base_url() ?>libraries/font-awesome-4.2.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Servitel Latinoamérica</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <?php if(isset($sess['logged_in'])) : ?>
                    <li>
                        <a id='disconnect'>Cerrar sesión</a>
                    </li>
                    <?php endif; ?>
<!--                    <li>
                        <a href="#">Services</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
                    </li>-->
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">
<!--                <div class="row">
                    <div class="col-md-2">
                        <img style="margin-left: 25px" class="img-responsive" height="200px" width="200px" src="<?= base_url() ?>img/servitel-logo.png" alt=""/>
                    </div>
                    <div class="col-md-10">
                        <h1 style="margin: 40px 0 20px;">
                          Servitel Latinoamérica Blog
                        </h1>
                    </div>   
                </div>
                <hr>-->
                <img class="img-responsive" src="<?= base_url() ?>img/header_blog.jpg" alt="">
                <?php if(isset($sess['logged_in'])) : ?>
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h2>Publicar un nuevo post</h2>
                            <form name="#" id="nuevo_post" novalidate>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Titulo</label>
                                            <input type="text" class="form-control" id="titulo" maxlength="100" required>
                                            <label>Contenido</label>
                                            <textarea class="form-control" rows="20" id="texto"></textarea>
                                        </div>
                                        <div class="clearfix"></div>
                                        <div class="col-lg-12">
                                            <button id="publicar" type="submit" class="btn btn-primary">Publicar</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>   
                    </div>
                    <hr>
                <?php endif; ?>
                 
                <?php if(isset($noticias)) : ?>          
                    <?php
                        foreach ($noticias as $post)
                        {
                            echo '  <h2>
                                        <a href="blog/post/'.$post['id'].'">'.$post['titulo'].'</a>
                                    </h2>
                                    <p>'.date("d/m/Y g:ia",strtotime($post['fecha_creacion'])).'</p>
                                    <hr>
                                    <!--img class="img-responsive" src="http://placehold.it/900x300" alt="">
                                    <hr-->
                                    <p>'.substr($post['contenido'], 0, 350).' ...</p>
                                    <a class="btn btn-primary" href="blog/post/'.$post['id'].'">Ver más</a>
                                    <hr>';
                        }
                    ?>
                    
                <?php endif; ?>
                    
                <!-- Pager -->
<!--                <ul class="pager">
                    <li class="previous">
                        <a href="#">&larr; Atras</a>
                    </li>
                    <li class="next">
                        <a href="#">Adelante &rarr;</a>
                    </li>
                </ul>-->

            </div>

            <!-- Blog Sidebar Widgets Column -->
            <div class="col-md-4">

                <!-- Blog Search Well -->
                <div class="well">
                    <h4>Buscar en el Blog</h4>
                    <div class="input-group">
                        <input type="text" class="form-control">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button">
                                <span class="glyphicon glyphicon-search"></span>
                        </button>
                        </span>
                    </div>
                    <!-- /.input-group -->
                </div>

                <!-- Side Widget Well -->
                <div class="well text-justify">
                    <h4>Servitel Latinoamérica</h4>
                    <p>Proporcionamos servicios y soluciones contables y tributarias a personas naturales y jurídicas de todo el país.</p>
                    <ul>
                        <li>Outsourcing contable</li>
                        <li>Auditoria externa</li>
                        <li>Consultoría legal</li>
                    </ul>
                    <p><b>Contáctanos:</b> 0269-2442816 / 9357384</p>
                </div>
                <?php if(isset($sess['logged_in'])) : ?>
                    <div class="well alert-info">
                        <h4>Instrucciones para postear</h4>
                        <p>Para motrar texto en negrita debes colocar el texto entre las etiquetas&lt;b&gt; y &lt;/b&gt;</p>  
                        <p>Ejemplo:&lt;b&gt;Negrita&lt;/b&gt; tendrá como resultado: <b>Negrita</b> </p>
                        <p>Para hacer un enlace a otra página web deberas usar las etiquetas &lt;a href=" "&gt; y &lt;/a&gt; de la siguiente manera:</p>  
                        <p>&lt;a href="http://www.google.co.ve"&gt;Texto para ir a Google.com&lt;/a&gt; tendrá como resultado:</p>

                        <a href="http://www.google.co.ve">Texto para ir a Google.com</a>
                    </div>
                <?php endif; ?>
            </div>

        </div>
        <!-- /.row -->

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Servitel Latinoamérica C.A. 2015</p>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </footer>

    </div>
    <!-- /.container -->
    
   
    <!-- jQuery Version 1.11.0 -->
    <script src="<?= base_url() ?>js/template/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?= base_url() ?>js/template/bootstrap.min.js"></script>
    <!-- Ajax publicar -->
    <script src="<?= base_url() ?>js/blog.js"></script>
     <!-- Ajax login -->
    <script src="<?= base_url() ?>js/disconnect.js"></script>
</body>

</html>
