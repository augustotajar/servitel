<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Servitel Latinoamerica</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?= base_url() ?>css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?= base_url() ?>css/servitel.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?= base_url() ?>libraries/font-awesome-4.2.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" class="index">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top" style="font-weight: bold;color: #ffffff">Servitel Latinoamérica</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#perfil">¿Quiénes Somos?</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#services">Servicios</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#noticias">Noticias</a>
                    </li>
                    <li>
                        <a id="blog_button" href="blog">Blog</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contactanos">Contáctanos</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 text-center">
                    <div class="col-sm-4 col-sm-offset-0 col-xs-6 col-xs-offset-3 col-md-4 col-lg-4 col-">
                        <img class="img-responsive" style="margin-top: 25px" src="<?= base_url() ?>img/servitel-logo.png" alt=""/>
                    </div>
                    <div class="intro-text">
                        <div class="intro-heading">Servicios Jurídicos y Contables</div>
<!--                        <a href="#services" class="page-scroll btn btn-xl">Servicios</a>-->
                    </div>
                </div>
                <div class="col-lg-4 text-center" >
                    <div style="margin-top: 250px; margin-bottom: 50px">
                        <div style="border-radius: 25px; background-color: rgba(30, 70, 123, 0.5); padding: 25px">
                            <p class="text-center">Ingrese al espacio exclusivo para <b>clientes</b></p>
                            <form name="#" id="login" novalidate>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Correo electronico" id="email" required data-validation-required-message="Ingrese su correo electronico">
                                            <p class="help-block text-danger"></p>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" placeholder="Contraseña" id="password" required data-validation-required-message="Ingrese contraseña">
                                            <p class="help-block text-danger"></p>
                                        </div>
                                        <div class="clearfix"></div>
                                        <div class="col-lg-12 text-center">
                                            <div id="fail_login"></div>
                                            <button id="login_button" type="submit" class="btn btn-primary">Ingresar</button>
                                        </div>
                                        <div class="col-lg-12 text-center">
                                            <small><a href="<?= base_url() ?>reestablecerPass" style="color: #EBF3EC">Olvide la contraseña</a></small>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section id="perfil">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">¿Quiénes Somos?</h2>
                    <h3 class="section-subheading text-muted">Trabajamos para solucionar sus necesidades de gestión financiera y contable</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-6 portfolio-item">
                    <img src="<?= base_url() ?>img/calculos-light.jpg" class="img-responsive" alt="">
                </div>
                <div class="col-md-6 col-sm-6 portfolio-item">
                    <div>
                        <p class="text-muted text-justify">&nbsp;&nbsp;&nbsp;&nbsp;Proporcionamos servicios y soluciones contables y tributarias a personas naturales y organizaciones de todo el país. Nuestra larga trayectoría y el número creciente de clientes satisfechos, son el mejor respaldo de calidad, integridad y eficiencia con que realizamos nuestro trabajo.
                            Estamos orgullosos de poder proporcionar a nuestros clientes el mejor servicio profesional, y respuestas claras a muchas de sus inquietudes financieras. Nuestro objetivo es asistirles en todos los aspectos de su vida financiera. Trabajamos de cerca con cada cliente para ayudarle a manejar sus negocios y gastos personales, con el fin de alcanzar sus objetivos y cumplir acertadamente con sus obligaciones.</p>
                        <p class="text-muted text-justify">&nbsp;&nbsp;&nbsp;&nbsp;Contamos con la capacidad de ofrecer a nuestros clientes un asesoramiento competente y personalizado en todos los asuntos contables, fiscales y legales que requiera su negocio, para cumplir con sus objetivos y obligaciones. Nuestros servicios incluyen todas sus Operaciones Contables incluyendo los Libros Oficiales,  asesoramiento en gestión mercantil,  entre otros.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section id="services" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Servicios</h2>
                    <h3 class="section-subheading text-muted">Llevamos años proporcionando servicios y soluciones contables y tributarias tanto a personas naturales como a organizaciones de todo el país.</h3>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-4">
                    <a href="#outsourcingContable" class="portfolio-link" data-toggle="modal">
                        <span class="fa-stack fa-5x">
                            <i class="fa fa-circle fa-stack-2x text-primary"></i>
                            <i class="fa fa-line-chart fa-stack-1x fa-inverse"></i>
                        </span>
                    </a>
                    <h4 class="service-heading">Outsourcing Contable</h4>
                    <p class="text-muted">Coadyuvamos con las funciones contables y financieras de las empresas, organizaciones y asociaciones cooperativas.</p>
                    <a href="#outsourcingContable" class="portfolio-link" data-toggle="modal">Ver más</a>
                </div>
                <div class="col-md-4">
                    <a href="#auditoriaExterna" class="portfolio-link" data-toggle="modal">
                        <span class="fa-stack fa-5x">
                            <i class="fa fa-circle fa-stack-2x text-primary"></i>
                            <i class="fa fa-university fa-stack-1x fa-inverse"></i>
                        </span>
                    </a>
                    <h4 class="service-heading">Auditoría Externa</h4>
                    <p class="text-muted">Tenemos como objetivo averiguar la razonabilidad, integridad y autenticidad de los estados financieros, expedientes, documentos y toda aquella información producida por los sistemas de información de la organización.</p>
                    <a href="#auditoriaExterna" class="portfolio-link" data-toggle="modal">Ver más</a>
                </div>
                <div class="col-md-4">
                    <a href="#consultoriaLegal" class="portfolio-link" data-toggle="modal">
                        <span class="fa-stack fa-5x">
                            <i class="fa fa-circle fa-stack-2x text-primary"></i>
                            <i class="fa fa-gavel fa-stack-1x fa-inverse"></i>
                        </span>
                    </a>
                    <h4 class="service-heading">Consultoría Legal</h4>
                    <p class="text-muted">Contamos con un excelente equipo de abogados y consultores jurídicos especializados en brindar asesoramiento y apoyo sobre los diversos aspectos legales de la actividad de su empresa.</p>
                    <a href="#consultoriaLegal" class="portfolio-link" data-toggle="modal">Ver más</a>
                </div>
            </div>
        </div>
    </section>


    <!-- About Section -->
    <section id="noticias">
        <div class="container">
            <div class="row">                
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Noticias</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-9">
                    <?php if(isset($ultimas_noticias)) : ?>          
                    <?php
                        if(isset($ultimas_noticias[0])){
                        echo '  <div class="row">
                                    <div class="col-lg-12">
                                        <h3 class="section-heading"><a style="color: #333" href="blog/post/'.$ultimas_noticias[0]['id'].'">'.$ultimas_noticias[0]['titulo'].'</a></h3>
                                        <p class="text-muted text-left">'.date("d/m/Y g:ia",strtotime($ultimas_noticias[0]['fecha_creacion'])).'</p>
                                        <p class="text-muted text-justify"> &nbsp; &nbsp; &nbsp;'.substr($ultimas_noticias[0]['contenido'], 0, 550).' ...<a href="blog/post/'.$ultimas_noticias[0]['id'].'">Ver más</a></p>
                                    </div>     
                                </div>';
                        }
                        if(isset($ultimas_noticias[1])){
                        echo '  <div class="row">
                                    <div class="col-lg-6">
                                        <h3 class="section-heading"><a style="color: #333" href="blog/post/'.$ultimas_noticias[1]['id'].'">'.$ultimas_noticias[1]['titulo'].'</a></h3>
                                        <p class="text-muted text-left">'.date("d/m/Y g:ia",strtotime($ultimas_noticias[1]['fecha_creacion'])).'</p>
                                        <p class="text-muted text-justify"> &nbsp; &nbsp; &nbsp;'.substr($ultimas_noticias[1]['contenido'], 0, 450).' ...<a href="blog/post/'.$ultimas_noticias[1]['id'].'">Ver más</a></p>
                                    </div>';
                        }
                        if(isset($ultimas_noticias[2])){
                        echo '      <div class="col-lg-6">
                                        <h3 class="section-heading"><a style="color: #333" href="blog/post/'.$ultimas_noticias[2]['id'].'">'.$ultimas_noticias[2]['titulo'].'</a></h3>
                                        <p class="text-muted text-left">'.date("d/m/Y g:ia",strtotime($ultimas_noticias[2]['fecha_creacion'])).'</p>
                                        <p class="text-muted text-justify"> &nbsp; &nbsp; &nbsp;'.substr($ultimas_noticias[2]['contenido'], 0, 450).' ...<a href="blog/post/'.$ultimas_noticias[2]['id'].'">Ver más</a></p>
                                    </div>     
                                </div>';
                        }else{ echo '</div>';}
                    ?>
                    <?php endif; ?>
                    <br>
                    <center><a id="blog_button2" class="btn btn-primary">Ver todas las noticias</a></center>
                </div>
                <div class="col-lg-3 text-center">
                    <a class="twitter-timeline" href="https://twitter.com/servitel01" data-widget-id="563784598325592064">Tweets por el @servitel01.</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
                </div>
            </div>
        </div>
    </section>

    <section id="contactanos">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Contáctanos</h2>
                    <h3 class="section-subheading" style="color: whitesmoke;">Estamos ubicados en la Calle Cabure, entre Av. Ollarvides y Gral. Pelayo, Qta. Mila, piso 1, local N° 3.  Puerta Maraven, Punto Fijo, Estado Falcón. <br/>Telf. 0269-2442816 / 9357384</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form name="sentMessage" id="contactForm" novalidate>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="embed-responsive embed-responsive-4by3">
                                    <iframe class="embed-responsive-item" src="https://mapsengine.google.com/map/embed?mid=zjdoQGWUtXfA.kvOQbDZt6ExQ"></iframe>
                                </div>
                                <br/>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Su Nombre *" id="name" required data-validation-required-message="Por favor ingrese su nombre.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Su Correo electrónico *" id="email" required data-validation-required-message="Por favor ingrese su correo electrónico.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="tel" class="form-control" placeholder="Su Telefono *" id="phone" required data-validation-required-message="Por favor ingrese su número de teléfono.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Su Mensaje *" id="message" required data-validation-required-message="Por favor ingrese su mensaje."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="clearfix"></div>
                                <div class="col-lg-12 text-center">
                                    <div id="success"></div>
                                    <button type="submit" class="btn btn-xl">Enviar</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <span class="copyright">Copyright &copy; Servitel Latinoamérica C.A. 2015</span>
                </div>
                <div class="col-md-4 col-md-offset-4">
                    <ul class="list-inline social-buttons">
                        <li><a href="https://twitter.com/servitel01"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li><a href="https://www.facebook.com/servitel.latinoamerica"><i class="fa fa-facebook"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <span class="small text-center"><a href="http://servitelcontable.com/webmail"><i class="fa fa-envelope"></i> @webmail</a></span>
                </div>
            </div>
        </div>
    </footer>

    <!-- Modals -->

    <div class="portfolio-modal modal fade" id="outsourcingContable" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Outsourcing Contable</h2>
                            <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1">
                                <ul class="fa-ul text-justify" style="font-size: 24px">
                                    <li><i class="fa-li fa fa-check text-primary"></i>Especialidad en Contabilidad Cooperativa.</li>
                                    <li><i class="fa-li fa fa-check text-primary"></i>Contabilidad Pymes.</li>
                                    <li><i class="fa-li fa fa-check text-primary"></i>Contabilidad Grandes Empresas.</li>
                                    <li><i class="fa-li fa fa-check text-primary"></i>Balances Personales, Certificación de Ingresos.</li>
                                    <li><i class="fa-li fa fa-check text-primary"></i>Flujo de Caja Proyectado.</li>
                                    <li><i class="fa-li fa fa-check text-primary"></i>Estados Financieros Históricos.</li>
                                    <li><i class="fa-li fa fa-check text-primary"></i>Estados Financieros Auditados y Reexpresados.</li>
                                </ul>
                            </div>
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Continuar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="portfolio-modal modal fade" id="auditoriaExterna" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Auditoria Externa</h2>
                            <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1">
                                <ul class="fa-ul text-justify" style="font-size: 24px">
                                    <li><i class="fa-li fa fa-check text-primary"></i>Obtención de elementos de juicio fundamentados en la naturaleza de los hechos examinados.</li>
                                    <li><i class="fa-li fa fa-check text-primary"></i>Medición de la magnitud de un error ya conocido, detección de errores supuestos o confirmación de la ausencia de errores.</li>
                                    <li><i class="fa-li fa fa-check text-primary"></i>Propuesta de sugerencias, en tono constructivo, para ayudar a la gerencia.</li>
                                    <li><i class="fa-li fa fa-check text-primary"></i>Detección de los hechos importantes ocurridos tras el cierre del ejercicio.</li>
                                    <li><i class="fa-li fa fa-check text-primary"></i>Control de las actividades de investigación y desarrollo.</li>
                                </ul>
                            </div>
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Continuar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="portfolio-modal modal fade" id="consultoriaLegal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Consultoria Legal</h2>
                            <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1">
                                <ul class="fa-ul text-justify" style="font-size: 24px">
                                    <li><i class="fa-li fa fa-check text-primary"></i>Asesoría Empresas Mercantiles y Cooperativas.</li>
                                    <li><i class="fa-li fa fa-check text-primary"></i>Asuntos Laborales.</li>
                                    <li><i class="fa-li fa fa-check text-primary"></i>Medios Alternos de Solución de Conflictos.</li>
                                    <li><i class="fa-li fa fa-check text-primary"></i>Propiedad Industrial e Intelectual.</li>
                                    <li><i class="fa-li fa fa-check text-primary"></i>Personas.</li>
                                    <li><i class="fa-li fa fa-check text-primary"></i>Asuntos administrativos.</li>
                                    <li><i class="fa-li fa fa-check text-primary"></i>Banca y Finanzas.</li>
                                </ul>
                            </div>
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Continuar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery Version 1.11.0 -->
    <script src="<?= base_url() ?>js/template/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?= base_url() ?>js/template/bootstrap.min.js"></script>
    
    <!-- Ajax login -->
    <script src="<?= base_url() ?>js/login.js"></script>
    
    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="<?= base_url() ?>js/template/classie.js"></script>
    <script src="<?= base_url() ?>js/template/cbpAnimatedHeader.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="<?= base_url() ?>js/template/jqBootstrapValidation.js"></script>
    <script src="<?= base_url() ?>js/template/contact_me.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?= base_url() ?>js/template/agency.js"></script>

</body>

</html>
