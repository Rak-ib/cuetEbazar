
<?php include('config/constants.php'); ?>
<?php

if(isset( $_SESSION['user']))
{
   $id = $_SESSION['user'];
}
else
{
   header("Location: login.php");
}
$sql = "SELECT *FROM user WHERE id = '$id'";
$res = mysqli_query($conn,$sql);

$count = mysqli_num_rows($res);
if($count>0)
{
   //there is a student..
   while($row = mysqli_fetch_assoc($res))
   {
       $id = $row['id'];
       $name = $row['name'];
       $hall = $row['hall'];
       $pno = $row['mobile'];
       $email = $row['email'];
       $image_name = $row['image'];
   }

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <link rel="stylesheet" href="./css/profile.css">
  <link rel="stylesheet" href="./css/footer.css">
   
  <title>Profile Page</title>
  <style>

  </style>


</head>

<body>

  <!--header-->
    <div class="header">
        <div class="container">
            <div class="row flex items-center">
                <div class="col-md-4">
                   <a href="index.php"> <img src="./images/coverrr.png"  class="mt-1 pl-2 pr-2 pb-2" style="width:230px;height:100px;border-radius:10px;"></a>
                </div>

                <div class="col">
                <ul id="menu" class="float-md-right">
                    
                              <li><a href="index.php" >Home</a></li>
                              <li><a href="sell.php">Sell</a></li>
                              <li><a href="products.php">Products</a></li>
                              <li><a href="contact us.php">Contact Us</a></li>
                              <li><a href="login.php">Login</a></li>
                              <li><a href="profile.php"><img src="./images/<?php echo $image_name;?>" style="height:35px;width:35px;border:none;border-radius:20px;" alt=""></a></li>
                        
                  </ul>
                </div>
            </div>
          </div>
     </div>


     <!--main content-->


<div class="header1 ml-5" >
        <div class="options1">
          <div class="option1 mb-4"><a href="myposts.php">MyPosts</a></div>
          <!-- <div class="option1 mb-4"><a href="pending post.php">Pending Posts</a></div> -->
          <div class="option1 mb-4"><a href="sold.php">Sold</a></div>
          <div class="option1 mb-4"><a href="myproducts.php">My Products</a></div>
          <div class="option1 mb-4"><a href="logout.php">Logout</a></div>
        </div>
        
      </div>
  <div class="container1 mb-5"style="margin-bottom:150px;">
    <div class="user-info">


      <h4>User Info</h4>
      <p><strong>Name:</strong><?php echo $name; ?></p>
      <p><strong>Address:</strong> <?php echo $hall; ?></p>
      <p><strong>ID:</strong> <?php echo $id; ?></p>
      <p><strong>Mobile:</strong> <?php echo $pno; ?></p>
      <p><strong>Email:</strong> <?php echo $email; ?></p>
      <div class="social-icons">
      <button class="edit-button"><i class="fab fa-facebook"></i></button>
      <button class="edit-button"><i class="fab fa-instagram"></i></button>
      <button class="edit-button"><i class="fab fa-twitter"></i></button>
      </div>

      <?php
    

        if(isset( $_SESSION['user']))
        {
            echo "welcome ". $_SESSION['user'];
            // unset( $_SESSION['user']);
        }
        if(isset( $_SESSION['add']))
        {
             echo $_SESSION['add'];
             unset( $_SESSION['add']);
        }
        if(isset( $_SESSION['add-product']))
        {
            echo  $_SESSION['add-product'];
            unset( $_SESSION['add-product']);
        }
        


      ?>

      <button class="edit-button1"><i class="fas fa-edit"></i><span class="edit-text">Edit information</span></button>
    </div>

    <div class="user-image">
      <img src="./images/<?php echo $image_name;?>" alt="User Image"><br>
      <button class="edit-button"><i class="fas fa-edit"></i><span class="edit-text">Edit Pic</span></button>
    </div>


  </div>




      <!--footer-->
      
      <footer class="bg-dark text-white pt-24 pb-24 mt-[200px]">
      <div class="container text-center text-md-left">
          <div class="row text-center text-md-left">
              <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                  <h5 class="text-uppercase mb-4 font-weight-bold text-warning">CUETmart</h5>
                  <p>We ensure good quality of products!!</p>
              </div>
              <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                  <h5 class="text-uppercase mb-4 font-weight-bold text-warning">Products</h5>
                  <p>
                      <a href="" class="text-white" style="text-decoration:none;">Books</a>
                  </p>
                  <p>
                      <a href="" class="text-white" style="text-decoration:none;">Electronics</a>
                  </p>
                  <p>
                      <a href="" class="text-white" style="text-decoration:none;">Vehicles</a>
                  </p>
               
              </div>  
              <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
                  <h5 class="text-uppercase mb-4 font-weight-bold text-warning">Useful links</h5>
                  
                  <p>
                      <a href="./Home.php" class="text-white" style="text-decoration:none;">Home</a>
                  </p>
                  <p>
                      <a href="./products.php" class="text-white" style="text-decoration:none;">Products</a>
                  </p>
                  <p>
                      <a href="./login.php" class="text-white" style="text-decoration:none;">login</a>
                  </p>
                  
              </div>

              <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
                  <h5 class="text-uppercase mb-4 font-weight-bold text-warning">Contacts</h5>
                  <p>
                     <i class="fas fa-home mr-3"></i>Home
                  </p>
                  <p>
                      <i class="fas fa-envelope mr-3"></i>Gmail
                  <p>
                      <i class="fas fa-phone mr-3"></i>+8801625680207
                  </p>
                  <p>
                      <i class="fas fa-print mr-3"></i>print
                  </p>

              </div>
               
          </div>

          <hr clas="mb-4 mt-4">
          
          <div class="row align-items-center mt-20">
              <div class="col-md-7 col-lg-8 ">
                  <p>Copyright 02020 All rights reserved by:
                      <a href="" class="text-decoration-none">
                          <strong class="text-warning">CUETmart</strong>
                      </a>
                  </p>
                    
              </div>
        

              <div class="col-md-5 col-lg-4">
                  
                  <div class="text-center text-md-right">

                      <ul class="list-unstyled list-inline">
                          <li class="list-inline-item">
                              <a href="" class="btn-floating btn-sm text-white" style="font-size:23px;"><i class="fab fa-facebook"></i></a>
                          </li>
                          <li class="list-inline-item">
                              <a href="" class="btn-floating btn-sm text-white" style="font-size:23px;"><i class="fab fa-twitter"></i></a>
                          </li>
                          <li class="list-inline-item">
                              <a href="" class="btn-floating btn-sm text-white" style="font-size:23px;"><i class="fab fa-google-plus"></i></a>
                          </li>
                          <li class="list-inline-item">
                              <a href="" class="btn-floating btn-sm text-white" style="font-size:23px;"><i class="fab fa-linkedin-in"></i></a>
                          </li>
                          <li class="list-inline-item">
                            <a href="" class="btn-floating btn-sm text-white" style="font-size:23px;"><i class="fab fa-youtube"></i></a>
                        </li>

                      </ul>
                  </div>
              </div>
          </div>
      </div>
  </footer>








  <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/your-font-awesome-kit.js" crossorigin="anonymous"></script>
</body>

</html>
