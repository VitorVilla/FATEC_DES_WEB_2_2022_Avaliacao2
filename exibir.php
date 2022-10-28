<?php

session_start();

if ($_SESSION['loggedin'] == FALSE) {
    header("location: filmes.php");
}

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Filmes</title>
</head>

<body>
    <h1 class="page-title">Filmes</h1>
</body>

</html>

<?php

require_once('Banco.php');

$db->selct();

?>

<br>
<a href="index.php" class="link">Cadastrar filmes</a>
<a href="logout.php" class="link">logout</a>