<?php 
/** @var $pdo \PDO */
require_once "./database.php";
session_start();

if(isset($_POST['login'])){
        
		    $username = $_POST['username'];    
            $password = sha1($_POST['password']);
            
            $statement = $pdo->prepare ("SELECT * from user where username = :username and password = :password");
            $statement->bindValue(':username', $username);
            $statement->bindValue(':password', $password);
    
            $statement->execute();
            $user =$statement-> fetch();
			
			if($user){
			    
			 	$_SESSION['logged_in'] = TRUE;
			 	
                $Month = 2592000 + time();
                 //this adds 30 days to the current time
                 
    
                header("refresh:0; url=../admin/admin.php");
			}
            else{
                echo "<script type='text/javascript'> window.alert('Username or password wrong!'); </script> " .
                header("refresh:0; url=../admin/login.php");
            }
            
			
        }
        
        ?>