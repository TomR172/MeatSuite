<!DOCTYPE html>
    <head>
        <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />

        <title>MeatSuite</title>

        <link rel="stylesheet" href="lib/bootstrap/css/bootstrap.css" />
        <link rel="stylesheet" href="css/meatsuite.css" />

        <script type="text/javascript"
                src="http://maps.googleapis.com/maps/api/js?key=AIzaSyBq74_RDXdxbqgWKsFYzRPLHiCnmAysiNo&sensor=true">
        </script>
        <script type="text/javascript" src="lib/jquery-1.7.1.min.js"></script>
        <script type="text/javascript" src="lib/bootstrap/js/bootstrap.min.js"></script>
    </head>

    <body>
        <div class="container">
            <?php include 'php/views/partials/_menu.php'; ?>
            
            <?php foreach(array('error', 'success') as $flashType ) : ?>
                <?php if(isset($_SESSION['flashes'][$flashType])) : ?>
                    <div class="alert alert-<?php echo $flashType; ?>">
                        <?php echo $_SESSION['flashes'][$flashType]; ?>
                        <button type="button" class="close" data-dismiss="alert">&times;</button>                        
                    </div>
                <?php endif; ?>
            <?php endforeach ?>
            
            <?php if(Routing::$currentPage->getShowPageHeader()) : ?>
                <div class="page-header">
                    <h2>
                        <?php echo Routing::$currentPage->getLabel(); ?>
                    </h2>
                </div>
            <?php endif; ?>
            <?php include Routing::$currentPage->getFileName(); ?>
            <br style="clear: both;"/>

            <hr>

            <footer class="container">
                <img class="cce-logo" src="img/tompkins_4c.gif" />
                <p>
                    &copy; Cornell Cooperative Extension of Tompkins County 2012<br/>
                    <a href="?page=about">About</a> |
                    <a href="mailto:mnl28@cornell.edu">Contact</a> |
                    <a href="?page=signup">Sign Up</a>
                    <?php if(!User::loggedIn()) : ?>
                        | <a href="?page=login">Admin Login</a>
                    <?php endif; ?>
                </p>
            </footer>
        </div>	

    </body>
</html>