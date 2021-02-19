<?php 
/** @var $pdo \PDO */
require_once "./database.php";


if($_SERVER['REQUEST_METHOD']=== 'POST'){
    
    if(!is_dir(__DIR__.'/images')){
        mkdir(__DIR__.'/images');
    }

        $name=$_POST['name'];
        $lastname=$_POST['lastname'];
        $title=$_POST['title'];
        $city=$_POST['city'];
        $description1=$_POST['description1'];
        $description2=$_POST['description2'];
        $birthdate=$_POST['birthdate'];
        $phonenumber=$_POST['phonenumber'];
        
        
        $image= $_FILES['image'] ??null;
        $imagePath=$image['name'];

        if($image && $image['tmp_name']){
           
            
            if ($image['name']){
                unlink(__DIR__.'/images/'.$image['name']);
            }
        
                $imagePath= '/images/'. $image['name'];
                move_uploaded_file($image['tmp_name'] , __DIR__.''.$imagePath);
        }
        
        if(empty($imagePath)){
            $imagePath=$_POST['imagepath'];
        }

        $statment = $pdo->prepare ("UPDATE  profile SET controller =1, name = :name, lastname = :lastname, title = :title, city = :city, description1 = :description1, description2 = :description2, birthdate=:birthdate, picture=:picture , phonenumber=:phonenumber where id=1");
        
        $statment->bindValue(':name', $name);
        $statment->bindValue(':lastname', $lastname);
        $statment->bindValue(':title', $title);
        $statment->bindValue(':city', $city);
        $statment->bindValue(':description1', $description1);
        $statment->bindValue(':description2', $description2);
        $statment->bindValue(':birthdate', $birthdate);
        $statment->bindValue(':picture', $imagePath);
        $statment->bindValue(':phonenumber', $phonenumber);
        
        $statment->execute();
        header('Location:../admin/admin.php');

    
}
?>