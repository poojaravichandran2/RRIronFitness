<?php
 session_start();
$link = mysqli_connect("localhost", "root", "");
$selectdb = mysqli_select_db($link,'fitness');


?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css"/>
<script  src="javascript.js">
</script>
    <title>PROFILE</title>
    
	
</head>
<body id="body" background="images/profile.jpg">
    <h1 class="novels_h1"style="text-align:center; padding-bottom:70px;">MY PROFILE</h1>
	
	 <?php
	    $user_check=$_SESSION['user_name'];
		$query="select name,user_email,user_phone,address from users where user_name='$user_check'";
		$result=mysqli_query($link,$query);
		?>
		<div class="container5">
        <?php
		if(mysqli_num_rows($result)>0)
		{
			 while( $row = mysqli_fetch_array( $result ) )
		  {
			?>
			<div class="container6">
			<h1 class="novels_h1"style="text-align:center; padding-bottom:20px;">You Can Update Your Profile Here</h1>
			</div><hr>
			<form  action="user_profile_update.php" id="form" method="post" onsubmit="return validatePassword()">
			<table id="user">
			<tr>
			<td><label id="labe2">NAME</label></td>
		     <td><input type="text" name="name" id="text1"value="<?php echo $row["name"];?>"/></td>
			 </tr>
			 <tr>
			 <td><label id="labe2">EMAIL ID</label></td>
		     <td><input type="text" name="email" id="text1" value="<?php echo $row["user_email"];?>"/></td>
			 </tr>
			 <tr>
			 <td><label id="labe2">PHONE NUMBER</label></td>
		     <td><input type="text"  id="text1" name="phone" value="<?php echo $row["user_phone"];?>"/></td>
			 <tr>
			 <td><label id="labe2">ADDRESS</label></td>
		     <td><input type="text" id="text1" name="address" value="<?php echo $row["address"];?>"/></br></td>
		    </tr>
			</table>
			
		     
		    
			
		<input type="submit" name="profile_update" id="profile_update"  value="Update"/>
		<input type="submit"  id="profile_update"  name="profile_cancel" value="cancel"/>
		</form>
		
		
		
		
		
		
		</div>
		</div>
		<?php
		  
			}
		}
		
		
		  
		
			
		
		
		

        
