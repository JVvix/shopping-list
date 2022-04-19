<!DOCTYPE html>
<html>
<?php
$link = mysqli_connect('localhost', 'shop', 'ff', 'shopping_list');
//if connection is not successful you will see text error
if (!$link) {
       die('Could not connect: ' . mysql_error());
}
//if connection is successfully you will see message below
echo 'Connected successfully';

$query = mysqli_query($dbconnect, "SELECT * FROM items")
   or die (mysqli_error($dbconnect));
while ($row = mysqli_fetch_array($query)) {
  echo
   "<tr>
    <td>{$row['reviewer_name']}</td>
    <td>{$row['star_rating']}</td>
    <td>{$row['details']}</td>
   </tr>;

}
 
mysqli_close($link);
?>
</html>
