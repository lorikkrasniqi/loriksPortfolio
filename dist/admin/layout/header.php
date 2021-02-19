<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Source+Code+Pro:wght@400;900&family=Source+Sans+Pro:wght@300;900&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="./../css/main.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="shortcut icon" href="../img/favicon.ico">
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
            <a href="admin.php" class="menu-nav__link"> Profile </a>
          </li>
          <li class="menu-nav__item">
            <a href="education.php" class="menu-nav__link"> Education</a>
          </li>
          <li class="menu-nav__item">
            <a href="#projects" class="menu-nav__link"> My Projects </a>
          </li>
          <li class="menu-nav__item">
            <a href="experience.php" class="menu-nav__link"> Experiences </a>
          </li>
          <li class="menu-nav__item">
            <a href="skill.php" class="menu-nav__link"> Skills </a>
          </li>
          <li class="menu-nav__item">
            <a href="contact.php" class="menu-nav__link">Messages </a>
          </li>
          
        </ul>
      </nav>
    </header>
    <main>
        <div class="logout"><form action="./../include/logout.php" method="POST">
    
        <button type="submit" name="logout" class="btn">Log out</button>
    </form>
    </div>