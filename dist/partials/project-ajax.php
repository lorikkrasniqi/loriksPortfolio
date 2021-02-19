<?php 
/** @var $pdo \PDO */
require_once "../include/database.php";


   
if($_SERVER['REQUEST_METHOD']=== 'POST'){

    $type =$_POST['type'];
    if($type=='all'){
    $statement= $pdo->prepare('Select * FROM projects ORDER BY finish_date DESC');
    }
    else{
        $statement= $pdo->prepare('Select * FROM projects WHERE main_technology Like :type  ORDER BY finish_date DESC');
        $statement ->bindValue(':type', $type);
       
    }

    $statement-> execute();
    $projects =$statement-> fetchALL(PDO::FETCH_ASSOC);

            foreach ($projects as $i => $project){?>
                
                 <div class="projects__item">
                  <img src="./include<?php echo $project['image'] ?>" alt="My projects">
                  <div class="projects__description">
                     <p> The main technology is: <?php echo $project['main_technology']?></p> 
                     <p> Other technologies used: <?php echo $project['secondary_technology']?></p> 
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
                
               

    
}
   
?>