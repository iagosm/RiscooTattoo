<?php

    include_once 'conexao.php';
  

    session_start(); 

    if(!empty($_POST['login-input']) and !empty($_POST['password-input'])){

        $login = $_POST['login-input'];
        $senha = $_POST['password-input'];
        
        $sql = "SELECT * FROM permissao WHERE login ='$login'";
        ;

        $resultado = $conexao ->query($sql);// 
         

        $usuario = $resultado ->fetch_assoc(); //quebrar resultado e gravar em usuario
     

        if($senha==$usuario['senha']){
           
            $_SESSION['login'] = $login;
            $_SESSION['senha'] = $senha;
            
  
            header("Location:cad_tatuador.php");

          
        }

    }else{
        header('Location:../pages/agendamento.html');
    }

?>