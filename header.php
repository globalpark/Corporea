<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title><?php bloginfo('name'); ?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">
        <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,300,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Roboto:500,100,300,700,400' rel='stylesheet' type='text/css'>

        <?php wp_head();?>

    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    
    <div id="main-container">

        <nav id="main-nav" class="navbar navbar-default navbar-fixed-top white" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                        <i class="fa fa-bars fa-2x"></i>
                    </button>
                    <a class="navbar-brand" href="<?php echo site_url(); ?>"><img id="logo-white" src="<?php echo get_template_directory_uri(); ?>/img/logo.png" class="img-responsive"><img id="logo-black" src="<?php echo get_template_directory_uri(); ?>/img/logo2.png" class="img-responsive"></a>
                </div>

                <div class="collapse navbar-collapse navbar-right" id="navbar-collapse">
                    <?php wp_nav_menu( array( 'theme_location' => 'main-menu','container_class' => 'menu', 'menu_class' => 'nav navbar-nav' ) ); ?>
                    <!-- <ul class="nav navbar-nav">
                        <li><a href="#">Quiénes Somos</a></li>
                        <li><a href="#">Cara</a></li>
                        <li><a href="#">Cuerpo</a></li>
                        <li><a href="#">No Quirúrgicos</a></li>
                        <li><a href="#">Reconstructiva</a></li>
                        <li><a href="#">Promociones</a></li>
                        <li><a href="#">Contacto</a></li>
                    </ul> -->
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>