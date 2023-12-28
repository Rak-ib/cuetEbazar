<?php include('config/constants.php');
if ($_SESSION['login']!="Admin") {
    $_SESSION['login-error']=" <p style='color:green; font-weight:bolder;'>Noob Hacker</p> <i class='fa-solid fa-face-grin-tears fa-bounce fa-xl' style='color: #0a5700;'></i>";
    //header("location:http://localhost/bootstrap_project/admin-login.php");
      
                                 ?>
                            <script>   
                              window.location.href="admin-login.php";   
                            </script>
                            <?php
    
  }
?>
<!DOCTYPE html>
<html>

<head>
  <title>User List</title>
  <link rel="stylesheet" href="./extra.css">

</head>

<body>

  <div id="top-section">
    <a class="option" href="admin_dashboard.php">Dashboard</a>
    <a class="option" href="admin_users.php">Users</a>
    <a class="option" href="admin_products.php">Products</a>
    <a class="option" href="admin_feedbacks.php">Feedbacks</a>
    <a class="option" href="admin_categories.php">Categories</a>
    <a class="option" href="admin_logout.php">Logout</a>
  </div>

  <div style="display: flex;">
    <h2 style="margin: 0px 0px 0px 700px;padding-top:15px;color:green;">
      <?php
      if (isset($_SESSION['delete'])) {
        echo $_SESSION['delete'];
        unset($_SESSION['delete']);
      }

      ?>
    </h2>
    <form action="" method="POST" style="margin:5px 2px 5px 360px; border:none; ">
      <input type="number" placeholder="Search by User ID" name="id" style="font-size: 20px;">
      <input class="btn-secondary" style="font-size: 20px;" type="submit" name="submit" value="Search">
    </form>
  </div>

  <table>
    <caption>User Table</caption>
    <thead>
      <tr>
        <th>User ID</th>
        <th>User Name</th>
        <th>User Dept</th>
        <th>User Hall</th>
        <th>User Mobile</th>
        <th>User Image</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <!-- Sample Data - Replace with your actual data -->
      <?php
      if (isset($_POST['submit'])) {
        // session_start();
        $id = $_POST['id'];
        $_SESSION['search'] = $id;
      }
      ?>
      <?php

      if (isset($_SESSION['search'])) {
        $id = $_SESSION['search'];
        // echo $_SESSION['search'];
        $sql = "SELECT * from user where id=$id";
        unset($_SESSION['search']);
      } else {
        $sql = "SELECT * from user";
      }

      $res = mysqli_query($conn, $sql);
      //check
      if ($res == true) {
        $row = mysqli_num_rows($res);
        if ($row > 0) {
          while ($row = mysqli_fetch_assoc($res)) {
      ?>
            <tr>
              <td><?php echo $row['id']   ?></td>
              <td><?php echo $row['name']   ?></td>
              <td><?php echo $row['dept']   ?></td>
              <td><?php echo $row['hall']   ?></td>
              <td><?php echo $row['mobile']   ?></td>
              <td><img src="user1.jpg" alt="User Image" class="user-image"></td>
              <td><a href="user-delete.php?id=<?php echo $row['id']; ?>">remove</a></td>
            </tr>
      <?php
          }
        }
      }
      ?>

      <!-- Add more rows as needed -->
    </tbody>
  </table>

  <!-- Pagination -->

</body>

</html>