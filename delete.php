<?php 
$dbloc ="mysql.hostinger.ru"; 
$dbuser ="u781780875_misha"; 
$dbpass ="p1tzrbaFhE"; 
if ($_SERVER["SERVER_ADDR"] == "127.0.0.1") { 
$dbloc ="localhost"; 
$dbuser ="root"; 
$dbpass =""; 
}; 
echo mb_internal_encoding(); 

//$conn = @mysql_connect($dbloc, $dbuser, $dbpass); 

$dsn = "mysql:host={$dbloc}"; 
$conn = new PDO($dsn, $dbuser, $dbpass); 
$conn-> exec("SET CHARACTER SET utf8"); 


$id = $_POST['id']; 

//$sqlstring = "INSERT INTO `kin4ik`.`u781780875_kino` (id, Name, rating, Budget) VALUES(:id, :Name, :Producer, :Budget, :Rate)"; 
$sql = "DELETE FROM `u781780875_kino`.`kin4ik` WHERE `id` = $id"; 
$result = $conn->prepare($sql); 
$result->bindValue(":id", $id); 
echo $result->execute(); 

$conn->lastInsertId(); 
?>