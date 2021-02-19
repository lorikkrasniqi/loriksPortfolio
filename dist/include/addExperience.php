<?php 
/** @var $pdo \PDO */
require_once "./database.php";


   
if($_SERVER['REQUEST_METHOD']=== 'POST'){

    $name =$_POST['name'];
    $position= $_POST['position'];
    
    $description=$_POST['description'];
    $startdate =$_POST['start-date'];
    $enddate =$_POST['end-date'];
 

    
   

    $statement = $pdo->prepare ("INSERT INTO experiences ( title, place, description, startdate, enddate) VALUES (:position, :name,  :description, :startdate, :enddate)");
    $statement->bindValue(':name', $name);
    $statement->bindValue(':position', $position);
    $statement->bindValue(':description', $description);
    $statement->bindValue(':startdate',  $startdate);
    $statement->bindValue(':enddate',  $enddate);
    $statement->execute();
    
    
    header('Location: ../admin/experience.php');

}


?>