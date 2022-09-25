<?php  
  session_start();
$link = mysqli_connect("localhost", "root", "");
$selectdb = mysqli_select_db($link,'fitness');
 
  

  
if(isset($_POST['submit']))  
{  
    $user_name=$_POST['user_name'];  
    $user_pass=$_POST['user_pass'];  
  
    $check_user="select * from users WHERE user_name='$user_name'AND user_pass='$user_pass'";  
  
    $run=mysqli_query($link,$check_user);  
  
    if(mysqli_num_rows($run))  
    {  
        
  
        $_SESSION['user_name']=$user_name;
        echo "<script>window.open('index1.html','_self')</script>";  		
  
    }  
    else  
    {  
      echo "<script>alert('username or password is incorrect!')</script>";  
	  echo"<script>window.open('userlogin.html','_self')</script>";
    }  
}  
?>