 <?php 
 
    
    
    




?>

 <section class="about dark" id="about">
        <h1 class="about_title">Who i am</h1>

        <h2><?php echo $profile['title'] ?></h2>
       <?php 
        $date = new DateTime($profile['birthdate']);
        $now = new DateTime();
        $interval = $now->diff($date);
        $age = $interval->y;
       ?>
        <p>I am  <?php echo $age ?> years old</p>
        <p class="description"><?php echo $profile['description1'] ?></p>
        <p class="description"><?php echo $profile['description2'] ?></p>
        
      </section>