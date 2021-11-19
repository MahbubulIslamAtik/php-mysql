<?php    
    require_once("db_config.php");

   if(isset($_POST["btnCreate"])){
     
    $username=$_POST["txtUsername"];
    $password=$_POST["txtPassword"];
    $repassword=$_POST["txtRepassword"];

     if($password==$repassword){
       
        $db->query("insert into users(username,password)values('$username','$password')");

     }else{
       echo "The password did not match";

     }


   }
  

?>
<form action="#" method="post">
 <div>
   Username<br>
   <input type="text" name="txtUsername" />
 </div>
 <div>
   Password<br>
   <input type="password" name="txtPassword" />
 </div>
 <div>
   Retype Password<br>
   <input type="password" name="txtRepassword" />
 </div>
 <div>
   <input type="submit" value="Create" name="btnCreate" />
 </div>
</form>

<?php
  include("select.php");
?>