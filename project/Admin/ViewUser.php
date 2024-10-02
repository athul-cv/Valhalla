<?php
include("../Assets/Connection/Connection.php");
include("Head.php");
if(isset($_POST['btn_submit']))
{
	$name=$_POST['txt_name'];
	$email=$_POST['txt_email'];
	$contact=$_POST['txt_contact'];
	$address=$_POST['txt_address'];
	$district=$_POST['txt_district'];
	$place=$_POST['place'];
	
	
	$photo=$_FILES['txt_photo']["name"];
	$Path=$_FILES['txt_photo']["tmp_name"];
	echo move_uploaded_file($Path,"../Assets/files/Driver/".$photo);
	
	$password=$_POST['txt_password'];
	
	
	$insqry="insert into tbl_user(user_name,user_email,user_contact,user_address,user_password,place_id,user_photo)value('".$name."','".$email."','".$contact."','".$address."','".$password."','".$place."','".$photo."')";
  
    if($conn->query($insqry))
	{
	?>
<script>
alert("inserted");

window.location="User.php";
</script>
<?php
	}
	else
	{
	
?>
<script>
alert("not inserted");
window.location="User.php";
</script>
<?php
	}
}
?>
	

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Driver</title>
</head>

<body>
<div class="col-lg-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
<form id="form1" name="form1" method="post" action="" enctype="multipart/form-data">
  <table width="780" height="391"  class="table table-hover">
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
</select></td></tr>
    <tr>
      <td height="29">Place</td>
   <td><label for="place"></label>
     <select name="place" id="place_id">
     <option value="">select</option>
     </select></td>
   </tr>
    <tr>
      <td>Name</td>
      <td><label for="txt_name"></label>
      <input type="text" name="txt_name" id="txt_name" /></td>
    </tr>
    <tr>
      <td>Email</td>
      <td><label for="txt_email"></label>
      <input type="text" name="txt_email" id="txt_email" /></td>
    </tr>
    <tr>
      <td>Conatct</td>
      <td><label for="txt_contact"></label>
      <input type="text" name="txt_contact" id="txt_contact" /></td>
    </tr>
    <tr>
      <td>Address</td>
      <td><label for="txt_address"></label>
        <label for="txt_address"></label>
      <textarea name="txt_address" id="txt_address" cols="25" rows="3"></textarea></td>
    </tr>
    
   
    <tr>
      <td>Password</td>
      <td><label for="txt_password"></label>
      <input type="text" name="txt_password" id="txt_password" /></td>
    </tr>
 
     <tr>
      <td>Photo</td>
      <td><label for="txt_photo"></label>
      <input type="file" name="txt_photo" id="txt_photo" /></td>
    </tr>
    <tr>
      <td colspan="2"><input type="submit" name="btn_submit" id="btn_submit" value="Submit" /></td>
    </tr>
  </table>
</form>

  </div>
  </div>
  </div>


<?php
$i=0;
$selQry="select * from tbl_user dr inner join tbl_place p on dr.place_id=p.place_id inner join tbl_district d on p.district_id=d.district_id";
$result=$conn->query($selQry);
if($result->num_rows>0)
{
	?>
  <table width="200"  class="table table-hover">
    <tr>
      <td>SI No</td>
      <td>Photo</td>
      <td>Name</td>
      <td>Email</td>
      <td>Contact</td>
      <td>Address</td>
      <td>District</td>
      <td>Place</td>
      <td colspan="2">Action</td>
    </tr>
    <?php
	while($row=$result->fetch_assoc())
	{
		$i++;
		?>
	<tr>
      <td><?php echo $i?></td>
   	  <td ><img src="../Assets/Files/User/<?php echo $row['user_photo']?>" width="75" /></td>
      <td><?php echo $row['user_name'];?></td>
      <td><?php echo $row['user_email'];?></td>
      <td><?php echo $row['user_contact'];?></td>
      <td><?php echo $row['user_address'];?></td>
      <td><?php echo $row['district_name'];?></td>
      <td><?php echo $row['place_name'];?></td>
      <td><a href="User.php?did=<?php echo $row['user_id']?>">Delete</a>&nbsp;&nbsp;&nbsp;<a href="User.php?eid=<?php echo $row['user_id']?>">Edit</a></td>
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
 <script src="../Assets/JQuery/jQuery.js"></script>
                        <script>
                            function getplace(did)
                            {
                                $.ajax({url:"../Assets/AjaxPages/Ajaxplaces.php?pid="+uid,
                                success: function(result){
                                    $("#place_id").html(result);
                                }
                            })
                            }
                           
                        </script>
                        <?php
include("Foot.php");
?>