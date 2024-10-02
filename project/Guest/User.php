<?php
include("../Assets/connection/connection.php");
If(isset($_POST['btn_Submit']))
{
	$name=$_POST['txt_name'];
	$email=$_POST['txt_email'];
	$contact=$_POST['txt_mblnumber'];
	$password=$_POST['textfield'];
	$district=$_POST['sel_district'];
 	$place=$_POST['place'];
	$address=$_POST['user_address'];
	$photo=$_FILES['file_photo']["name"];
	$Path=$_FILES['file_photo']["tmp_name"];
	move_uploaded_file($Path,"../Assets/files/user/".$photo);
	
	$insqry="insert into tbl_user(user_name,user_email,user_contact,user_password,place_id,user_address,user_photo)value('".$name."','".$email."','".$contact."','".$password."','".$place."','".$address."','".$photo."')";
	if($conn->query($insqry))
	{
?>
      <script>
      alert("inserted");
      </script>
     <?php
	}
	else
	{
	?>
	<script>
     alert(" not inserted");
     </script>
     <?php
	}
}
include("Head.php");
?>
	
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>NewUser</title>
</head>

<body>
<h1 align="center">User Registration</h1>
<form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
  <table  border="1" >
<tr>

   <tr>
   <td>District</td>
   <td><select name="sel_district" id="dis_id" onChange="getplace(this.value)">
   <option value="">select</option>
   
   <?php 
   $selqry="select * from tbl_district";
   $result=$conn->query($selqry);
   while($row=$result->fetch_assoc())
   {
?>
<option value="<?php echo $row['district_id']?>"><?php echo $row['district_name']?></option>
<?php
   }
?>
</select></td>
   </tr>
  
   <tr>
   <td>Place</td>
   <td><label for="place"></label>
     <select name="place" id="place_id">
     <option value="">select</option>
     </select></td>
   </tr>
<td>Name</td>
<td><label for="txt_name"></label>
<input type="text" name="txt_name" id="txt_name" required /></td>
</tr>

    <tr>
      <td>Email</td>
      <td><label for="txt_email"></label>
      <input type="email" name="txt_email" id="txt_email" required /></td>
    </tr>
     <tr>
      <td>ContactNumber</td>
      <td><label for="txt_mblnumber"></label>
      <input type="text" name="txt_mblnumber" id="txt_mblnumber" required /></td>
    </tr>
    <tr>
      <td>Password</td>
      <td><input type="password" name="textfield" id="textfield" required /> </td>
    </tr>

    <tr>
   <td>ADDRESS</td>
  <td>
     <label for="txt_address"></label>
     <textarea name="user_address" id="txt_address" cols="45" rows="5" required></textarea></td>
   </tr>
    <tr>
      <td>Photo</td>
      <td><label for="file_photo"></label>
      <input type="file" name="file_photo" id="file_photo" required /></td>
    </tr>
   
    <td colspan="2"><div align="center">
      <input type="submit" name="btn_Submit" id="btn_Submit" value="Submit" />
      <input type="reset" name="btn_cancel" id="btn_cancel" value="Cancel" />
    </div></td>
      </table>
</form>
</body>
<?php
include("Foot.php");
?>
</html>
   <script src="../Assets/JQuery/jQuery.js"></script>
                        <script>
                            function getplace(did)
                            {
                                $.ajax({url:"../Assets/AjaxPages/Ajaxplaces.php?pid="+did,
                                success: function(result){
                                    $("#place_id").html(result);
                                }
                            })
                            }
                           
                        </script>