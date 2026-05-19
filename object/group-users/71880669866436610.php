<?php
http_response_code(200);
header('Content-Type: application/json');

$data = [
    "gamerTag" => 71880669866436610,
    "updated" => 1776317744699,
    "member" => (object)[]
];

echo json_encode($data);