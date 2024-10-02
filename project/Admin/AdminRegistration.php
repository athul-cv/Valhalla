<?php
include("../Assets/Connection/Connection.php");
if(isset($_POST['btn_register']))
{
	$Name=$_POST['txt_admin'];
	$Email=$_POST['txt_email'];
	$Password=$_POST['txt_password'];
	$Contact=$_POST['txt_contact'];
$Insqry="insert into tbl_admin(admin_name,admin_email,admin_password,admin_contact) value('".$Name."','".$Email."','".$Password."','".$Contact."')";
	if($conn->query($Insqry))
	{
		?>
        <script>
		alert("inserted");
		window.location="AdminRegistration.php";
		</script>
        <?php
	}
	else
	{
		$upQry="update tbl_admin set admin_name,admin_email,admin_contact,admin_password= '".$Name."','".$Email."','".$Contact."','".$Password."', where admin_id= ";
		if($conn->query($upQry))
		   {
			    ?>
			    <script>
				alert("Updated");
				window.location="AdminRegistration.php";
			    </script>
		        <?php
			
		   }
	}

	}
	
	if(isset($_GET['did']))
    {
		$delqry="delete from tbl_admin where admin_id=".$_GET['did'];
		if($conn->query($delqry))
		{
	        	?>
			    <script>
				alert("deleted");
				window.location="AdminRegistration.php";
			    </script>
		        <?php
	    }
	}
	if(isset($_GET['eid']))
    {
		$selQry="select * from tbl_admin where admin_id=".$_GET['eid'];
		$result=$conn->query($selQry);
		$row=$result->fetch_assoc();
		$check=$row['admin_id'];
		
	}

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>AdminRegistration</title>
</head>

<body>
<form method="post">
<table border="1">
  <tr>
    <td width="162">Name</td>
    <td width="50">
      <label for="txt_admin"></label>
      <input type="text" name="txt_admin" id="txt_admin" />
      <label for="txt_name"></label></td>
  </tr>
  <tr>
    <td>Contact</td>
    <td>
      <label for="txt_contact"></label>
      <input type="text" name="txt_contact" id="txt_contact" /></td>
  </tr>
  <tr>
    <td>Email</td>
    <td>
      <label for="txt_email"></label>
      <input type="text" name="txt_email" id="txt_email" /></td>
  </tr>
  <tr>
    <td>Password</td>
    <td><label for="txt_password"></label>
      <input type="Password" name="txt_password" id="txt_password" /></td>
  </tr>
  <tr>
    <td colspan="2"><div align="center">
      
        <div align="center">
          <input type="submit" name="btn_register" id="btn_register" value="Register" />
          <input type="submit" name="btn_cancel" id="btn_cancel" value="Cancel" />
        </div>
      
    </div></td>
  </tr>
</table>
</form>
<?php
$i=0;
$selqry="select *from tbl_admin";
$result=$conn->query($selqry);
if($result->num_rows>0)
{
	?>
<table border="5">
<tr>
	<td>SINo</td>
	<td>Name</td>
	<td>Contact</td>
    <td>Email</td>
    <td>Password</td>
    <td>Action</td>
    
</tr>
<?php
while($data=$result->fetch_assoc())
{
	$i++
	?>
<tr>
<td><?php echo $i ?> </td>
<td> <?php echo $data['admin_name']?> </td>
<td> <?php echo $data['admin_contact'] ?></td>
<td> <?php echo $data['admin_email']?>  </td>
<td> <?php echo $data['admin_password']?>  </td>
      <td><a href="AdminRegistration.php?did=<?php echo $data['admin_id']?>">delete</a>&nbsp;&nbsp;&nbsp;<a href="AdminRegistration.php?eid=<?php echo $data['admin_id']?>">edit</a></td>
</tr>
<?php
}
?>
</table>
<?php
}
?>
</body>
</html>