<?php 

    session_start();
    if (!isset($_SESSION['logged_in'])) {
        header("location:login.php");
    }
    /** @var $pdo \PDO */
    require_once "../include/database.php";

    include_once "./layout/header.php"
?>



    <section class="profile">
        <h3>Set up your profile</h3>
        <div class="container">
            <?php 

                
                $statement= $pdo->prepare('Select * FROM profile where id =1');
                
                $statement-> execute();
                $profile = $statement-> fetch();
            
            ?>
            <form action="../include/editProfile.php" method="post" enctype="multipart/form-data">

                <?php if ($profile['picture']):?>
                    <img src="../include/<?php echo $profile['picture']?>" class="update-image" alt="profile picture">
                <?php endif ?>
                    <div class="form-group">

                        <label >Profile picture</label>
                        <br>
                        <input type="file" name="image" accept="image/*">
                    
                    </div>
                <input type='hidden' value='<?php echo $profile['picture']?>' name='imagepath'/>
                <label for="name">First name</label>
                <input type="text" id="name" name="name" value="<?php echo $profile['name']?>">

                <label for="lastname">Last name</label>
                <input type="text" id="lastname" name="lastname"  value="<?php echo $profile['lastname']?>">

                <label for="title">Title</label>
                <input type="text" id="title" name="title"  value="<?php echo $profile['title']?>">

                <label for="city">City</label>
                <input type="text" id="city" name="city" value="<?php echo $profile['city']?>">

                <label for="description1">Description 1</label>
                <textarea id="description1" name="description1" style="height:70px"  value="<?php echo $profile['description1']?>"><?php echo $profile['description1']?></textarea>
                
                <label for="description2">Description 2</label>
                <textarea id="description2" name="description2" style="height:70px"  value="<?php echo $profile['description2']?>"><?php echo $profile['description2']?></textarea>

                <label for="number">Phone number</label>
                <input type="text" id="phonenumber" name="phonenumber"  value="<?php echo $profile['phonenumber']?>">

                <label for="birthdate">Birthday</label>
                <input type="date" id="birthdate" name="birthdate"  value="<?php echo $profile['birthdate']?>">

                <br>
                <br>
                <input type="submit" value="Save Profile">
            </form>
        </div>
    </section>
      
     <?php 
      include_once "./layout/footer.php"
?>