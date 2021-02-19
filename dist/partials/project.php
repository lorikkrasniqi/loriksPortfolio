<section class="projects dark" id="projects">
        <h2>My projects</h2>
        <br>
        <div class="projects__buttons">
            <button id="all-button"  class="btn-filter">All</button>
            <button id="java-button" class="btn-filter">Java</button>
            <button id="php-button" class="btn-filter">PHP</button>
        </div>
        
        <div class="projects__items" id="projects__items">
         <?php 
                
            /** @var $pdo \PDO */
            require_once "./include/database.php";


            $statement= $pdo->prepare('Select * FROM projects ORDER BY finish_date DESC');


            $statement-> execute();
            $projects =$statement-> fetchALL(PDO::FETCH_ASSOC);

            foreach ($projects as $i => $project){?>
                
                 <div class="projects__item">
                  <img src="<?php echo $project['image'] ?>" alt="My projects">
                  <div class="projects__description">
                      <?php echo $project['description']?>
                  </div>
                  <div class="projects__btns">
                      <a href="<?php echo $project['live'] ?>" class="projects__btn">
                          <i class="fas fa-eye"></i>Preview
                      </a>
                      <a href="<?php echo $project['git'] ?>" class="projects__btn">
                          <i class="fab fa-github"></i>Github
                      </a>
                  </div>
              </div>
                    

                <?php }
                
                ?>
        <?php ?>
        
             
              
              
              </div>
      </section>