<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <title>Acessar</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{ width: 750px; padding: 20px; margin:auto;}
    </style>
</head>
<body style="text-align:center">
    <div class="wrapper">
        <h1 style="font-size: 50px; text-align:center;">Cadastro de Figurinhas da Copa do Mundo 2022</h1>
        <br></br>
        <p>Favor inserir login e senha.</p>
        <br>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group">
                <label>Username</label>
                <input style="width: 350px; margin:auto;" type="text" name="username" class="form-control" value="">
                <span class="help-block"></span>
            </div>    
            <div class="form-group">
                <label>Password</label>
                <input style="width: 350px; margin:auto;" type="password" name="password" class="form-control" value="">
                <span class="help-block"></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Acessar">
            </div>
        </form>
    </div>
    
<?php



function validar_post($dado_enviado){
    if(isset($dado_enviado) and $dado_enviado <> ""){
        return TRUE;
    }
    return FALSE;
}


require_once('dados_banco.php');

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "SELECT Mail, Senha FROM logins";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
        $testemail = $row["Mail"]; 
        $testesenha = $row["Senha"];

        if($_SERVER["REQUEST_METHOD"] == "POST"){
            session_start();
        if(validar_post($_POST['username']) == $testemail and validar_post($_POST['password']) == $testesenha ){
            $_SESSION['loggedin'] = TRUE;
            $_SESSION["username"] = 'Colecionador';
             header("location: welcome.php");
        } else {
            $_SESSION['loggedin'] = FALSE;
        }
        }
    }
}
$conn->close();



?>

</body>
</html>