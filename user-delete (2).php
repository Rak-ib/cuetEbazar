<?php
include('config/constants.php');
$id=$_GET['id'];

$sql="DELETE from user where id=$id";
$res=mysqli_query($conn,$sql);
if($res==true)
{
    $_SESSION['delete']="deleted successfully";
    header("location:http://localhost/bootstrap_project/admin_users.php");
        
                                 ?>
                            <script>   
                              window.location.href="admin_users.php";   
                            </script>
                            <?php
    
}

?>