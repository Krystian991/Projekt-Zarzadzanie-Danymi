<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<LINK href="stylesheet.css" rel="stylesheet" type="text/css">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<style>
body{
	background-color:grey;
}
</style>

</head>
<body>
<script>
var sprawdz = function() {
  if (document.getElementById('Haslo').value ==
    document.getElementById('Potwierdz_Haslo').value) {
    document.getElementById('wiadomosc').style.color = 'green';
    document.getElementById('wiadomosc').innerHTML = 'Hasła są identyczne';
	document.getElementById("Submit").disabled = false;
  } else {
    document.getElementById('wiadomosc').style.color = 'red';
    document.getElementById('wiadomosc').innerHTML = 'Hasła nie są identyczne!';
	document.getElementById("Submit").disabled = true;
  }
}
 </script>
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

        
      </div>
    </div>
	<div >
	
 </div>
</nav>

</div>

<div class="container-sm">
	<div class="row align-items-start">
		<div class="col moje">
			<h1>Zarejestruj się:</h1>
<form action="rejestracja.php" method="post" enctype="multipart/form-data">
	<div class="row">
		<div class="col">
		<input type="text" class="form-control" placeholder="Login" id="Login" name="Login" aria-label="Login" required>
		</div>
		<div class="col">
		<input type="date" class="form-control" placeholder="Data Urodzenia" id="Data_Urodzenia" name="Data_Urodzenia" aria-label="Data_Urodzenia" required>
	</div>
	</div>
	<br>
	<div class="row">
		<div class="col">
		<input type="text" class="form-control" placeholder="E-mail" id="Email" name="Email" aria-label="email" required>
	</div>
	
	</div>
	<br>
	<div class="row">
		<div class="col">
		<input type="text" class="form-control" placeholder="Miejsce zamieszkania" id="Zamieszkanie" name="Zamieszkanie" aria-label="Miejsce zamieszkania" required>
	</div>
	<div class="col">
		<input type="Number" class="form-control" placeholder="Numer Telefonu" id="NrTelefonu" name="NrTelefonu" aria-label="Numer telefonu" required>
	</div>
	</div>
	<br>
	<div class="row">
		<div class="col">
		<input type="password" class="form-control" placeholder="Hasło" id="Haslo" name="Haslo" aria-label="Hasło" onkeyup='sprawdz();' required>
	</div>
	<div class="col">
		<input type="password" class="form-control" placeholder="Powtórz hasło" id="Potwierdz_Haslo" name="Potwierdz_Haslo" aria-label="Powtórz hasło" onkeyup='sprawdz();' required>
		<span id='wiadomosc'></span>
	</div>
	</div>
	<br>
	<button type="submit" class="btn btn-primary" disabled = "true" id = "Submit">Zarejestruj</button>
</form>

</div></div></div>
</body>


</html>