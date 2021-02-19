<?php 
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
                      
                      <h2 class="skill__title"><?php echo $skill['name'] ?></h2>
                      
                      <p class="education__desription"><?php echo $skill['level'] ?></p>
                      
                      <div class="education__delete delete-skill">
                          <form action='./../include/deleteEducation.php' method='post' >
                                                <input class='btn btn-danger' align='center' type='submit' name='delete'  value='delete' onclick="return confirm('Please confirm');">
                                                <input type='hidden' value='<?php echo $skill['id']?>' name='deleteSill'/></form>
                      </div>
                    </div>
                    

                <?php }
                
                ?>

<div id="myModal" class="modal">

  
  <div class="modal-content">
    <span class="close">&times;</span>
    <div class="container">
    <form action="./../include/addEducation.php" method="post">

    <label for="name">Name of institution*</label>
    <input type="text" id="name" name="name" required>

    <label for="subject">Subject*</label>
    <input type="text" id="subject" name="subject" required>

    <input type="number" id="quantity" name="quantity" min="0" max="100"><br><br>

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