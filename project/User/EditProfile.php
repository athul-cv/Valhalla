<?php 
include("../Assets/Connection/Connection.php");
include("Head.php");
session_start();
$selqry="select * from tbl_user where user_id=".$_SESSION['uid'];
$result=$conn->query($selqry);
$row=$result->fetch_assoc();

if(isset($_POST['btn']))
{
	
	
	$name=$_POST['name_tx'];
	$Contact=$_POST['contact_xt'];
	$email=$_POST['email_xt'];
	$address=$_POST['address_xt'];
	$upQry="update tbl_user set user_name= '".$name."', user_contact='".$Contact."',user_email='".$email."',user_address='".$address."'where user_id= ".$_SESSION['uid'];
	if($conn->query($upQry))
	{
		?>
		<script>
			alert("Updated");
			window.location="homepage.php";
		</script>
	  <?php
	}
	else{
		?>
		<script>
			alert("Failed");
			window.location="editprofile.php";
		</script>
	  <?php
	}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <table width="200" border="1">
    <tr>
      <td>Name</td>
      <td><label for="name_tx"></label>
<input type="text" name="name_tx" value="<?php echo $row['user_name']?>" /></td>
      
    </tr>
    <tr>
      <td>Contact</td>
      <td><label for="contact_xt"></label>
<input type="text" name="contact_xt" value="<?php echo $row['user_contact']?>"  /></td>
    </tr>
    <tr>
      <td>
      Email</td>
      <td><label for="email_xt"></label>
     
<input type="text" name="email_xt" value="<?php echo $row['user_email']?>" /></td>
    </tr>
    <tr>
      <td>Address</td>
      <td><label for="address_xt"></label>
<input type="text" name="address_xt" value="<?php echo $row['user_address']?>" /></td>
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