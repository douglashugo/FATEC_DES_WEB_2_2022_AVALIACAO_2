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


$sql = "SELECT ID, Nome, Selecao FROM figurinhas";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>ID</th><th>Nome</th><th>Selecao</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["ID"]."</td><td>".$row["Nome"]."</td><td>".$row["Selecao"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();




?>


    