<?php
include('config/constants.php');
$id=$_GET['id'];

$sql="DELETE from feedback where f_no=$id";
$res=mysqli_query($conn,$sql);
if($res==true)
{
    $_SESSION['delete']="deleted successfully";
    //header("location:http://localhost/bootstrap_project/admin_feedbacks.php");
                                     ?>
                            <script>   
                              window.location.href="admin_feedbacks.php";   
                            </script>
                            <?php
}

?>