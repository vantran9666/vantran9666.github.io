<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styleflower.css">

   
</head>
<body>
<?php
// $servername = "localhost";
// $username = "root";
// $password = "mysql";
// $dbname = "flower";

// // Create connection
// $conn = new mysqli($servername, $username, $password, $dbname);
// // Check connection
// if ($conn->connect_error) {
//   die("Connection failed: " . $conn->connect_error);
// }

// sql to create table
// $sql = "CREATE TABLE Product (
// id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
// firstname VARCHAR(30) NOT NULL,
// lastname VARCHAR(30) NOT NULL,
// email VARCHAR(50),
// reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
// )";

// if ($conn->query($sql) === TRUE) {
//   echo "Table MyGuests created successfully";
// } else {
//   echo "Error creating table: " . $conn->error;
// }

// $conn->close();

// insert data
// $addition = "INSERT INTO Product (firstname, lastname, email)
// VALUES ('anne','tran','abc@mail.com')";
// if ($conn->query($addition) === TRUE) {
//   $last_id = $conn->insert_id;
//   echo "successfully. Last inserted ID is: " .$last_id ;  
// }
// else {
//   echo "faill" . $addition . $conn->error;
// }
// $conn->close();
// prepare and bind
// $stmt = $conn->prepare("INSERT INTO product (firstname, lastname, email) VALUES (?, ?, ?)");
// $stmt->bind_param("sss", $firstname, $lastname, $email);

// set parameters and execute
// $firstname = "John";
// $lastname = "Doe";
// $email = "john@example.com";
// $stmt->execute();

// $firstname = "Mary";
// $lastname = "Moe";
// $email = "mary@example.com";
// $stmt->execute();

// $firstname = "Julie";
// $lastname = "Dooley";
// $email = "julie@example.com";
// $stmt->execute();

// echo "New records created successfully";

// $stmt->close();
// $conn->close();
// $sql = "SELECT id, firstname, lastname FROM product";
// $result = $conn->query($sql);

// if ($result->num_rows > 0) {
//   // output data of each row
//   while($row = $result->fetch_assoc()) {
//     echo "id: 1" . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
//   }
// } else {
//   echo "0 results";
// }
// $conn->close();

// $sql = "SELECT id, firstname, lastname FROM MyGuests WHERE lastname='Doe'";
// $result = $conn->query($sql);

// if ($result->num_rows > 0) {
//   // output data of each row
//   while($row = $result->fetch_assoc()) {
//     echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
//   }
// } else {
//   echo "0 results";
// }
// $conn->close();
//where  lastname = 'Doe'; cho ra tat ca du lieu hang ngang co trong doe

// $sql = "SELECT id, firstname, lastname FROM product ORDER BY lastname";
// $result = $conn->query($sql);

// if ($result->num_rows > 0) {
//   // output data of each row
//   while($row = $result->fetch_assoc()) {
//     echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
//   }
// } else {
//   echo "0 results";
// }
// $conn->close();
$severname = "localhost";
$username = "root";
$password = "mysql";
$dbname = "flower";


$ketnoi = new mysqli("$severname","$username","$password","$dbname");
if ($ketnoi->connect_error) {
  die("Connection faill".$ketnoi->connect_error);
} 

// 
$sql = "SELECT * FROM flower";
$result = $ketnoi->query($sql);
// neu khong co ket qua thi khong co table
// neu co ket qua hien thi len table
// $data = $result->num_rows;
// if ($data == 0) {
//   die("trong database khong co du lieu!");
// } 
// else {
//   $rows = $result->fetch_assoc();

// }
$ketnoi->close();

?>
<table>
  <tr>
    <th>Id</th>
    <th>Name</th>
    <th>Color</th>
    <th>Price</th>

  </tr>
  <!-- <tr>
    <td>Alfreds Futterkiste</td>
    <td>Maria Anders</td>
    <td>Germany</td>
  </tr> -->
  <!-- <tr>
    <td>Centro comercial Moctezuma</td>
    <td>Francisco Chang</td>
    <td>Mexico</td>
  </tr> -->
  <?php
  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["id"] . "</td>";
        echo "<td>" . $row["name"] . "</td>";
        echo "<td>" . $row["color"] . "</td>";
        echo "<td>" . $row["price"] . "</td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='3'>Không có dữ liệu</td></tr>";
}


  ?>
</table>
</body>
</html>
