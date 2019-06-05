<?php

    // Librerias PHPMailer
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    // Autoload generado por composer
    require_once 'vendor/autoload.php';

    // Comprobamos si se envio la información
    if(isset($_POST["nombre"]) && $_POST["nombre"] != "" ) {
        $mail = new PHPMailer(false);
        $mail->isSMTP();
        $mail->Host = 'smtp.googlemail.com';  
        $mail->SMTPAuth = true;
        $mail->Username = 'contacto.allyprim@gmail.com';   
        $mail->Password = 'wq$<aV~3AR{V43z?J#74';   
        $mail->SMTPSecure = 'ssl';
        $mail->Port = 465;                 
        $mail->setFrom('contacto.allyprim@gmail.com', 'Contacto');
        $mail->addAddress($_POST["correo"], $_POST["nombre"]);
        $mail->isHTML(true);
        $mail->Subject = 'Contacto Ally Prim';
        $cuerpoCorreo = "<b> Contacto Formulario </p> </b>";
        $cuerpoCorreo .= "<p><b> Nombre: </b>" . $_POST["nombre"] . "</p>";
        $cuerpoCorreo .= "<p><b> Correo: </b>" . $_POST["correo"] . "</p>";
        $cuerpoCorreo .= "<p><b> Empresa: </b>" . $_POST["nombre"] . "</p>";
        $cuerpoCorreo .= "<p><b> ¿Cómo han enfrentado una crisis de medios?: </b>" . $_POST["crisis"] . "</p>";
        $cuerpoCorreo .= "<p><b> ¿Tienen voceros entrenados para los medios?: </b>" . $_POST["voceros"] . "</p>";
        $cuerpoCorreo .= "<p><b> ¿A cuántos micro influenciadores conoces?: </b>" . $_POST["influenciadores"] . "</p>";
        $mail->Body    = $cuerpoCorreo;
        $mail->send();

        echo "<html><head><title> Ally Prim </title><link rel='stylesheet' href='style.css'> </head><body style='padding: 0; margin: 0;'>";
        echo "<div style='width:100vw; height:100vh; background-color: #c54525; display: flex; justify-content: center; align-items: center; text-align: center; color: #fff;'><h1> Gracias por tu mensaje, pronto nos pondremos en contacto. </h1></div></body></html>";
        header("refresh:5; url=index.html");

    }

?>