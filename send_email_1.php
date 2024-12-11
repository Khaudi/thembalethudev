<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Set the recipient email address
    $to = "fortune@thembalethudev.org";

    // Set the email subject
    $subject = "Testimony Submission";

    // Compose the email message
    $body = "Name: $name\n";
    $body .= "Email: $email\n";
    $body .= "Message:\n$message\n";

    // Set additional headers
    $headers = "From: $name <$email>\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    // Attempt to send the email
    if (mail($to, $subject, $body, $headers)) {
        // Email sent successfully
        echo "success";
    } else {
        // Email sending failed
        echo "error";
    }
} else {
    // Redirect to the form page if accessed directly
    header("Location: your_form_page.php");
    exit;
}
?>
