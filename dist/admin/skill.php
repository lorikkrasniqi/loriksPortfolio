<?php 
session_start();
    if (!isset($_SESSION['logged_in'])) {
        header("location:login.php");
    }
include_once "./layout/header.php"
?>
<section class="admin admin__education">

<button id="myBtn" class="btn">Add new skill</button>



<?php 
                
            /** @var $pdo \PDO */
            require_once "../include/database.php";


            $statement= $pdo->prepare('Select * FROM skills ');


            $statement-> execute();
            $skills =$statement-> fetchALL(PDO::FETCH_ASSOC);

            foreach ($skills as $i => $skill){?>
                
                <div class="skill__part">
                      
                      <h2 class="skill__title"> </h2>
                      
                      <p class="education__desription skill_description">Skill name: <?php echo $skill['name'] ?> &nbsp; Skill level: <?php echo $skill['level'] ?></p>
                      
                      <div class="education__delete delete-skill">
                          <form action='./../include/deleteSkill.php' method='post' >
                                                <input class='btn btn-danger' align='center' type='submit' name='delete'  value='delete' onclick="return confirm('Please confirm');">
                                                <input type='hidden' value='<?php echo $skill['id']?>' name='deleteSkill'/></form>
                      </div>
                    </div>
                    

                <?php }
                
                ?>

<div id="myModal" class="modal">

  
  <div class="modal-content">
    <span class="close">&times;</span>
    <div class="container">
    <form action="./../include/addSkill.php" method="post">

    <label for="name">Name of skill*</label>
    <input type="text" id="name" name="name" required>

    <label for="level">Yor level 1-100*</label>
    

    <input type="number" id="level" name="level" min="0" max="100"><br><br>

    <input type="submit" value="Submit">
    </form>
    </div>
  </div>

</div>
<div id="editModal" class="modalEdit">

  
  <div class="modal-content">
      <span class="closeEdit">&times;</span>
      <div class="container" id="editContainer">
    
    </div>

  </div>

</div>

</section>

<?php 
include_once "./layout/footer.php"
?>