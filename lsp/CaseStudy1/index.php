<?php

include_once "Instagram.php";
include_once "Whatsapp.php";
echo "===instagram===<br>";
$instagram = new Instagram();
$instagram->chat();
$instagram->publishPost();
$instagram->sendPhotoVideo();

echo "\n";
echo "===watsapp===<br>";
$whatsapp = new WhatsApp();
$whatsapp->chat();
$whatsapp->sendPhotoVideo();
$whatsapp->callGroupVideo();

?>
