<?php
$mysqli=new mysqli("localhost","root","",
"db_pemweb_gilang");

$result1=$mysqli->query("SELECT * FROM tb_mhs_gilang");
$result2=$mysqli->query("SELECT * FROM tb_mhs_gilang order by nama desc");

$row_all=$result1->fetch_all();
$row_one=$result2->fetch_row();
echo "<pre/>";
print_r($row_all);
echo "hr/>";
print_r($row_one);
?>