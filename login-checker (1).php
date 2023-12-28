
<?php
// session_start();
// if(isset( $_SESSION['user']))
// {
//     echo "welcome ". $_SESSION['user'];
//     unset( $_SESSION['user']);
// }

if(!isset($_SESSION['user']))
{
    die("in");
    die($_SESSION['user']);
    $_SESSION['no-login-message']="<div style='color:red;text-align:center;'>Login First</div>";
    // header('location:http://localhost/bootstrap_project/login.php');
    header("Location: login.php");
}
else
{
    // header('location:http://localhost/bootstrap_project/sell.php');

    
}

?>
