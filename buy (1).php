<?php include('config/constants.php'); ?>
<?php

if(isset( $_SESSION['user']))
{
   $id = $_SESSION['user'];
}
else
{
    // die("in");
    // die($_SESSION['user']);
    $_SESSION['from-buy']="into buy";
    $_SESSION['no-login-message']="<div style='color:red;text-align:center;'>Login First</div>";
   // header('location:http://localhost/bootstrap_project/login.php');
   header("Location: login.php");
}

$pid =$_GET['pidd'];
$buyer_id="b".$id;
$sql = "UPDATE products SET
        pstatus = 'Sold',
        b_id ='$buyer_id'
        WHERE pid=$pid";
$res = mysqli_query($conn,$sql) or die("failed");
if($res)
{
    $_SESSION['buy']="<div style='text-align:center;color:green;font-size:16px;font-weight:700;margin-top:10px;'>Product is Successfully bought...</div>";

   // header('location:http://localhost/bootstrap_project/myproducts.php');
     header("Location: myproducts.php");

}
else
{
    echo "Failed to purchase";
}







?>