<?php 
/** @var $pdo \PDO */
require_once "./database.php";


   
if($_SERVER['REQUEST_METHOD']=== 'POST'){

    $name =$_POST['name'];
    $subject= $_POST['subject'];
    $city=$_POST['city'];
    $description=$_POST['description'];
    $startdate =$_POST['start-date'];
    $enddate =$_POST['end-date'];
 

    
   

    $statement = $pdo->prepare ("INSERT INTO education (name, subject, city,description, startdate, enddate) VALUES (:name, :subject, :city, :description, :startdate, :enddate)");
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