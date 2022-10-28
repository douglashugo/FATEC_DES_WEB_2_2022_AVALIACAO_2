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
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
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
 session_start();

require_once('./dados_banco.php');

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if(isset($_POST['username']) && ($_POST['password']))
{
$usuario = $_POST['username'];
$senha = $_POST['password'];



$sql = "SELECT Mail, Senha FROM logins";
$result = $conn->query($sql);

   
    while($row = $result->fetch_assoc()) {
        if($usuario == $row["Mail"] and $senha == $row["Senha"]){
            $_SESSION['loggedin'] = TRUE;
            $_SESSION["username"] = 'Colecionador';
             header("location: welcome.php");
             break;
        } else {
            $_SESSION['loggedin'] = FALSE;      
        }
    }
}
?>

</body>
</html>