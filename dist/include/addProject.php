<?php 

/** @var $pdo \PDO */
require_once "./database.php";


   
if($_SERVER['REQUEST_METHOD']=== 'POST'){

    $name =$_POST['name'];
    $main_technology= $_POST['main'];
    $secondary_technology=$_POST['second'];
    $git=$_POST['git'];
    $live =$_POST['live'];
    $imagePath= '';
    
 

    
   
$image= $_FILES['image'] ??null;
        $imagePath=$image['name'];

        if($image && $image['tmp_name']){
           
            
            if ($image['name']){
                unlink(__DIR__.'/images/'.$image['name']);
            }
        
                $imagePath= '/images/'. $image['name'];
                move_uploaded_file($image['tmp_name'] , __DIR__.''.$imagePath);
        }



        $statement = $pdo->prepare ("INSERT INTO projects (name, main_technology, secondary_technology,git, live,image) VALUES (:name, :main_technology, :secondary_technology, :git, :live, :image)");
        $statement->bindValue(':name', $name);
        $statement->bindValue(':main_technology', $main_technology);
        $statement->bindValue(':secondary_technology', $secondary_technology);
        $statement->bindValue(':git', $git);
        $statement->bindValue(':live',  $live);
        $statement->bindValue(':image',  $imagePath);
        $statement->execute();
        header('Location: ../admin/project.php');

    }

?>