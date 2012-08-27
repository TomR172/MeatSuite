<?php
$query = "SELECT * FROM farms WHERE 1";

if(isset($_GET['search']) && trim($_GET['search']) != "") {
    $query .= " AND farmName LIKE '%" . db_sanitize($_GET['search']) . "%'";
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

$result = query($query);
?>
<h3 class="title" style="margin-bottom:5px; text-align: center;">Search for Farms</h3>
<div class="container-fluid">
    <div>
        <form method="get" action="index.php" style="text-align:center;">
            <input type = "hidden" name = "page" value = "farms">
            <input type="text" name="search" size="30" maxlength="50">
            <input class="btn btn-inverse" type="submit" value="Go">
            <br><br>
            <div style="text-align:center;">
                <a class="<?php echo count($_GET) == 1 ? 'btn btn-danger' : 'btn btn-inverse' ?>" href="index.php?page=farms">All</a>
                <a class="<?php echo isset($_GET['Beef']) ? 'btn btn-danger' : 'btn btn-inverse' ?>" href="index.php?page=farms&Beef=1">Beef</a>
                <a class="<?php echo isset($_GET['Chicken']) ? 'btn btn-danger' : 'btn btn-inverse' ?>" href="index.php?page=farms&Chicken=1">Chicken</a>
                <a class="<?php echo isset($_GET['Pork']) ? 'btn btn-danger' : 'btn btn-inverse' ?>" href="index.php?page=farms&Pork=1">Pork</a>
                <a class="<?php echo isset($_GET['Organic']) ? 'btn btn-danger' : 'btn btn-inverse' ?>" href="index.php?page=farms&Organic=1">Organic</a>
            </div>
        </form>
        <?php if(isset($_GET['search'])) : ?>
            Showing <?php echo mysql_num_rows($result) ?> results for search term "
            <i>
                `           <?php echo htmlspecialchars($_GET['search']) ?>
            </i>". 
            <a href="index.php?page=farms">Clear search</a><br/>
        <?php elseif(isset($_GET['Beef'])) : ?>
            Showing <?php echo mysql_num_rows($result) ?> results for beef
            <a href="index.php?page=farms">Clear search</a><br/>
        <?php elseif(isset($_GET['Pork'])) : ?>
            Showing <?php echo mysql_num_rows($result) ?> results for pork.
            <a href="index.php?page=farms">Clear search</a><br/>
        <?php elseif(isset($_GET['Chicken'])) : ?>
            Showing <?php echo mysql_num_rows($result) ?> results for chicken.
            <a href="index.php?page=farms">Clear search</a><br/>
        <?php elseif(isset($_GET['Organic'])) : ?>
            Showing <?php echo mysql_num_rows($result) ?> results for search organic.
            <a href="index.php?page=farms">Clear search</a><br/>
        <?php endif ?>

    </div>
    <div>
        <table border='1' class="table table-condensed table-striped">
            <thead class="brownTable">
            <th>Farm</th>
            <th>Owner</th>
            <th>Address</th>
            <th>Phone</th>
            <th>Email</th>
            <th>Website</th>
            <th>Organic</th>
            <th>Beef</th>
            <th>Pork</th>
            <th>Chicken</th>
            <?php if(loggedin()) : ?>
                <th> Edit </th>
            <?php endif; ?>
            </thead>

            <?php while($row = sanitize(mysql_fetch_array($result))) : ?>
                <tr>
                    <td class="farm"> 
                        <a href="index.php?page=profile&id=<?php echo $row['id'] ?>" >
                            <?php echo $row['FarmName'] ?> 
                        </a>
                    </td>
                    <td> <?php echo $row['owner'] ?></td>
                    <td> <?php echo $row['address'] . " " . $row['csz'] ?></td>
                    <td> <?php echo $row['phone'] ?></td>
                    <td> <?php echo $row['email'] ?></td>
                    <td> <a class = "link" href = "<?php echo $row['website'] ?>"> <?php echo $row['website'] ?> </a> </td>
                    <td> <?php
                        if($row['organic'] == 0) {
                            echo 'No';
                        } else {
                            echo 'Yes';
                        }
                            ?></td>				
                    <td> <?php
                    if($row['beef'] == 0) {
                        echo 'No';
                    } else {
                        echo 'Yes';
                    }
                            ?></td>				
                    <td> <?php
                    if($row['pork'] == 0) {
                        echo 'No';
                    } else {
                        echo 'Yes';
                    }
                            ?></td>				
                    <td> <?php
                    if($row['chicken'] == 0) {
                        echo 'No';
                    } else {
                        echo 'Yes';
                    }
                            ?></td>
                    <?php if(loggedin()) : ?>
                        <td> 
                            <a class="btn" href = "index.php?page=signup&id=<?php echo $row['id']; ?>" >Edit </a>
                        </td>
                    <?php endif; ?>
                </tr>
            <?php endwhile ?>
        </table>
    </div>
</div>