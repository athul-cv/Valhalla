<?php 
include("../Assets/Connection/Connection.php");
include("Head.php");
session_start();

if(isset($_GET["sbkid"]))
{
    $up = "update tbl_booking set booking_status=4 where booking_id=".$_GET["sbkid"];
    if($conn->query($up))
    {
        ?>
        <script>
            alert("Load Started..")
            window.location="HomePage.php"
        </script>
        <?php
    }
}

if(isset($_GET["abkid"]))
{
    $up = "update tbl_booking set booking_status=5 where booking_id=".$_GET["abkid"];
    if($conn->query($up))
    {
        ?>
        <script>
            alert("Load Arrived..")
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
                <th>#</th>
                <th>Product</th>
                <th>User</th>
                <th>Vehicle</th>
                <th>Quantity</th>
                <th>Amount</th>
                <th>Delivery Date</th>
                <th>Address</th>
                <th>Status</th>
            </tr>
            <?php 
            $i=0;
            $sel = "select * from tbl_booking b inner join tbl_product p on b.product_id=p.product_id inner join tbl_user u on b.user_id=u.user_id inner join tbl_vehicle v on b.vehicle_id=v.vehicle_id where booking_status>=2 and b.driver_id=".$_SESSION["did"];
            $res = $conn->query($sel);
            while($row = $res->fetch_assoc())
            {
                $i++;
                ?>
                <tr>
                    <td><?php echo $i?></td>
                    <td><?php echo $row["product_name"]?></td>
                    <td><?php echo $row["user_name"]?></td>
                    <td><?php echo $row["vehicle_name"]?></td>
                    <td><?php echo $row["booking_qty"]?></td>
                    <td><?php echo $row["booking_amt"]?></td>
                    <td><?php echo $row["delivered_date"]?></td>
                    <td><?php echo $row["delivery_address"]?></td>
                    <?php
                    if($row["booking_status"] == 2)
                    {
                        ?>
                        <td style="color:green">Payed | <a href="ViewAssign.php?sbkid=<?php echo $row["booking_id"]?>">Start</a></td>
                        <?php
                    }
                    else if($row["booking_status"] == 3)
                    {
                        ?>
                        <td style="color:green">Cash On Delivery | <a href="ViewAssign.php?sbkid=<?php echo $row["booking_id"]?>">Start</a></td>
                        <?php
                    }
                    else if($row["booking_status"] == 4)
                    {
                        ?>
                        <td style="color:green">Load Started | <a href="ViewAssign.php?abkid=<?php echo $row["booking_id"]?>">Arrived</a></td>
                        <?php
                    }
                    else if($row["booking_status"] == 5)
                    {
                        ?>
                        <td style="color:green">Load Arrived</td>
                        <?php
                    }
                    else if($row["booking_status"] == 6)
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
    </form>    
</body>
</html>
<?php
include("Foot.php");
?>