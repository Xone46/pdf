<?php
	$server="localhost";
	$user="root";
	$pw="ossamakerroumi";
	$bas="btss";
	$bd=mysqli_connect($server,$user,$pw,$bas);
if(isset($_POST['ok'])){
	$mat=$_POST['mat'];
	$nom=$_POST['no'];
	$prenom=$_POST['pr'];
	$ville=$_POST['vl'];
	$section=$_POST['sc'];
    $dn=$_POST['date'];
	$sql="INSERT INTO etudient(mat,nom,prenom,ville,section,date_nais) VALUES('','$nom','$prenom','$ville','$section','$dn')";
	  @mysqli_query($bd,$sql ) or die('erreur');
}
?>
