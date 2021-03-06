<?php
/*
Template Name: Contacto
*/
?>

<?php

//response generation function

$response = "";

//function to generate response
function my_contact_form_generate_response($type, $message){

  global $response;

  if($type == "success") $response = "<div class='success'>{$message}</div>";
  else $response = "<div class='error'>{$message}</div>";

}

//response messages
$missing_content = "Falta información.";
$email_invalid   = "Email no valido.";
$message_unsent  = "El mensaje no se pudo enviar. Intente de nuevo.";
$message_sent    = "¡Gracias! Tu mensaje se envió exitosamente.";

//user posted variables
$name = $_POST['message_name'];
$email = $_POST['message_email'];
$message = "Nombre: " . $_POST['message_name'] . "\r\n" . "Email: " . $_POST['message_email'] . "\r\n" . "Telefono: " . $_POST['message_phone'] . "\r\n" . "\r\n" . $_POST['message_content'];
$human = $_POST['message_human'];

//php mailer variables
$to = "contacto@corporea.mx";
$subject = "Mensaje de contacto de corporea.mx";
$headers = 'From: '. $name . "\r\n" .
  'Reply-To: ' . $email . "\r\n";

if ($_SERVER["REQUEST_METHOD"] == "POST"){
  $sent = wp_mail($to, $subject, strip_tags($message), $headers);
  if($sent) my_contact_form_generate_response("success", $message_sent); //message sent!
  else my_contact_form_generate_response("error", $message_unsent); //message wasn't sent
}else if ($_POST['submitted']) my_contact_form_generate_response("error", $missing_content);

?>

<?php get_header(); ?>

		<div class="page-container"><!-- Page Container -->

            <section id="contacto" style="background-image:url(<?php echo get_template_directory_uri(); ?>/img/contacto.jpg)">
                <div class="container">

                    <div class="row">
                        <div class="col-xs-12">
                            <h1 class="center thin">CONTACTO</h1>
                        </div>
                    </div>
                        
                    <div class="row contact-sheet">

                        <div id="contact-info-container" class="col-sm-4 col-md-3">
                            <div id="contact-info" class="light">
                                <h4 class="light">+52 55 5572-4150</h4>
                                <h4 class="light" style="margin-bottom:20px;">+52 55 5344-4112</h4>
                                <a href="mailto:contacto@corporea.mx"><h4 class="light" style="margin-bottom:20px;">contacto@corporea.mx</h4></a>
                                <h4 class="light">Av. Lomas Verdes 93, Naucalpan</h4>
                                <h4 class="light">Edo. de México</h4>
                            </div>
                        </div>

                        <div id="contact-form-container" class="col-sm-8 col-md-9">
                            <div id="contact-form">
                                <?php echo $response; ?>
                                <form action="<?php the_permalink(); ?>" method="post">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Nombre" type="text" name="message_name" value="<?php echo esc_attr($_POST['message_name']); ?>">
                                        <input type="text" class="form-control" placeholder="E-Mail" type="text" name="message_email" value="<?php echo esc_attr($_POST['message_email']); ?>">
                                        <input type="text" class="form-control" placeholder="Teléfono" type="text" name="message_phone" value="<?php echo esc_attr($_POST['message_phone']); ?>">
                                        <textarea class="form-control" rows="5" placeholder="Mensaje" type="text" name="message_content" value="<?php echo esc_attr($_POST['message_content']); ?>"></textarea>
                                        <button id="contacto-button" type="submit" class="btn btn-default btn-lg">Enviar</button>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>

                    <div class="row" id="google-map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m8!1m3!1d3760.8843074992633!2d-99.25483214998472!3d19.503612666626694!3m2!1i1024!2i768!4f13.1!4m7!1i0!3e1!4m0!4m3!3m2!1d19.5040969!2d-99.2547905!5e0!3m2!1sen!2smx!4v1420493383672" width="100%" height="300" frameborder="0" style="border:0"></iframe>
                    </div>

                </div>
            </section>
            
        </div><!-- /Page Container -->

<?php 
    get_footer(); 
    contacto_scripts();
?>