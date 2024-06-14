<?php
$host = "localhost";
$dbname = "db_pemweb_gilang";
$username = "root";
$password = "";

require_once 'Pdo_query.php';
try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname",
$username, $password);
    echo ("Connected to $dbname at $host successfully. 
    <br/>"); 
} catch (PDOException $pe) {
    die ("Could not connect to the database $dbname :" .
$pe->getMessage());
echo "<br/>";
}

$query1 = $conn->query("SELECT * FROM tb_mhs_gilang");
$query2 = $conn->query("SELECT * FROM tb_mhs_gilang order by nama asc");

$list = $query1->fetchAll(PDO::FETCH_ASSOC);
$row = $query2->fetch(PDO::FETCH_ASSOC);

echo "<h2>Periksa data dengan vardump dan print_r
query1</h2> <br/>";

var_dump($list);
echo "<pre>"; print_r($list); echo "</pre>";
echo "<h2> Periksa data dengan vardump dan print_r
query2</h2> <br/>";
var_dump($row);
echo "<pre>"; print_r($row); echo "</pre>";
?>