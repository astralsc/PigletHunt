<?php
http_response_code(200);
header('Content-Type: application/json');

$data = [1700000000000, 'server'];

echo json_encode($data);