<?php
$barang = $_POST['barang'];
$text = 'anda memesan ' . $_POST;
$out = [
    'speech' => $text,
    'displayText' => $text,
    'data' => new stdClass(),
    'contextOut' => [],
    'source' => 'webhook'];
header('Content-type: application/json');
echo json_encode($out);
?>