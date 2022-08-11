
<?php


include_once'conexao.php';
//informa o arquivo a conexao ao banco de dados

if (isset($_POST['submit'])){
    // esse if é um congelamento, nao rodar antes da pessoa preencher o formulario

    $nome=$_POST['nome'];
    $estilo=$_POST['estilo'];
    $sexo=$_POST['sexo'];
    $dthora=$_POST['dthora'];
    $telefone=$_POST['telefone'];
    $pele=$_POST['pele'];
    $estado=$_POST['estado'];
    $tatuador=$_POST['tatuador'];
    $email=$_POST['email'];
    $idade=$_POST['idade'];
      //pegando tudo do formulario e coloco as variaveis locais do php, variaveis de front end para back ende

    $sql = "INSERT INTO  formulario (nome, estilo, sexo, dthora, telefone, pele, estado, tatuador, email, idade) VALUES 
    ('$nome','$estilo', '$sexo', '$dthora', '$telefone', '$pele', '$estado', '$tatuador', '$email', '$idade')";
    //comando sql para inserir no banco, ela não roda.  prepara um comendo sql


    $resultado = $conexao -> query($sql);
    //executa TUDO AQUI

    //query significa: rode esse comando no banco de dados
}

?>


<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Formulario Simples</title>
  </head>
  <style>
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
:root {
    --corRosa: #b31545;
    --corCreme: #e5d7a6;
    --corBranca: #fff;
    --corPreta: #000;
  }


body{
    background-image: url(../img/back-agendamento.jpg) ;
    background-size: cover;
    display: flex;
    /* Display Flex faz com que os itens fiquem em formato fileira  */
    flex-direction: column;
    /* O direcionamento  column deixa eles arrumados */
      /* justify-content controla alinhamento na horizontal  */
    justify-content: center;
    /* align-items controla alinhamento vertical  */
    align-items: center;
    
}
h1{
    color: #b31545;
    text-align: center;
    
}
form{
  width: 100%;
  
  padding: 20px;
  margin-top:50px;
  
  
}
input [type="checkbox"]:checked + span{
  color: #b31545;
  font-weight:bold;
}

input [type="checkbox"], [type="radio"]:checked{
  accent-color: #b31545;
}

input[type="text"],input[type="email"], input[type="file"],input[type="select"]{
  padding:5px;
  width: 160px;
  
    border-radius: 8px;
}
.box{
    background: rgb(0, 0, 0, 0.5);
    width: 40%;
    padding: 20px;
    border-radius: 1rem;
    
    
    top: -25px;
    left: -25px;
    bottom: 0px;
    right: 0px;
}
.box label,span{
    color: white;
}
.box input[type="submit"]{
    background-color: #b31545;
    padding: 10px;
    width: 160px;
    border: none;
    color: whitesmoke;
    border-radius: 8px;
    display: block;   
    margin: 0 auto;
    border: 1px solid #e5d7a6 ;
    transition: 1.5s;
}
.box input[type="submit"]:hover{
    background: #25D366;
    border: 1px solid white;
}
/* !! Para centralizar o botão transforma-lo em uma div:display box   */
.box textarea{
    resize: none;
    width: 100%;
    height: 50px;
    border-radius: 8px;
}
.box input[type="text"],input[type="email"], input[type="file"],input[type="select"]{
    padding: 4px;
    border-radius: 8px;
}


/* Serve para dar cor branca ao nome ''nenhum arquivo selecionado no input file  */
.box input[type="file"] { 
  color: white; }
  
/* Img dentro do form  */
img{
    padding: 0;
    margin: 0 auto;
    display: flex;
    width: 12.5rem;
}


header {
    background-color: black;
    width: 100%;
    height: 100%;
    border-bottom: #b31545 5px solid;
    display: flex;
    justify-content: space-between;
    z-index: 1;
  }
  
  header a img {
    width: 100px;
    position: auto;
    margin-top: 0px;
    padding: 0px;
    margin-left: 15px;
    }
  
  .menu ul {
    list-style: none;
    text-transform: uppercase;
    height: 100%;
    margin-right: 30px;
    display: flex;
    align-items: center;
    justify-content: space-around;
  }
  
  .menu li {
    font-family: 'Allerta Stencil', sans-serif;
    display: inline-block;
    padding: 5px;
    margin: 10px;
  }
  
  .menu a {
    color: #b31545;
    text-decoration: none;
  }
  
  .menu a:hover {
    color: white;
    text-shadow: 2px 1px 1px #e5d7a6;
    text-decoration: line-through;
    transition: 500ms linear;
    cursor: pointer;
  }
  /*Fim menu*/
  
  /*Menu Hamburger*/
  #hamburger-icon {
    margin: auto 25px ;
    display: none;
    cursor: pointer;
  }
  
  #hamburger-icon div {
    width: 35px;
    height: 3px;
    background-color: #b31545;
    margin: 6px 0;
    transition: 0.4s;
  }
  
  .open .bar1 {
    -webkit-transform: rotate(-45deg) translate(-6px, 6px);
    transform: rotate(-45deg) translate(-6px, 6px);
  }
  
  .open .bar2 {
    opacity: 0;
  }
  
  .open .bar3 {
    -webkit-transform: rotate(45deg) translate(-6px, -8px);
    transform: rotate(45deg) translate(-6px, -8px);
  }
  
  .open .mobile-menu {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: flex-start;
    background-color:black;
  }
  
  .mobile-menu {
    display: none;
    position:fixed; 
    z-index: 5;
    padding: 40px;
    top: 109px;
    left: 0px;
    height: 100vh;
    /* border-bottom: #b31545 5px solid; */
    width: 100%;
  }
  
  .mobile-menu li {
    margin-bottom: 50px;
    margin-left: -40px;
    display: inline-block;
    list-style: none;
    font-family: 'Allerta Stencil', sans-serif;
    text-transform: uppercase;
  }
  
  .mobile-menu a {
    text-decoration: none;
    color: #b31545
  }
  
  .mobile-menu a:hover {
    color: white;
    text-shadow: 2px 1px 1px #e5d7a6;
    text-decoration: line-through;
    transition: 500ms linear;
    cursor: pointer;
  }
  
  @media (max-width:800px) {
    header nav {
        display: none;
    }
    #hamburger-icon {
        display: block;
    }
    main{
      display: flex;
      justify-content: center;
      align-items: center;
}
        #box{
          width: 23.875rem;
          height: 31.25rem;
          background: inherit;
          position: absolute;
          overflow: hidden;
          top: 40%;
          left: 50%;
          margin-left: -175px;
          margin-top: -150px;
          border-radius: 8px;
          padding: 20px 0;
        }
        
      
}

  </style>
  <body>
    <!--Menu html (colar após o body)-->
    <header>
      <a href="index.html"><img src="../img/logo.png" /></a>
      <nav class="menu">
        <ul>
          <li><a href="/sobre.html">Home</a></li>
          <li><a href="tatuadores.html">Tatuadores</a></li>
          <li><a href="agendamento.html">Agendamento</a></li>
        </ul>
      </nav>
      <div id="hamburger-icon" onclick="toggleMobileMenu(this)">
        <div class="bar1"></div>
        <div class="bar2"></div>
        <div class="bar3"></div>
        <ul class="mobile-menu">
          <li><a href="index.html">Home</a></li>
          <li><a href="tatuadores.html">Tatuadores</a></li>
          <li><a href="agendamento.html">Agendamento</a></li>
        </ul>
      </div>
    </header>
    <!--Fim menu-->

    

    <div class="box">
    <form action="cad_tatuador.php" method="POST" enctype="multipart/form-data">
            <h1>Formulário de Agendamento</h1><br>
            <a href=""><img src="../img/logo.png"/></a><br>
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" autofocus required />
        <label for="email">E-mail:</label>
        <input type="email" name="email" id="email" required />
        <br /><br />
        <label for="telefone">Telefone:</label>
        <input type="text" name="telefone" id="telefone" required />
        <br /><br />
        <span>Genero:</span>
        <input type="radio" name="sexo" id="m" value="m" />
        <label for="m">Masculino</label>
        <input type="radio" name="sexo" id="f" value="f" />
        <label for="f">Feminino</label>
        <input type="radio" name="sexo" id="o" value="o" />
        <label for="o">Outros</label>
        <br /><br />
        <label for="estado">Tatuador</label>
        <select name="tatuador" id="estado">
          <option value="">Escolha o tatuador(a)</option>
          <option value="ba"> Guilherme cabral </option>
          <option value="ce">Dode dultra</option>
          <option value="rj">Maria flavia</option>
          <option value="sp">Maik britto</option>
        </select>
        
        <label for="estado">Pele</label>
        <select name="pele" id="estado">
          <option value="">Escolha a cor de pele</option>
          <option value="branca">Branca</option>
          <option value="preta">Preta</option>
          <option value="parda">Parda</option>
          <option value="amarela">Amarela</option>
        </select>
        <br /><br />
        <hr />
        <br />
        <label for="estado">Região do corpo</label>
        <select name="estado" id="estado">
          <option value="">Escolha a região do corpo</option>
          <option value="braço">Braço</option>
          <option value="perna">Perna</option>
          <option value="pescoço">Pescoço</option>
          <option value="costas">Costas</option>
          <option value="peito">Peito</option>
          <option value="costelas">Costelas</option>
          <option value="antebraço">Antebraço</option>
          <option value="biceps">Biceps</option>
          <option value="triceps">Triceps</option>
          <option value="mão">Mão</option>
          <option value="dedo">Dedo</option>
          <option value="pe">Pé</option>
          <option value="panturrilha">Panturrilha</option>
        </select>
        <label for="estado">Estilo de Tatuagem</label>
        <select name="estilo" id="estado">
          <option value="">Escolha tipo de tatuagem</option>
          <option value="old-school">Old school</option>
          <option value="tribal">Tribal</option>
          <option value="pontilhismo">Pontilhismo</option>
          <option value="blackwork">Blackwork</option>
          <option value="fineline">FineLine</option>
          <option value="outros">Outros</option>
        </select>
       

        <br /><br />

        <label for="idade">Escolha a data da tatuagem</label>
        <input type="date" name="dthora" /><br /><br />
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
        <input type="hidden" name="_captcha" value="false" />
        <input
          type="hidden"
          name="_next"
          value="http://127.0.0.1:5500/obrigado.html"
        />
        <input type="hidden" name="_template" value="table" />
      </form>
      <!-- !!Fim do Form!!  -->
    </div>
    <script src="../js/script.js"></script>
  </body>
</html>