<div class="container">

      <form class="form-signin" role="form">
                <a class="navbar-brand" href="index.php"> xallo </a>
            
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="index.php?action=logout">Log Out</a></li>
                </ul>
        </div>
    <?php
        print('Logged in with <b>'.$_SESSION['mail'].'</b>');

        if(isset($_GET['action'])) {
            if($_GET['action']=='logout') {
                $_SESSION = array();
                session_destroy();

                header('location: index.php');
            }
        }
    ?>
</div>
