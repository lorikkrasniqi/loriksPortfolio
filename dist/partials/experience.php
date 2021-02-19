  <section class="experience light" id="experience">
        <h2 class="experience__t">Work experiences</h2>
        <?php 
                
            /** @var $pdo \PDO */
            require_once "./include/database.php";


            $statement= $pdo->prepare('Select * FROM experiences ORDER BY startdate DESC');


            $statement-> execute();
            $eperiences =$statement-> fetchALL(PDO::FETCH_ASSOC);

            foreach ($eperiences as $i => $experience){?>
                
                <div class="job">
                  <h2 class="job__place"><?php echo $experience['place'] ?></h2>
                      <h2 class="job__title"><?php echo $experience['title'] ?></h2>
                      <?php if (empty($education['enddate'])){
                          $enddate="Present";
                        }
                        else{
                            $enddate=$education['enddate'];
                        }?>
                        <h2 class="job__date"><?php echo $experience['startdate'] . ' - '. $enddate ?></h2>
                      <p class="job__desription"><?php echo $experience['description'] ?></p>
                    </div>
                    

                <?php }
                
                ?>
        <?php ?>
        
        
      </section>