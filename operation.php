<html>
<style>
#a{
	float: none;
    background-color: red;
    height: 40;
}
#c{
	float: left;
    background-color: yellow;
    height: 689px;
    width: 740px;
    
}
#k{
	background-color: white;
    height: 631px;
    width: 460px;
    margin: auto;
    margin-top: 40;
    border-radius: 20px;
    border: 2px solid mediumslateblue;
}
lable{
    font-size: 20px;
    font-family: arial;
}
input{
    border-radius: 5px;
    height: 30;
    width: 200;	
}
p{
	margin: 17px 0px 0px 11px;
  
}


</style>
<body>

<?php
session_start();
$bd=mysqli_connect("localhost","root","","marathon");
$debut = 0; 
$sql="SELECT * FROM `athlete` LIMIT $debut,3";
$result=mysqli_query($bd,$sql) ;
while($t_etudi=mysqli_Fetch_array($result)){
$f = "
<form>
<input type='hidden' name='d' value='{$t_etudi['dossard']}'><br>
<input type='text' name='mchrono' value=''><br>
</form>
";
$_SESSION['a']=$t_etudi['dossard'];

echo $f ;
}
$b = "
<form>
<input type='submit' name ='s' value='lance'>
</form>
     ";
	 echo $b ;
	 	 if(isset($_POST['s']))
{
if(!empty($_POST['d']) and !empty($_POST['mchrono']))	{
   $mchrono = $_POST['mchrono'];
   echo $mchrono ;
   $v = $_SESSION['a'];
$sql="INSERT INTO athlete(mchrono) VALUES('$mchrono') WHERE  dossard = '16'";
$result=mysqli_query($bd,$sql) ;
}
}


?>

</div>

</body>
</html>