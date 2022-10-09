<html>
    
    <body>
        <div>
    <?php
           $pdo = new PDO("mysql:host=localhost;dbname=blueshop;charset=utf8", "root", "");
           $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
           ?>

          <?php $stmt = $pdo->prepare("SELECT * FROM member WHERE username =?");
                $stmt->bindParam(1, $_GET["username"]); 
                $stmt->execute(); 
                $row = $stmt->fetch();
                ?>
            <div>
                <Div>
                  <img src="../img/<?=$row["username"]?>.jpg" width='200'><br>
                </Div>
                <div>
                  <h2>ชื่อสมาชิก : <?= $row ["name"] ?></h2>   
                         ที่อยู่:  <?= $row ["address"] ?>
                         อีเมล์:  <?= $row ["email"] ?>
                        
                </div>
                </div> 
         </div> 
           
    </body>
</html>