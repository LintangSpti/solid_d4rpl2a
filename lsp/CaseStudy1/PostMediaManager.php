<?php 
include_once "SoialMedia.php";

interface PostMediaManager extends SosialMedia{
    public function publishPost(): void;
}