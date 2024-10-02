<?php
include("../Assets/Connection/Connection.php");
include('Head.php');

if(isset($_GET["bid"]))
{
    $up = "update tbl_booking set booking_status=6 where booking_id=".$_GET["bid"];
    if($conn->query($up))
    {
        ?>
        <script>
            alert("Item Delivered..")
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
            <th>User</th>
            <th>Quantity</th>
            <th>Amount</th>
            <th>Address</th>
            <th>Delivered Date</th>
            <th>Booked Date</th>
            <th>Driver</th>
            <th>Vehicle</th>
            <th>Action</th>
        </tr>
        <?php
        $i=0;
        $sel = "select * from tbl_booking b inner join tbl_product p on b.product_id=p.product_id inner join tbl_user u on b.user_id=u.user_id";
        $res = $conn->query($sel);
        while($row=$res->fetch_assoc())
        {
            $i++;
            ?>
            <tr>
                <td><?php echo $i?></td>
                <td><?php echo $row["product_name"]?></td>
                <td><?php echo $row["user_name"]?></td>
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
                <td><?php echo $row["delivered_date"];?></td>
                <td><?php echo $row["booking_date"];?></td>
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
                if($row["booking_status"]==0)
                {
                    ?>
                    <td><a href="Assign.php?bid=<?php echo $row["booking_id"]?>">Assign</a></td>
                    <?php
                }
                else if($row["booking_status"]==1)
                {
                    ?>
                    <td style="color:red">Assigned Not Payed</td>
                    <?php
                }
                else if($row["booking_status"]==2)
                {
                    ?>
                    <td style="color:green">Payed</td>
                    <?php
                }
                else if($row["booking_status"]==3)
                {
                    ?>
                    <td style="color:green">Cash On Delivery </td>
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
                    <td style="color:green">Load Arrived | <a href="ViewBooking.php?bid=<?php echo $row["booking_id"]?>">Delivered</a></td>
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
<?php
include('Foot.php');
?>
</html>