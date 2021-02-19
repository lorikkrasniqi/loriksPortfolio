<?php 
/** @var $pdo \PDO */
require_once "./database.php";



   
if($_SERVER['REQUEST_METHOD']=== 'POST'){

    if(isset($_POST['delete'])){ 	
	        $id =$_POST['deleteExperience']; 	
    }
 

    
   

    $statement = $pdo->prepare ("Delete from experiences where id = :id");
    $statement->bindValue(':id', $id);
    
    $statement->execute();
    header('Location: ../admin/experience.php');

}


?>