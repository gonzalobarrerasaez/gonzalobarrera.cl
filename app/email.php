<?php
include_once '../config.php';
try {
    $toName = 'Gonzalo';
    $toEmail = 'gbarrerasaez@proton.me';
    $fromName = $_POST['name'];
    $fromEmail = $_POST['email'];
    $subject = 'Contacto desde gonzalobarrera.cl';
    $htmlMessage = '<p>Hola! ' . $toName . ',</p><p>'.$_POST['message'].'</p>';

    $data = array(
        "sender" => array(
            "email" => $fromEmail,
            "name" => $fromName
        ),
        "to" => array(
            array(
                "email" => $toEmail,
                "name" => $toName
            )
        ),
        "subject" => $subject,
        "htmlContent" => '<html><head></head><body><p>' . $htmlMessage . '</p></p></body></html>'
    );
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://api.sendinblue.com/v3/smtp/email');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
    $headers = array();
    $headers[] = 'Accept: application/json';
    $headers[] = 'Api-Key: '.$apiKeyEmail;
    $headers[] = 'Content-Type: application/json';
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    $result = curl_exec($ch);
    if (curl_errno($ch)) {
        echo 'Error:' . curl_error($ch);
    }
    curl_close($ch);
    print_r($result);
} catch (\Throwable $th) {
    echo $th;
}
