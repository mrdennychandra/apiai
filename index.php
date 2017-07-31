<?php
$params = json_decode(file_get_contents('php://input'),TRUE);
$barang = $_SERVER['barang'];
$text = 'anda memesan ' . $barang;
$out = [
    'speech' => $text,
    'displayText' => $text,
    'data' => NULL,
    'contextOut' => $params,
    'source' => 'webhook'];
header('Content-type: application/json');
echo json_encode($out);
?>