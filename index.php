<?php
$barang = $_POST['barang'];
$text = 'anda memesan ' . $barang;
$out = [
    'speech' => $text,
    'displayText' => $text,
    'data' => NULL,
    'contextOut' => $_POST,
    'source' => 'webhook'];
header('Content-type: application/json');
echo json_encode($out);
?>