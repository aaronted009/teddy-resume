<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fname = htmlspecialchars($_POST['fname']);
    $lname = htmlspecialchars($_POST['lname']);
    $email = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);

    $to = 'aaronpromail@gmail.com';
    $body = "Name: $fname $lname\nEmail: $email\nMessage:\n$message";

    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo 'Thank you for contacting us!';
    } else {
        echo 'There was an error sending your message. Please try again later.';
    }
} else {
    echo 'Invalid request.';
}
?>
