<?php
$cookie_name = "visite";
$cookie_value = "ok";
setcookie($cookie_name, $cookie_value, time() + (24*60*60)); 
?>
<html>
<body>

<?php

      echo "Cookie '" . $cookie_name . "' is set!<br>";
      echo "Value is: " . $_COOKIE[$cookie_name];
	  $tfichier=file('compt.txt');
      $vues=$tfichier[0];
      $vues++;
      $f=fopen('compt.txt',w);
      fputs($f,$vues);
      echo $vues;

?>



</body>
</html>