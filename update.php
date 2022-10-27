<?php
try{
  // NOTE:: NEVER FORGET you must use placeholders :
  require_once __DIR__.'/db.php';
  $query = $_db->prepare('UPDATE users 
                          SET name = :name 
                          WHERE id = :id');
  $query->bindValue(':name', 'X');
  $query->bindValue(':id', '2');

  $query->execute();
  if( $query->rowCount() == 0 ){
    echo 'User cannot be updated';
    exit();
  }
  header('Content-Type: application/json');
  echo 'User updated successfully';
  exit();   
}catch(PDOException $ex){
  echo $ex;
}
