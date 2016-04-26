<!DOCTYPE html>
<html>
    <head>
        <title><?php echo $title ?> </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="En Construcción, VRIN CONSULTORES INFORMÁTICOS">
        <meta name="author" content="VRIN CONSULTORES INFORMATICOS">

        <!-- Bootstrap -->
        <link href="/assets/bootstrap/css/bootstrap.css" rel="stylesheet" media="screen">
        <link href="/assets/bootstrap/css/bootstrap-responsive.css" rel="stylesheet" media="screen">
        <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
        <link href="/assets/css/base_vrin.css" rel="stylesheet" media="screen">        
        <style type="text/css">                        
            <?php
            if (isset($css)) {
                foreach ($css as $row) {
                    echo $row;
                }
            }
            ?>

        </style>



    </head>
    <body class="noborder">
      <div id="wrap">  
      
        <div class="row-fluid">
            <div class="span12 hbar noborder" style="background: #373737;padding: 0px;">
                <div class="container  border divcenter" style="color:#FFF;">
                    <a href="/"><img src="/assets/imagenes/LogoVrinHeader1.png" class="noborder" style="float:left;" alt="Logo Vrin"/></a>
                    <h1 class="hidden-phone" style="float:left; font-size: medium; margin-top: 15px;margin-left: 15px;">Consultores Informáticos</h1>
                </div>
            </div>
        </div>
        <div class="container divcenter" id="contenido_principal">
            <div class="menu hbar">
                <div class="navbar">
                    <div class="navbar-inner navbar-inverse">
                        <div class="container">

                          <?php
                                $urlSelf = $_SERVER["REQUEST_URI"];
                                //echo '***********' . $urlSelf;
                                
                                $nav_inicio = 'id="nav-inicio"';
                                $nav_productos = 'id="nav-productos"';
                                $nav_servicios = 'id="nav-servicios"';
                                $nav_nosotros = 'id="nav-nosotros"';
                                $nav_contacto = 'id="nav-contacto"';
                                $class_active = ' class="active"';
                                switch ($urlSelf) {
                                  case '/':
                                    $nav_inicio .= $class_active;
                                    break;
                                  case '/productos':
                                    $nav_productos .= $class_active;
                                    break;
                                  case '/servicios':
                                    $nav_servicios .= $class_active;
                                    break;
                                  case '/nosotros':
                                    $nav_nosotros .= $class_active;
                                    break;
                                  case '/contacto':
                                    $nav_contacto .= $class_active;
                                    break;
                                  default:
                                    break;
                                }
                            ?>

                            <!-- .btn-navbar is used as the toggle for collapsed navbar content -->
                            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse" style="background-image: none;">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </a>

                            

                            <!-- Everything you want hidden at 940px or less, place within here -->
                            <div class="nav-collapse collapse">
                                <ul class="nav">
                                    <li <?php echo $nav_inicio; ?>><a href="/">Inicio</a></li>
                                    <li <?php echo $nav_productos; ?>><a href="/productos">Productos</a></li>
                                    <li <?php echo $nav_servicios; ?>><a href="/servicios">Servicios</a></li>
                                    <li <?php echo $nav_nosotros; ?>><a href="/nosotros">Nosotros</a></li>
                                    <li <?php echo $nav_contacto; ?>><a href="/contacto">Contacto</a></li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
