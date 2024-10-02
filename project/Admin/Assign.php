<?php
include("../Assets/Connection/Connection.php");

$sel = "select * from tbl_booking b inner join tbl_product p on b.product_id=p.product_id inner join tbl_user u on b.user_id=u.user_id where booking_id=".$_GET["bid"];
$res = $conn->query($sel);
$row = $res->fetch_assoc();

if(isset($_POST["btn_up"]))
{
    $driver = $_POST["sel_driver"];
    $vehicle = $_POST["sel_vehicle"];
    $amt = $_POST["txt_final"];

    $update = "update tbl_booking set driver_id='".$driver."', vehicle_id='".$vehicle."', booking_amt='".$amt."',booking_status='1' where booking_id=".$_GET["bid"];
    if($conn->query($update))
    {
        ?>
        <script>
            alert("Data Send")
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
<body onload="getAmt()">
    <form action="" method="post">
        <table cellpadding="10">
            <tr>
                <td>Product</td>
                <td><?php echo $row["product_name"]?></td>
            </tr>
            <tr>
                <td>User</td>
                <td><?php echo $row["user_name"]?></td>
            </tr>
            <tr>
                <td>Quantity</td>
                <input type="hidden" name="txt_qty" id="txt_qty" value="<?php echo $row["booking_qty"]?>">
                <td><?php echo $row["booking_qty"]?></td>
            </tr>
            <tr>
                <td>Product Amount</td>
                <input type="hidden" name="txt_amt" id="txt_amt" value="<?php echo $row["product_price"]?>">
                <td><span  id="pamt"></span></td>
            </tr>
            <tr>
                <td>Driver</td>
                <td>
                    <select name="sel_driver" id="">
                        <option value="">..Select..</option>
                        <?php
                        $sel = "select * from tbl_driver";
                        $res = $conn->query($sel);
                        while($row = $res->fetch_assoc())
                        {
                            ?>
                            <option value="<?php echo $row["driver_id"]?>"><?php echo $row["driver_name"]?></option>
                            <?php
                        }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Vehicle</td>
                <td>
                <select name="sel_vehicle" id="">
                        <option value="">..Select..</option>
                        <?php
                        $sel = "select * from tbl_vehicle";
                        $res = $conn->query($sel);
                        while($row = $res->fetch_assoc())
                        {
                            ?>
                            <option value="<?php echo $row["vehicle_id"]?>"><?php echo $row["vehicle_name"]?></option>
                            <?php
                        }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Final Amount</td>
                <td><input type="text" name="txt_final" id=""></td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type="submit" value="Send" name="btn_up"></td>
            </tr>
        </table>
    </form>
</body>
</html>
<script>
    function getAmt()
    {
        var qty = document.getElementById("txt_qty").value
        var rate = document.getElementById("txt_amt").value
        var tot = qty * rate
        console.log(tot);
        document.getElementById("pamt").innerHTML = tot
    }
</script>