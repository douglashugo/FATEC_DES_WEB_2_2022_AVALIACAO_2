<?php
session_start();

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: index.php");
    exit;
}

?>
 
<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body>
    <div class="page-header">
        <h1>Olá, <b><?php echo htmlspecialchars($_SESSION["username"]); ?>
        <br>
        </b>Bem vindo ao Registro de Figurinhas da Copa!!!</h1>
        <br><br>
        <h3 style="width:800px; margin:auto">Com esse sistema você terá o acompanhamento de todas as figurinhas que já estão coladas e que precisa para completar seu álbum.</h3>
    </div>
    <p>
        
        <a href="cadastro.php" class="btn btn-primary">Cadastrar Figurinhas</a>
        <br><br>
        <a href="visualizar.php" class="btn btn-primary">Visualizar Álbum</a>
        <br><br>
        
        <a href="logout.php" class="btn btn-danger">Sair da Conta</a>
    </p>
</body>
</html>