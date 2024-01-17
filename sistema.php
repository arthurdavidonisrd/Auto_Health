<?php 
session_start();
if((!isset($_SESSION['email'])== true) and (!isset($_SESSION['senha'])== true)){
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    header('Location: index.php');
}
require_once('config.php');

$email = $_SESSION['email'];

$select_pacientes = "SELECT * FROM pacientes ORDER BY nome DESC";

$query_exibir_pacientes = $conexao->query($select_pacientes);











?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
</head>
<style>
      body{
        background-image: linear-gradient(to bottom,#F1F1EF 20%,#B3B3B2);
        background-attachment: fixed;
    }
    h1{
        text-align: center;
        margin: auto;
    }
    header{
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        align-items: center;

    }

    
</style>
<body>
    <header>
        <a href="pacientecad.php">Cadastrar paciente</a>
        <h1>Seja bem-vindo <?php echo $email;?> </h1>
        <a href="logout.php">Sair</a>
    </header>

    <section>

        
    </section>

<main>
    <table class="table">
        <thead>
            <tr>
            <th scope="col">Nome</th>
            <th scope="col">Peso</th>
            <th scope="col">Altura</th>
            <th scope="col">IMC</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                while($dados_pacientes = mysqli_fetch_assoc($query_exibir_pacientes)){

                    echo "<tr>";
                    echo "<td>".$dados_pacientes['nome']."</td>";
                    echo "<td>".$dados_pacientes['peso']."</td>";
                    echo "<td>".$dados_pacientes['altura']."</td>";
                    echo "<td>".$dados_pacientes['imc']."</td>";



                }
            
            
            
            
            
            
            ?>
            
            
        </tbody>
    </table>

</main>
    
</body>
</html>