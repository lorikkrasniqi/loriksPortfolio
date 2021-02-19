<?php 
/** @var $pdo \PDO */
require_once "./database.php";



   
if($_SERVER['REQUEST_METHOD']=== 'POST'){

    if(isset($_POST['delete'])){ 	
	        $id =$_POST['deleteSkill']; 	
    }
 

    
   

    $statement = $pdo->prepare ("Delete from skills where id = :id");
    $statement->bindValue(':id', $id);
    
    $statement->execute();
    header('Location: ../admin/skill.php');

}


?>