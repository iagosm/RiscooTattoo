<?php

include_once 'conexao.php';

if(isset($_POST['submit'])){
    $nome=$_POST['nome'];
    $estilo=$_POST['estilo'];
    $sexo=$_POST['sexo'];
    $id=$_POST['id'];
    $telefone=$_POST['telefone'];
    $pele=$_POST['pele'];
    $estado=$_POST['estado'];
    $tatuador=$_POST['tatuador'];
    $email=$_POST['email'];
    $idade=$_POST['idad'];

    // toda vez que usar $_post ['id']  e nome que esta no codigo html e nao o nome que está no banco do banco

    $sql="UPDATE formulario SET nome='$nome', estilo='$estilo', sexo='$sexo', telefone='$telefone', pele='$pele', estado='$estado', tatuador='$tatuador', email='$email', idade='$idade' WHERE idtatuador='$id'";
    $resultado= $conexao -> query($sql); 
}
header("location:buscar.php");
?>
