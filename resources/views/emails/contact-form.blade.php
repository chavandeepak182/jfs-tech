<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>New Contact Message</title>
</head>
<body>

    <h2>New Contact Form Submission</h2>

    <p><strong>Name:</strong> {{ $data['name'] }}</p>
    <p><strong>Email:</strong> {{ $data['email'] }}</p>
    <p><strong>Phone:</strong> {{ $data['phone_number'] }}</p>
    <p><strong>Subject:</strong> {{ $data['msg_subject'] }}</p>

    <hr>

    <p><strong>Message:</strong></p>
    <p>{{ $data['message'] }}</p>

</body>
</html>
