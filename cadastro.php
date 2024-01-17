<?php 
 
if(isset($_POST['submit']) && !empty($_POST['nome']) && !empty($_POST['email']) && !empty($_POST['senha'])){
    include_once('config.php');

   

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $salvar_dados_db = mysqli_query($conexao, "INSERT INTO clientes(nome,email,senha) VALUES ('$nome', '$email', '$senha') ");

    echo "<p class='cad'>Cadastro feito com sucesso!</p>";
  
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
        width: 70%;
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
                height: 25px;
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
        <h1>Crie uma conta e cuide de verdade da sua saúde!</h1>
        <a href="index.php">Voltar ao inicío</a>
    </header>
       
    <main>
        <div class="imagem">
            <img src="https://png.pngtree.com/png-clipart/20231003/original/pngtree-online-doctor-health-service-png-image_13230792.png" alt="">

        </div>
            
        
            <form action="cadastro.php" method="POST">
                <h2>Crie sua conta com <br> <strong>Auto Health</strong></h2>
                <label for="nome">Nome completo:</label>
                <input type="text" name="nome" id="">
                <br>
                <label for="email">E-mail:</label>
                <input type="email" name="email" id="">
                <br>
                <label for="senha">Senha:</label>
                <input type="password" name="senha" id="">
                
                <input class="btn" name="submit" type="submit" value="enviar">

               


            </form>


           

          
        

      
    
       
    </main>

    
    
</body>
</html>