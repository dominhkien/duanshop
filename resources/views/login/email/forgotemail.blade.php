<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Password recovery</title>
</head>

<body style="font-family: Arial, sans-serif; margin: 0; padding: 0; background-color: #f5f5f5;">
    <div
        style="max-width: 600px; margin: 20px auto; padding: 20px; background-color: #ffffff; border-radius: 8px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
        <h2 style="color: #333333; text-align: center; margin-bottom: 20px;">Request a password reset</h2>
        <p style="font-size: 16px; color: #333333; margin-bottom: 20px;">
            We received your request to reset your password. If you have already made this request, please click
            Link below to update your password.
        </p>
        <a href="{{ route('reset.password', [$token, $email]) }}"
            style="display: inline-block; padding: 10px 20px; font-size: 16px; color: #ffffff; background-color: #007bff; text-decoration: none; border-radius: 5px; text-align: center;">
            Update password
        </a>
    </div>
</body>

</html>