<style>
        body{
            background: #F8ECDE;
            text-align: center;
            align-items: center;
            font-family: Copperplate, Copperplate Gothic Light, fantasy;
        }
        html{
            scroll-behavior: smooth;
        }
        form{
            padding: 10px;
            border: #000 5px solid;
            width: 500px;
            margin: auto;
        }
        select{
            width: 320px;
            padding: 4px;
            background-color: #E8866C;
            border-radius: 15px;
            font-family: Copperplate, Copperplate Gothic Light, fantasy;
        }
        select:hover{
            color: #E8866C;
            background: #494546;
            transition: 0.35s;
        }
        input{
            background-color: #E8866C;
            font-family: Copperplate, Copperplate Gothic Light, fantasy;
        }
        input:hover{
            color: #E8866C;
            background: #494546;
            transition: 0.35s;
        }
        button{
            background-color: #E8866C;
            font-family: Copperplate, Copperplate Gothic Light, fantasy;
            border-radius: 15px;
            width: 100px;
            height: 40px;
        }
        button:hover{
            color: #E8866C;
            background: #494546;
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
<form action="deleter.php" method="post">
    <p> Escolha o comodo da pasta para ser deletado </p>
    <select name="Deleter">
            <option value="Cozinha">Cozinha</option>
            <option value="Sala">Sala</option>
            <option value="Quarto">Quarto</option>
            <option value="Banheiro">banheiro</option>
            <option value="Garagem">Garagem</option>
    </select>
    <?php
    $delet = $_POST['Deleter'];
    
    
    if(is_dir('Comodos/'.$delet)){
        $nova = scandir('Comodos/'.$delet);
        array_shift($nova);
        array_shift($nova);
        foreach($nova as $novaV){
            
            unlink('Comodos/'.$delet.'/'.$novaV);
        }
        rmdir('Comodos/'.$delet);
    } else {
        //echo "Esse diretório não existe ainda";
    }
    ?>
    <br><br><br><br><br><br><br>
    <p><button type="submit"> Deletar </button></p>
</form>
<p></p>
<center>
          <div>
          <a href="index.php"><button class="links">Voltar a Página Inicial</button></a>
          <a href="galeria.php"><button class="links">Ir para Galeria</button></a>
          </div>
</center>
<hr>
<center><p>Desenvolvido por: Francisco Henrique e Julio César</p></center>