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
                    <div class="container">
                        <!-- tabpanel -->
                        <div role="tabpanel">
                          <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="active"><a href="#ojos" aria-controls="ojos" role="tab" data-toggle="tab">Ojos</a></li>
                                <li role="presentation"><a href="#nariz-orejas" aria-controls="nariz-orejas" role="tab" data-toggle="tab">Naríz y orejas</a></li>
                                <li role="presentation"><a href="#cara" aria-controls="cara" role="tab" data-toggle="tab">Cara</a></li>
                            
                                <li role="presentation"><a href="#barbilla-menton" aria-controls="barbilla-menton" role="tab" data-toggle="tab">Barbilla y Mentón</a></li>
                                <li role="presentation"><a href="#otros" aria-controls="otros" role="tab" data-toggle="tab">Otros</a></li>
                            </ul>

                          <!-- Tab panes -->
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active" id="ojos">Estos son los ojos</div>
                                <div role="tabpanel" class="tab-pane" id="nariz-orejas">Esta es la nariz y orejas</div>
                                <div role="tabpanel" class="tab-pane" id="cara">La cara</div>
                                <div role="tabpanel" class="tab-pane" id="barbilla-menton">Somos ls barbilla y el menton</div>
                                <div role="tabpanel" class="tab-pane" id="otros">Otros más</div>
                            </div> <!-- /Tab panes -->

                        </div> <!-- /tabpanel -->
                    </div>

                </div> <!-- /container-->
            </section> <!-- /financiamiento_desc-->

        </div><!-- /Page Container -->


<?php
    get_footer(); 
    promociones_scripts();
?>