<?php//conexao com base de dados
$servername="localhost";
$username="root";
$password="";
$db_name="usuarios";

$connect=mysqli_connect($servername.$username,$password,$db_name);

if (mysqli_connect_error()) {
    echo"Houve uma falha na conexao".mysqli_connect_error();
}

?>
