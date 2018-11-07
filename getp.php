<?php
if(isset($_GET['id']) && !is_null($_GET['id'])){
 //query tb c
 $id = $_GET['id'];
 $pdo = connect();
 $quer = "select * from c where pid=$id"; 
 $rs = $pdo->query($quer)->fetchAll(PDO :: FETCH_CLASS);
 echo json_encode($rs);
}else{
	// query tb p
  $pdo = connect();
  $query = "select * from p";
  $rs = $pdo->query($query)->fetchAll(PDO::FETCH_CLASS);
//  var_dump($rs);
   echo json_encode($rs);
}

function connect(){
 // return pdo
 $dsn = 'mysql:dbname=my_test;host=172.17.0.3';
 $user = 'root';
 $password = 'root123'; 
 try {
    $dbh = new PDO($dsn, $user, $password);
    return $dbh;
 } catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
 } 
}


