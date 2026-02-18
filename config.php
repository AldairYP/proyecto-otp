<?php
// config.php
session_start();
date_default_timezone_set('America/Lima'); 

define('BASE_URL', 'http://localhost/mvcalex/'); 

// Funciones Helper [cite: 26]
function redirect($url) {
    header("Location: " . $url);
    exit();
}

function isLoggedIn() {
    return isset($_SESSION['user_id']); // [cite: 28]
}
?>