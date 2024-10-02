<?php 
include("../Assets/Connection/Connection.php");
include("Head.php");
session_start();

if(isset($_POST["btn_save"]))
{
    $feed = $_POST["txt_feed"];
    $ins = "insert into tbl_feedback(feedback_content,user_id,feedback_date) values('".$feed."','".$_SESSION["uid"]."',curdate())";
    if($conn->query($ins))
    {
        ?>
        <script>
        alert("FeedBack Send")
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
        <table>
            <tr>
                <td>FeedBack</td>
                <td>
                    <textarea name="txt_feed" id="" cols="30" rows="10"></textarea>
                </td>
            </tr>
            <tr>
                <td><input type="submit" value="send" name="btn_save"></td>
            </tr>
        </table>
    </form>
</body>
</html>