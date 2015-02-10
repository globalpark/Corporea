<?php
/*
Template Name: Procedimiento
*/
?>

<?php get_header(); ?>

		<div class="page-container"> <!-- Page Container -->

            <section id="procedimiento_intro" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/quienessomos.jpg)">
                <div class="container">
                    
                    <div class="col-sm-6">
                        <h1 class="light">PROCEDIMIENTOS DE CARA</h1>
                    </div>
        
                </div>
            </section>

            <section id="procedimiento_desc">
                <div id="container-nav">
                    <div class="container" id="menu-tabs">
                      <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active"><a href="#ojos" aria-controls="ojos" role="tab" data-toggle="tab">Ojos</a></li>
                            <li role="presentation"><a href="#nariz-orejas" aria-controls="nariz-orejas" role="tab" data-toggle="tab">Naríz y orejas</a></li>
                            <li role="presentation"><a href="#cara" aria-controls="cara" role="tab" data-toggle="tab">Cara</a></li>
                            <li role="presentation"><a href="#barbilla-menton" aria-controls="barbilla-menton" role="tab" data-toggle="tab">Barbilla y Mentón</a></li>
                            <li role="presentation"><a href="#otros" aria-controls="otros" role="tab" data-toggle="tab">Otros</a></li>
                        </ul>
                    </div>

                    
                      <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="ojos">
                                <div id="ojo">
                                    <div class="container-fluid">
                                        <div class="row-fluid right">
                                            <div id="proced-foto" class="col-sm-5 col-md-5 col-xs-12"></div>
                                            <div id="desc" class="col-sm-7 col-md-7 col-xs-12">
                                                <h1 class="proced-title"> Blefaroplastía</h1>
                                                <p class="proced-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. <br> <br> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                                <button type="button" class="btn btn-default btn-lg"> Más Información </button>
                                            </div>
                                        </div>
                                        <div class="row-fluid left">
                                            <div id="desc" class="col-sm-7 col-md-7 col-xs-12">
                                                <h1 class="proced-title"> Levantamiento de Cejas</h1>
                                                <p class="proced-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. <br> <br> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                                <button type="button" class="btn btn-default btn-lg"> Más Información </button>
                                            </div>
                                            <div id="proced-foto" class="col-sm-5 col-md-5 col-xs-12"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="nariz-orejas">
                                <div id="nariz">
                                    <div class="container-fluid">
                                        <div id="desc" class="col-sm-7 col-md-7 col-xs-12">
                                            <h1 class="proced-title"> Levantamiento de Cejas</h1>
                                            <p class="proced-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. <br> <br> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                            <button type="button" class="btn btn-default btn-lg"> Más Información </button>
                                        </div>
                                        <div id="proced-foto" class="col-sm-5 col-md-5 col-xs-12"></div>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="cara">La cara</div>
                            <div role="tabpanel" class="tab-pane" id="barbilla-menton">Somos ls barbilla y el menton</div>
                            <div role="tabpanel" class="tab-pane" id="otros">Otros más</div>
                        </div> <!-- /Tab panes -->

                         <!-- /tabpanel -->
                    

                </div> <!-- /container-->
            </section> <!-- /financiamiento_desc-->

        </div><!-- /Page Container -->


<?php
    get_footer(); 
    promociones_scripts();
?>