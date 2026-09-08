<?php
/**
 * SMTP credentials for the contact form, sent via PHPMailer.
 *
 * Setup:
 *   1. Create the info@ngalogroup.com mailbox in your host's control panel
 *      (cPanel: Email Accounts -> Create).
 *   2. Copy this file to "mail-config.php" in this same folder and fill in
 *      the real values below (cPanel's Email Accounts page has a
 *      "Connect Devices" / "Configuration" link showing the exact host,
 *      port and encryption for that mailbox).
 *   3. Never commit mail-config.php — it holds a real password and is
 *      already listed in .gitignore.
 *
 * If mail-config.php does not exist, contact-handler.php automatically
 * falls back to PHP's built-in mail() function, so the form keeps working
 * (less reliably) even before this is set up.
 */
return [
    'host'       => 'mail.ngalogroup.com',        // often mail.yourdomain.com
    'port'       => 465,                           // 465 for SMTPS, 587 for STARTTLS
    'encryption' => 'smtps',                       // 'smtps' for port 465, 'tls' for port 587
    'username'   => 'info@ngalogroup.com',         // the full mailbox address
    'password'   => 'REPLACE_WITH_MAILBOX_PASSWORD',
    'from_email' => 'info@ngalogroup.com',         // must usually match the username above
    'from_name'  => 'Ngalo Mobile Cycling Services',
];
