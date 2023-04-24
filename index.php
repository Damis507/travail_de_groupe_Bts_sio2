<?php
    session_start();
    
    //session_destroy();
?>
<!DOCTYPE html>
<html>
 <head>
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
   <link rel="shortcut icon" type="image/ico" href="img/favicon.gif" />
   <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
   <link rel="stylesheet" type="text/css" href="css/style.css" />
   <link rel="stylesheet" type="text/css" href="css/styleicon.css" />
   <link rel="stylesheet" type="text/css" href="css/style_menu.css" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title> titre </title>
 </head>
 <body>    
    <header>
    	<div class="menu_bar">
			<a href="#" class="bt-menu"><span class="icon-menu"></span>Menu</a>
		</div>

		<nav>
            <?php
                if (isset($_SESSION['logged_user'])) {
                    include 'controler/menu/menu.php';
                }
                else
                    echo "<br>";     
            ?>
		</nav>	
	</header>
 	
 	<div class="container">
        <section class="main row">
            <article class="col-xs-12 col-sm-8 col-md-9 col-lg-9">
                <?php
                    include 'controler/formulaire.php';
                ?>
            </article>
            <aside class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
                <h3>ASIDE</h3>
            </aside>
        </section>
        
        <div class="row">
            <div class="color1 col-xs-12 col-sm-6 col-md-3">
                <p>
                <h3>Informations :</h3>
                </p>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3">
                <p>
                <h3>Top 10 Cours :</h3>
               
                </p>
            </div>
            
            <div class="clearfix visible-sm-block"></div>
            <!-- col-md-offset-3" : pour deplacer des colonnes -->
            <div class="col-xs-12 col-sm-6 color1 col-md-3">
                <p>
                <h3>Top 10 Professeurs :</h3>
 
                </p>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3">
                <p>
                <h3>Nous contacter :</h3>
               
                </p>
            </div>
        </div>
    </div>

    <footer>
        <div class="container">
            <h3>Copyright </h3>
        </div>
    </footer>

 	<script type="text/javascript" src="js/jquery.js"></script>
 	<script type="text/javascript" src="js/menu.js"></script>
 	<script type="text/javascript" src="js/bootstrap.min.js"></script>
 </body>
</html>