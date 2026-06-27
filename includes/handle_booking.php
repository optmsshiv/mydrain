<?php
// Simple form handler stub for the Service Request Form.
// Replace this with DB insert / email send logic as needed.

$success = false;
$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name    = trim($_POST['name'] ?? '');
    $phone   = trim($_POST['phone'] ?? '');
    $email   = trim($_POST['email'] ?? '');
    $service = trim($_POST['service'] ?? '');
    $address = trim($_POST['address'] ?? '');
    $message = trim($_POST['message'] ?? '');
    $time    = trim($_POST['preferred_time'] ?? '');

    if ($name === '' || $phone === '') {
        $error = 'Name and phone number are required.';
    } else {
        // TODO: insert into MySQL table `service_requests` and/or send email/WhatsApp notification.
        // Example:
        // $stmt = $pdo->prepare("INSERT INTO service_requests (name, phone, email, service, address, message, preferred_time, created_at) VALUES (?,?,?,?,?,?,?,NOW())");
        // $stmt->execute([$name, $phone, $email, $service, $address, $message, $time]);

        $success = true;
    }
}

header('Location: book.php?' . ($success ? 'success=1' : 'error=' . urlencode($error)));
exit;
