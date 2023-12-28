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
    <title>Categories</title>
    <link rel="stylesheet" href="./extra.css">
    <style>
        .tab {
            align-items: center;
            text-align: center;
        }
    </style>

</head>

<body>
    <header>
        <div id="top-section">
            <a class="option" href="admin_dashboard.php">Dashboard</a>
            <a class="option" href="admin_users.php">Users</a>
            <a class="option" href="admin_products.php">Products</a>
            <a class="option" href="admin_feedbacks.php">Feedbacks</a>
            <a class="option" href="admin_categories.php">Categories</a>
            <a class="option" href="admin_logout.php">Logout</a>
        </div>
    </header>
    <main>
        <table class="tab">
            <caption>All Categories</caption>
            <thead class="tab">
                <tr>
                    <th>No.</th>
                    <!-- <th id="two">ID.</th> -->
                    <th>Category name</th>
                    <th>Number of items</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody class="tab">

                <tr>
                    <td>1</td>
                    <!-- <td>1904001</td> -->
                    <td>sports</td>
                    <td>
                        <?php
                        $sql = "SELECT * from products where pcategory='sports' ";
                        $res = mysqli_query($conn, $sql);
                        $row = mysqli_num_rows($res);
                        echo $row;
                        ?>
                    </td>
                    <td><a href="category-delete.php?id=<?php echo 1; ?>">remove</a>
                </tr>
                <tr>
                    <td>2</td>
                    <!-- <td>1904001</td> -->
                    <td>Books</td>
                    <td>
                        <?php
                        $sql = "SELECT * from products where pcategory='books' ";
                        $res = mysqli_query($conn, $sql);
                        $row = mysqli_num_rows($res);
                        echo $row;
                        ?>
                    </td>
                    <td><a href="category-delete.php?id=<?php echo 2; ?>">remove</a>
                </tr>
                <tr>
                    <td>3</td>
                    <!-- <td>1904001</td> -->
                    <td>Cloths</td>
                    <td>
                        <?php
                        $sql = "SELECT * from products where pcategory='clothes' ";
                        $res = mysqli_query($conn, $sql);
                        $row = mysqli_num_rows($res);
                        echo $row;
                        ?>
                    </td>
                    <td><a href="category-delete.php?id=<?php echo 3; ?>">remove</a>
                </tr>
                <tr>
                    <td>4</td>
                    <!-- <td>1904001</td> -->
                    <td>Furniture</td>
                    <td>
                        <?php
                        $sql = "SELECT * from products where pcategory='Furniture' ";
                        $res = mysqli_query($conn, $sql);
                        $row = mysqli_num_rows($res);
                        echo $row;
                        ?>
                    </td>
                    <td><a href="category-delete.php?id=<?php echo 4; ?>">remove</a>
                </tr>
                <tr>
                    <td>5</td>
                    <!-- <td>1904002</td> -->
                    <td>Electronic devices</td>
                    <td>
                        <?php
                        $sql = "SELECT * from products where pcategory='electronic' ";
                        $res = mysqli_query($conn, $sql);
                        $row = mysqli_num_rows($res);
                        echo $row;
                        ?>
                    </td>
                    <td><a href="category-delete.php?id=<?php echo 5; ?>">remove</a>
                </tr>
                <tr>
                    <td>6</td>
                    <!-- <td>1904001</td> -->
                    <td>Vehicles</td>
                    <td>
                        <?php
                        $sql = "SELECT * from products where pcategory='Vehicles' ";
                        $res = mysqli_query($conn, $sql);
                        $row = mysqli_num_rows($res);
                        echo $row;
                        ?>
                    </td>
                    <td><a href="category-delete.php?id=<?php echo 6; ?>">remove</a>
                </tr>
            </tbody>
        </table>
        
        
    </main>
</body>

</html>