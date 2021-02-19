<?php 
/** @var $pdo \PDO */
require_once "./database.php";


   
if($_SERVER['REQUEST_METHOD']=== 'POST'){

    $name =$_POST['name'];
    $email=$_POST['email'];
    $subject= $_POST['subject'];
    $message =$_POST['message'];
    
   

    $statement = $pdo->prepare ("INSERT INTO contact (name, email, subject,message, date ) VALUES (:name, :email, :subject, :message, :date)");
    $statement->bindValue(':name', $name);
    $statement->bindValue(':email', $email);
    $statement->bindValue(':subject', $subject);
    $statement->bindValue(':message', $message);
    $statement->bindValue(':date',  date('Y-m-d H:i:s'));
    $statement->execute();
    header('Location: ../index.php');

}


?>