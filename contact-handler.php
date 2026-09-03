<?php
/**
 * Processes the home page contact form and emails the enquiry to the
 * business inbox. Redirects back to the contact section with a status flag.
 */
require_once __DIR__ . '/includes/config.php';

function redirect_with_status($status) {
    header('Location: /?contact=' . $status . '#contact');
    exit;
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    redirect_with_status('error');
}

// Honeypot field — real visitors never fill this in.
if (!empty($_POST['company'])) {
    redirect_with_status('success');
}

$name    = trim($_POST['name'] ?? '');
$phone   = trim($_POST['phone'] ?? '');
$email   = trim($_POST['email'] ?? '');
$subject = trim($_POST['subject'] ?? 'General Enquiry');
$message = trim($_POST['message'] ?? '');

if ($name === '' || $message === '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    redirect_with_status('error');
}

$to      = CONTACT_EMAIL;
$mail_subject = 'New Website Enquiry: ' . $subject;

$body  = "You have a new enquiry from the Ngalo website:\n\n";
$body .= "Name: {$name}\n";
$body .= "Phone: " . ($phone !== '' ? $phone : 'Not provided') . "\n";
$body .= "Email: {$email}\n";
$body .= "Subject: {$subject}\n\n";
$body .= "Message:\n{$message}\n";

$headers   = [];
$headers[] = 'From: ' . SITE_NAME . ' Website <no-reply@ngalogroup.com>';
$headers[] = 'Reply-To: ' . $email;
$headers[] = 'X-Mailer: PHP/' . phpversion();

$sent = @mail($to, $mail_subject, $body, implode("\r\n", $headers));

redirect_with_status($sent ? 'success' : 'error');
