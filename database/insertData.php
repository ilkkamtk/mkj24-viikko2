<?php
global $DBH;
require 'dbConnect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['title']) && isset($_POST['description'])) {
        $sql = <<<EOT
        INSERT INTO MediaItems (user_id, filename, filesize, media_type, title, description, created_at) 
        VALUES (:user_id, :filename, :filesize, :media_type, :title, :description, :created_at)
        EOT;
    }
}
