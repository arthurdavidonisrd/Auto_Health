
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
       
    }
    h2{
        text-align: center;
        font-weight: bolder;
        font-size: 1.6em;
        color: #2B90A4;
    }
    img{
        height: 500px;
        width: 450px;
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
        border: none;
        background-color: #235E7B;
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
    .options a{
        padding: 8px;
        text-align: center;
        margin: auto;
        margin-top: 8px;
        color: black;
        font-weight: bold;
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
        <h1>Muito bem-vindo(a)</h1>
    </header>
       
    <main>
        <div class="imagem">
            <img src="https://png.pngtree.com/png-clipart/20231003/original/pngtree-online-doctor-health-service-png-image_13230792.png" alt="">

        </div>

        <div class="formulario">
            <form action="validacaologin.php" method="post">
            <h2>Auto Health</h2>
                <label for="email">E-mail:</label>
                <input type="email" name="email" id="">
                <br>
                <label for="senha">Senha:</label>
                <input type="password" name="senha" id="">


                <input name="submit" class="btn" type="submit" value="Cadastrar">

             

            </form>

            <div class="options">
                    <a href="">Esqueceu a senha?</a>
                    <a href="cadastro.php">Fazer cadastro</a>

             </div>

        

        </div>
     
    
       
    </main>

    
    
</body>
</html>