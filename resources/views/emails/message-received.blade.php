<!DOCTYPE html>
<html>
<head>
	<title>Message</title>
</head>
<body>
	Contenido del email
	<p>Recibiste un mensaje de: {{ $msg['name'] }} - {{ $msg['email'] }}</p>
	<p><strong>Asunto:</strong>{{ $msg['subject'] }}</p>
	<p><strong>Contenido:</strong>{{ $msg['content'] }}</p>
</body>
</html>
