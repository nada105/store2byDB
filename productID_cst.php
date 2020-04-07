<!--distinct 34an mkrr4 el city-->
<?php

include "connection.php";


$query = "
SELECT DISTINCT productCode 
FROM orderdetails

";
$result = $connect->query($query);

if ($result->num_rows > 0) {
?>


<form action="productID_csthandle.php" method="post" class="container mt-5">
  
  <div class="form-group">
      <label>product code</label>
      <select class="form-control" name="productCode">
        <?php 

    // output data of each row
    while($row = $result->fetch_assoc()) {
        ?>
        <option><?php echo $row['productCode'] ?></option>
<?php
    }}
        ?>
      </select>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>




        
