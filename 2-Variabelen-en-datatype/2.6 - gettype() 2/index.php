<!DOCTYPE html>
<html>
<body>

<?php
  $br="<br>";
  $regelTekst1="Dit is de string";
  echo $regelTekst1;
  echo $br;
  echo gettype($regelTekst1);
 
  echo $br;
  echo $br;

  $regel = 5985;
  echo ($regel);
  echo $br;
  echo gettype($regel);

  echo $br;
  echo $br;

  $x = 10.365;
  echo($x);
  echo $br;
  var_dump ($x);

  echo $br;
  echo $br;

  $true = true;
  $false = false;
  echo $true;
  echo $br;
  echo gettype($false);
  echo $br;
  echo $false;
  echo $br;
  echo gettype($true);

  echo $br;
  echo $br;

  $world = "Hello world!";
  echo $world;
  echo $br;
  $world = null;
  var_dump($world);
?>

</body>
</html> 