<?php

$connection= mysqli_connect("localhost", "root", "", "db_categories");
$q= mysqli_query($connection,"select * from tbl_category")or die(mysqli_error($connection));

$count= mysqli_num_rows($q);
echo "$count records found";
echo "<table border=1>";
echo "<tr>";
echo "<th> category_id</th>";  
echo "<th>category_name </th>";
echo "</tr>";
while($row= mysqli_fetch_array($q))
{
    echo "<tr>";
    echo "<td>{$row['category_id']}</td>";
    echo "<td>{$row['category_name']}</td>";
    echo "</tr>";
}
echo "</table>";
