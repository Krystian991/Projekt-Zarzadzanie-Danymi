<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<LINK href="stylesheet.css" rel="stylesheet" type="text/css">
<style>
body{
	background: grey;
}
</style>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>



</head>
<body>

<div class="container-fluid" id="menu">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="index.php">Strona główna</a>
        <?php 
			if (isset($_SESSION['login'])) {
				echo '<a class="nav-link active" aria-current="page" href="mojepojazdy.php">Moje Pojazdy</a>';
				echo '<a class="nav-link active" aria-current="page" href="dodawaniePojazdu.php">Dodaj Pojazd</a>';
			}
			if (isset($_SESSION['Rola'])) {
				if ($_SESSION['Rola'] == "admin"){
					echo '<a class="nav-link active" aria-current="page" href="dodawaniePrzegladu.php">Dodaj Przeglad</a>';
					echo '<a class="nav-link active" aria-current="page" href="Uprawnienia.php">Zmień uprawnienia</a>';
					echo '<a class="nav-link active" aria-current="page" href="wykres.php">Wykres</a>';
				}
				if ($_SESSION['Rola'] == "mechanik"){
					echo '<a class="nav-link active" aria-current="page" href="dodawaniePrzegladu.php">Dodaj Przeglad</a>';
				}
			} else{
				echo'';
			}
		?>
      </div>
    </div>
	
	
	
	<div >
	<?php
		if (isset($_SESSION['login'])): ?>
	<div>          
		<form action = "wyloguj.php">
			<a class"nav-link-active"><button type="button" class="btn btn-primary"><?=$_SESSION["login"]?></button></a>
		
		
			<a class"nav-link-active"><button type="submit" class="btn btn-primary">Wyloguj</button></a>
		</form>
	</div>
	<?php else: ?>
	<div>          
	<form>
	<a href="zaloguj.php">	<button type="button" class="btn btn-primary">Zaloguj</button></a>
	</form>
	</div>
	<?php endif; ?>
	</div>
 </div>
</nav>

</div>

<div class="container-fluid">
	<div class="row">
	<div class="col">
<section style="text-color:white; height=100%" class="items ">
<?php
	$placeholder = "empty";
	$login = $_SESSION['login'];
	$polaczenie = @new mysqli('localhost', 'root', '', 'projekt');
	$sql = "SELECT  `Marka`, `Vin`, `NrRej`, `Przeglad` FROM `pojazdy` WHERE Login='$login'";
	
	$result = $polaczenie->query($sql);

	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			if($row['Przeglad']==1){
				$placeholder = "Aktualny" ;
			}else{
				$placeholder = "Nie aktualny";
			}
			echo "<div id ='item2' style='allign-items:center;'>";
			echo "<div class='row align-items-start'>
			<div class='col'>
			</div>
			<div class='col'>
			<p >Nazwa Marki pojazdu: <br>
			<ul>
			<li>$row[Marka]</li>
			</ul>	
				 
				
			Nr Vin Pojazdu:<br>
			<ul>		
			<li>$row[Vin]zł</li>
			</ul>
			<p>Nr Rejestracyjny Pojazdu:
			<ul>
			<li>$row[NrRej]</li>
			</ul>
			<p>Przegląd:</p>
			<ul>
			
			<li> $placeholder</li>
			</ul>
			</div>
			</div>
			</p>";
			
			echo "</div>";
		}
		
	}
	$polaczenie->close();


?>
</section>
<div>
</div>

</div>
</div>
</div>
</body>

</html>