<?php
$name='';
$address='';
$dob='';
if(isset($_POST['button']))
{
	$firstname=$_POST['TEXT_NAME'];
	$lastname=$_POST['TEXT_LASTNAME'];
	$gender=$_POST['gender'];
	$Marital=$_POST['marital'];
	$address=$_POST['TEXT_ADDRESS'];
	$dob=$_POST['txt_date'];
	$name=$firstname." ".$lastname;
	if($gender=="Male")
	{
		if($Marital=="SINGLE")
		{ 
			$name="MR.".$name;		
		}
		else
		{
			$name="MR.".$name;
		}		
	}
	else
	{
		if($Marital=="SINGLE")
		{
			$name="Ms.".$name;
		}
		else
		{
			$name="mrs.".$name;
		}
	
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
<form method="post">
<table width="200" border="1">
  <tr>
    <td width="116">FIRST NAME</td>
    <td width="68">
      <label for="TEXT_NAME"></label>
      <input type="text" name="TEXT_NAME" id="TEXT_NAME" />
   </td>
  </tr>
  <tr>
    <td>LAST NAME</td>
    <td>
      <label for="TEXT_LASTNAME"></label>
      <input type="text" name="TEXT_LASTNAME" id="TEXT_LASTNAME" />
   
  </tr>
  <tr>
    <td>GENDER</td>
    
<td>        <input type="radio" name="gender" id="GENDER" value="Male" />
        <label for="GENDER"></label>
        Male
      <input type="radio" name="gender" id="GENDER2" value="Female" />
        <label for="GENDER2"></label>
      Female
      </td>
  
  </tr>
  <tr>
    <td>MARITAL</td>
    <td>
    
          <input type="radio" name="marital" id="SINGLE" value="SINGLE" />SINGLE
          <label for="SINGLE"></label>
          <input type="radio" name="marital" id="MARRIED" value="MARRIED" />MARRIED
          <label for="MARRIED"></label>
          </td>
    
  </tr>
  <tr>
    <td>ADDRESS</td>
   <td>
      <label for="TEXT_ADDRESS"></label>
      <textarea name="TEXT_ADDRESS" id="TEXT_ADDRESS" cols="45" rows="5"></textarea>
    </td>
  </tr>
  <tr>
    <td>DOB</td>
    <td><input  type="date" name="txt_date"></td>
  </tr>
  <tr>
    <td colspan="2">
      <input type="submit" name="button" id="button" value="Submit" />
      <input name="cancel" type="reset" id="cancel" value="cancel" />
    </td>
  </tr>
</table>
<label for="name"></label>
<table width="200" border="1">
  <tr>
    <td width="77">Name</td>
    <td width="107"><?php echo $name?></td>
  </tr>
  <tr>
    <td>address</td>
    <td><?php echo $address?></td>
  </tr>
  <tr>
    <td>DOB</td>
    <td><?php echo $dob?></td>
  </tr>
</table>
</form>
</body>
</html>