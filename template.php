<html>
    <head>
        <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
        <title>MeatSuite</title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.css" />
        <link rel="stylesheet" href="meatsuite2.css" />
        <style>
            html { height: 100% }
            body { height: 100%; margin: 0; padding: 0 }
            #map_canvas { height: 100% }
            body {
                padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
            }
        </style>

        <script type="text/javascript"
                src="http://maps.googleapis.com/maps/api/js?key=AIzaSyBq74_RDXdxbqgWKsFYzRPLHiCnmAysiNo&sensor=true">
        </script>

    </head>

    <body onload="initialize()">
        <?php include 'Menu.php'; ?>


        <div class="container">
            <div class="page-header">
                <h2 class="pageName">
                    <?php
                    if ($pageHeader == 'Profile') {
                        $desc = query("SELECT * FROM farms WHERE id='" . db_sanitize($_GET['id']) . "'");
                        $row = mysql_fetch_array($desc);
                        echo $row['FarmName'];
                    } else {
                        echo $pageHeader;
                    }
                    ?>
                </h2>
            </div>
            <?php include $pageFile; ?>
            <br style= "clear: both;"/>
        </div>	

        <footer style= "background-color:#b82820;">
            <img id ="Tompkins" src="http://ccetompkins.org/sites/all/themes/ccetompkins/images/logo.jpg" />
        </footer>
    </body>

</html>