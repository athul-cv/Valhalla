<?php 
include("../Assets/Connection/Connection.php");
include("Head.php");
session_start();
if(isset($_POST["btn_save"]))
{
    $date = $_POST["txt_date"];
    $add = $_POST["txt_address"];
    $qty = $_POST["txt_qty"];

    $ins = "insert into tbl_booking(booking_qty,delivered_date,booking_date,delivery_address,user_id,product_id) value('".$qty."','".$date."',curdate(),'".$add."','".$_SESSION["uid"]."','".$_GET["pdtid"]."')";
    if($conn->query($ins))
    {
        ?>
        <script>
            alert("Request Send")
            window.location="HomePage.php"
        </script>
        <?php
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <table cellpadding="10">
            <tr>
                <td>Delivery Date</td>
                <td><input type="date" name="txt_date" id=""></td>
            </tr>
            <tr>
                <td>Delivery Address</td>
                <td>
                    <textarea name="txt_address" id="" cols="20" rows="5"></textarea>
                </td>
            </tr>
                <td>Quantity</td>
                <td><input type="text" name="txt_qty" id=""></td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type="submit" value="Send" name="btn_save"></td>
            </tr>
        </table>
    </form>
</body>
</html>
<?php
include("Foot.php");
?>