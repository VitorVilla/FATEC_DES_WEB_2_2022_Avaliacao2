<?php

require_once('banco.php');

$db->selectLogin();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    session_start();
    foreach ($db->users as $index => $value) {
        if ($_POST['user'] == $db->users[$index] and $_POST['senha'] == $db->passwords[$index]) {
            $_SESSION['loggedin'] = TRUE;
            $_SESSION["username"] = $db->users[$index];
            header("location: filmes.php");
            break;
        } else {
            $_SESSION['loggedin'] = FALSE;
        }
    }
}

?>

<html lang="pt_BR">

<head>
    <meta charset="UTF-8">
    <title>Login</title>
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
        <h2>Página de Login</h2>
        <br>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group">
                <label>Username</label>
                <input style="width: 200px;" type="text" name="user" class="form-control" value="">
                <span class="help-block"></span>
            </div>
            <br>
            <div class="form-group">
                <label>Senha</label>
                <input style="width: 200px;" type="password" name="senha" class="form-control" value="">
                <span class="help-block"></span>
            </div>
            <br>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Acessar">
            </div>
        </form>
    </div>
</body>

</html>