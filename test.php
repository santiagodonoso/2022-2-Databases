<?php
require_once __DIR__.'/surrealdb.php';

try{
  $lets = ['id'=>'user:b', 'age'=>20];
  $data = surrealdb('SELECT * FROM user WHERE id=:id AND age=:age', $lets);
  echo $data.PHP_EOL.PHP_EOL;
  $lets = ['id'=>'user:b', 'name'=>'bb', 'last_name'=>'last bbbb'];
  $data = surrealdb('UPDATE :id SET name=:name, last_name=:last_name', $lets);  
  // $data = surrealdb('UPDATE :id SET name=:name', $lets);  
  echo $data.PHP_EOL;
}catch(Exception $ex){
  echo "**********";
  // echo $ex->getMessage();
  echo $ex;
}