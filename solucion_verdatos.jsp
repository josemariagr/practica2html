<%@page pageEncoding="UTF-8"%> 
<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8" />
<title>Recogida datos formulario: FAST</title>
</head>

<body>
<h1>fichero solucion_verdatos.jsp</h1>

<p>Se reciben los datos del formulario y se procesan con jsp</p>
<p>El nombre es: ${param.user}</p>
<p>Su correo electrónico es: ${param.mail}</p>
<p>Y ha marcado en la opción adulto: ${param.adulto}</p>

</body>
</html>
