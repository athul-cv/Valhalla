<?php
include("../connection/connection.php");
?>
<option>select</option>
<?php
	  $sel1="select * from tbl_place where district_id='".$_GET['pid']."'";
	  $result1=$conn->query($sel1);
	  while($data1=$result1->fetch_assoc())
	  {
	  ?>
      <option value="<?php echo $data1['place_id'] ?>"><?php  echo $data1['place_name'] ?>
      </option>
      <?php
	  }
	  ?>