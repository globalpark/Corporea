<?php get_header(); ?>

        <section id="home-hero" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/portada.jpg)">
            <div class="container">
                <div class="col-xs-12">
                    <!-- <h1 id="">Título del Banner</h1> -->
                </div>
            </div>
        </section>

        <section id="about">
            <div class="container">
                <div class="col-xs-12">
                    <h3 class="center light"><b>Corpórea</b> nace como una clínica privada destinada a satisfacer las más altas exigencias de la sociedad actual, logrando en un solo lugar ofrecer una atención médica especializada del más alto nivel profesional en el área de la cirugía plástica, así como en la salud y estética corporal para mujeres y hombres,  con los últimos avances de la ciencia médica, en un ambiente agradable. Te invitamos a conocernos.</h3>
                    <!-- <p class="center"><a type="button" class="btn btn-default btn-lg">Leer más...</a></p> -->
                </div>
            </div>
        </section>

        <!--
        <section id="doctor">
            <div class="container">
                <div class="col-sm-5">
                    <img src="/wp-content/themes/Corporea/img/doctor.jpg" class="center img-responsive">
                </div>
                <div id="info-doctor" class="col-sm-7">
                    <div id="titulo-doctor">
                        <h2 class="center light">DR. JUAN ANTONIO DOMÍNGUEZ ZAMBRANO</h2>
                    </div>
                    <p>El Dr Juan Antonio Domínguez Zambrano es médico cirujano egresado por la UNAM-ENEPI, con posgrado realizado en el Hospital General de México  en Cirugía Plástica Estética y Reconstructiva, ha sido cirujano visitante en instituciones de Cirugía Plástica de Brasil, EUA y Europa.</p>
                    <p>Actualmente es jefe de la Clínica de Cirugía Estética del Hospital General de México OD y profesor del posgrado de la UNAM para la especialidad en Cirugía Plástica, miembro de múltiples asociaciones científicas nacionales e internacionales, conferencista en eventos de la especialidad y autor de múltiples artículos y capítulos de libros científicos.</p>
                    <p>Es consejero profesor del Consejo Mexicano de Cirugía Plástica, así como miembro de la Asociación Mexicana de Cirugía Plástica Estética y Reconstructiva. Actualmente funge como director médico de Corpórea.</p>
                    <a type="button" class="btn btn-default btn-lg">Leer más...</a>
                </div>
            </div>
        </section> -->

        <section id="promociones" style="background-image:url(<?php echo get_template_directory_uri(); ?>/img/promociones.jpg)">
            <div class="overlay">
                <div class="container">
                    <div class="col-sm-6">
                        <h1 id="titulo-promos"class="light">NUESTRAS PROMOCIONES</h1>
                        
                    </div>
                    <div class="col-sm-offset-2 col-sm-4">
                        <h1 class="light">RINOPLASTÍA </br>$30,000</h1>
                        <a href="<?php echo site_url(); ?>/promociones">Descubre más promociones</a>
                    </div>
                </div>
            </div>
        </section>

        <section id="procedimientos">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <h1 class="center light">PROCEDIMIENTOS</h1>
                        <!-- <p class="center light">Lorem ipsum dolor sit amet.</p> -->
                    </div>
                </div>

                <div class="row">

                    <div id="cara" class="col-sm-4">
                        <div class="seccion-procedimientos" style="background-image:url(<?php echo get_template_directory_uri(); ?>/img/cara2.jpg)">
                            <div class="overlay">
                                <a href=""><h2 class="center titulo-procedimiento">Cara</h2></a>
                            </div>
                        </div>
                    </div>

                    <div id="cuerpo" class="col-sm-4">
                        <div class="seccion-procedimientos" style="background-image:url(<?php echo get_template_directory_uri(); ?>/img/cuerpo.jpg)">
                            <div class="overlay">
                                <a href=""><h2 class="center titulo-procedimiento">Cuerpo</h2></a>
                            </div>
                        </div>
                    </div>

                    <div id="no-qx" class="col-sm-4">
                        <div class="seccion-procedimientos" style="background-image:url(<?php echo get_template_directory_uri(); ?>/img/no-quirurgicos.jpg)">
                            <div class="overlay">
                                <a href=""><h2 class="center titulo-procedimiento">No Quirúrgicos</h2></a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

<?php get_footer(); ?>

