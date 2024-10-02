<?php
include("../Assets/Connection/Connection.php");
include("Head.php");
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body onload="getProduct()">
    <form action="" method="post">
        <table cellpadding="10" align="center">
            <tr>
                <td>Category</td>
                <td>
                    <select name="sel_cat" id="sel_cat" onchange="getProduct()">
                        <option value="">...Select...</option>
                        <?php
                        $sel = "select * from tbl_category";
                        $res = $conn->query($sel);
                        while($row = $res->fetch_assoc())
                        {
                            ?>
                            <option value="<?php echo $row["category_id"]?>"><?php echo $row["category_name"]?></option>
                            <?php
                        }
                        ?>
                    </select>
                </td>
            </tr>
        </table>
    </form>

   
    <div id="product"></div>
</body>
</html>
<script src="../Assets/JQuery/jQuery.js"></script>
<script>
    function getProduct()
    {
        var did = document.getElementById("sel_cat").value
        $.ajax({url:"../Assets/AjaxPages/AjaxProduct.php?pid="+did,
        success: function(result){
            $("#product").html(result);
        }
    })
    }
</script>
<?php
include("Foot.php");
?>