<?php
include("../connection/connection.php");
?>
<style>
    .card {
        padding: 20px;
        background-color: #eae8e8;
        width: 205px;
        border-radius: 10px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    .main-card {
        display: flex;
        gap: 3rem;
        margin-top:50px;
        flex-direction: row;
        flex-wrap: wrap;
    }
</style>
<div class="main-card">
<?php
    $sel = "select * from tbl_product p inner join tbl_category c on c.category_id=p.category_id where true";
    if($_GET["pid"]!="")
    {
        $sel .= " AND p.category_id=".$_GET["pid"];
    }
    // echo $sel;
    $res = $conn->query($sel);
    while($row = $res->fetch_assoc())
    {
        ?>
        <div class="card">
                <div><img src="../Assets/files/Product/<?php echo $row["product_img"]?>" width="200" height="200" alt=""></div>
                <div>Name &nbsp; <?php echo $row["product_name"]?></div>
                <div>Price &nbsp; <?php echo $row["product_price"]?></div>
                <input type="hidden" name="txt_pdtid" id="txt_pdtid" value="<?php echo $row["product_id"]?>">
                <input type="hidden" name="txt_qty" id="txt_qty">
                <div><a href="BookDetails.php?pdtid=<?php echo $row["product_id"]?>">Book Now</a></div>
            </div>
        <?php
    }
    ?>
</div>