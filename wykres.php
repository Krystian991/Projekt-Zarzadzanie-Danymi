<?php
$command = escapeshellcmd('python wykres.py');
$output = shell_exec($command);
header("Location: wykress.php");
?>