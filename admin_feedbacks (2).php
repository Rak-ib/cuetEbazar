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
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users Feedback</title>
    <link rel="stylesheet" href="./extra.css">

</head>

<body>
    <header>
        <div id="top-section">
            <a class="option" href="admin_dashboard.php">Dashboard</a>
            <a class="option" href="admin_users.php">Users</a>
            <a class="option" href="admin_products.php">Products</a>
            <a class="option" href="admin_feedbacks.php">Feedbacks</a>
            <a class="option" href="admin_categories.php">Categories</a>
            <a href="admin_logout.php" class="option">Logout</a>
        </div>
    </header>
    <main>
    <h2 style="margin: 0px 0px 0px 750px;padding-top:15px;color:green;">
                <?php
                if (isset($_SESSION['delete'])) {
                    echo $_SESSION['delete'];
                    unset($_SESSION['delete']);
                }

                ?>
            </h2>
        <table>
            <caption>All Feedbacks</caption>
            <thead>
                <tr>
                    <th id="one">No.</th>
                    <th id="two">ID.</th>
                    <th id="description">Description</th>
                    <th id="three">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * from feedback";


                $res = mysqli_query($conn, $sql);
                //check
                if ($res == true) {
                    $row = mysqli_num_rows($res);
                    if ($row > 0) {
                        while ($row = mysqli_fetch_assoc($res)) {
                ?>
                            <tr>
                                <td style="max-width: 100px;"><?php echo $row['f_no']   ?></td>
                                <td style="max-width: 100px;"><?php echo $row['u_id']   ?></td>
                                <td><?php echo $row['description']   ?></td>
                                <td style="max-width: 100px;"><a href="feedback-delete.php?id=<?php echo $row['f_no'];?>">remove</a></td>
                            </tr>
                <?php
                        }
                    }
                } ?>
            </tbody>
        </table>
    </main>
</body>

