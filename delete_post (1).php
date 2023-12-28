<?php include('config/constants.php'); ?>
<?php
$pid = $_GET['pidd'];
$sql = "DELETE FROM products WHERE pid='$pid'";
$res = mysqli_query($conn, $sql);
if($res)
{
    $_SESSION['product_deleted']="<div style='text-align:center;color:green;font-size:16px;font-weight:700;margin-top:10px;'>Product is Deleted!!</div>";
    ?>  
    <script>   
    window.location.href="myposts.php";   
    </script>
    <?php
}
else
{
    $_SESSION['failed_to_delete']="Failed to Delete";
    ?>  
    <script>   
    window.location.href="myposts.php";   
    </script>
    <?php
}


?>