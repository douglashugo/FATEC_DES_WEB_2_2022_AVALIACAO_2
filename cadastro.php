<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <title>Acessar</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        
        body{ font: 14px sans-serif;  }
        .wrapper{ width: 750px; padding: 20px; margin:auto;}
    </style>
</head>
<body style="text-align:center">
    <div class="wrapper">
        <h1>Cadastro de Figurinhas</h1>
        <br><br>
        <p>Favor inserir ID da Figurinha, Nome e Seleção do Jogador.</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
            <div class="form-group">
                <br><br>
                <label>ID</label>
                <input style="width: 350px; margin:auto;" type="text" name= "id" class="form-control" value="">
                <span class="help-block"></span>
            </div>    
            <div class="form-group">
                <label>Nome</label>
                <input style="width: 350px; margin:auto;" type="text" name="nome" class="form-control" value="">
                <span class="help-block"></span>
            </div>
            <div class="form-group">
                <label>Seleção</label>
                <input style="width: 350px; margin:auto;" type="text" name="selecao" class="form-control" value="">
                <span class="help-block"></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Cadastrar">
            </div>
        </form>
    </div>    

    <?php
   
   session_start();

   if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
       header("location: index.php");
       exit;
   }
   

require_once('./dados_banco.php');

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


if(isset($_POST['id']) && ($_POST['nome']) && ($_POST['selecao']))
{
$idfigurinha = ($_POST['id']);
$nomesalvo = ($_POST['nome']);
$selecao = ($_POST['selecao']);



$sql = "INSERT INTO figurinhas (ID, Nome, Selecao)
VALUES ('$idfigurinha','$nomesalvo','$selecao')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


/*if (mysqli_query($conn, $sql)) {
    //echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
*/
}

?>

</body>
</html>
