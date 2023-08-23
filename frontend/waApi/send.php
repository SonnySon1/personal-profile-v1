<?php  


require_once ('vendor/autoload.php'); // if you use Composer
//require_once('ultramsg.class.php'); // if you download ultramsg.class.php
    

function pes($dat){

$namaDepan           = htmlspecialchars($dat['namaDepan']);
$namaBelakang        = htmlspecialchars($dat['namaBelakang']);
$email               = htmlspecialchars($dat['email']);
$subject             = htmlspecialchars($dat['subject']);
$message             = htmlspecialchars($dat['message']);


$nama = $namaDepan.' '.$namaBelakang;

$token="ub5ygksehmtrht9v"; // Ultramsg.com token
$instance_id="instance41014"; // Ultramsg.com instance id
$client = new UltraMsg\WhatsAppApi($token,$instance_id);
    
$to="+6281313058566"; 
$body="
___________________________ \n
     Your Client Message \n
      name    :  $nama \n
      email   :  $email \n
      subject :  $subject \n
      message :  $message \n
___________________________ \n
        "; 
$api=$client->sendChatMessage($to,$body);
print_r($api);
}











?>