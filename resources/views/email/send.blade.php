<!DOCTYPE html>
<html>
<head>
    <title>Hayed Consulting</title>
</head>
<body>
    <h1>Email Verification</h1>
    <h3>Please verify your email with bellow link: </h3>
    <a href="{{ route('user.verify', $token) }}">Verify Email</a>
   
    <p>Thank you</p>
</body>
</html>