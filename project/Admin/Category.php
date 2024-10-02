<?php
include("../Assets/Connection/Connection.php");
include("Head.php");
$district="";
$check="";
if(isset($_POST['txt_submit']))
{
	$district=$_POST['txt_district'];
	$check=$_POST['txt_id'];
	
	if($check=="")
	{
		$insQry="insert into tbl_category(category_name)values('".$district."')";
		if($conn->query($insQry))
		{
        ?>
			<script>
				alert("Inserted");
				window.location="Category.php";
			</script>
		  <?php		}
	}
	else 
	{
		$upQry="update tbl_category set category_name= '".$district."' where category_id = ".$check;
		if($conn->query($upQry))
		{
			?>
			<script>
				alert("Updated");
				window.location="Category.php";
			</script>
		  <?php
			
		}
	}
}

	if(isset($_GET['did']))
    {
		$delqry="delete from tbl_category where category_id =".$_GET['did'];
		if($conn->query($delqry))
		{
		?>
			<script>
				alert("deleted");
				window.location="Category.php";
			</script>
		<?php
	    }
	}
	if(isset($_GET['eid']))
    {
		$selQry="select * from tbl_category where category_id =".$_GET['eid'];
		$result=$conn->query($selQry);
		$row=$result->fetch_assoc();
		$district=$row['category_name'];
		$check=$row['category_id'];
		
	}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Category</title>
</head>

<body>
<div class="col-lg-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
<form method="post">
<table class="table table-hover">
<tr>
<td>Category Name</td>
<td><input type="text" name="txt_district" value="<?php echo $district?>" required  />
<input type="hidden" name="txt_id" value="<?php echo $check?>" /></td>
</tr>
<tr>
<td colspan="2" align="center"><input type="submit" name="txt_submit" value="Submit" /></td>
</tr>
</table>
</form>
</div>
  </div>
  </div>
  <div class="col-lg-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
<?php
$i=0;
$selQry="select * from tbl_category";
$result=$conn->query($selQry);
if($result->num_rows>0)
{
	?>
  <table width="200" class="table table-hover">
    <tr>
      <td>SI No</td>
      <td>Category</td>
      <td>Action</td>
    </tr>
    <?php
	while($data=$result->fetch_assoc())
	{
		$i++;
	?>
	<tr>
      <td><?php echo $i?></td>
      <td><?php echo $data['category_name'];?></td>
      <td><a href="Category.php?did=<?php echo $data['category_id']?>">Delete</a>&nbsp;&nbsp;&nbsp;<a href="Category.php?eid=<?php echo $data['category_id']?>">Edit</a></td>
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
<?php
include("Foot.php");
?>