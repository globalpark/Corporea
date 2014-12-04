<?php
/*
Template Name: Contacto
*/
?>

<?php get_header(); ?>

		<div class="page-container"><!-- Page Container -->

            <section id="contacto">
                <div class="container">

                    <div class="row">
                        <div class="col-xs-12">
                            <h1 class="center thin">CONTACTO</h1>
                        </div>
                    </div>
                        
                    <div class="row contact-sheet">

                        <div class="col-sm-4 col-md-3">
                            <div id="contact-info" class="light">
                                <h4 class="light">5572-4150</h4>
                                <h4 class="light" style="margin-bottom:20px;">5344-4112</h4>
                                <a href="mailto:contacto@corporea.mx"><h4 class="light" style="margin-bottom:20px;">contacto@corporea.mx</h4></a>
                                <h4 class="light">Av. Lomas Verdes 93, Naucalpan</h4>
                                <h4 class="light">Edo. de México</h4>
                            </div>
                        </div>

                        <div class="col-sm-8 col-md-9">
                            <div id="contact-form">
                                <form role="form">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Nombre">
                                        <input type="text" class="form-control" placeholder="E-Mail">
                                        <input type="text" class="form-control" placeholder="Teléfono">
                                        <textarea class="form-control" rows="5" placeholder="Mensaje"></textarea>
                                        <button type="button" class="btn btn-default btn-lg">Enviar</button>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>

                </div>
            </section>
            
        </div><!-- /Page Container -->

<?php get_footer(); ?>