<?php
  require_once("db_config.php");
  if(isset($_POST["btnDelete"])){
     
    $id=$_POST["txtId"];

     $db->query("delete from users where id='$id'");

  }

?>

<form action="#" method="post">
 <div>
   ID<br>
   <input type="text" name="txtId" />
 </div>
 <div>
   <input type="submit" value="Delete" name="btnDelete" />
 </div>
</form>