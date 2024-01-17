<?php
 include('config.php');
 session_start();
 if((!isset($_SESSION['email'])== true) and (!isset($_POST['senha'])== true)){
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    header('Location:index.php');

    if(isset($_POST['submit'])){
   

        $nome = $_POST['nome'];
        $peso = $_POST['peso'];
        $altura = $_POST['altura'];
    
        $imc = $peso / pow($altura, 2);
    
        
    
        $registro_pacientes = mysqli_query($conexao, "INSERT INTO pacientes(nome,peso,altura,imc) VALUES('$nome', '$peso', '$altura', '$imc')");
    
        header('Location:sistema.php');
    
    
    }


 }


if(isset($_POST['submit'])){
   

    $nome = $_POST['nome'];
    $peso = $_POST['peso'];
    $altura = $_POST['altura'];

    $imc = $peso / pow($altura, 2);

    

    $registro_pacientes = mysqli_query($conexao, "INSERT INTO pacientes(nome,peso,altura,imc) VALUES('$nome', '$peso', '$altura', '$imc')");

    header('Location:sistema.php');


}



?>



<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    *{
        margin: 0xp;
        padding: 0px;

    }
    h1{
        text-align: center;
        color: #235E7B;
        margin: auto;
       
    }
    h2{
        text-align: center;
        font-weight: bolder;
        font-size: 1.6em;
        color: #98D0D1;
        
    }
    img{
        height: 500px;
        width: 450px;
    }
    header{
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    body{
        background-image: linear-gradient(to bottom,#F1F1EF 20%,#B3B3B2);
        background-attachment: fixed;
    }
    form{
        display: flex;
        flex-direction: column;
        margin-left: 70px;
    }
    input{
        height: 28px;
        width: 200px;
        border: 2px solid #235E7B;
        outline: none;
    }
    label{
        font-weight: bold;
    }
    

    main{
        display: flex;
        flex-direction: row;
        align-items: center;
        justify-content: center;
        background-color: white;
        width: 50%;
        margin: auto;
        margin-top: 70px;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
        
    }
    .btn{
        width: 50%;
        text-align: center;
        margin:auto;
        margin-top: 20px;
        border: 1px solid black;
        background-color: black;
        color: white;
    }
    .formulario{
        display: flex;
        flex-direction: column;
    }
    .options{
        display: flex;
        flex-direction: row;
        justify-content: center;
        margin-left: 40px;
        
        
    }
    strong{
        
        color: #235E7B;
    }
    .cad{
        text-align: center;
        font-weight: bold;
        font-size: 1.5em;
        text-decoration: underline;
    }








  
    @media only screen and (max-width: 1110px) {
            input {
                height: 35px;
                padding: 8px;
            }
            main{
                display: flex;
                flex-direction: column;
                width: 100%;
                margin-bottom: 100px;
               
            }
            form{
                margin: auto;
            }
            img{
                width: 100%;
            }
            .options{
                margin: auto;
            }
            .btn{
                height: 35px;
            }
        }
</style>
<body>
    <header>
        <h1>Você nosso paciente, está apto a cadastrar seus dados <br> sobre sua saúde.</h1>
        <a href="logout.php">Sair</a>
    </header>
       
    <main>
        <div class="imagem">
            <img src="https://cdn-icons-png.flaticon.com/512/4807/4807695.png" alt="">

        </div>
            
        
            <form action="pacientecad.php" method="POST">
                <label for="paciente">Nome</label>
                <input placeholder="Nome paciente" type="text" name="nome" id="">
                <br>
                <label for="peso">Peso:</label>
                <input placeholder="Seu peso atual:" type="text" name="peso" id="">
                <br>
                <label for="altura">Altura</label>
                <input placeholder="Altura do paciente" type="text" name="altura" id="">
                
                
                <input class="btn" name="submit" type="submit" value="enviar">

               


            </form>


           

          
        

      
    
       
    </main>

    
    
</body>
</html>