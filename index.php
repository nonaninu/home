<html>
    <head>
       <meta charset="utf-8">
       <title> dakicha </title>
       <link rel="stylesheet" href="css/bootstrap.css"/>
      <script src="js/bootstrap.min.js"></script>
    </head>
   

    <body>

<?php
            
            require('include/user.php');
            require('include/config.php');
                    
            session_start();

                if(!empty($_SESSION['mail'])) {
                    require('include/content.php');
                }
                else {
                    require('include/home.php');
                }
        ?>
    </body>
</html>