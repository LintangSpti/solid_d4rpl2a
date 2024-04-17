<?php
include ("VideoGroupManager.php");

class Whatsapp extends VideoGroupManager {
    public function chat(): void{
        echo "chatting on whatsapp .\n";
    }
    public function callGroupVideo(): void {
        echo "calling group video on whatsapp .\n";    
    }
    public function sendPhotoVideo(): void
    {
        echo "sending photo and video on whatsapp .\n";
    }
}
?>