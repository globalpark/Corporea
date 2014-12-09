<?php
/*
Template Name: Quiénes Somos
*/
?>

<?php get_header(); ?>

		<div class="page-container"><!-- Page Container -->

            <section id="quienes-intro" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/quienessomos.jpg)">
                <div class="container">
                    <div class="col-sm-6">
                        <h1 class="light">CORPÓREA</h1>
                        <h3 class="light">Health & Aesthetics</h3>
                        <p class="light">Corpórea nace como una clínica privada destinada a satisfacer las más altas exigencias de la sociedad actual, logrando en un solo lugar ofrecer una atención médica especializada del más alto nivel profesional en el área de la cirugía plástica, así como en la salud y estética corporal para mujeres y hombres,  con los últimos avances de la ciencia médica, en un ambiente agradable.</p>
                    </div>
                </div>
            </section>
  
            <section id="quienes-doctor">
                <div class="container">

                    <div class="row">
                        <div class="col-sm-4">
                            <img src="/wp-content/themes/Corporea/img/dr.jpeg" class="center img-responsive">
                        </div>
                        <div id="info-doctor" class="col-sm-8">
                            <div id="titulo-doctor">
                                <h2 class="center light">DR. JUAN ANTONIO DOMÍNGUEZ ZAMBRANO</h2>
                            </div>
                            <p>El Dr Juan Antonio Domínguez Zambrano es médico cirujano egresado por la UNAM-ENEPI, con posgrado realizado en el Hospital General de México  en Cirugía Plástica Estética y Reconstructiva, ha sido cirujano visitante en instituciones de Cirugía Plástica de Brasil, EUA y Europa.</p>
                            <p>Actualmente es jefe de la Clínica de Cirugía Estética del Hospital General de México OD y profesor del posgrado de la UNAM para la especialidad en Cirugía Plástica, miembro de múltiples asociaciones científicas nacionales e internacionales, conferencista en eventos de la especialidad y autor de múltiples artículos y capítulos de libros científicos.</p>
                            <p>Es consejero profesor del Consejo Mexicano de Cirugía Plástica, así como miembro de la Asociación Mexicana de Cirugía Plástica Estética y Reconstructiva. Actualmente funge como director médico de Corpórea.</p>
                            <!-- <a type="button" class="btn btn-default btn-lg">Ver Diplomas y Certificaciones</a> -->
                        </div>
                    </div>

                    <div class="line"></div>

                    <div class="row">
                        <div class="col-xs-12">
                            <table class="table table-hover table-bordered">
                                <thead><h3 class="center light">Diplomas y Certificaciones</h3></thead>
                                <tr>
                                    <td><a href="<?php echo get_template_directory_uri(); ?>/pdf/titulo.pdf" target="_blank" class="center">Título Universitario</a></td>
                                </tr>
                                <tr>
                                    <td><a href="<?php echo get_template_directory_uri(); ?>/pdf/residencia.pdf" target="_blank" class="center">Título Especializaión</a></td>
                                </tr>
                                <tr>
                                    <td><a href="<?php echo get_template_directory_uri(); ?>/pdf/recertificacion.pdf" target="_blank" class="center">Consejo Mexicano de Cirugía Plástica, Estética y Reconstructiva A.C. </a></td>
                                </tr>
                                <tr>
                                    <td><a href="<?php echo get_template_directory_uri(); ?>/pdf/cert_prof.pdf" target="_blank" class="center">Consejo Mexicano de Cirugía Plástica y Reconstructiva A.C.</a></td>
                                </tr>
                                <tr>
                                    <td><a href="<?php echo get_template_directory_uri(); ?>/pdf/laslomas.pdf" target="_blank" class="center">Sociedad Médica Ángeles de las Lomas A.C.</a></td>
                                </tr>
                                <tr>
                                    <td><a href="<?php echo get_template_directory_uri(); ?>/pdf/fediberola.pdf" target="_blank" class="center">Federación Iberolatinoamericana de Cirugía Plástica</a></td>
                                </tr>
                                <tr>
                                    <td><a href="<?php echo get_template_directory_uri(); ?>/pdf/cedulaProf.pdf" target="_blank" class="center">Cédula Médica</a></td>
                                </tr>
                                <tr>
                                    <td><a href="<?php echo get_template_directory_uri(); ?>/pdf/cedula.pdf" target="_blank" class="center">Cédula Especialización</a></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </section>
            
        </div><!-- /Page Container -->

<?php get_footer(); ?>