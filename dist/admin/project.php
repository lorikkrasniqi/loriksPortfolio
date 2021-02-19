<?php 

session_start();
    if (!isset($_SESSION['logged_in'])) {
        header("location:login.php");
    }
include_once "./layout/header.php"
?>
<section class="admin admin__experience">

<button id="myBtn" class="btn">Add new project</button>



<?php 
                
            /** @var $pdo \PDO */
            require_once "../include/database.php";


            $statement= $pdo->prepare('Select * FROM projects');


            $statement-> execute();
            $projects =$statement-> fetchALL(PDO::FETCH_ASSOC);

            foreach ($projects as $i => $project){?>
                
                <div class="education__part">
                      <h2 class="education__place"><?php echo $project['name'] ?></h2>
                      <h2 class="education__title"><?php echo $project['main_technology'] ?></h2>
                      <h2 class="education__title"><?php echo $project['secondary_technology'] ?></h2>
                      
                      
                      <p class="education__desription"><a href="<?php echo $project['git'] ?>"><?php echo $project['git'] ?></a></p>
                      <p class="education__desription"><a href="<?php echo $project['live'] ?>"><?php echo $project['live'] ?></a></p>
                      <br>
                      
                      <div class="education__delete btn_row">
                          <form action='./../include/deleteProject.php' method='post' >
                                                <input class='btn btn_row' align='center' type='submit' name='delete'  value='Delete' onclick="return confirm('Please confirm');">
                                                <input type='hidden' value='<?php echo $project['id']?>' name='deleteProject'/></form>
                      </div>
                    </div>
                    

                <?php }
                
                ?>

<div id="myModal" class="modal">

  
  <div class="modal-content">
    <span class="close">&times;</span>
    <div class="container">
    <form action="./../include/addProject.php" method="post" enctype="multipart/form-data">
                
                    <div class="form-group">

                        <label >Profile picture</label>
                        <br>
                        <input type="file" name="image" accept="image/*">
                    
                    </div>
                <label for="name">Project name</label>
                <input type="text" id="name" name="name" >

                <label for="main">Main technology</label>
                <input type="text" id="main" name="main"  >

                <label for="second">Secondary technologies</label>
                <input type="text" id="second" name="second"  >

                <label for="git">Github link</label>
                <input type="text" id="git" name="git" >
                <label for="live">Preview link</label>
                <input type="text" id="live" name="live" >


                

                <br>
                <br>
                <input type="submit" value="Submit">
            </form>
    </div>
  </div>

</div>


</section>

<?php 
include_once "./layout/footer.php"
?>