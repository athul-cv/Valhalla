<?php
include("../Assets/Connection/Connection.php");
include("Head.php");
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
                <th>User</th>
                <th>Contant</th>
                <th>Date</th>
            </tr>
            <?php
            $i=0;
            $sel = "select * from tbl_feedback f inner join tbl_user u on f.user_id=u.user_id";
            $res = $conn->query($sel);
            while($row = $res->fetch_assoc())
            {$i++;
                ?>
                <td><?php echo $i?></td>
                <td><?php echo $row["user_name"]?></td>
                <td><?php echo $row["feedback_content"]?></td>
                <td><?php echo $row["feedback_date"]?></td>
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