<?php
  session_start();
  $login= $_POST['Login'];
  $haslo= md5($_POST['Haslo']);
  $polaczenie = @new mysqli('localhost', 'root', '', 'projekt');
    if ($polaczenie->connect_error != 0){
      echo 'Wystąpił błąd połączenia: ' . $polaczenie->connect_error;
    }
    else {
        $sql_check = "SELECT Login,Haslo FROM uzytkownicy";
        $sql_role = "SELECT role.Rola FROM `role` INNER JOIN uzytkownicy on role.IdUzytkownika = uzytkownicy.IdUzytkownika WHERE uzytkownicy.Login = '$login'";
        $result = $polaczenie->query($sql_check);
        $result2 = $polaczenie->query($sql_role);
        $row2 = $result2->fetch_assoc();
        
        if ($result->num_rows > 0) {
          while($row = $result->fetch_assoc()) {
            if($row["Login"]==$login&&$row["Haslo"]==$haslo){
              $_SESSION["login"] = $login;
              $_SESSION["Rola"] = $row2["Rola"];
              header("Location: index.php");
            }
          }
        }
        
      $polaczenie->close();
    } 
?>