<style>
  table,th,td{border-collapse:collapse;border:1px solid lightgray;}
  th{background-color:lightgray}
  th,td{padding:5px;}
</style>
<?php

  //CRUD - Create, Read, Update, Delete
   require_once("db_config.php");
   
   $result=$db->query("select id,username,password from users");

   echo "<table>";
   echo "<tr><th>ID</th><th>Username</th><th>Password</th></tr>";
   while(list($id,$username,$password)=$result->fetch_row()){
    
    echo "<tr><td>$id</td><td>$username</td><td>$password</td></tr>";

   }
   echo "</table>";

?>