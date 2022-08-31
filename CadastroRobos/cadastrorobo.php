<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <title></title>
</head>
<body>
    <?php
    $firmware_post = $_POST["firmware"];
    $modelo_post = $_POST["modelo"];
    $central_post = $_POST["central"];
    $ano_post = $_POST["ano"];
    $ia_post = $_POST["ia"];

    echo "<h4>Versão do firmware:" .$firmware_post. "<h4>";
    echo "<h4>Modelo: " .$modelo_post. "<h4>" ;
    echo "<h4>Central de comandos: " .$central_post. "<h4>" ;
    echo "<h4>Ano Fabricação: " .$ano_post. "<h4>" ;
    echo "<h4>Ia instalado: " .$ia_post. "<h4>" ;
    
    ?>

    <a href="../sitepronto/index.html">pagina inicial<a>
</body>
</html>