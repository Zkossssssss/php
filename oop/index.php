<?php 
header('Content-Type: text/html; charset=utf-8');
require_once 'user.php';

$user = new User();
$user->set('Konstantin', 'admin', '123');
$user->SaveToSession();
$user->show();
?>