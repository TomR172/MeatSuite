<?php
$query = "SELECT * FROM farms WHERE 1";

if(isset($_GET['search']) && trim($_GET['search']) != "") {
    $query .= " AND farmName LIKE '%" . Security::sanitizeForDatabase($_GET['search']) . "%'";
}
if(isset($_GET['Beef'])) {
    $query .= " AND beef=1";
}
if(isset($_GET['Pork'])) {
    $query .= " AND pork=1";
}
if(isset($_GET['Chicken'])) {
    $query .= " AND chicken=1";
}
if(isset($_GET['Organic'])) {
    $query .= " AND organic=1";
}

$result = Database::query($query);

if(isset($_GET['showMap']) && $_GET['showMap'] == 'true') {
    $showMap = true;
} else {
    $showMap = false;
}

?>
<div class="container-fluid">
    <div>
        <ul class="nav nav-pills pull-left">
            <li class="<?php echo $showMap? '' : 'active'; ?>"><a href="?page=farms&showMap=false&all=1">List</a></li>
            <li class="<?php echo $showMap? 'active' : ''; ?>"><a href="?page=farms&showMap=true">Map</a></li>
        </ul>
        
        <form method="get" action="index.php" class="form-search pull-right">
            <input type="hidden" name = "page" value = "farms">
            <input type="text" name="search" class="input-medium search-query">
            <button class="btn btn-inverse" type="submit"><i class="icon-search icon-white"></i> Search</button>
        </form>
        <div style="clear: both; line-height: 0">&nbsp;</div>
    </div>
    
    <?php if($showMap) : ?>
        <script type="text/javascript" src="js/farmsMap.js"></script>
        <div id="map-canvas" style="width: 100%; height: 600px;"></div>
    <?php else : ?>
        <div>        
            <?php if(isset($_GET['search'])) : ?>
                <div class="alert alert-info">
                    Showing <?php echo mysql_num_rows($result) ?> results for search term
                    "<i><?php echo htmlspecialchars($_GET['search']) ?></i>". 
                    <a href="index.php?page=farms">Clear search</a>
                </div>
            <?php else : ?>
                <ul class="nav nav-tabs">
                    <li class="<?php echo count($_GET) == 1 || isset($_GET['all']) ? 'active' : '' ?>"><a href="index.php?page=farms&all=1">All</a>
                    <li class="<?php echo isset($_GET['Beef']) ? 'active' : '' ?>"><a href="index.php?page=farms&Beef=1">Beef</a>
                    <li class="<?php echo isset($_GET['Chicken']) ? 'active' : '' ?>"><a href="index.php?page=farms&Chicken=1">Chicken</a>
                    <li class="<?php echo isset($_GET['Pork']) ? 'active' : '' ?>"><a href="index.php?page=farms&Pork=1">Pork</a>
                    <li class="<?php echo isset($_GET['Organic']) ? 'active' : '' ?>"><a href="index.php?page=farms&Organic=1">Organic</a>                
                </ul>
            <?php endif ?>

        </div>
        <div>
            <?php if(mysql_num_rows($result) == 0 ) : ?>
                <div class="alert">
                    No farms match your criteria.
                </div>
            <?php else: ?>
                <table class="table">
                    <thead>
                    <th>Farm</th>
                    <th>Address</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Website</th>
                    <th>Categories</th>
                    <?php if(User::loggedIn()) : ?>
                        <th> Edit </th>
                    <?php endif; ?>
                    </thead>

                    <?php while($farm = Security::sanitizeForFrontend(mysql_fetch_array($result))) : ?>
                        <tr>
                            <td class="farm"> 
                                <a href="index.php?page=profile&id=<?php echo $farm['id'] ?>" >
                                    <?php echo $farm['FarmName'] ?> 
                                </a>
                            </td>
                            <td> <?php echo $farm['address'] . " " . $farm['csz'] ?></td>
                            <td> <?php echo $farm['phone'] ?></td>
                            <td> <?php echo $farm['email'] ?></td>
                            <td> <a class = "link" href = "<?php echo $farm['website'] ?>"> <?php echo $farm['website'] ?> </a> </td>
                            <td>
                                <?php include('php/views/partials/_farmCategories.php'); ?>
                            </td>
                            <?php if(User::loggedIn()) : ?>
                                <td> 
                                    <a class="btn" href="index.php?page=signup&id=<?php echo $farm['id']; ?>" ><i class="icon-pencil"></i> Edit</a>
                                </td>
                            <?php endif; ?>
                        </tr>
                    <?php endwhile ?>
                </table>
            <?php endif ?>
        </div>
    <?php endif; ?>
</div>