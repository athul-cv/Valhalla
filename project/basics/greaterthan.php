<?php
$res='';

if(isset($_POST['txt_submit']))
{
	$num1=$_POST['txt_num1'];
	$num2=$_POST['txt_num2'];
	if($num1>$num2)
	{
		$res="Largest = ".$num1;
		
	}
	else if($num1==$num2)
	{
		$res="both equal";
		
	}
	else
	{
		$res="largest =".$num2;
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
<table border="2">
<tr>
<td>num1</td>
<td><input type="text" name="txt_num1"/>
</td>
</tr>
<tr>
<td>num2</td>
<td><input type="text" name="txt_num2" />
</td>
</tr>
<tr>
<td>greaterthan</td>
<td><?php echo $res?>
</td>
</tr>
<tr>
<td colspan="2"><input type="submit" name="txt_submit" />
</td>
</tr>
</table>
</form>
</body>
</html>
