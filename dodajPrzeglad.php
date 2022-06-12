<?php
session_start();
//$marka= $_POST['Marka'];
$vin= $_POST['Vin'];
$nrRej = $_POST['nrRej'];
$Przeglad = $_POST['Przeglad'];
if($Przeglad!=1)
  {
    $Przeglad = 0 ;
  }

$polaczenie = @new mysqli('localhost', 'root', '', 'projekt');
if ($polaczenie->connect_error != 0){
    echo 'Wystąpił błąd połączenia: ' . $polaczenie->connect_error;
}
else {
      if (isset($_SESSION['login'])) {
        //$sql = "INSERT INTO pojazdy (Marka,Vin,NrRej)VALUES ('$marka','$vin','$nrRej')";
        $sql = "UPDATE `pojazdy` SET `Przeglad`='$Przeglad' WHERE Vin = '$vin' AND NrRej = '$nrRej'";
        if ($polaczenie->query($sql) === TRUE) {
          header("Location: dodawaniePrzegladu.php");
          } else {
            echo "Blad: " . $sql . "<br>" . $polaczenie->error;
          }
      }
    $polaczenie->close();
    }
?>