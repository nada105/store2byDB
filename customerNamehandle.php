<?php

include "connection.php";

?>

<!--3mlna table 34an n store el data fe7-->
<!--da sabt m4 hytkrr m3aya zay el body-->
<table class="container table table-striped mt-5">
  <thead class="thead-dark">
    <tr>
      <th scope="col">customer Name</th>
    </tr>
  </thead>
  <tbody>

<?php

//34an amsk el data
$name =$_POST['name'];
//query de elly bt calling DB
$query = "SELECT customerName 
FROM customers
WHERE customerName like '%$name%' 
";//to display id that user insert 

//display el result
$result = $connect->query($query);
//akbr mn el zero ya3ni f data rag3a
if ($result->num_rows > 0) {

    // output data of each row
    while($row = $result->fetch_assoc()) {
?>
    <!--row rlly htt8yr m3aya htna7a gowa el while 34an el data ttkrr-->    
    <tr>
    <td><?php echo $row['customerName'] ?></td>
   
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