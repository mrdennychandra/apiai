<?php
$params = json_decode(file_get_contents('php://input'));
$text = 'anda memesan ' . $params;
$out = [
    'speech' => $text,
    'displayText' => $text,
    'data' => NULL,
    'contextOut' => $params,
    'source' => 'webhook'];
header('Content-type: application/json');
echo json_encode($out);
?>