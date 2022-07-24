<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            //background: linear-gradient(to right, rgb(20, 147, 220), rgb(17, 54, 71));
            background:#DCDCDC;
        }
        div{
            //background-color: rgba(0, 0, 0, 0.6);
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            padding: 80px;
            border-radius: 15px;
            color: #fff;
        }
        input{
            padding: 15px;
            border: none;
            outline: none;
            font-size: 15px;
            border-radius: 15px;
        }
        .inputSubmit{
            background-image: linear-gradient(to right, rgb(0, 92, 197), rgb(90, 20, 220));
            border: none;
            padding: 15px;
            width: 100%;
            border-radius: 10px;
            color: white;
            font-size: 15px;
            
        }
        
        .inputSubmit:hover{
            background-color: deepskyblue;
            cursor: pointer;
        }
        body a {
            text-decoration: none;
            color: black;
            text-align: center;
            border-radius: 10px;
            padding: 10px;
}
    </style>
</head>
<body>
    <div>
      <img src="/img/logo.gif" alt="logo" width="120">
        
        <form action="testLogin.php" method="POST">
            <input type="text" name="email" placeholder="Email">
            <br><br>
            <input type="password" name="senha" placeholder="Senha">
            <br><br>
            <input class="inputSubmit" type="submit" name="submit" value="Enviar">
        </form>
        <br><br>
        <a href="Cadastre-se.php">Cadastre-se</a>
        |
        <a href="api.html">teste</a>
       
</body>
</html>
