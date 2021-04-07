<?php
session_start();

require 'C:\xampp\htdocs\deffem3D\PHPMailer5.2\PHPMailer-5.2-stable\PHPMailerAutoload.php';

function createBody(){
    $email = $_POST['email'];
    $meessage = $_POST['message'];

    

    $body = "<b>Email kontaktowy: </b>".$email.
    "<br><br><b>Wiadomosc:</b><br>".$meessage."<br><br><b>Wybrane opcje: </b>";

    if(isset($_POST['sph'])){
        $body = $body.' SPH';
    }
    if(isset($_POST['fem'])){
        $body = $body.' FEM';
    }
    if(isset($_POST['pre'])){
        $body = $body.' PRE';
    }
    if(isset($_POST['post'])){
        $body = $body.' POST';
    }

    if(!isset($_POST['sph']) && !isset($_POST['fem']) && !isset($_POST['pre']) && !isset($_POST['post'])){
        $body = $body.' nie wybrano zadnej opcji';
    }


    return $body;
}

$mail = new PHPMailer;

$mail->isSMTP();
$mail->CharSet = "UTF-8";                                      
$mail->Host = 'mail.pajura.pl';  
$mail->SMTPAuth = true;                              
$mail->Username = 'deffem@pajura.pl';                 
$mail->Password = 'deffem3D';                           
$mail->SMTPSecure = '';                            
$mail->Port = 587;                                    
$mail->SMTPOptions = array(
    'ssl' => array(
             'verify_peer' => false,
             'verify_peer_name' => false,
             'allow_self_signed' => true
         )
     );   



$name = $_POST['name'];
$surname = $_POST['surname'];
$from = $name.' '. $surname;
$email = $_POST['email'];


$mail->setFrom($email, $from);
$mail->addAddress('deffem@pajura.pl', '');     
$mail->isHTML(true);                                  
$mail->Subject = 'Formularz kontaktowy';
$mail->Body    = createBody();

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
    $_SESSION['sent'] =  "<p class='sent'>Nie można wysłać wiadomości. Spróbuj ponownie póżniej!</p>";
    header('Location: contact.php');
} else {
    echo 'Message has been sent';
    $_SESSION['sent'] = "<p class='sent'>Wiadomość została wysłana</p>";
    header('Location: contact.php');
}
?>