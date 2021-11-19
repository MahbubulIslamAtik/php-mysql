<?php    
    require_once("db_config.php");

   if(isset($_POST["btnUpdate"])){
     
    $id=$_POST["txtId"];
    $username=$_POST["txtUsername"];
    $password=$_POST["txtPassword"];


    $db->query("update users set username='$username', password='$password' where id='$id'");
    echo "Success";


   }
  

?>
<form action="#" method="post">
<div>
   ID<br>
   <input type="text" name="txtId" />
 </div>
 <div>
   Username<br>
   <input type="text" name="txtUsername" />
 </div>
 <div>
   Password<br>
   <input type="password" name="txtPassword" />
 </div>
 <div>
   <input type="submit" value="Update" name="btnUpdate" />
 </div>
</form>

<?php
  include("select.php");
?>