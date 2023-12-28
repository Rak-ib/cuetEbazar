
<?php include('config/constants.php'); ?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <link rel="stylesheet" href="./css/products.css">
  <link rel="stylesheet" href="./css/footer.css">
  <link rel="stylesheet" href="./css/login.css">
   
  <title>Sell</title>
  <style>

  </style>


</head>

<body style="background-color:rgb(60, 60, 60);">





    <div class="boxx " style="background:white;">
        
        <div class="container mt-5">
            <h2 class="text-center">Login</h2>

            <?php
                    if(isset($_SESSION['logfail']))
                    {
                        echo $_SESSION['logfail'];
                        unset($_SESSION['logfail']);
                    }

                    if(isset($_SESSION['no-login-message']))
                    {
                       echo $_SESSION['no-login-message'];
                       unset($_SESSION['no-login-message']);
                    }

                    if(isset($_SESSION['no-login-message']))
                    {
                       echo $_SESSION['no-login-message'];
                       unset($_SESSION['no-login-message']);
                    }



            ?>


            <form action="" method="POST">
            <div class="mb-3">
                <label for="id" class="form-label">StudentID</label>
                <input type="text" class="form-control"  required name="id" id="id" placeholder="Enter your id">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label" >Password</label>
                <input type="password"  required class="form-control"name="pass" id="password" placeholder="Enter your password">
            </div>
            

            <input type="submit" name="submit" value="Login" class="btn btn-dark"><br>

            <p>Don't have account? <a href="signup.php">Signup</a> <span><a href="./admin-login.php">/ Admin</a></span></p>
            </form>
        </div>


 
    </div>








  <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/your-font-awesome-kit.js" crossorigin="anonymous"></script>
</body>

</html>



<?php

// echo $_POST['submitt'];

   if(isset($_POST['submit']))
   {
    //  $sb = $_POST['submit'];
     $id = $_POST['id'];
     $pass =  $_POST['pass'];

    $sql = "SELECT * FROM user WHERE id='$id' AND pass ='$pass'";
    $res = mysqli_query($conn,$sql);


    $count = mysqli_num_rows($res);
   // echo $count;
    if($count==1)
    {
        //user extist..
        //die('in');
        $_SESSION['login']="Login Successfull.";
        $_SESSION['user'] = $id;

        //  die($_SESSION['user']);
        //  header('location:http://localhost/bootstrap_project/login-checker.php');
         
       //  header('location:http://localhost/bootstrap_project/profile.php');
       header("Location: profile.php");
                    

    }
    else
    {
        $_SESSION['logfail']="Username and Password didn't match!";
       // header('location:http://localhost/bootstrap_project/login.php');
       header("Location: login.php");

        //user not available
    }

      
    //  die("in");
    // header('location:http://localhost/bootstrap_project/profile.php');


   }
   else die("h");

?>








