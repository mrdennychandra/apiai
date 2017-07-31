<?php
$params = json_decode(file_get_contents('php://input'));
$text = 'anda memesan ' . implode( ", ", $params );
$out = [
    'speech' => $text,
    'displayText' => $text,
    'data' => NULL,
    'contextOut' => NULL,
    'source' => 'webhook'];
header('Content-type: application/json');
echo json_encode($out);
?>