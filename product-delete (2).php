<?php
include('config/constants.php');
$id=$_GET['id'];

$sql="DELETE from products where pid=$id";
$res=mysqli_query($conn,$sql);
if($res==true)
{
    $_SESSION['delete']="deleted successfully";
    //header("location:http://localhost/bootstrap_project/admin_products.php");
        
                                 ?>
                            <script>   
                              window.location.href="admin_products.php";   
                            </script>
                            <?php
    
}

?>