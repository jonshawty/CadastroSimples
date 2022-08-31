<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <title>Validação de dados com php</title>
</head>
<body>
    <h1>CENTRAL</h1>
    
    <?php
        session_start();
        $user = $_SESSION['user'];

        if(!is_null($user)){
            echo "<h3>Bem-vindo, " .$user . "!</h3>";
        }
        else{
            header("Location: ./");
        }
    ?>
    <a href="telacadastro.html">Clique aqui para cadastrar robos</a>

</body>
</html>