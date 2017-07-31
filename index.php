<?php
$barang = $_POST['barang'];
$text = 'anda memesan ' . $barang;
$out = [
    'speech' => $text,
    'displayText' => $text,
    'data' => [],
    'contextOut' => [],
    'source' => 'webhook'];
header('Content-type: application/json');
echo json_encode($_POST);
?>