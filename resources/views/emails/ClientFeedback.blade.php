<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Service Commentaires Notification</title>
</head>
<body>
    <p>Dear {{ $sender->name }},</p>

    <p>We're writing to inform you that a comment has been left by {{ $receiver->name }}on the service you've used.</p>


    <p>you can find it in your personal space on our platform..</p>
    <p>Thanks again for your collaboration and valuable feedback.</p>
    <p>Thank you for choosing our services!</p>

    <p>Best regards,<br>
    KHADAMATI</p>
</body>
</html>
