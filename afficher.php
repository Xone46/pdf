<?php
$sommeages=0;
$nomberdesdon=0;
$somme_dons=0;
$file_aff = fopen('membre.txt','r');
echo "Liste:
<table border=1><tr><th>nom</th><th>age</th><th>email</th><th>Dons</th></tr>";
while (!feof($file_aff)) {
	$tfille=fgets($file_aff);
	$nomberdesdon++;

	$tabfille=explode("|",trim($tfille));
$sommeages += $tabfille[1];
	$somme_dons+=$tabfille[3];
	echo "<tr><td>{$tabfille[0]}</td><td>{$tabfille[1]}</td><td>{$tabfille[2]}</td><td>{$tabfille[3]}</td></tr>";

}
echo "<tr><td colspan=3>somme de dons:</td><td colspan=2>$somme_dons</td></tr>";
$moyenneage =$sommeages/$nomberdesdon;
			echo "<tr><td colspan=3>la moyenne age </th><td colspan=2>$moyenneage </tr>";


fclose($file_aff);









?>