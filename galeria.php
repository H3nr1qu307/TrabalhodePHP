
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <style>
body{
    background: #F8ECDE;
}
html{
    scroll-behavior: smooth;
}
#menu{
  background: #E8866C;
}
#Cozinha, #Quarto, #Banheiro, #Sala, #Garagem{
  margin: 40px;
  font-size: 20px;
  font-family: Copperplate, Copperplate Gothic Light, fantasy;
}
a{
  text-decoration: none;
  font-size: 20px;
  font-family: Copperplate, Copperplate Gothic Light, fantasy;
  color: #494546;
}
#menu div a:hover{
  color: #F8ECDE;
}
/* pega todas as classes que começam com COL */
[class*="col"]{
    /* border: solid #fff;  */
    color: #494546;
    text-align: center;
    align-items: center;
    margin: auto;
}
#title{
  font-family: Copperplate, Copperplate Gothic Light, fantasy;
  font-size: 30px;
  /* color: ; */
}
#topo{
  color: #494546;
}
#topo:hover{
  color: #E8866C;
  background: #494546;
  padding: 4px;
  border-radius: 15px;
  transition: 0.35s;
}
.links{
  width: 300px;
  background-color: #E8866C;
  font-family: Copperplate, Copperplate Gothic Light, fantasy;
  border-radius: 15px;

}
.links:hover{
            color: #E8866C;
            background: #494546;
            transition: 0.35s;
        }
    </style>
</head>
<body>
    <div class="container-fluid">

        <div class="row" id="menu">
          <div class="col" id="title">
            Galeria
          </div>
          <div class="col-4">
            
          </div>
          <div class="col">
            <a href="#Cozinha">Cozinha</a>
          </div>
          <div class="col">
            <a href="#Quarto">Quarto</a>
          </div>
          <div class="col">
            <a href="#Banheiro">Banheiro</a>
          </div>
          <div class="col">
            <a href="#Sala">Sala</a>
          </div>
          <div class="col">
            <a href="#Garagem">Garagem</a>
          </div>
          <div class="col-2">
            
          </div>
           <div class="col">
          
          </div> 
        </div>
         <?php
          $one = scandir("Comodos");
          array_shift($one);
          array_shift($one);
          foreach($one as $two){ 
                echo "<div class=\"row\" id=\"$two\">
                      <div class=\"col\">$two</div>
                      </div>";
                echo " <div class=\"row\">";
                $tree = scandir('Comodos/'.$two);
                array_shift($tree);
                array_shift($tree);
                foreach($tree as $four){
                  echo " <div class=\"col\"><img src=\"Comodos/$two/$four\" width=\"350px\" height=\"350px\"> </div>";
                  echo "</div>";
            }
          }
          ?>
        <br><br>
        <center>
          <div>
            <a href="#menu" id="topo">Voltar ao topo</a>
          </div>
        </center>
        <br>
        <center>
          <div>
          <a href="index.php"><button class="links">Voltar a Página Inicial</button></a>
          <a href="deleter.php"><button class="links">Deletar Arquivos</button></a>
          </div>
        </center>
        <hr>
        <center><p>Desenvolvido por: Francisco Henrique e Julio César</p></center>
<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html> 