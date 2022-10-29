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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body {
            font: 14px sans-serif;
            text-align: center;
        }
    </style>
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
<a href="logout.php" class="btn btn-danger">logout</a>