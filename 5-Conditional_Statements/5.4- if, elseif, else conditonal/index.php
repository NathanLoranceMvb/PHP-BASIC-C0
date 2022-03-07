<!DOCTYPE html>
<html>
<body>

<?php
$prod_besteld = 1;

if($prod_besteld < 10) {
    $prijs = 1.50;
} elseif($prod_besteld < 20) {
    $prijs = 1.25;
} else {
    $prijs = 1.00;
}
echo "$prijs ";

$prod_besteld = 11;

if($prod_besteld < 10) {
    $prijs = 1.50;
} elseif($prod_besteld < 20) {
    $prijs = 1.25;
} else {
    $prijs = 1.00;
}
echo "$prijs ";

$prod_besteld = 21;

if($prod_besteld < 10) {
    $prijs = 1.50;
} elseif($prod_besteld < 20) {
    $prijs = 1.25;
} else {
    $prijs = 1.00;
}
echo "$prijs ";

//1.00 krijgen als resultaat lukt niet het verkort het naar 1
?>

</body>
</html> 