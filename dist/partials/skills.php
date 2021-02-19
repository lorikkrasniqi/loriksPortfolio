<section class="skill dark" id="skill">
        <h2 class="skill__t">My skills</h2>

    <div class="skill__list">
        <?php 
                
            /** @var $pdo \PDO */
            require_once "./include/database.php";


            $statement= $pdo->prepare('Select * FROM skills ORDER BY level DESC');


            $statement-> execute();
            $skills =$statement-> fetchALL(PDO::FETCH_ASSOC);

            foreach ($skills as $i => $skill){?>


        <p><?php echo $skill['name']?></p>
        <p class="skill__p"><?php echo $skill['level']?>%</p>
        <div class="skill__bar">
            <div class="skill__level" style="width:<?php echo $skill['level']?>%"></div>


        </div>

        <?php }?>
    </div>
      </section>