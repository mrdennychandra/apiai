<?php
ini_set('always_populate_raw_post_data', '-1');

$params = json_decode(file_get_contents('php://input'),TRUE);
//$barang = $_SERVER['barang'];
$text = 'anda memesan ' . $params['lang'];
$out = [
    'speech' => $text,
    'displayText' => $text,
    'data' => NULL,
    'contextOut' => $params['lang'],
    'source' => 'webhook'];
header('Content-type: application/json');
echo json_encode($out);
?>