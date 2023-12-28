<?php include('config/constants.php');
if ($_SESSION['login']!="Admin") {
    $_SESSION['login-error']=" <p style='color:green; font-weight:bolder;'>Noob Hacker</p> <i class='fa-solid fa-face-grin-tears fa-bounce fa-xl' style='color: #0a5700;'></i>";
    header("location:http://localhost/bootstrap_project/admin-login.php");
  
  }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <link rel="stylesheet" href="./extra.css">

</head>

<body>
    <div>

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
                <input type="number" placeholder="Search by product ID" name="id" style="font-size: 20px;">
                <input class="btn-secondary" style="font-size: 20px;" type="submit" name="submit" value="Search">
            </form>
        </div>
        <table>
            <caption>All Products</caption>
            <thead>
                <th>No.</th>
                <th>Product Name</th>
                <th>category</th>
                <th class="third">Product pic</th>
                <th>Post date</th>
                <th>Status</th>
                <th>Seller</th>
                <th>Buyer</th>
                <th>Description</th>
                <th>action</th>

            </thead>
            <tbody>
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
                    $sql = "SELECT * from products where pid=$id";
                    unset($_SESSION['search']);
                } else {
                    $sql = "SELECT * from products";
                }

                $res = mysqli_query($conn, $sql);
                //check
                if ($res == true) {
                    $row = mysqli_num_rows($res);
                    if ($row > 0) {
                        while ($row = mysqli_fetch_assoc($res)) {
                ?>
                            <tr>
                                <td><?php echo $row['pid']   ?></td>
                                <td><?php echo $row['pname']   ?></td>
                                <td><?php echo $row['pcategory']   ?></td>
                                <td><img src="" alt="coming soon"></td>
                                <td><?php echo $row['pdate']   ?></td>
                                <td><?php echo $row['pstatus']   ?></td>
                                <td><?php echo $row['s_id']   ?></td>
                                <td><?php echo $row['b_id']   ?></td>
                                <td>
                                    <p><?php echo $row['pdesc']   ?></p>
                                </td>
                                <td><a href="product-delete.php?id=<?php echo $row['pid']; ?>">remove</a></td>
                                

                            </tr>
                <?php
                        }
                    }
                }
                ?>
            </tbody>
        </table>
        <!-- <div class="pagination">
            <button type="button">Previous</button>
            <button type="button">Next</button>
        </div> -->

    </div>
</body>

</html>