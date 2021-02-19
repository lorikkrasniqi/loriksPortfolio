<?php 

session_start();
    if (!isset($_SESSION['logged_in'])) {
        header("location:login.php");
    }
include_once "./layout/header.php"
?>
<section class="admin admin__education">

<button id="myBtn" class="btn">Add an eduaction</button>



<?php 
                
            /** @var $pdo \PDO */
            require_once "../include/database.php";


            $statement= $pdo->prepare('Select * FROM education ORDER BY startdate DESC');


            $statement-> execute();
            $educations =$statement-> fetchALL(PDO::FETCH_ASSOC);

            foreach ($educations as $i => $education){?>
                
                <div class="education__part">
                      <h2 class="education__place"><?php echo $education['subject'] ?></h2>
                      <h2 class="education__title"><?php echo $education['name'] ?></h2>
                      <h2 class="education__date"><?php if (empty($education['enddate'])){
                          $enddate="Present";
                      }
                      else{
                          $enddate=$education['enddate'];
                      }

                      
                      echo " ". $education['startdate']. " - "  . $enddate. " " ?></h2>
                      <h2 class="education__city"><?php echo $education['city'] ?></h2>
                      <p class="education__desription"><?php echo $education['description'] ?></p>
                      <div class="education__edit btn_row">
                    
                     <button id="editBtn" class="btn btn_row" data-id='<?php echo $education['id']; ?>'>Edit</button>
                                            
                                           
                      </div>
                      <div class="education__delete btn_row">
                          <form action='./../include/deleteEducation.php' method='post' >
                                                <input class='btn btn_row' align='center' type='submit' name='delete'  value='delete' onclick="return confirm('Please confirm');">
                                                <input type='hidden' value='<?php echo $education['id']?>' name='deleteEducation'/></form>
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

    <label for="city">City</label>
    <input type="text" id="city" name="city">

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