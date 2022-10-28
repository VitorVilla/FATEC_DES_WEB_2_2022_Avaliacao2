<?php
require_once('banco.php');

session_start();

if ($_SESSION['loggedin'] == FALSE) {
    header("location: index.php");
}

if (isset($_POST['nome']) && isset($_POST['genero']) && isset($_POST['diretor'])) {

    $nome = $_POST['nome'];
    $genero = $_POST['genero'];
    $diretor = $_POST['diretor'];

    $db->inserir($nome, $genero, $diretor);
}
?>

<html lang="pt_BR">

<head>
    <meta charset="UTF-8">
    <title>Filmes</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body {
            font: 14px sans-serif;
            margin-left: 50px;
        }
    </style>
</head>


<body>
    <div class="wrapper">
        <h2>Cadastro de Filmes</h2>
        <br>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group">
                <label>Nome de Filme:</label>
                <input style="width: 200px;" type="text" name="nome" class="form-control" value="">
                <span class="help-block"></span>
            </div>
            <div class="form-group">
                <label>Gênero do filme:</label>
                <input style="width: 200px;" type="text" name="genero" class="form-control" value="">
                <span class="help-block"></span>
            </div>
            <div class="form-group">
                <label>Diretor:</label>
                <input style="width: 200px;" type="text" name="diretor" class="form-control" value="">
                <span class="help-block"></span>
            </div>
            <br>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Enviar">
            </div>
        </form>
    </div>
</body>

</html>