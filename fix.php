<html>
<head><meta charset="utf-8"></head>
<?php
$pdo = new PDO("mysql:host=localhost;dbname=blueshop;charset=utf8", "root", "");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$stmt = $pdo->prepare("SELECT * FROM member WHERE username = ?");
$stmt->bindParam(1, $_GET["username"]); 
$stmt->execute(); 
$row = $stmt->fetch(); 
?>

<body>
<form action="edit.php" method="post">
    username<input type="text" name="username" value="<?=$row ["username"]?>">
 name: <input type="text" name="name" value="<?=$row ["name"]?>" >
  <br>
<br>
password:<input type="password" name="password" value="<?=$row ["password"]?>"><br>
address:<textarea name="address" rows="3" cols="40"><?=$row ["address"]?></textarea><br>
moblie:<input type="text" name="mobile" value="<?=$row ["mobile"]?>">  <br> 
email: <input type="text" name="email" value="<?=$row ["email"]?>"><br>
<input type="submit" value="แก้ไข้ ">
</form>

</form>
</body>
</html>