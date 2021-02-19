<?php 
  /** @var $pdo \PDO */
require_once "./include/database.php";

$statement= $pdo->prepare('Select * FROM profile where id =1');
    
    $statement-> execute();
    $profile = $statement-> fetch();
    

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Source+Code+Pro:wght@400;900&family=Source+Sans+Pro:wght@300;900&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
   

    <link rel="stylesheet" href="css/main.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
      
    </script>
    <link rel="shortcut icon" href="./img/favicon.ico">
    <title>Lorik Krasniqi - Portfolio</title>
  </head>
  <body>
    <header>
      <div class="menu-btn">
        <span class="menu-btn__burger"></span>
      </div>
      <nav class="nav">
        <ul class="menu-nav">
          <li class="menu-nav__item">
            <a href="#home" class="menu-nav__link"> Home </a>
          </li>
          <li class="menu-nav__item">
            <a href="#about" class="menu-nav__link"> About Me </a>
          </li>
          <li class="menu-nav__item">
            <a href="#education" class="menu-nav__link"> Education</a>
          </li>
          <li class="menu-nav__item">
            <a href="#projects" class="menu-nav__link"> My Projects </a>
          </li>
          <li class="menu-nav__item">
            <a href="#experience" class="menu-nav__link"> Experiences </a>
          </li>
          <li class="menu-nav__item">
            <a href="#skill" class="menu-nav__link"> Skills </a>
          </li>
          <li class="menu-nav__item">
            <a href="#contact" class="menu-nav__link"> Contact Me </a>
          </li>
        </ul>
      </nav>
    </header>
    <main>
      <section class="home light" id="home">
        <h2>Hi! My name is</h2>
        <h1 class="home__name">
          <?php echo $profile['name'] ?> <span class="home__name--last"> <?php echo $profile['lastname'] ?></span>
        </h1>
        <h2><?php echo $profile['title'] ?></h2>
        <img src="include<?php echo $profile['picture'] ?>" alt="Profile picture" class="home__profile">
        
      </section>
     <?php include_once "./partials/about.php"; ?>

     <?php include_once "./partials/education.php"; ?>
      
      
      <?php include_once "./partials/project.php"; ?>

      <?php include_once "./partials/experience.php"; ?>

      <?php include_once "./partials/skills.php"; ?>
      
     <?php include_once "./partials/contact.php"; ?>
      <footer class="footer">
        <p class="footer__email">lorikkrasniqi1@gmail.com </p> 
        <div class="footer__social">
          <a href="https://www.linkedin.com/in/lorik-krasniqi-605101100/" target="_blank">
            <i class="fab fa-linkedin fa-2x"></i>
          </a>
          <a href="#" target="_blank">
            <i class="fab fa-facebook fa-2x"></i>
          </a>
          <a href="#" target="_blank">
            <i class="fab fa-instagram fa-2x"></i>
          </a>
          <a href="#" target="_blank">
            <i class="fab fa-github fa-2x"></i>
          </a>
        </div>
        </footer>
    </main>
    <script src=js/main.js></script>
  </body>
</html>
