<div class="navbar navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container">
            <a class="brand" href="index.php">Meat Suite</a>
            <ul class="nav">
                <?php foreach(Routing::$pages as $page) : ?>
                    <?php if($page->getShowInMenu()) : ?>
                        <li class= "<?php if($page->getIsCurrentPage()) echo 'active'; ?>">
                            <a href="index.php?page=<?php echo $page->getName(); ?>">
                                <?php echo $page->getLabel(); ?>
                            </a>
                        </li>
                    <?php endif; ?>
                <?php endforeach; ?>
            </ul>
            <?php if(User::loggedIn()) : ?>
                <span class="navbar-text pull-right">
                    Logged in as <?php echo $_SESSION['user'] ?>, <a href ="index.php?script=logout" >logout </a> 
                </span>
            <?php endif ?>
        </div>
    </div>
</div>