<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" type="text/css" href="users.css">
</head>

<body>
  

<?php
$conn = new mysqli("localhost", "amit", "amit","users");
if ($conn->connect_error) {
    die("connection failed: " .$conn->connect_error);
}
echo "connected";

$sql="SELECT  user_id ,first_name,last_name,mail_id,phone_no  FROM `user_details`";

 $result=$conn->query($sql);
 ?>
 <table>
   
   <tr>
     <th>ID</th>
     <th>FIRST NAME</th>
     <th>LAST NAME</th>
     <th>MAIL ID </th>
     <th> PHONE NO.</th>
     </tr>
 <?php
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      ?>
        <tr>
      <?php
      // echo "id: " . $row["user_id"]. " " . $row["first_name"]. " " . $row["last_name"]. "<br>";
echo "<td>".$row["user_id"]."</td>";
 echo "<td>".$row["first_name"] ."</td>";
  echo    "<td>". $row["last_name"] ."</td>";
  echo    "<td>". $row["mail_id"] ."</td>";
  echo    "<td>". $row["phone_no"] ."</td>";
    ?>
     </tr>
    <?php
    }

  } else {
    echo "0 results";
  }
  $conn->close();
  ?>
   </table>
   </body>
   </html>
  