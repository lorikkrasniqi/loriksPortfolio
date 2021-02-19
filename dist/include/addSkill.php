<?php 
/** @var $pdo \PDO */
require_once "./database.php";


   
if($_SERVER['REQUEST_METHOD']=== 'POST'){

    $name =$_POST['name'];
    $level= $_POST['level'];
    

    
   

    $statement = $pdo->prepare ("INSERT INTO skills (name, level) VALUES (:name, :level)");
    $statement->bindValue(':name', $name);
    $statement->bindValue(':level', $level);
    $statement->execute();
    header('Location: ../admin/skill.php');

}


?>