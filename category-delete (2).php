<?php
include('config/constants.php');
echo "hello";
$id=$_GET['id'];
echo "heloo";
$sql="SELECT * from category where c_no=$id";
$res=mysqli_query($conn,$sql);
echo "hello";
$row = mysqli_num_rows($res);
while ($row = mysqli_fetch_assoc($res)) {
$name=$row['c_name'];
}
echo $name;
$sql1="DELETE from products where pcategory='$name'";
$res=mysqli_query($conn,$sql1);
if($res==true)
{
    $_SESSION['delete']="deleted successfully";
    // header("location:http://localhost/bootstrap_project/admin_categories.php");
}

?>