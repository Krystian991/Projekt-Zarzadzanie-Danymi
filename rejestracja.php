<?php
session_start();
$login= $_POST['Login'];
$haslo= md5($_POST['Haslo']);
$email= $_POST['Email'];
$NrTelefonu= $_POST['NrTelefonu'];
$Zamieszkanie= $_POST['Zamieszkanie'];
$data_urodzenia= $_POST['Data_Urodzenia'];
$existing_user = false;
$polaczenie = @new mysqli('localhost', 'root', '', 'projekt');
if ($polaczenie->connect_error != 0){
echo 'Wystąpił błąd połączenia: ' . $polaczenie->connect_error;
}
else {
    $sql_check = "SELECT Login FROM uzytkownicy";
    $result = $polaczenie->query($sql_check);
    if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
        if($row["Login"]==$login){
          $existing_user = true;
        }
      }
    }
    if($existing_user==false){
      $sql = "INSERT INTO uzytkownicy (Login,Haslo,Email,NrTelefonu,Zamieszkanie,DataUrodzenia)VALUES ('$login','$haslo','$email','$NrTelefonu','$Zamieszkanie','$data_urodzenia')";
      $sql2 = "INSERT INTO role (Rola)VALUES ('uzytkownik')";
      if ($polaczenie->query($sql) === TRUE && $polaczenie->query($sql2)) {
        $_SESSION["login"] = $login;
        header("Location: zaloguj.php");
        } else {
          echo "Blad: " . $sql . "<br>" . $polaczenie->error;
        }
    }else{
      echo "Taki uzytkownik juz istnieje";
    }

  $polaczenie->close();
} 
?>