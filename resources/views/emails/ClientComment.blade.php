<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Service Commentaires Notification</title>
</head>
<body>
    <p>Dear {{ $receiver->name }},</p>

    <p>We hope you enjoyed using our service!</p>

    <p>We noticed that{{ $sender->name }}  has left a comment on the service you've used. Sharing your own experience by leaving a comment will allow you to see his  feedback</p>


    <p>Please take a moment to share your thoughts and help us improve our services.</p>

    <p>Best regards,<br>
    KHADAMATI</p>
</body>
</html>
