<?php

$query = mysqli_query($dbconnect, "SELECT * FROM user_review")
   or die (mysqli_error($dbconnect));

while ($row = mysqli_fetch_array($query)) {
  echo
   "<tr>
    <td>{$row['reviewer_name']}</td>
    <td>{$row['star_rating']}</td>
    <td>{$row['details']}</td>
   </tr>;

}

?>
