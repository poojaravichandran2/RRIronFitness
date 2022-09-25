<?php  
  session_start();
$link = mysqli_connect("localhost", "root", "");
$selectdb = mysqli_select_db($link,'fitness');

if(isset($_POST['profile_update']))  
{  
    $name=$_POST['name']; 
    $user_email=$_POST['email'];
    $user_phone=$_POST['phone'];	
    $user_address=$_POST['address'];

  
     $user_check=$_SESSION['user_name'];  
     $update_user="update users set name='$name' ,user_email='$user_email',user_phone='$user_phone',address='$user_address' where user_name='$user_check' ";  
       if(mysqli_query($link,$update_user))  
         {  
            echo"<script>window.open('userlogin.html','_self')</script>"; 
		 }
}
if(isset($_POST['profile_cancel']))  
{ 
 echo"<script>window.open('index.html','_self')</script>"; 
}
?>