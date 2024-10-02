

<?php
include("../Assets/Connection/Connection.php");
include("Head.php");
$product="";
$Category="";
if(isset($_POST['submit']))
{
	$product=$_POST['txt_prdt'];
	$Category=$_POST['select_id'];
	$Price=$_POST['price'];
	
	$photo=$_FILES['product_img']["name"];
	$path=$_FILES['product_img']['tmp_name'];
	move_uploaded_file($path,"../Assets/files/Product/".$photo);
	$check=$_POST['product'];
		if($check=="")
{
	$insQry="insert into tbl_product(product_name,category_id,product_price,product_img)value('".$product."','".$Category."','".$Price."','".$photo."')";
	
	echo $insQry;
	if($conn->query($insQry))
		{
			
		
?>
      <script>
      alert("inserted");
      </script>
     <?php
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
		$delqry="delete from tbl_product where product_id=".$_GET['did'];
		if($conn->query($delqry))
		{
		?>
			<script>
				alert("deleted");
				window.location="Product.php";
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
}
?>
	
	
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Product</title>
</head>

<body>
<div class="col-lg-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">

<form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
  <table width="200"  class="table table-hover">
    <tr>
      <td>Product</td>
      <td><label for="txt_prdt"></label>
      <input type="text" name="txt_prdt" id="txt_prdt" /></td>
      <td><input type="hidden" name="product" id="product" /></td>
    </tr>
    <tr>
      <td>Category</td>
     <td><select name="select_id" id="select_id">
<option value="">select</option>
<?php 
$selqry="select * from tbl_category";
$result=$conn->query($selqry);
while($data=$result->fetch_assoc())
{
?>
<option value="<?php echo $data['category_id']?>"><?php echo $data['category_name'] ?></option>
<?php
}
?>
</select></td>
    </tr>
    <tr>
      <td>Price</td>
      <td><label for="price"></label>
      <input type="text" name="price" id="price" />        <label for="txt_price"></label></td>
    </tr>
    <tr>
      <td>Photo</td>
      <td><label for="product_img"></label>
      <input type="file" name="product_img" id="product_img" /></td>
    </tr>
    <tr>
    <td colspan="2"><input type="submit" name="submit" id="submit" value="Save" /></td>
    </tr>
  </table>
  </form>
</div>
</div>
</div>

<div class="col-lg-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
  <p>&nbsp;</p>
  <?php
$i=0;
$selQry="select * from tbl_product dr inner join tbl_category p on dr.category_id=p.category_id";
$result=$conn->query($selQry);
if($result->num_rows>0)
{
	?>
  <table width="200" class="table table-hover">
    <tr>
      <td>SI No</td>
      <td>Photo</td>
      <td>Product</td>
      <td>Category</td>
      <td>Price</td>
    
      <td>Action</td>
    </tr>
    <?php
	while($row=$result->fetch_assoc())
	{
		$i++;
		?>
	<tr>
      <td><?php echo $i?></td>
   	  <td ><img src="../Assets/Files/Product/<?php echo $row['product_img']?>" width="75" /></td>
      <td><?php echo $row['product_name'];?></td>
      <td><?php echo $row['category_name'];?></td>
      <td><?php echo $row['product_price'];?></td>
      
      <td><a href="Product.php?did=<?php echo $row['product_id']?>">Delete</a></td>
    </tr>
    <?php
	}
	?>
	</table>
    <?php
}
	?>

  <p>&nbsp;</p>
</body>
</html>
<?php
include("Foot.php");
?>