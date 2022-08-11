 <?php
include_once 'conexao.php';
//essa página php esta conectada ao banco

if(!empty($_GET['search'])){
  $busca = $_GET['search'];
  $sql = "SELECT * FROM formulario WHERE nome LIKE '%$busca%' ORDER BY nome ASC";
  // se nao estiver vazio(empty) uma variavel do tipo GET que é o search, pega a variavel ser=ach e forma em busca

}else {
  $sql = "SELECT * FROM formulario";
  //faz uma pesquisa no banco
}



$resultado = $conexao -> query ($sql);
//pedindo pro sql rodar no banco de dados e esta guardando na variavel $resultado



?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/agendamento.css">
    <title>Tatuagem</title>
<style>
.topo{
  height: 200px;
  text-align: center;
  
}

.topo form{
margin: 0 auto;
dispaly:block;
width: 50%;
}

.topo input[type="submit"]{
  background:green;
  color: black;
  padding: 0px 10px;
  border: none;
  cursor: pointer;
}

.menu {
width: 50%;
display: flex;
justify-content: center;
align-items:center;
text-align: center;
margin:  60px auto;
}



</style>
</head>
<body>
    <div class="topo">
        <h1> Ateliê de Tatuagens </h1>

        <h2> Lista de Tatuadores </h2>

        <form action="lista.php" method="GET">
          <!-- USAMOS O GET POIS É MAIS RÁPIDO PARA PESQUISAR -->

        <input type="text" name="search">
        <input type="submit" value="Busca" name="busca">
        
        </form>

    </div>

    <div class="menu">
      <!-- esse m-5 é classe do bootstrap para a div fique um pouco mais ajustada na tela  -->
    <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nome</th>
      <th scope="col">Estilo</th>
      <th scope="col">sexo</th>
      <th scope='col'>Telefone</th>
      <th scope='col'>Pele</th>
      <th scope='col'>Estado</th>
      <th scope='col'>Tatuador</th>
      <th scope='col'>Email</th>
      <th scope='col'>idade</th>
      <th scope="col">#</th>
      <th scope="col">#</th>
    </tr>
  </thead>
  <tbody>
    <?php
    while($formulario = mysqli_fetch_assoc($resultado)){
        // esta quebrando resultado e armazenar na variavel tatuador

        echo "<tr>";
        echo "<td>".$formulario['idtatuador']."</td>";
        echo "<td>".$formulario['nome']."</td>";
        echo "<td>".$formulario['estilo']."</td>";
        echo "<td>".$formulario['sexo']."</td>";
        echo "<td>".$formulario['telefone']."</td>";
        echo "<td>".$formulario['pele']."</td>";
        echo "<td>".$formulario['estado']."</td>";
        echo "<td>".$formulario['tatuador']."</td>";
        echo "<td>".$formulario['email']."</td>";
        echo "<td>".$formulario['idade']."</td>";
        echo "<td>"."<a href='update.php?id=$formulario[idtatuador]'><img src='pencil-square (1).svg'></a>"."</td>";
        echo "<td>"."<a href='delete.php?id=$formulario[idtatuador]'><img src='trash.svg'></a>"."</td>";
        echo"</tr>";
        

        // esta criando uma linha <tr> </tr>
        // td esta criando coluna id 
    }

?>
  </tbody>
</table>
    </form>


    </div>
</body>
</html>