<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $subject }}</title>
</head>
<body>
    <h4>{{ $header }}</h4>
    <p>{!! $mailMessage !!}</p>
    <br>
    <br>
    <p>Warm regards,</p>
    <h4>{{ config('app.name') }}</h4>
</body>
</html>
