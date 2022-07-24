<?php

    if(isset($_POST['submit']))
    {
        // print_r('Nome: ' . $_POST['nome']);
        // print_r('<br>');
        // print_r('Email: ' . $_POST['email']);
        // print_r('<br>');
        // print_r('Telefone: ' . $_POST['telefone']);
        // print_r('<br>');
        // print_r('Sexo: ' . $_POST['genero']);
        // print_r('<br>');
        // print_r('Data de nascimento: ' . $_POST['data_nascimento']);
        // print_r('<br>');
        // print_r('Cidade: ' . $_POST['cidade']);
        // print_r('<br>');
        // print_r('Estado: ' . $_POST['estado']);
        // print_r('<br>');
        // print_r('carteira: ' . $_POST['carteira']);
        // print_r('<br>');
        // print_r('wallet: ' . $_POST['wallet']);

        include_once('config.php');

        //$nome = $_POST['nome'];
        $senha = $_POST['senha'];
        $email = $_POST['email'];
        //$telefone = $_POST['telefone'];
        //$sexo = $_POST['genero'];
        //$data_nasc = $_POST['data_nascimento'];
        //$cidade = $_POST['cidade'];
        //$estado = $_POST['estado'];
        //$endereco = $_POST['endereco'];
        $endereco = $_POST['carteira'];
        $endereco = $_POST['wallet'];

        $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,senha,email,telefone,sexo,data_nasc,cidade,estado,endereco,carteira,wallet) 
        VALUES ('$nome','$senha','$email','$telefone','$sexo','$data_nasc','$cidade','$estado','$endereco','$carteira','$wallet')");

        header('Location: index.php');
    }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Miner trx</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(to right, rgb(20, 147, 220), rgb(17, 54, 71));
        }

        .box {
            abackground-color: rgba(0, 0, 0, 0.6);
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 80px;
            border-radius: 15px;
            
            
        }
        input{
            padding: 15px;
            border-radius: 15px;
            outline: none;
            font-size: 15px;
            border: none;
        }
        

        fieldset {
            border: 3px solid dodgerblue;
        }

        legend {
            border: 1px solid dodgerblue;
            padding: 10px;
            text-align: center;
            background-color: dodgerblue;
            border-radius: 8px;
        }

        .inputBox {
            position: relative;
        }
        .inputUser {
            color: black;
            font-size: 15px;
            border: none;
        }

        .labelInput {
            position: absolute;
            top: 15px;
            left: 2px;
            pointer-events: none;
            transition: .5s;
            color: black;
        }

        #data_nascimento {
            border: none;
            padding: 8px;
            border-radius: 10px;
            outline: none;
            font-size: 15px;
        }

        #submit {
            background-image: linear-gradient(to right, rgb(0, 92, 197), rgb(90, 20, 220));
            width: 100%;
            border: none;
            padding: 15px;
            color: white;
            font-size: 15px;
            cursor: pointer;
            border-radius: 10px;
        }

        #submit:hover {
            background-image: linear-gradient(to right, rgb(0, 80, 172), rgb(80, 19, 195));
        }

        body a {
            text-decoration: none;
            color: white;
            text-align: center;
        }
        h2 {
            color: white;
        }
    </style>
</head>

<body>
    
    <div class="box">
        <h2>Cadastre-se</h2>
        <form action="Cadastre-se.php" method="POST">


            
            
            <div class="inputBox">
                <input type="text" name="email" id="email" placeholder="Email" required>
                <label for="email" class="labelInput"></label>
            </div>
            <br>
            <div class="inputBox">
                <input type="password" name="senha" id="senha" placeholder="senha" required>
                <label for="senha" class="labelInput"></label>
            </div>

            <br>
            <input type="submit" name="submit" id="submit">

        </form>
        <br><br>
        <a href="index.php">Login</a>
    </div>
</body>

</html>
