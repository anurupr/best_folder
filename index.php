<?php
//phpinfo();

$mysqli = new mysqli("localhost", "root", "", "hydrospa");
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}


$res = $mysqli->query("SELECT * FROM users");
$mysqli->query("UPDATE `users` SET `Phone`=911 WHERE ID=3");
'INSERT INTO `users`(`First_Name`, `Last_Name`, `Phone`, `Username`, `Password`) VALUES ("Bill","Cosby","39982513", "billyboy123", "hehexd" '


  echo "<table style='width:100%;'>"
    <tr>
      <th>ID</th>
      <th>Firstname</th>
      <th>Lastname</th>
      <th>Phone</th>
      <th>Username</th>
      <th>Password</th>
    </tr>

  <?php

  for ($row_no = $res->num_rows - 1; $row_no >= 0; $row_no--) {
      $res->data_seek($row_no);
      $row = $res->fetch_assoc();
      //echo " id = " . $row['ID'] . "\n";
      echo "<tr>";
      echo "<td>".$row["ID"]."</td>";
      echo "<td>".$row["First_Name"]."</td>";
      echo "<td>".$row["Last_Name"]."</td>";
      echo "<td>".$row["Phone"]."</td>";
      echo "<td>".$row["Username"]."</td>";
      echo "<td>".$row["Password"]."</td>";
      echo "</tr>";
    }




   ?>
  </table>
