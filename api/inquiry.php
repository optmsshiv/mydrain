<?php
header("Content-Type: application/json");

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(["error" => "Invalid request"]);
    exit;
}

// get data
$data = json_decode(file_get_contents("php://input"), true);

// process
echo json_encode([
    "status" => "success",
    "message" => "Inquiry received"
]);