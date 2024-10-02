<?php
include("../Assets/Connection/Connection.php");
include("Head.php");
session_start();

if(isset($_GET["bkid"]))
{
    $up = "update tbl_booking set booking_status='3' where booking_id=".$_GET["bkid"];
    if($conn->query($up))
    {
        ?>
        <script>
            alert("Cash On Delivery")
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
    <table cellpadding="10">
        <tr>
            <th>#</th>
            <th>Product</th>
            <th>Quantity</th>
            <th>Amount</th>
            <th>Address</th>
            <th>Driver</th>
            <th>Vehicle</th>
            <th>Booked Date</th>
            <th>Booking Date</th>
            <th>Action</th>
        </tr>
        <?php
        $i=0;
        $sel = "select * from tbl_booking b inner join tbl_product p on b.product_id=p.product_id where b.user_id=".$_SESSION["uid"];
        $res = $conn->query($sel);
        while($row = $res->fetch_assoc())
        {
            $i++;
            ?>
            <tr>
                <td><?php echo $i?></td>
                <td><?php echo $row["product_name"]?></td>
                <td><?php echo $row["booking_qty"]?></td>
                <?php
                if($row["booking_amt"] == 0)
                {
                    ?>
                    <td style="color:red">N/A</td>
                    <?php
                }
                else
                {
                    ?>
                    <td><?php echo $row["booking_amt"];?></td>
                    <?php
                }
                ?>
                <td><?php echo $row["delivery_address"];?></td>
                <?php
                if($row["driver_id"] == 0)
                {
                    ?>
                    <td style="color:red">N/A</td>
                    <?php
                }
                else
                {
                    $sel1 = "select * from tbl_driver where driver_id=".$row["driver_id"];
                    $res1 = $conn->query($sel1);
                    $r = $res1->fetch_assoc();
                    ?>
                    <td><?php echo $r["driver_name"];?></td>
                    <?php
                }
                if($row["vehicle_id"] == 0)
                {
                    ?>
                    <td style="color:red">N/A</td>
                    <?php
                }
                else
                {
                    $sl = "select * from tbl_vehicle where vehicle_id=".$row["vehicle_id"];
                    $r = $conn->query($sl);
                    $rr = $r->fetch_assoc();
                    ?>
                    <td><?php echo $rr["vehicle_name"];?></td>
                    <?php
                }
                ?>
                <td><?php echo $row["delivered_date"];?></td>
                <td><?php echo $row["booking_date"];?></td>
                <?php
                if($row["booking_status"] == 0)
                {
                    ?>
                    <td style="color:red">Request Pending</td>
                    <?php
                }
                else if($row["booking_status"] == 1)
                {
                    ?>
                    <td><a href="Payment.php?bkid=<?php echo $row["booking_id"]?>">Pay Now</a> | <a href="ViewRequest.php?bkid=<?php echo $row["booking_id"]?>">Cash On Delivery</a></td>
                    <?php
                }
                else if($row["booking_status"] == 2)
                {
                    ?>
                    <td style="color:green">Payed</td>
                    <?php
                }
                else if($row["booking_status"]==3)
                {
                    ?>
                    <td style="color:green">Case On Delivery</td>
                    <?php
                }
                else if($row["booking_status"]==4)
                {
                    ?>
                    <td style="color:green">Load Started</td>
                    <?php
                }
                else if($row["booking_status"]==5)
                {
                    ?>
                    <td style="color:green">Load Arrived</td>
                    <?php
                }
                else if($row["booking_status"]==6)
                {
                    ?>
                    <td style="color:green">Delivered</td>
                    <?php
                }
                ?>

            </tr>
            <?php
        }
        ?>
    </table>
</body>
</html>
<?php
include("Foot.php");
?>