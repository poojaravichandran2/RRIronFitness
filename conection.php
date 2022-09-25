<?php  
  session_start();
$link = mysqli_connect("localhost", "root", "");
$selectdb = mysqli_select_db($link,'fitness');

if(isset($_POST['submit']))  
{  
    $name=$_POST['name'];
    $user_name=$_POST['username'];//same 
    $user_email=$_POST['email'];
    $user_phone=$_POST['phone'];	
    $user_pass=$_POST['password'];
  
  
   
    
       	

    
  
    $check_query="select * from users WHERE user_name='$user_name'";  
    $run_query=mysqli_query($link,$check_query);  
  
   if(mysqli_num_rows($run_query)>0)  
    {  
      echo "<script>alert('username $user_name is already exist in our database, Please try another one!')</script>";  
	  echo"<script>window.open('signup.html','_self')</script>";  		
      exit();  
    }  
  
    $insert_user="insert into users (name,user_name,user_email,user_phone,user_pass) VALUE ('$name','$user_name','$user_email','    $user_phone','$user_pass')";  
    if(mysqli_query($link,$insert_user))  
    {  
        echo"<script>window.open('userlogin.html','_self')</script>";  
    }  
  
  
  
}  
  
?>  