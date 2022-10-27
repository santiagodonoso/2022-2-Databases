<?php
try{
  require_once __DIR__.'/db.php';
  $q = $_db->prepare('SELECT * FROM users');
  $q->execute();
  $users = $q->fetchAll();
}catch(PDOException $ex){
  echo $ex;
  exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Users</h1>
  <div id="users">
    <?php
    foreach($users as $user){
    ?>
      <div class="user">
        <div>
          <?= $user['id'] ?>
        </div>
        <div>
          <?= $user['name'] ?>
        </div>
      </div>
    <?php
    }
    ?>


  </div>
</body>
</html>