<?php
session_start();
$log = $_POST['login'];
$rola= $_POST['rola'];
echo $rola;

$polaczenie = @new mysqli('localhost', 'root', '', 'projekt');
if ($polaczenie->connect_error != 0){
    echo 'Wystąpił błąd połączenia: ' . $polaczenie->connect_error;
}
else {
      if (isset($_SESSION['login'])) {
        $sql = "UPDATE `role` SET `Rola`='$rola' WHERE IdUzytkownika =(SELECT IdUzytkownika FROM uzytkownicy WHERE Login = '$log')";
        if ($polaczenie->query($sql) === TRUE) {
          header("Location: Uprawnienia.php");
          } else {
            echo "Blad: " . $sql . "<br>" . $polaczenie->error;
          }
      }
    $polaczenie->close();
    }
?>