<!DOCTYPE html>
<html lang="es" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Codigo QR</title>
</head>
<body style="text-align: center;">
<div style="height: 800px; position: relative">
    <img src="{{url($qr_url)}}" style="width: auto; position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);" alt="qrcode">
</div>
<p>{{url($qr_url)}}</p>
</body>
</html>
