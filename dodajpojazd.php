<?php
session_start();
$marka= $_POST['Marka'];
$vin= $_POST['Vin'];
$nrRej = $_POST['nrRej'];
$log = $_SESSION['login'];
$polaczenie = @new mysqli('localhost', 'root', '', 'projekt');
if ($polaczenie->connect_error != 0){
    echo 'Wystąpił błąd połączenia: ' . $polaczenie->connect_error;
}
else {
      if (isset($_SESSION['login'])) {
        $sql = "INSERT INTO pojazdy (Marka,Vin,NrRej,Login)VALUES ('$marka','$vin','$nrRej','$log')";
        if ($polaczenie->query($sql) === TRUE) {
          header("Location: dodawaniePojazdu.php");
          } else {
            echo "Blad: " . $sql . "<br>" . $polaczenie->error;
          }
      }
    $polaczenie->close();
    }
?>