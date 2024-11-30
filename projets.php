<?php
require_once(__DIR__ . '/config/mysql.php');
require_once(__DIR__ . '/databaseconnect.php');
require_once(__DIR__ . '/variables.php');
require_once(__DIR__ . '/fonction.php');
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Funnel+Display:wght@300..800&display=swap" rel="stylesheet">
    <title>Cyberfolio</title>
    <link rel="icon" href="image/favicon.png">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/descript-projets.css">
</head>

<body>

    <header>
        <div>
            <img src="image/photo.png" alt="tête">
            <br> <br> <br>
            <p class="name">Michel Emcé</p>
            <br>
            <p class="descript">Découvrez les différents projets réalisés par un <br> développeur web Full Stack à Paris
            </p>
        </div>
        <br><br>
        <nav>
            <a href="index.php">Accueil</a>
            <a href="index.php#projets">Projets</a>
            <a href="contact.php"><i class="fa-solid fa-square-arrow-up-right"></i>&nbsp;&nbsp;&nbsp;Contact</a>
        </nav>
    </header>

    <div class="all-content">
            <h1><?php echo $projets[$id]['h1']; ?></h1>
        <div class="content">
            <img src="<?php echo $projets[$id]['img_1']; ?>">
            <div class="text-content">
                <h2><?php echo $projets[$id]['h2_1']; ?></h2>
                <br>
                <p><?php echo $projets[$id]['p_1']; ?></p>
            </div>
        </div>
        <br><br><br><br>
        <div class="content">
            <div class="text-content">
                <h2><?php echo $projets[$id]['h2_2']; ?></h2>
                <br>
                <p><?php echo $projets[$id]['p_2']; ?></p>
            </div>
            <img src="<?php echo $projets[$id]['img_2']; ?>">
        </div>
    </div>

    <footer>
        <p class="copyright">&copy; <a href="https://www.linkedin.com/in/baptiste-aussant-7033b2259/"
                target="_blank">Baptiste AUSSANT</a>, Adel BOUSLAMA,&ensp;<a
                href="https://www.linkedin.com/in/alessandro-patti-76699632b/" target="_blank">Alessandro
                PATTI</a>,&ensp;<a href="https://www.linkedin.com/in/elisabethriviere/" target="_blank">Elisabeth
                RIVIÈRE</a></p>
    </footer>

    <script src="https://kit.fontawesome.com/cb9da243d3.js" crossorigin="anonymous"></script>
</body>
