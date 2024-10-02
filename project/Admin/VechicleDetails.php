<?php
include("../Assets/Connection/Connection.php");
include("Head.php");
$vname="";
$vno="";
$capacity="";
$check="";
if(isset($_POST['submit']))

{
	$vname=$_POST['name_txt'];
	$vno=$_POST['no_txt'];
	$capacity=$_POST['capacity_txt'];
   
    $photo=$_FILES['txt_photo']["name"];
	$Path=$_FILES['txt_photo']["tmp_name"];
	echo move_uploaded_file($Path,"../Assets/files/Vehicle/".$photo);
	
	$insqry="insert into tbl_vehicle(vehicle_name,vehicle_number,vehicle_capacity,vehicle_photo)value('".$vname."','".$vno."','".$capacity."','".$photo."')";
    if($conn->query($insqry))
	{
	?>
		<script>
        alert("inserted");
        
        window.location="VechicleDetails.php";
        </script>
        <?php
	}else 
	{
		$upQry="update tbl_vehicle set vehicle_name= '".$vehicle."' where vehicle_id= ".$_check['eid'];
		if($conn->query($upQry))
		{
			?>
			<script>
				alert("Updated");
				window.location="VechicleDetails.php";
			</script>
		  <?php
			
		}
	}
	
}

	if(isset($_GET['did']))
    {
		$delqry="delete from tbl_vehicle where vehicle_id=".$_GET['did'];
		if($conn->query($delqry))
		{
	        	?>
			    <script>
				alert("deleted");
				window.location="VechicleDetails.php";
			    </script>
		        <?php
	    }
	}
	if(isset($_GET['eid']))
    {
		$selQry="select * from tbl_vehicle where vehicle_id=".$_GET['eid'];
		$result=$conn->query($selQry);
		$row=$result->fetch_assoc();
		$vname=$row['vehicle_name'];
        $vno="";
        $capacity="";

		$check=$row['vehicle_id'];
		
	}
	
?>
	
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>VechicleDetails</title>
</head>

<body>
<div class="col-lg-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">

<form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
  <table width="200" class="table table-hover">>
    <tr>
      <td>Vechicle Name</td>
      <td><label for="name_txt"></label>
      <input type="text" name="name_txt" id="name_txt" />
      <input type="hidden" name="hidden_name" id="hidden_id"</td>
    </tr>
    <tr>
      <td>RegNumber</td>
      <td><label for="no_txt"></label>
      <input type="text" name="no_txt" id="no_txt" /></td>
    </tr>
    <tr>
      <td>Capacity</td>
      <td><label for="capacity_txt"></label>
      <input type="text" name="capacity_txt" id="capacity_txt" /></td>
    </tr>
    <tr>
      <td>Photo</td>
      <td><label for="photo_field"></label>
      <input type="file" name="txt_photo" id="txt_photo" /></td>
    </tr>
    <tr>
      <td colspan="2"><input type="submit" name="submit" id="submit" value="Submit" /></td>
    </tr>
  </table>
</form>
</div>
</div>
</div>
	    
  <table width="200" class="table table-hover">>
    <tr>
      <td>SI No</td>
       <td>Photo</td>
      <td>VechicleName</td>
      <td>RegNumber</td>
      <td>Cpacity</td>
     <td>Action</td>
    </tr>
    <?php
	$selQry="select * from tbl_vehicle";
		$result=$conn->query($selQry);
		$i=0;
	while($row=$result->fetch_assoc())
	{
		$i++;
		?>
	<tr>
      <td><?php echo $i?></td>
   	  <td><img src="../Assets/Files/Vehicle/<?php echo $row['vehicle_photo']?>" width="75" /></td>
      <td><?php echo $row['vehicle_name'];?></td>
      <td><?php echo $row['vehicle_number'];?></td>
      <td><?php echo $row['vehicle_capacity'];?></td>
  <td><a href="VechicleDetails.php?did=<?php echo $row['vehicle_id']?>">Delete</a>&nbsp;&nbsp;&nbsp;<a href="VechicleDetails.php?eid=<?php echo $row['vehicle_id']?>">Edit</a></td>
    </tr>
    <?php
	}
	?>
	</table
></body>
</html>
<?php
include("Foot.php");
?>