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




<div class="container mt-5 bg-white" style="height:900x; width:559px; border:1px solid black;border-radius:10px;padding:50px; margin-bottom:200px;">
    <?php
    if(isset($_SESSION['upload-fail']))
    {
       echo $_SESSION['upload-fail'];
       unset($_SESSION['upload-fail']);
    }

    ?>
    <h2 class="text-center">Signup</h2>
    <form action="" method="POST" enctype="multipart/form-data">
      <div class="mb-3">
        <label for="name" class="form-label">Student Id</label>
        <input type="text" class="form-control" name="id" id="name" placeholder="Enter your ID">
      </div>
      <div class="mb-3">
        <label for="name" class="form-label">Full Name</label>
        <input type="text" class="form-control" name="name" id="name" placeholder="Enter your full name">
      </div>
      <div class="mb-3">
        <label for="name" class="form-label">Hall Name</label>
        <input type="text" class="form-control" name="hall" id="name" placeholder="Enter your Hall name">
      </div>
      <div class="mb-3">
        <label for="name" class="form-label">Batch</label>
        <input type="text" class="form-control" name="batch" id="name" placeholder="Enter your Batch Name">
      </div>
      <div class="mb-3">
        <label for="name" class="form-label">Dept</label>
        <input type="text" class="form-control" name="dept" id="name" placeholder="Enter your Batch Name">
      </div>
      <div class="mb-3">
        <label for="name" class="form-label">Phone No</label>
        <input type="text" class="form-control" name="pno" id="name" placeholder="Enter your Phone No">
      </div>
      <div class="mb-3">
        <label for="name" class="form-label">Image</label>
        <input type="file" class="form-control" name="image_name" id="name" placeholder="Enter your Image">
      </div>
      <div class="mb-3">
        <label for="name" class="form-label">Facebook Id</label>
        <input type="text" class="form-control" name="fbid" id="name" placeholder="Enter your Facebook Id">
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" name="email" id="email" placeholder="Enter your email">
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" name="pass" id="password" placeholder="Enter your password">
      </div>
      <input type="submit" name="submit" value="Signup" class="btn btn-dark"><br>
    </form>
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

if(isset($_POST['submit']))
{
  //  $_SESSION['user'] = $id;


   //uploading the image to local server..
  //  die(isset($_FILES['image_name']['name']));
   if(isset($_FILES['image_name']['name']))
   {
      $image_name = $_FILES['image_name']['name'];
      // die("Image name");

      if($image_name != "")
      {
         $ext =explode('.',$image_name);
         $ext = end($ext);

         $image_name = "profile".rand(0000,9999).".".$ext;

         $src = $_FILES['image_name']['tmp_name'];
         $dest = "images/".$image_name;
         $upload = move_uploaded_file($src,$dest);
         
         if($upload == false)
         {
           
            $_SESSION['upload-fail'] = "Failed to Upload the Image";

            ?>  
            <script>   
            window.location.href="http://localhost/bootstrap_project/signup.php";   
            </script>
            <?php
            // die();
         }

      }
      else
      {
         $image_name = "";
      }
   }






   $id = $_POST['id'];
   $name = $_POST['name'];
   $hall = $_POST['hall'];
   $batch = $_POST['batch'];
   $dept = $_POST['dept'];
   $pno = $_POST['pno'];
   $fbid = $_POST['fbid'];
   $email = $_POST['email'];
   $pass = $_POST['pass'];
   


   $sql = "INSERT INTO user(id,name,pass,dept,hall,batch,image,mobile,fbid,email) VALUES('{$id}','{$name}','{$pass}','{$dept}','{$hall}','{$batch}','{$image_name}','{$pno}','{$fbid}','{$email}')" or die("Query Unsuccessful");

   $res = mysqli_query($conn,$sql) or die("Query failed!!");
   if($res == TRUE)
   {
      //  echo"Data Inserted";
      $sid="s".$id;
      $sql_seller = "INSERT INTO seller(s_id,u_id) VALUES('{$sid}','{$id}')";
      $res_seller = mysqli_query($conn,$sql_seller) or die("seller failed");
    
      $bid="b".$id;
      $sql_buyer = "INSERT INTO buyer(b_id,u_id) VALUES('{$bid}','{$id}')";
      $res_buyer = mysqli_query($conn,$sql_buyer) or die("buyer failed");

       $_SESSION['add']="<div style='color:green;'>Signed Up Successfully!!</div>";
          // header('location:http://localhost/bootstrap_project/profile.php');
        ?>  

       <script>   
       window.location.href="login.php";   
       </script>
       <?php

   }
   else{
       echo "Data Insertion Failed!!";
       header('location:http://localhost/bootstrap_project/signup.php');
       
   }

   mysqli_close($conn);


}

?>










