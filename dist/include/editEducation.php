<?php 
/** @var $pdo \PDO */
require_once "./database.php";


   
if($_SERVER['REQUEST_METHOD']=== 'POST'){
    $id= $_POST['id'];
    $name =$_POST['name'];
    $subject= $_POST['subject'];
    $city=$_POST['city'];
    $description=$_POST['description'];
    $startdate =$_POST['start-date'];
    $enddate =$_POST['end-date'];
 

    
   
    
    $statement = $pdo->prepare ("Update education SET name=:name , subject=:subject, city=:city,description= :description, startdate = :startdate, enddate = :enddate WHERE id=:id");

    $statement->bindValue(':id', $id);
    $statement->bindValue(':name', $name);
    $statement->bindValue(':subject', $subject);
    $statement->bindValue(':city', $city);
    $statement->bindValue(':description', $description);
    $statement->bindValue(':startdate',  $startdate);
    $statement->bindValue(':enddate',  $enddate);
    $statement->execute();
    header('Location: ../admin/education.php');

}


?>