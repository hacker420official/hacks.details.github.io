<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "memanh174@gmail.com";  // your email
    $subject = "New Feedback from Website";

    $name = htmlspecialchars($_POST['username']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);
    $gender = htmlspecialchars($_POST['gender']);
    $country = htmlspecialchars($_POST['country']);
    $interests = isset($_POST['interest']) ? implode(", ", $_POST['interest']) : "None";

    $body = "Name: $name\n";
    $body .= "Email: $email\n";
    $body .= "Gender: $gender\n";
    $body .= "Country: $country\n";
    $body .= "Interests: $interests\n\n";
    $body .= "Message:\n$message";

    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "✅ Feedback successfully sent!";
    } else {
        echo "❌ Failed to send feedback. Please try again.";
    }
}
?>
