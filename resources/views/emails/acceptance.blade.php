<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Service Acceptance Notification</title>
</head>
<body>
    <p>Dear {{ $sender->name }},</p>

    <p>We are pleased to inform you that your service has been successfully processed.</p>

    <p>Contact them on email : {{ $receiver->email }}</p>
    <p>or on phone number: {{ $receiver->phone }}</p>
    <p>Date Début: {{ $service->date }}</p>
    <p>Durée: {{ $service->duree }} hrs</p>

    <p>Thank you for choosing our services!</p>

    <p>Best regards,<br>
    KHADAMATI</p>
</body>
</html>
