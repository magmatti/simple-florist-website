<?php
  require 'db_connection.php';

  $sql = "SELECT id, nazwa, ilosc, cena FROM products";
  $result = mysqli_query($conn, $sql);

  echo '<div class="container">';
  echo '<table class="table">';
  echo "<tr>";
  echo "<th>" . 'L.P' . "</th>";
  echo "<th>" . 'Kwiat' . "</th>";
  echo "<th>" . 'Ilosc' . "</th>";
  echo "<th>" . 'Cena' . "</th>";
  echo "</tr>";

  if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
      echo "<tr>";
      echo "<td>" . $row["id"] . "</td>"  . "<td>" . $row["nazwa"] . "</td>" . "<td>" . $row["ilosc"]. "</td>" . "<td>" . $row["cena"] . " zł" .  "</td>" ;
      echo "</tr>";
    }
  } else {
    echo "0 results";
  }

  echo "</table>";
  echo '</div>';

  mysqli_close($conn);
?>