<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact Form Submission</title>
</head>
<body>
    <h2>Contact Form Submission</h2>
    <p><strong>Name:</strong> {{ $name }}</p>
    <p><strong>Email:</strong> {{ $details['email'] }}</p>
    <p><strong>Subject:</strong> {{ $details['subject'] }}</p>
    <p><strong>Message:</strong> {{ $details['message'] }}</p>
</body>
</html>