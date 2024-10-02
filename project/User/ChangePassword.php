<?php 
include("../Assets/Connection/Connection.php");
include("Head.php");
if(isset($_POST['btn']))
{
	session_start();
	$selqry="select * from tbl_user where user_id=".$_SESSION['uid'];
	$result=$conn->query($selqry);
	$row=$result->fetch_assoc();
	$oldpassword=$row['user_password'];
	$cpassword=$_POST['current_password'];
	$newpassword=$_POST['txt_newpassword'];
	$repassword=$_POST['confirm_password'];
	if($oldpassword==$cpassword)
	{
		if($newpassword==$repassword)
		{
		 $upqry="update tbl_user set user_password='".$newpassword."' where user_id='".$_SESSION['uid']."'";
		 if($conn->query($upqry))	
		 {
			?>
			<script>
			alert("updated");
			window.location="Profile.php";
			</script>
			<?php
		 }
		}
		else
		{
			?>
		   <script>
		   alert("new password and confirm password not same");
		   window.location="Profile.php";
	   </script>
       <?php
	}
	}
	else
	{
		?>
        <script>
		alert ("password is not correct");
		window.location="ChangePassword.php";
		</script>
        <?php
	}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ChangePassword</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <table width="378" height="175" border="1" align="center">
    <tr>
      <td>Current Password</td>
      <td><label for="current_password"></label>
      <input type="text" name="current_password" id="current_password" /></td>
    </tr>
    <tr>
      <td>New Password</td>
      <td><label for="new_password"></label>
      <input type="text" name="txt_newpassword" id="new_password" /></td>
    </tr>
    <tr>
      <td>Confirm password</td>
      <td><label for="confirm_password"></label>
      <input type="text" name="confirm_password" id="confirm_password" /></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
        <input type="submit" name="btn" id="btn" value="Update" />
      </div></td>
    </tr>
  </table>
</form>
</body>
</html>
<?php
include("Foot.php");
?>