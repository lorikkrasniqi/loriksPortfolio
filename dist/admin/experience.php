<?php 

session_start();
    if (!isset($_SESSION['logged_in'])) {
        header("location:login.php");
    }
include_once "./layout/header.php"
?>
<section class="admin admin__experience">

<button id="myBtn" class="btn">Add new work experience</button>



<?php 
                
            /** @var $pdo \PDO */
            require_once "../include/database.php";


            $statement= $pdo->prepare('Select * FROM experiences ORDER BY startdate DESC');


            $statement-> execute();
            $experiences =$statement-> fetchALL(PDO::FETCH_ASSOC);

            foreach ($experiences as $i => $experience){?>
                
                <div class="education__part">
                      <h2 class="education__place"><?php echo $experience['place'] ?></h2>
                      <h2 class="education__title"><?php echo $experience['title'] ?></h2>
                      <h2 class="education__date"><?php if (empty($experience['enddate'])){
                          $enddate="Present";
                      }
                      else{
                          $enddate=$experience['enddate'];
                      }

                      
                      echo " ". $experience['startdate']. " - "  . $enddate. " " ?></h2>
                      
                      <p class="education__desription"><?php echo $experience['description'] ?></p>
                      <br>
                      <div class="education__edit btn_row">
                    
                     <button id="editBtnEx" class="btn btn_row modal-open"
                     data-modal ="modal1"  data-id='<?php echo $experience['id']; ?>'>Edit</button>
                                            
                                           
                      </div>
                      <div class="education__delete btn_row">
                          <form action='./../include/deleteExperience.php' method='post' >
                                                <input class='btn btn_row' align='center' type='submit' name='delete'  value='Delete' onclick="return confirm('Please confirm');">
                                                <input type='hidden' value='<?php echo $experience['id']?>' name='deleteExperience'/></form>
                      </div>
                    </div>
                    

                <?php }
                
                ?>

<div id="myModal" class="modal">

  
  <div class="modal-content">
    <span class="close">&times;</span>
    <div class="container">
    <form action="./../include/addExperience.php" method="post">

    <label for="name">Name of Company*</label>
    <input type="text" id="name" name="name" required>

    <label for="position">Position*</label>
    <input type="text" id="position" name="position" required>

    

    <label for="description">Description</label>
    <textarea id="description" name="description" style="height:70px"></textarea>

    <label for="start-date">Start date*</label>
    <input type="month" id="start-date" name="start-date" required>

    <label for="end-date">End date</label>
    <input type="month" id="end-date" name="end-date">
    <input type="submit" value="Submit">
    </form>
    </div>
  </div>

</div>
<!-- <div id="modal1" class="modalNew">
  <div class="modal-content">
    <div class="modal-header">
      <button class="icon modal-close">Close</button>
    </div>
    <div class="modal-body"></div>
    <div class="modal-footer">
      <button class="link modal-close">Close Modal</button>
    </div>
  </div>

  


</div> -->

</section>

<?php 
include_once "./layout/footer.php"
?>