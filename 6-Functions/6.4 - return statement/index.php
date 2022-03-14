<!DOCTYPE html>
<body>

<?PHP
function TienProcentKorting(){
$koopPrijs = 85.00;
$korting = 10.00;
echo $koopPrijs - ($koopPrijs / $korting);   
}
TienProcentKorting()

?>

</body>
</html>