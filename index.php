<?php
$barang = $_POST['barang'];
$text = 'anda memesan ' . $barang;
$out = [
    'speech' => $text,
    'displayText' => $text,
    'data' => new stdClass(),
    'contextOut' => $_POST,
    'source' => 'webhook'];
header('Content-type: application/json');
echo json_encode($out);
?>