<?php

include "connection.php";

?>


<table class="container table table-striped mt-5">
  <thead class="thead-dark">
    <tr>
        <th scope="col">customerName</th>
        <th scope="col">creditLimit</th>
    </tr>
  </thead>
  <tbody>

<?php

$city = $_POST['city'];

$query = "SELECT customerName ,creditLimit
FROM customers
WHERE city='$city'
ORDER BY creditLimit desc
LIMIT 3
";
$result = $connect->query($query);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
?>
        
    <tr>
    <td><?php echo $row['customerName'] ?></td>
    <td><?php echo $row['creditLimit'] ?></td>
    </tr>

<?php        
    }
} else {
    echo "0 results";
}
$connect->close();
?>


  
  </tbody>
</table>