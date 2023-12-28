<?php include('config/constants.php');
if ($_SESSION['login']!="Admin") {
    $_SESSION['login-error']=" <p style='color:green; font-weight:bolder;'>Noob Hacker</p> <i class='fa-solid fa-face-grin-tears fa-bounce fa-xl' style='color: #0a5700;'></i>";

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
    <title>Admin Page</title>
    <link rel="stylesheet" href="./extra.css">
</head>

<body>
    <div id="header">
        <h1>Admin Page</h1>
    </div>

    <div id="content">
        <div id="top-section">
            <a class="option" href="admin_dashboard.php">Dashboard</a>
            <a class="option" href="admin_users.php">Users</a>
            <a class="option" href="admin_products.php">Products</a>
            <a class="option" href="admin_feedbacks.php">Feedbacks</a>
            <a class="option" href="admin_categories.php">Categories</a>
            <a class="option" href="admin_logout.php">Logout</a>
        </div>

        <div id="bottom-section">
            <div class="panel">
                <h2 class="panel-title">USERS</h2><br>
                <p style="color: black;">
                    <?php
                    $sql = "SELECT * from user";
                    $res = mysqli_query($conn, $sql);

                    if ($res == true)
                        $row = mysqli_num_rows($res);
                    echo $row;
                    ?>
                </p>
            </div>

            <div class="panel">
                <h2 class="panel-title">PRODUCTS</h2><br>
                <p style="color: black;">
                    <?php
                    $sql = "SELECT * from products";
                    $res = mysqli_query($conn, $sql);

                    if ($res == true)
                        $row = mysqli_num_rows($res);
                    echo $row;
                    ?></p>
            </div>

            <div class="panel">
                <h2 class="panel-title">FEEDBACKS</h2><br>
                <p style="color: black;">
                    <?php
                    $sql = "SELECT * from feedback";
                    $res = mysqli_query($conn, $sql);

                    if ($res == true)
                        $row = mysqli_num_rows($res);
                    echo $row;
                    ?></p>
            </div>

            <div class="panel">
                <h2 class="panel-title">CATEGORIES</h2><br>
                <p style="color: black;">
                    <?php
                    $sql = "SELECT * from category";
                    $res = mysqli_query($conn, $sql);

                    if ($res == true)
                        $row = mysqli_num_rows($res);
                    echo $row;
                    ?></p>
            </div>
        </div>
    </div>
</body>

</html>