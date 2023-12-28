<?php include('config/constants.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin-login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        main {
            z-index: 10;
        }

        form {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            gap: 10px;
            /* border: 1px solid black; */
            width: 400px;
            margin: 2px auto;
            padding: 40px 10px;
            background-color: white;
            border-radius: 5px;
            box-shadow: 1px 2px 5px 5px #4F7942;
            opacity: .8;
        }

        form:hover {
            opacity: 1;
        }

        h2 {
            margin: 5px 43%;
            margin-top: 230px;
            font-size: xx-large;
            color: black
            ;
        }

        input {
            height: 30px;
            font-weight: bolder;
            border-radius: 10px;
        }

        .login-btn {
            width: 55%;
            height: 35px;
            background-color: #006400;
            color: black;
            font-weight: bolder;
        }

        .login-btn:hover {
            cursor: pointer;
        }

        label {
            justify-items: left;
            font-weight: bolder;
        }

        body {
            position: relative;
            margin: 0;
            padding: 0;
            border: 1px solid greenyellow;
            border-bottom: none;
        }

        img {

            position: absolute;
            width: 100%;
            height: 100vh;
            top: 0px;
            left: 0px;
            z-index: -10;
            opacity: .9;
        }
    </style>
</head>

<body>
    <img src="./images/bgff.jpeg" alt="">
    <main>
        <h2> Admin Login</h2>
        <form action="" method="post">
            <?php
            if (isset($_SESSION['login-error'])) {
                echo $_SESSION['login-error'];
                unset($_SESSION['login-error']);
            }

            ?>
            <label for="">Admin name</label>
            <input required type="text" name="name" id="" placeholder="Admin name">
            <label for="">Enter password</label>
            <input required type="password" name="pass" placeholder="Password">
            <input type="submit" value="login" name="login" class="login-btn">
        </form>
    </main>
</body>

</html>
<?php
if (isset($_POST['login'])) {
    $pass = $_POST['pass'];
    $name = $_POST['name'];
    if ($pass == "admin_help" && $name == "we are admin") {
        $_SESSION['login'] = "Admin";
                                    ?>
                            <script>   
                            window.location.href="admin_dashboard.php";   
                            </script>
                            <?php
    } else {
        $_SESSION['login'] = null;
        $_SESSION['login-error'] = " <p style='color:green; font-weight:bolder;'>Wrong Information</p> 
        <i class='fa-solid fa-face-frown fa-beat fa-xl' style='color: #05b319;'></i> ";
        header("location:http://localhost/bootstrap_project/admin-login.php");
                                    ?>
                            <script>   
                            window.location.href="admin-login.php";   
                            </script>
                            <?php
    }
}


?>