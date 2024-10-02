<?php 
include("../Assets/Connection/Connection.php");
include("Head.php");
session_start();
	$selprofile=" select * from tbl_user u inner join tbl_place p on u.place_id = p.place_id inner join tbl_district d on d.district_id = p.district_id where user_id ='".$_SESSION['uid']."'";
	
	$result=$conn->query($selprofile);
	$row=$result->fetch_assoc();



?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Profile</title>
</head>

<body>

  <table width="200" border="1" align="center">
    <tr>
      <td colspan="2"><img src="../Assets/Files/user/<?php echo $row['user_photo']?>" width="75" height="75" /></td>
    </tr>
    <tr>
      <td>Name</td>
      <td><?php echo $row['user_name']?> </td>
    </tr>
    <tr>
      <td>Email</td>
      <td><?php echo $row['user_email']?></td>
    </tr>
    <tr>
      <td>ContactNumber</td>
      <td><?php echo $row['user_contact']?></td>
    </tr>
    <tr>
      <td>PlaceName</td>
      <td><?php echo $row['place_name']?></td>
    </tr>
    <tr>
      <td>District</td>
      <td><?php echo $row['district_name']?></td>
    </tr>
    <tr>
    <td>Address</td>
    <td><?php echo $row['user_address']?></td>
    </tr>
    <tr>
      <td colspan="2" align="center"><a href="EditProfile.php">EditProfile</a>/<a href="ChangePassword.php">ChangePassword</a></td>
    </tr>
    
  </table>
  <br><br><br>
</body>
</html>
<?php
include("Foot.php");
?>