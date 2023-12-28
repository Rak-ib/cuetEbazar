

<?php include('config/constants.php'); ?>
<?php

if(isset( $_SESSION['user']))
{
    // echo "welcome ". $_SESSION['user'];
    // unset( $_SESSION['user']);
    $id = $_SESSION['user'];
    $sql = "SELECT *FROM user WHERE id = '$id'";
    $res = mysqli_query($conn,$sql);
    $count = mysqli_num_rows($res);
    // echo $count;
     if($count>0)
     {
         $row = mysqli_fetch_assoc($res);
         $hall = $row['hall'];
         $image_name = $row['image'];
     }
 

}
else if(!isset($_SESSION['user']))
{
    // die("in");
    // die($_SESSION['user']);
    $_SESSION['no-login-message']="<div style='color:red;text-align:center;'>Login First</div>";
                              ?>
                            <script>   
                            window.location.href="login.php";   
                            </script>
                            <?php
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

  <!-- <link rel="stylesheet" href="./css/products.css"> -->
  <link rel="stylesheet" href="./css/footer.css">
  <link rel="stylesheet" href="./css/sell.css">
   
  <title>Sell</title>
  <style>

  </style>


</head>

<body style="background-color:rgb(60, 60, 60);">

  <!--header-->
    <div class="header">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                <a href="Home.php"> <img src="./images/coverrr.png"  class="mt-1 pl-2 pr-2 pb-2" style="width:230px;height:100px;border-radius:10px;"></a>
                </div>

                <div class="col">
                    <ul id="menu" class="float-md-right">
                        <li><a href="Home.php" >Home</a></li>
                        <li><a href="sell.php">Sell</a></li>
                        <li><a href="products.php">Products</a></li>
                        <li><a href="contact us.php">Contact Us</a></li>
                        <li><a href="login.php">Login</a></li>
                        <li><a href="profile.php"><img src="./images/<?php echo $image_name; ?>" style="height:35px;width:35px;border:none;border-radius:20px;" alt=""></a></li>
                  
                    </ul>
                </div>
            </div>
          </div>
     </div>



     <div class="container mt-5">

        <div class="boxx " style="background:white;height:930px;">
            <h2>Product Details</h2>
            <?php
            if(isset($_SESSION['upload-fail']))
            {
                echo $_SESSION['upload-fail'];
                unset($_SESSION['upload-fail']);
            }

            ?>


            <?php
            
            $pd = $_GET['pidd'];
            // echo $pd;
            $sql_p = "SELECT * FROM products WHERE pid = '$pd'";
            $res_p = mysqli_query($conn, $sql_p) or die("failed to detect product");


                 $row_p = mysqli_fetch_assoc($res_p);
                 $p_name = $row_p['pname'];
                 $p_price = $row_p['price'];
                 $p_desc = $row_p['pdesc'];
                 $p_image = $row_p['pimage'];
                 $p_status = $row_p['pstatus'];
                 $p_cate = $row_p['pcategory'];
                // die($p_image);
             
            


            ?>
            <form action="" method="POST" enctype="multipart/form-data" class="mb-5 ">
                <div class="form-group">
                    <label for="name">UserId:</label>
                    <input type="text" class="form-control" id="name" name="id" required value="<?php echo $id; ?>">
                </div>
                <div class="form-group">
                    <label for="name">Hall Name:</label>
                    <input type="text" class="form-control" id="name" name="hall_name" required value="<?php echo $hall; ?>">
                </div>
                <div class="form-group">
                    <label for="name">Product Category</label>
                    <select name="pcate" id="">
                        <?php
                        if($p_cate =='sports')
                        {
                            echo '<option value="sports" selected>Sports</option>';
                            ?>
                        <option value="books">Books</option>
                        <option value="clothes">Clothes</option>
                        <option value="furniture">Furniture</option>
                        <option value="electronic">Electronic Devices</option>
                        <option value="vehicles">Vehicles</option>
                        <?php

                        }             
                        ?>

                        <?php
                        if($p_cate =='books')
                        {
                            echo '<option value="books" selected>Books</option>';
                            ?>
                        <option value="sports">Sports</option>
                        <option value="clothes">Clothes</option>
                        <option value="furniture">Furniture</option>
                        <option value="electronic">Electronic Devices</option>
                        <option value="vehicles">Vehicles</option>
                        <?php

                        }             
                        ?>

                        <?php
                        if($p_cate =='books')
                        {
                            echo '<option value="clothes" selected>Clothes</option>';
                            ?>
                        <option value="sports">Sports</option>
                        <option value="books">Books</option>
                        <option value="furniture">Furniture</option>
                        <option value="electronic">Electronic Devices</option>
                        <option value="vehicles">Vehicles</option>
                        <?php

                        }             
                        ?>

                        <?php
                        if($p_cate =='furniture')
                        {
                            echo '<option value="furniture" selected>Furniture</option>';
                            ?>
                        <option value="sports">Sports</option>
                        <option value="books">Books</option>
                        <option value="clothes">Clothes</option>
                        <option value="electronic">Electronic Devices</option>
                        <option value="vehicles">Vehicles</option>
                        <?php

                        }             
                        ?>

                        <?php
                        if($p_cate =='electronic')
                        {
                            echo '<option value="electronic" selected>Electronics</option>';
                            ?>
                        <option value="sports">Sports</option>
                        <option value="books">Books</option>
                        <option value="clothes">Clothes</option>
                        <option value="furniture">Furniture</option>
                        <option value="vehicles">Vehicles</option>
                        <?php

                        }             
                        ?>

                        <?php
                        if($p_cate =='vehicles')
                        {
                            echo '<option value="vehicles" selected>Vehicles</option>';
                            ?>
                        <option value="sports">Sports</option>
                        <option value="books">Books</option>
                        <option value="clothes">Clothes</option>
                        <option value="furniture">Furniture</option>
                        <option value="electronic">Electronic Devices</option>
                        <?php

                        }             
                        ?>

                    </select>
                </div>
                <div class="form-group">
                    <label for="name">Product Name:</label>
                    <input type="text" class="form-control" id="name" value="<?php echo $p_name;  ?>" name="pname" required>
                </div>
                <div class="form-group">
                    <label for="price">Price:</label>
                    <input type="number" class="form-control" id="price"value="<?php echo $p_price;  ?>" name="price" step="0.01" required>
                </div>
                <div class="form-group">
                    <label for="description">Description:</label>
                    <textarea class="form-control" id="description"  name="pdesc" rows="3" ><?php echo $p_desc;  ?></textarea>
                </div>
                <div class="form-group">
                    <label for="name" style="font-weight:700;">Status</label>
                    <select name="status"  id="">
                       <?php 
                          if($p_status=="sale" || $p_status=="Sale")
                          {
                            echo '<option value="Sale" selected>Sale</option>';
                            echo '<option value="Sold" >Sold</option>';
                          }
                          if($p_status=="sold" || $p_status=="Sold")
                          {
                            echo '<option value="Sold" selected>Sold</option>';
                            echo '<option value="Sale" >Sale</option>';
                          }
                       ?>

                    </select>
                    
                </div>
                <div class="form-group">
                    <label for="">Current Image:</label>
                    <img src="images/<?php echo $p_image;?>" height=100px; width=100x><br><br>
                    <label for="image">Change Image ?</label>
                    
                    <input type="file" id="image" class="form-control" value="333" name="image_name" >
                </div>

             
        
                <input type="submit" name="submit" value="Update" class="btn btn-dark"><br>
            </form>
        </div>

     </div>













      <!--footer-->
      
      <footer class="bg-dark text-white pt-24 pb-24 mt-[200px]" style="padding-top: 100px; padding-bottom:100px;">
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


<?php



if(isset($_POST['submit']))
{
   // die("clicked");
    $pname = $_POST['pname'];
    $pdesc = $_POST['pdesc'];
    $pstatus = $_POST['status'];///////////////////////////////////////////////////////////
    
    $s_id = "s".$id;
    $pdate = date("Y.m.d");
    $price = $_POST['price'];
    $pcategory = $_POST['pcate'];


   //uploading the image to local server..
   if(isset($_FILES['image_name']['name']))
   {
      $image_name = $_FILES['image_name']['name'];
      // die("Image name");

      if($image_name != "")
      {
         $ext =explode('.',$image_name);
         $ext = end($ext);

         $image_name = "products".rand(0000,9999).".".$ext;

         $src = $_FILES['image_name']['tmp_name'];
         $dest = "images/".$image_name;
         $upload = move_uploaded_file($src,$dest);
         
         if($upload == false)
         {
           //die("in");
            $_SESSION['upload-fail'] = "Failed to Upload the Image";

            ?>  
            <script>   
            window.location.href="update_post.php";   
            </script>
            <?php
            // die();
         }

      }
      else
      {
         $image_name = $p_image;
      }
   }


   //adding to database
   $id_val = "s".$id;
   $sqlp = "UPDATE products  SET
           pname='$pname',
           pcategory='$pcategory',
           pdesc='$pdesc',
           pstatus='$pstatus',
           pimage='$image_name',
           s_id = '$id_val',
           pdate = '$pdate',
           price = '$price'
           WHERE pid = '$pd'";

   $resp = mysqli_query($conn,$sqlp) or die("Query failed!!");
   if($resp == TRUE)
   {
      //  echo"Data Inserted";
   

       $_SESSION['update-product']="<div style='color:green;'>Product Was updated Successfully!!</div>";
          // header('location:http://localhost/bootstrap_project/profile.php');
        ?>  

       <script>   
       window.location.href="myposts.php";   
       </script>
       <?php

   }
   else{
       echo "Data Insertion Failed!!";
                            ?>
                            <script>   
                            window.location.href="update_post.php";   
                            </script>
                            <?php
       
   }
   mysqli_close($conn);

   



}



?>