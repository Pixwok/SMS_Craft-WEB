<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="img/favicon.png" />
    <link rel="stylesheet" type="text/css" href="css/nav.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/slider.css">
    <link rel="stylesheet" type="text/css" href="css/craft.css">
    <title>SMS Craft</title>
</head>
<body>
    <header>
        <div class="nav-rs">
            <strong class="status">
                Joueurs en ligne : 
                <?php
                    $statut = file_get_contents('https://minecraft-api.com/api/query/playeronline.php?ip=92.222.139.232&port=25579');
                    echo $statut;
                ?>
            </strong>  

            <ul class="content-rs">
                <li class="rs"><a target="new" href="https://discord.gg/xfMz3W7"><img src="img/discordlogo.png" alt="twitter"></a></li>
                <li class="rs" id="twitter"><a target="new" href="https://twitter.com/SummerMods"><img src="img/twitterlog.png" alt="discord"></a></li>
            </ul>
        </div>
        <div class=slider>
            <div id="slide">
                <div class="title1">
                    <a href="index.php"><h1>SMS_Craft</h1></a>
                    <a class="rejoindre" target="new" href="https://forms.gle/7aD3ezyA8JUGiycd9"><h2>NOUS REJOINDRE</h2></a>
                </div>   
                <div class="title2">
                    <a href="index.php"><h1>SMS_Craft</h1></a>
                    <a class="rejoindre" target="new" href="https://forms.gle/7aD3ezyA8JUGiycd9"><h2>NOUS REJOINDRE</h2></a>
                </div>
                <div class="title3">
                    <a href="index.php"><h1>SMS_Craft</h1></a>
                    <a class="rejoindre" target="new" href="https://forms.gle/7aD3ezyA8JUGiycd9"><h2>NOUS REJOINDRE</h2></a>
                </div>
            </div>
        </div>
    </header>
    <nav>
        <div class="bouton-menu">
            <span></span>
        </div>
        <ul class="nav-content">
            <li class="nav-link"><a target="new" href="http://stats.summer-mods.eu/#awards">STATS</a></li>
            <li class="nav-link"><a href="/dynmap.php"> DYNMAP</a></li>
            <li class="nav-link"><a href="/craft.php">LES CRAFTS</a></li>
        </ul>
    </nav>
        <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
        <script src="js/nav.js"></script>
    <main>
        <section>
            <h2 class="title-craft">Les Crafts</h2>
            <div class="craft">
                <div class="craft-box">
                    <h3 class="craft-name">Shulker Shell</h3>
                    <img src="img/craft/shulker_shell.PNG" alt="">
                </div>
                <div class="craft-box">
                    <h3 class="craft-name">Quartz</h3>
                    <img src="img/craft/decraft_quartzblock.PNG" alt="">
                </div>
                <div class="craft-box">
                    <h3 class="craft-name">NetherWarth</h3>
                    <img src="img/craft/decraft_netherwarth.PNG" alt="">
                </div>
                <div class="craft-box">
                    <h3 class="craft-name">Terracota</h3>
                    <img src="img/craft/terracotta.gif" alt="">
                </div>
                
            </div>
        </section>
    </main>
    <footer>
        <h3 class="copyright">
            SMS_Craft. Tout droits réservés. 2019
            <br>
            <a id="bouton-credit" href="#">Crédit</a>
        </h3>
        <div id="module-popup" class="popup">   
            <div class="popup-content" >
                <span class="close-popup">&times;</span>
                <h3 class="title-credit">Crédits</h3>
                    <div class="separator"></div>
                <p class="credit">
                    Design: <a target="blank" href="https://twitter.com/pixwok">Pixwok</a>
                    et <a target="blank" href="https://twitter.com/AristanT_MC">Aristant</a>
                    <br/>Développement: <a target="blank" href="https://twitter.com/pixwok">Pixwok</a> 
                </p>
            </div>
        </div>
        <script src="js/popup.js"></script>
    </footer>
</body>
</html>