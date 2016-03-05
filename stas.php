<html>
    <head>
 <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="FontAwesome/css/font-awesome.min.css" rel="stylesheet">
	<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
<script  src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
     <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css ">
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script> 
		<script src="/js/bootstrap.min.js"></script>
        <title>sdssd</title>
    </head>
    <body>
        
        <form action="sta.php" method="post">
            <table border='3'>
                <tr><td>id</td><td><input name="id" maxlength=30  class="form-control" size=30></td></tr>
                <tr><td>Name</td><td><input name="name" maxlength=30 class="form-control" size=30></td></tr>
                <tr><td>rating</td><td><input name="rating" maxlength=60 class="form-control" size=30></td></tr>
                <tr><td>producer</td><td><input name="producer" maxlength=3 class="form-control" size=3></td></tr>
                <tr><td colspan=2><input type="submit" value="Отправить"></td></tr>
           </table>
        </form>
<table border='3'>
      
	<th>ID</th>
	<th>Name</th>
	<th>Producer</th>
        <th>Rating</th>
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
$dsn = "mysql:host={$dbloc}";
try{ 
$conn = new PDO($dsn, $dbuser, $dbpass);
}catch(PDOException $e){
echo "Error connection: ".$e->getMessage();
exit;
}
$conn-> exec("SET CHARACTER SET utf8");
$sql = "SELECT * FROM `u781780875_kino`.`kin4ik`";
$result = $conn -> query($sql);
while ($row = $result->fetch(PDO::FETCH_ASSOC)){
	print "<tr>";
foreach($row as $r){
	echo "<td>"."" . ($r) . "</td>";
		}
	print "</tr>";
}
?>
</table>
<h3>Delete</h3>
 <form action="delete.php" method="post">
            <table>
                <tr><td>id</td><td><input name="id" maxlength=30 class="form-control" size=30></td></tr>
				<tr><td colspan=2><input type="submit" value="Удалить"></td></tr>
           </table>
        </form>
		<h3>Edite</h3>
		 <form action="edite.php" method="post">
            <table>
                <tr><td>id</td><td><input name="id" maxlength=30 class="form-control" size=30></td></tr>
				<tr><td>Name</td><td><input name="name" maxlength=30 class="form-control" size=30></td></tr>
                <tr><td>rating</td><td><input name="rating" maxlength=60 class="form-control" size=30></td></tr>
                <tr><td>producer</td><td><input name="producer" maxlength=3 class="form-control" size=3></td></tr>
				<tr><td colspan=2><input type="submit" value="Edite"></td></tr>
           </table>
        </form>
    </body>
</html>			