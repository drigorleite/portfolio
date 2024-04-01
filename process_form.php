<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $subject = $_POST['subject'];
    
    // Set your email address here
    $to = 'rleite_dev@outlook.com';
    $subject = 'New Form Submission';
    $message = "First Name: $firstname\nLast Name: $lastname\nSubject:\n$subject";
    
    // Send email
    if (mail($to, $subject, $message)) {
        echo "<script>alert('Thank you for your submission!');</script>";
    } else {
        echo "<script>alert('Error sending email. Please try again later.');</script>";
    }
} else {
    echo "<script>alert('Invalid request.');</script>";
}
?>
