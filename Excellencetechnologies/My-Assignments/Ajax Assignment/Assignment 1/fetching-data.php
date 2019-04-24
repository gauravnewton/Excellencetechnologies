<?php
  include 'connection.php';
  $conn=  createConnection();
  $opt = $_GET['opt'];
  $sql="select * from userData order by id desc limit 5;";
  $stmt=$conn->prepare($sql);

  $stmt->execute();
  $data=$stmt->fetchall();
  foreach($data as $row)
   {
    echo "<tr>";
    echo "<td>".$row['Name']."</td>";
    echo "<td>".$row['Email']."</td>";
    echo "<td>".$row['Message']."</td>";
    echo "<td>".$row['Date']."</td>";
    echo "</tr>";
   }
  ?>

