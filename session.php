<?php  
  session_start();
  
$link = mysqli_connect("localhost", "root", "");
$selectdb = mysqli_select_db($link,'fitness');

if(isset($_POST['profile_update']))  
{  
    $name=$_POST['name'];//here getting result from the post array after submitting the form.  
    $user_email=$_POST['email'];
    $user_phone=$_POST['phone'];	
    $user_address=$_POST['address'];
  
  //here query check weather if user already registered so can't register again.
$user_check=$_SESSION['user_name'];  
$update_user="update users set name='$name' ,user_email='$user_email',user_phone='$user_phone',address='$user_address' where user_name='$user_check' ";  
    if(mysqli_query($link,$update_user))  
    {  
        echo"updated"; 
	}
}
?>