<?php
include("../Assets/Connection/Connection.php");
include("Head.php");
if(isset($_POST['submit']))
{
	$place=$_POST['Place_txt'];
	$District=$_POST['select_txt'];
	$insqry="insert into tbl_place (place_name,district_id)value('".$place."','".$District."')";
	if($conn->query($insqry))
	{
		echo "inserted";
		header("loaction:Place.php");
	}
}

	if(isset($_GET['did']))
    {
		$delqry="delete from tbl_place where place_id=".$_GET['did'];
		if($conn->query($delqry))
		{
		?>
			<script>
				alert("deleted");
				window.location="Place.php";
			</script>
		<?php
	    }
	}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Place</title>
</head>

<body>
<div class="col-lg-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
<form method="post" class="table table-hover">
<table  align="center">
<tr>
<td>District</td>
<td><select name="select_txt" id="select_id">
<option value="">select</option>
<?php 
$selqry="select * from tbl_district";
$result=$conn->query($selqry);
while($data=$result->fetch_assoc())
{
?>
<option value="<?php echo $data['district_id']?>"><?php echo $data['district_name'] ?></option>
<?php
}
?>
</select>
</tr> 
<tr>
<td>Place</td>
<td><input type="text" name="Place_txt" >
</td>
</tr>
<tr>
<td colspan="2"><input type="submit" name="submit" value="Submit" /></td>
</tr>
</table>
</form>
</body>
</html>
<br />

<?php
$i=0;
$selQry="select * from tbl_place p inner join  tbl_district d on p.district_id=d.district_id";
$result=$conn->query($selQry);
if($result->num_rows>0)
{
	?>
  <table width="200"  align="center" class="table table-hover">
    <tr>
      <td>SI No</td>
      <td>District</td>
      <td>Place</td>
      <td>Action</td>
    </tr>
    <?php
	while($data=$result->fetch_assoc())
	{
		$i++;
	?>
	<tr>
      <td><?php echo $i?></td>
      <td><?php echo $data['district_name'];?></td>
      <td><?php echo $data['place_name'];?></td>
      <td><a href="Place.php?did=<?php echo $data['place_id']?>">Delete</a></td>
    </tr>
    <?php
	}
	?>
	</table>
    <?php
}
	?>
<?php
include("Foot.php");
?>