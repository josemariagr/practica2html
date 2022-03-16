<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" 
    "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Recogida datos formulario: FAST</title>
</head>
<body>
<h1> fichero solucion_verdatos.php</h1>

<p> Se reciben los datos del formulariol y se procesan con php</p>

<?php
$user=$_POST["user"];
$mail=$_POST["mail"];
$adulto=$_POST["adulto"];

echo "El nombre es: $user<br>";
echo "Su mail es $mail <br>";
echo "Y ha marcado en la opción adulto $adulto";

?>

</body>
</html>
