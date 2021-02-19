<section class="education light" id="education">
        <h2 class="education__t">Education</h2>
     

<?php $statement= $pdo->prepare('Select * FROM education ORDER BY startdate DESC');


            $statement-> execute();
            $educations =$statement-> fetchALL(PDO::FETCH_ASSOC);

            foreach ($educations as $i => $education){?>
                
                <div class="education__part">
                      <h2 class="education__place"><?php echo $education['subject'] ?></h2>
                      <h2 class="education__title"><?php echo $education['name'] ?></h2>
                      <h2 class="education__date">
                      <?php if (empty($education['enddate'])){
                          $enddate="Present";
                      }
                      else{
                          $enddate=$education['enddate'];
                      }

                      
                      echo " ". $education['startdate']. " - "  . $enddate. " " ?></h2>
                      <h2 class="city"><?php echo $education['city'] ?></h2>
                      <p class="education__desription"><?php echo $education['description'] ?></p>
                      
                    </div>
                    

                <?php }
                
                ?>
                 </section>