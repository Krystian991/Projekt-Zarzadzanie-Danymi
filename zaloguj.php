<?php
session_start();
?>
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
	background: grey;
}
</style>
</head>
<body>

<div class="container-fluid" id="menu">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"></a>
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
<div class="container-fluid">

</div>




<div class="container-sm">
	<div class="row align-items-start">
		<div class="col moje">
		<?php
		if (isset($_SESSION["login"])) {
	echo "Pomyślnie utworzyleś konto " . $_SESSION["login"] . ".<br>";
	echo "Teraz możesz się zalogować.";
}
?>
			<h1>Zaloguj:</h1>
<form action="logowanie.php" method="post" enctype="multipart/form-data">
	<div class="mb-3">
		<label for="formGroupExampleInput" class="form-label" name="#">Login</label>
		<input type="text" class="form-control" id="formGroupExampleInput" placeholder="Login" name="Login" required>
	</div>
	<div class="mb-3">
		<label for="formGroupExampleInput2" class="form-label" name="#">Hasło</label>
		<input type="password" class="form-control" id="formGroupExampleInput2" placeholder="Hasło" name="Haslo" required>
	</div>
	<button type="submit" class="btn btn-primary" name="submit">Zaloguj</button><br><br>
	<p>Nie masz konta?<a href="zarejerstruj.php"><br>
		Zarejerstruj się!</a></p>
</form>

</div></div></div>
</body>


</html>