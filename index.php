<?php
//$params = json_decode(file_get_contents('php://input'));
$barang = $_SERVER['barang'];
$text = 'anda memesan ' . $barang;
$out = [
    'speech' => $text,
    'displayText' => $text,
    'data' => NULL,
    'contextOut' => NULL,
    'source' => 'webhook'];
header('Content-type: application/json');
echo json_encode($out);
?>