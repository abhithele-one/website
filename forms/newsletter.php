<?php
  /**
  * Requires the "PHP Email Form" library
  * The "PHP Email Form" library is available only in the pro version of the template
  * The library should be uploaded to: vendor/php-email-form/php-email-form.php
  * For more info and help: https://bootstrapmade.com/php-email-form/
  */

  // Replace contact@example.com with your real receiving email address
  $receiving_email_address = 'abhishekthele3@gmail.com'; // Change this to your actual email

  // Check if the "PHP Email Form" library exists
  if (file_exists($php_email_form = '../assets/vendor/php-email-form/php-email-form.php')) {
    include($php_email_form); // Include the PHP Email Form library
  } else {
    die('Unable to load the "PHP Email Form" Library!');
  }

  // Create a new PHP_Email_Form object
  $contact = new PHP_Email_Form;
  $contact->ajax = true;  // Enable AJAX submission (optional, depending on your setup)

  // Collect form data from the POST request
  $name = isset($_POST['name']) ? $_POST['name'] : 'No Name Provided';
  $email = isset($_POST['email']) ? $_POST['email'] : 'No Email Provided';
  $subject = isset($_POST['subject']) ? $_POST['subject'] : 'No Subject Provided';
  $message = isset($_POST['message']) ? $_POST['message'] : 'No Message Provided';

  // Set up email details
  $contact->to = $receiving_email_address;
  $contact->from_name = $name;
  $contact->from_email = $email;
  $contact->subject = "New Subscription: " . $subject;

  // Uncomment the SMTP configuration if you want to use SMTP
  $contact->smtp = array(
    'host' => 'smtp.gmail.com', // Your SMTP server (e.g., Gmail, SendGrid)
    'username' => 'abhishekthele3@gmail.com', // Your email username
    'password' => 'Abhi@123', // Your email password or app-specific password
    'port' => '587' // SMTP port (587 for TLS, 465 for SSL)
  );

  // Add the message content
  $contact->add_message($name, 'From');
  $contact->add_message($email, 'Email');
  $contact->add_message($message, 'Message', 10); // '10' is the minimum character length for the message

  // Send the email and echo the result
  echo $contact->send();
?>
