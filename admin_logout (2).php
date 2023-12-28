<?php include('config/constants.php');
unset($_SESSION['login']);
$_SESSION['login-error']="<p style='color:green; font-weight:bolder;'>Logout Successful </p> ";
//header("location:http://localhost/bootstrap_project/admin-login.php");
    
                                 ?>
                            <script>   
                              window.location.href="admin-login.php";   
                            </script>
                            <?php
    
?>
