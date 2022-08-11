<?php
include_once 'conexao.php';

if(!empty($_GET['id'])){
    $delete = $_GET['id'];
    $sql = "SELECT * FROM formulario WHERE idtatuador=$delete";
    $resultado =$conexao-> query($sql);

    if ($resultado ->num_rows>0){

        $sqldelete="DELETE FROM formulario WHERE idtatuador=$delete";
        $resuldelete =$conexao ->query($sqldelete);
 
    }
}else{
    header("location:index.php");
}
header("location:index.php");

?>