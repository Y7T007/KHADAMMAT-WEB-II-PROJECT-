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

    <p>We appreciate you sharing your feedback on our service. Your comment has been successfully recorded.</p>

    <p>We want to inform you that we'll notify you as soon as {{ $receiver->name }} leaves their own comment on your service.</p>


    <p>Once again, thank you for your participation and valuable feedback.</p>

    <p>Best regards,<br>
    KHADAMATI</p>
</body>
</html>
