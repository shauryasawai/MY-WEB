<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $question = $_POST['question'];

    $to = "sawaisushil@gmail.com"; 
    $subject = "Question from $name";
    $message = "Name: $name\n";
    $message .= "Email: $email\n";
    $message .= "Question:\n$question";

    // Send email
    mail($to, $subject, $message);

    // Redirect back to the HTML page after sending the email
    header("index.html");
    exit();
}
?>
