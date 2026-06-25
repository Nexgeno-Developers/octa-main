<?php
/**
 * Test page for email_gettouch function (using Composer PHPMailer)
 */

// Load Composer autoloader
require_once __DIR__ . '/vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Mock Mailstable class for testing (since this is a Yii model)
if (!class_exists('Mailstable')) {
    class Mailstable {
        public $mailtitle;
        public $mailcontent;
        
        public static function model() {
            return new self();
        }
        
        public function findByPk($id) {
            $obj = new self();
            // Set default test values for mail template ID 5
            $obj->mailtitle = "Get In Touch - Test Email";
            $obj->mailcontent = "Hello [NAME],\n\nDate: [DATE]\nEmail: [EMAIL]\nPhone: [PHONE]\nCourse: [COURSE]\nWhatsApp: [WHATSAPP]\n\nThank you for contacting us!";
            return $obj;
        }
    }
}

// Include the mail functions file (which sets up globals and uses PHPMailer via Composer)
require_once('mailfunctions.php');

// Test data array for email_gettouch function
// Format: $spram[1]=NAME, [2]=EMAIL, [3]=PHONE, [4]=COURSE, [6]=WHATSAPP
$test_data = array(
    1 => 'John Doe',           // NAME
    2 => 'john.doe@example.com', // EMAIL
    3 => '+1234567890',        // PHONE
    4 => 'CCNA Training',      // COURSE
    6 => '+1234567890'         // WHATSAPP
);

// Display test information
echo "<h1>Test Page for email_gettouch Function</h1>";
echo "<hr>";
echo "<h2>Test Parameters:</h2>";
echo "<pre>";
echo "Name: " . $test_data[1] . "\n";
echo "Email: " . $test_data[2] . "\n";
echo "Phone: " . $test_data[3] . "\n";
echo "Course: " . $test_data[4] . "\n";
echo "WhatsApp: " . $test_data[6] . "\n";
echo "</pre>";
echo "<hr>";

// Display global configuration
echo "<h2>Email Configuration:</h2>";
echo "<pre>";
echo "Host: " . $GLOBALS["host"] . "\n";
echo "Port: " . $GLOBALS["port"] . "\n";
echo "Username: " . $GLOBALS["username"] . "\n";
echo "Date: " . $GLOBALS["mydate"] . "\n";
echo "</pre>";
echo "<hr>";

// Execute the function with better error checking
echo "<h2>Executing email_gettouch function...</h2>";

// Execute the function directly (it already has proper error handling)
try {
    $result = email_gettouch($test_data);
    
    if ($result === true) {
        echo "<p style='color: green; font-weight: bold;'>✓ Email sent successfully!</p>";
        echo "<p>The email was sent to: " . htmlspecialchars($GLOBALS["username"]) . "</p>";
    } else {
        echo "<p style='color: red; font-weight: bold;'>✗ Email sending failed!</p>";
        echo "<p style='color: red;'>The function returned false. Check error logs for details.</p>";
    }
} catch (Exception $e) {
    echo "<p style='color: red; font-weight: bold;'>✗ Error executing function:</p>";
    echo "<pre style='color: red; background: #ffe0e0; padding: 10px;'>" . htmlspecialchars($e->getMessage()) . "\n";
    echo htmlspecialchars($e->getTraceAsString()) . "</pre>";
}

echo "<hr>";
echo "<p><strong>Note:</strong> Check your email inbox and any error logs for the actual email sending status.</p>";
?>

