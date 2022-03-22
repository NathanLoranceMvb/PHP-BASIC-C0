<!DOCTYPE html>
<body>

<?PHP
function mijnNaamIsGroot(){
    $voornaam = "Mats ";
    $achternaam = "van Bork";
      $gehelenaam = $voornaam . $achternaam;
    $zin = "mijn naam is " . $gehelenaam;
    echo strtoupper($zin);
}
mijnNaamIsGroot();

?>

</body>
</html>