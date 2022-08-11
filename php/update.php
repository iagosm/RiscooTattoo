
<?php


include_once'conexao.php';

if(!empty($_GET['id'])){
    $update=$_GET['id'];

    $sql = "SELECT * FROM formulario WHERE idtatuador=$update";
    $resultado =$conexao-> query($sql);

    if ($resultado ->num_rows>0){

        while($dados= mysqli_fetch_assoc($resultado)){
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
        }

     }else{
       header("Location:lista.php"); 
     }
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Tatuagem</title>
</head>
<body>
    <div class="topo">
        <h1> Ateliê de Tatuagens </h1>

        <h2> atualização de cadastro</h2>

    </div>

    <div class="menu">
    <form action="saveedit.php" method="POST" >

    <img src="/img/logo.png" alt="logo" id="imagem" /><br /><br />
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" autofocus required />
        <label for="email">E-mail:</label>
        <input type="email" name="email" id="email" required />
        <br /><br />
        <label for="telefone">Telefone:</label>
        <input type="text" name="telefone" id="telefone" required />
        <br /><br />
        <label for="foto">Foto da tattoo:</label>
        <input type="file" name="foto" id="foto" accept=" .jpg, .png, .jpeg" />
        <br /><br />
        <span>Genero:</span>
        <input type="radio" name="sexo" id="m" value="m" />
        <label for="m">Masculino</label>
        <input type="radio" name="sexo" id="f" value="f" />
        <label for="f">Feminino</label>
        <input type="radio" name="sexo" id="o" value="o" />
        <label for="o">Outros</label>
        <br /><br />
        <label for="estado">Estilo de Tatuagem</label>
        <select name="estilo" id="estado">
          <option value="">Escolha tipo de tatuagem</option>
          <option value="ba">Old school</option>
          <option value="ce">Tribal</option>
          <option value="rj">Pontilhismo</option>
          <option value="sp">Blackwork</option>
          <option value="sp">FineLine</option>
        </select>
        <label for="estado">Pele</label>
        <select name="pele" id="estado">
          <option value="">Escolha a cor de pele</option>
          <option value="ba">Branco</option>
          <option value="ce">Morena</option>
          <option value="rj">Negro</option>
        </select>
        <br /><br />
        <hr />
        <br />
        <label for="estado">Região do corpo</label>
        <select name="estado" id="estado">
          <option value="">Escolha a região do corpo</option>
          <option value="ba">Braço</option>
          <option value="ce">Perna</option>
          <option value="rj">Pescoço</option>
          <option value="sp">Costas</option>
          <option value="sp">Peito</option>
          <option value="sp">Costelas</option>
          <option value="sp">Antebraço</option>
          <option value="sp">Biceps</option>
          <option value="sp">Triceps</option>
          <option value="sp">Mão</option>
          <option value="sp">Dedo</option>
          <option value="sp">Pé</option>
          <option value="sp">Panturrilha</option>
        </select>
        <label for="estado">Tatuador</label>
        <select name="tatuador" id="estado">
          <option value="">Escolha o tatuador(a)</option>
          <option value="ba">Tatuador 1</option>
          <option value="ce">Tatuador 2</option>
          <option value="rj">Tatuador 3</option>
          <option value="sp">Tatuador 4</option>
        </select>

        <br /><br />

        <label for="idade">Escolha a data da tatuagem</label>
        <input type="datetime-local" /><br /><br />
        <input type="checkbox" id="idade" name="idade" value="idade" />
        <label for="idade">Sou acima de 18anos</label>

        <br /><br />
        <label for="comentario">Comentário:</label><br />
        <textarea
          name="comentario"
          id="comentario"
          placeholder="Descreva sobre a tatuagem e suas ideias"
          required
        ></textarea>
        <br /><br /><input
          type="submit"
          value="Enviar"
          name="submit"
        />
        
        />
        <input type="hidden" name="id" value="<?php echo $update?>" />
      </form>
      <!-- !!Fim do Form!!  -->
    </div>
  </body>
</html>