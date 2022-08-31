<?php
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    
    $usuario_valido = "admin"; //validação
    $senha_valida = "123456";

    if($user == $usuario_valido){
        if($pass == $senha_valida){
            $autenticado = true;

        }   
        else{
            $autenticado = false;
        }

    } else{
        $autenticado = false;
    }

    //inicializando uma sessão do usúario
    session_start();
    
    if($autenticado){
        header("Location: ./gerenciarcadastros.php");
        $_SESSION['user'] = $usuario_valido;

    }else{
        header("Location: ./");
        $_SESSION['user'] = null;
    }


    


    
    

 ?>
