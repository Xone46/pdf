<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<form method="post" action="">
Nom : <br> <input type="text" name="Nm"> <br>
Age : <br> <input type="number" name="ag"> <br>
Email : <br> <input type="text" name="mail"> <br>
Valeur : <br> <input type="text" name="va"> <br>
<input type="submit" name="ok" value="VALIDER"> <br>

</form>

<a href="afficher.php">Afficher les Membres</a>	
<?php
if (isset($_POST['ok']))
{
$nom=$_POST['Nm'];
$agee=$_POST['ag'];
$email=$_POST['mail'];
$valeur=$_POST['va'];

$file = fopen('membre.txt','a');
$don = $nom.'|'.$agee.'|'.$email.'|'.$valeur."\n" ;
fputs($file,$don);	

}


?>
</body>
</html>