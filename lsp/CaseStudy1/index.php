
<?php 
include_once "Instagram.php";
include_once "WhatsApp.php";
echo "<h3>instagram<br></h3>";
$instagram = new Instagram();
$instagram->chat();
$instagram->publishPost();
$instagram->sendPhotosAndVideos();

echo "\n";
echo "<h3>watsapp<br></h3>";
$whatsapp = new WhatsApp();
$whatsapp->chat();
$whatsapp->sendPhotosAndVideos();
$whatsapp->callGroupVideo();
