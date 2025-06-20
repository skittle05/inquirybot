<?php
// Prevent direct access to configuration files
if (!defined('SECURE_ACCESS')) {
    die('Direct access to this file is not allowed.');
}

// Email Configuration
// To set up Gmail for sending emails:
// 1. Go to your Google Account settings: https://myaccount.google.com/
// 2. Enable 2-Step Verification if not already enabled
// 3. Go to Security → App passwords (https://myaccount.google.com/apppasswords)
// 4. Select "Other" from the dropdown and enter "Gordon College Chatbot"
// 5. Click "Generate" and copy the 16-digit app password
// 6. Replace the values below with your Gmail address and the generated app password

// Example:
// define('GMAIL_USERNAME', 'johndoe@gmail.com');
// define('GMAIL_APP_PASSWORD', 'abcd efgh ijkl mnop');

define('GMAIL_USERNAME', 'trancem260@gmail.com'); // Replace with your Gmail address
define('GMAIL_APP_PASSWORD', 'ptvf syxl qtpc fpqs'); // Replace with your 16-digit app password

// Database Configuration
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'chatbot');

// SMTP Configuration (Gmail)
define('SMTP_HOST', 'smtp.gmail.com');
define('SMTP_PORT', 587);
define('SMTP_USERNAME', 'trancem260@gmail.com'); // Your Gmail address
define('SMTP_PASSWORD', 'ptvf syxl qtpc fpqs'); // Your Gmail App Password

// To set up Gmail App Password:
// 1. Go to your Google Account settings: https://myaccount.google.com/
// 2. Enable 2-Step Verification if not already enabled
// 3. Go to Security → App passwords (https://myaccount.google.com/apppasswords)
// 4. Select "Other" from the dropdown and enter "Gordon College"
// 5. Click "Generate" and copy the 16-digit app password
// 6. Replace SMTP_PASSWORD above with the generated password

// Site Configuration
define('SITE_URL', 'http://localhost/login');
define('SITE_NAME', 'Gordon College');

// Security Configuration
define('PASSWORD_RESET_EXPIRY', 3600); // 1 hour in seconds
define('VERIFICATION_EXPIRY', 86400); // 24 hours in seconds

// Error Reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);
ini_set('log_errors', 1);
ini_set('error_log', __DIR__ . '/error.log');

// Database Connection
$con = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
