<?php
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
require 'PHPMailer/src/EXCEPTION.php';



// require 'dompdf/src/Dompdf.php';
// require 'dompdf/src/Options.php';
// require 'dompdf/src/CanvasFactory.php';
// require 'dompdf/src/Adapter/CPDF.php';
// require 'dompdf/src/Canvas.php';

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;



// use Dompdf\Dompdf;
// use Dompdf\Options;
// use Dompdf\CanvasFactory;
// use Dompdf\Canvas;
// // // instantiate and use the dompdf class
//  $dompdf = new Dompdf();
//Load Composer's autoloader
//  require 'vendor/autoload.php';

//Load Composer's autoloader
// require 'vendor/autoload.php';


//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

if(isset($_POST["adresseMail"])){
    $emailRecup=$_POST["adresseMail"];

    try {
        //Server settings
        $mail->SMTPDebug = 1;                     //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'temetangcindy@gmail.com';                     //SMTP username
        $mail->Password   = 'Mj!cintfc127';                               //SMTP password
        $mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
        $mail->Port       = 25;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
        $mail->SMTPOptions = array(
            'ssl' => array(
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_seft_signed' => true,
            ));
        //Recipients
        $mail->setFrom('temetangcindy@gmail.com');
        $mail->addAddress($emailRecup);     //Add a recipient
        // $mail->addAddress('ellen@example.com');               //Name is optional
        // $mail->addReplyTo('info@example.com', 'Information');
        // $mail->addCC('cc@example.com');
        // $mail->addBCC('bcc@example.com');
    
        //Attachments
        // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
        // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name
    
        //Content
        $mybody;
        $mail->isHTML(true);                                  //Set email format to HTML
        ob_start();
        require 'index.php';
        $mybody=ob_get_contents();

        ob_clean();
        $mail->Subject = 'Cv de Temetang Cindy';
        $mail->Body = $mybody;


        // $dompdf->loadHtml($mybody);
        // $dompdf->setPaper('A4', 'landscape');

        // Render the HTML as PDF
        //  $dompdf->render();
        //  $dompdf->stream();
        //  $options = new Options();
        //  $options->set('defaultFont', 'Courier');
        //  $dompdf = new Dompdf($options);

        // Output the generated PDF to Browser
        // $dompdf->stream();

        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
        if(!$mail->send()){
            echo 'Erreur';
        }
        else{
            echo 'Message envoyé avec succès';

            header("location:index.php");

        }
    
    }
     catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
else{
    echo 'Veuillez renseigner votre email';
}


// try {
//     //Server settings
//     $mail->SMTPDebug = 1;                     //Enable verbose debug output
//     $mail->isSMTP();                                            //Send using SMTP
//     $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
//     $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
//     $mail->Username   = 'temetangcindy@gmail.com';                     //SMTP username
//     $mail->Password   = 'Mj!cintfc127';                               //SMTP password
//     $mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
//     $mail->Port       = 25;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
//     $mail->SMTPOptions = array(
//         'ssl' => array(
//             'verify_peer' => false,
//             'verify_peer_name' => false,
//             'allow_seft_signed' => true,
//         ));
//     //Recipients
//     $mail->setFrom('temetangcindy@gmail.com');
//     $mail->addAddress('djokouokelvine@gmail.com');     //Add a recipient
//     // $mail->addAddress('ellen@example.com');               //Name is optional
//     // $mail->addReplyTo('info@example.com', 'Information');
//     // $mail->addCC('cc@example.com');
//     // $mail->addBCC('bcc@example.com');

//     //Attachments
//     // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
//     // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

//     //Content
//     $mail->isHTML(true);                                  //Set email format to HTML
//     $mail->Subject = 'Cv de Temetang Cindy';
//     $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
//     $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

//     $mail->send();
//     echo 'Message has been sent';
// } catch (Exception $e) {
//     echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
// }

?>