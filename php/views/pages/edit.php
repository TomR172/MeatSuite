<?php
    $desc = Database::query("SELECT * FROM farms WHERE id=" . Security::dbSanitize($_GET['id']) . "");
    $row = mysql_fetch_array($desc);
    $row = Security::frontendSanitize($row);
?>

<table border='1' class="table table-condensed table-striped">
    <thead class="brownTable">
    <th>Farm</th>
    <th>Owner</th>
    <th>Address</th>
    <th>City</th>
    <th>Phone</th>
    <th>Email</th>
    <th>Website</th>
    <th>Organic</th>
    <th>Beef</th>
    <th>Pork</th>
    <th>Chicken</th>
</thead>

<tr>
    <td> <?php echo $row['FarmName']; ?> </td>
    <td> <?php echo $row['owner']; ?> </td>
    <td> <?php echo $row['address']; ?> </td>
    <td> <?php echo $row['csz']; ?> </td>
    <td> <?php echo $row['phone']; ?> </td>
    <td> <?php echo $row['email']; ?> </td>
    <td> <?php echo $row['website']; ?> </td>
    <td> <?php echo $row['organic']; ?> </td>
    <td> <?php echo $row['beef']; ?> </td>
    <td> <?php echo $row['pork']; ?> </td>
    <td> <?php echo $row['chicken']; ?> </td>
</tr>
</table>

<?php include ('signup.php'); ?>

<form method="get" action="index.php">
    <input type="text" name="search" size="30" maxlength="50">
    <br><br>
</form>

<a class="btn btn-inverse" href = "index.php?page=edit&id='.$row['id'].'" >Done </a>

<br>