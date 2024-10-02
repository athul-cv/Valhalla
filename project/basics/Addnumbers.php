<?php
$sum='';
if(isset($_POST['btn_submit']))
{
 $num1=$_POST['text_number'];
 $num2=$_POST['text_number1'];
 $sum=$num1+$num2;
 
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
<th width="50">Num1</th>
<th width="50">Num2</th>
<th width="50">Sum</th>
</tr>
<tr>
<td><input type="text" name="text_number"/></td>
<td><input type="text" name="text_number1"/></td>
<td><?php echo $sum ?></td>
</tr>
<td colspan="3"><input type="submit" name="btn_submit"/>
</td>
</table>
</form>
</body>
</html>
