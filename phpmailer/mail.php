<?php

/**
 * This example shows how to send via Google's Gmail servers using XOAUTH2 authentication.
 */

//Import PHPMailer classes into the global namespace
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\OAuth;
// Alias the League Google OAuth2 provider class
use League\OAuth2\Client\Provider\Google;

//SMTP needs accurate times, and the PHP time zone MUST be set
//This should be done in your php.ini, but this is how to do it if you don't have access to that
date_default_timezone_set("Europe/Stockholm");  

//Load dependencies from composer
//If this causes an error, run 'composer install'
require '../vendor/autoload.php';

//Create a new PHPMailer instance
$mail = new PHPMailer();

try {

    //Tell PHPMailer to use SMTP
    $mail->isSMTP();

    //Enable SMTP debugging
    $mail->SMTPDebug = SMTP::DEBUG_OFF;
    // SMTP::DEBUG_CLIENT = client messages
    // SMTP::DEBUG_SERVER = client and server messages
    // uncomment below to enable debugging
    // $mail->SMTPDebug = SMTP::DEBUG_SERVER; 

    //Set the hostname of the mail server
    $mail->Host = 'smtp.gmail.com';

    //Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
    $mail->Port = 587;

    //Set the encryption mechanism to use - STARTTLS or SMTPS
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;

    //Whether to use SMTP authentication
    $mail->SMTPAuth = true;

    //Set AuthType to use XOAUTH2
    $mail->AuthType = 'XOAUTH2';

    //Fill in authentication details here
    //Either the gmail account owner, or the user that gave consent
    $email = 'gg.maciek@gmail.com';
    $clientId = '568692706300-t8grtcpbtlfa9h06lva3gifkj676kat8.apps.googleusercontent.com';
    $clientSecret = 'Zy_iLd6yj_08RMsFS323kHwL';

    //Obtained by configuring and running get_oauth_token.php
    //after setting up an app in Google Developer Console.
    $refreshToken = '1//0cqFa71deJgEFCgYIARAAGAwSNwF-L9IrniOrLcwyOV_LqIOU0ksZ3cDTiu7aBl5zTydyPVIzB9nGk7iDptA0ge95kw2gaUc2wyI';

    //Create a new OAuth2 provider instance
    $provider = new Google(
        [
            'clientId' => $clientId,
            'clientSecret' => $clientSecret,
        ]
    );

    //Pass the OAuth provider instance to PHPMailer
    $mail->setOAuth(
        new OAuth(
            [
                'provider' => $provider,
                'clientId' => $clientId,
                'clientSecret' => $clientSecret,
                'refreshToken' => $refreshToken,
                'userName' => $email,
            ]
        )
    );

    // Get Message content
    $data = file_get_contents( "php://input" ); 
    $data = json_decode( $data );
    $name = $data->name;
    $message = $data->message;
    $subject = $data->subject;
    $email_from = $data->email;

    if ($name === '') {
        echo json_encode(array('message' => 'Name cannot be empty', 'success' => 0));
        exit();
    }
    if ($email_from === '') {
        echo json_encode(array('message' => 'Email cannot be empty', 'success' => 0));
        exit();
    } else {
        if (!filter_var($email_from, FILTER_VALIDATE_EMAIL)) {
            echo json_encode(array('message' => 'Email format invalid.', 'success' => 0));
            exit();
        }
    }
    if ($subject === '') {
        echo json_encode(array('message' => 'Subject cannot be empty', 'success' => 0));
        exit();
    }
    if ($message === '') {
        echo json_encode(array('message' => 'Message cannot be empty', 'success' => 0));
        exit();
    }

    $content = "From: " . $name . "\nEmail: " . $email_from . "\nSubject: " . $subject . "\nMessage:\n" . $message;
    $content_html = "<b>From:</b><br>" . $name . "<br><b>Email:</b><br>" . $email_from . "<br><b>Subject:</b><br>" . $subject . "<br><b>Message:</b><br>" . $message;
    // Set email format to HTML
    $mail->isHTML(true);

    //Set who the message is to be sent from
    //For gmail, this generally needs to be the same as the user you logged in as
    $mail->setFrom($email_from, $name);

    //Set who the message is to be sent to
    $mail->addAddress('maciej.gumulka@gmail.com', 'Maciej Gumulka');

    //Set the subject line
    $mail->Subject = "Portfolio Contact Form Submission";

    //Read an HTML message body from an external file, convert referenced images to embedded,
    //convert HTML into a basic plain-text alternative body
    $mail->CharSet = PHPMailer::CHARSET_UTF8;
    $mail->Body = "<b>Contact form submission</b><br>" . $content_html;
    // $mail->msgHTML(file_get_contents('contents.html'), __DIR__);

    //Replace the plain text body with one created manually
    $mail->AltBody = "From: " . $name . "\nEmail: " . $email_from . "\nSubject: " . $subject . "\nMessage:\n" . $message;

    //Attach an image file
    // $mail->addAttachment('images/phpmailer_mini.png');

    //send the message, check for errors
    $mail->send();
    echo json_encode(array('message' => 'Email successfully sent!', 'success' => 1));
    exit();
} catch (Exception $e) {
    // echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    echo json_encode(array('message' => "Unexpected error occured", 'success' => 0));
    exit();
}
