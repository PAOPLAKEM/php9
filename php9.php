
<html>
    <script>
        function confirmDelete(username) { 

            console.log(username);
        document.location = "fix.php?username=" + username;
        }
    </script>
    <body>        
    <?php
           $pdo = new PDO("mysql:host=localhost;dbname=blueshop;charset=utf8", "root", "");
           $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);?>

           <?php $stmt = $pdo->prepare("SELECT * FROM member");
           $stmt->execute();?>
          
            <?php while ($row = $stmt->fetch()) {
               
               
                  echo "ชื่อสมาชิก : " . $row ["name"] . "<br>";   
                  echo "ที่อยู่: " . $row ["address"] . "<br>";
                  echo "อีเมล์: " . $row ["email"] . " <br>";
                  echo $row["username"];
                  echo "<a href='#' onclick=confirmDelete('" . $row ["username"] . "')  >แก้ไข</a>";
                  echo "<hr>\n";
                }
                  ?>
                  
                  
                   
                
                
           
    </body>
</html>