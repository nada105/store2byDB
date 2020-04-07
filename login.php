<?php

if(isset($_SESSION['errors']))
{
    foreach ($_SESSION['errors'] as $error) {
        echo "<div class='alert alert-danger' role='alert'>
        ".$error."
      </div>";
    }
}

?>





<form action="handleLogin.php" method="post" class="container mt-5 text-center">
  <div class="form-group">
    <label for="exampleFormControlInput1">Customer Name</label>
    <input type="text"name="userName" class="form-control " id="exampleFormControlInput1" >
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">password:</label>
        <input type="text" name="password" class="form-control" id="exampleInputPassword1">
    </div>
    <button type="submit" class="btn btn-primary m-2">submit</button>
  </div>
 

 
</form>