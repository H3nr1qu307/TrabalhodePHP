<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastar Imóveis</title>
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
        p{
            font-family: Copperplate, Copperplate Gothic Light, fantasy;
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
            width: 250px;
        }
    </style>
</head>
<body>
    <form action="index.php" enctype="multipart/form-data" method="post" > <!-- enctype é usado para o upload de arquivos -->
    <p><h3>Cadastro de Comodos</h3></p>
        <select name="diretorio">
            <option value="Cozinha">Cozinha</option>
            <option value="Sala">Sala</option>
            <option value="Quarto">Quarto</option>
            <option value="Banheiro">banheiro</option>
            <option value="Garagem">Garagem</option>
        </select>
        <p>Envie as imagens:</p>
        <p><input type="file" name="arq_1"></p>
        <p><input type="file" name="arq_2"></p>
        <p><input type="file" name="arq_3"></p>
        <p><button type="submit"> Enviar </button></p>
    </form>
    
    <p><a href="galeria.php"><button class="links">Ir para Galeria</button></a>
    <a href="deleter.php"><button class="links">Deletar Arquivos</button></a></p>
    <br>
    <hr>
    <center><p>Desenvolvido por: Francisco Henrique e Julio César</p></center>
</body>
</html>
<?php

$dir = $_POST['diretorio'];
if(is_dir("Comodos/".$dir)){
    echo "<script>window.alert(\"Esse diretório já está em uso\");</script>";
} else {
    mkdir("Comodos/".$dir);
    for ($i=1; $i < 4; $i++) { 
        $nome_f = $_FILES["arq_$i"]['name'];
        //$nome_file = $_POST['nome_img'];
        $nome_temp  = $_FILES["arq_$i"]['tmp_name'];
        $par_info = pathinfo("$nome_f");
        $nome_file = $dir;
        $extensoes = array("png", "jpg", "jpeg");
        $ext = $par_info['extension'];
        
        if(in_array($ext, $extensoes)){
            $sla = move_uploaded_file($nome_temp,"Comodos/".$dir."/".$nome_file."$i".".$ext");
            if($sla){
                
            } else {
                echo "<script>window.alert(\"Upload deu errado!\");</script>";
            }
        } else {
            echo "<script>window.alert(\"Tente enviar imagens nas extensões png, jpg ou jpeg\");</script>";
            break;
        }
    }
} 
?>