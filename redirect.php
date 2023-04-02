<?php 
session_start();

?>

<!DOCTYPE html>
<html>


<body>

<?php

if(($_POST["vercode"] != $_SESSION["vercode"] OR $_POST["vercode"]=='') )
{
  header('location: login-error.php');
}
else{
  include ("db_connection.php");

  $uid=($_POST['user_id']);
  $pwd=($_POST['user_psw']);


      $sql="SELECT * FROM users_tab where userid='$uid' AND password='$pwd'";
      $result=$connect->query($sql);
      $row = $result->fetch_assoc(); 
  
        if($row['role']==='S')  //Students
        {

          $_SESSION['id']=$uid;
          $_SESSION['pwd']=$pwd;
          $_SESSION['role'] = "S";
          header('location: /lab5/students/index.php');
      }
    elseif($row['role']==='F')  //Faculty
        {

          $_SESSION['id']=$uid;
          $_SESSION['pwd']=$pwd;
          $_SESSION['role'] = "F";
          header('location: /lab5/faculty/index.php');
      
      }
    elseif($row['role']==='A')  //Admin
        {

          $_SESSION['id']=$uid;
          $_SESSION['pwd']=$pwd;
          $_SESSION['role'] = "A";
          header('location: /lab5/admin/index.php');
      
      }

      
    else
    {
        header('location: login-error.php');
    }
}
 

//-------------------------------Login Failed---------------------
     


?>




</html>