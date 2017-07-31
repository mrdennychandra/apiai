<?php
$barang = $_POST['barang'];
$text = 'anda memesan ' . $barang;
$out = [
    'speech' => $text,
    'displayText' => $text,
    'data' => var_export($_POST),
    'contextOut' => [],
    'source' => 'webhook'];
header('Content-type: application/json');
echo json_encode($out);
?>