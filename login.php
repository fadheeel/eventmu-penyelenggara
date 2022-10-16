<?php
session_start();
include 'config/app.php';

if (isset($_POST['login'])) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, md5($_POST['password']));
    $result = mysqli_query($conn, "SELECT * FROM admin WHERE username = '$username'  AND password='$password' ");
    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['login'] = true;
        $_SESSION['id_admin'] = $row['id_admin'];
        $_SESSION['username'] = $row['username'];
        $_SESSION['password'] = $row['password'];
        header("Location: index.php");
        exit;
    }
    $err = true;}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="./assets/img/favicon.png">
    <title>
        Admin | Eventmu
    </title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <link href="./assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="./assets/css/nucleo-svg.css" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="./assets/css/nucleo-svg.css" rel="stylesheet" />
    <link id="pagestyle" href="./assets/css/argon-dashboard.css?v=2.0.4" rel="stylesheet" />

    <style>
        .gradient-custom {
            background: #6a11cb;
            background: -webkit-linear-gradient(to right, rgba(106, 17, 203, 1), rgba(37, 117, 252, 1));
            background: linear-gradient(to right, rgba(106, 17, 203, 1), rgba(37, 117, 252, 1))
        }
    </style>
</head>

<body>
    <section class="vh-100 gradient-custom">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card bg-dark text-white" style="border-radius: 1rem;">
                        <div class="card-body p-5 text-center">
                            <div class="mb-md-5 mt-md-4 pb-5">
                                <h2 class="fw-bold mb-2 text-uppercase text-white">Login</h2>
                                <p class="text-white-50 mb-5">Please enter your login and password!</p>
                                <?php
                                if (isset($err)) :
                                ?>
                                    <div class="alert alert-danger">
                                        <p class="text-white">username / password salah</p>
                                    </div>
                                <?php endif ?>
                                <form action="" method="POST">
                                    <div class="form-outline form-white mb-4">
                                        <input name="username" type="text" id="typeEmailX" class="form-control form-control-lg" placeholder="Username" required />
                                        <label class="form-label" for="typeEmailX">Username</label>
                                    </div>
                                    <div class="form-outline form-white mb-4">
                                        <input name="password" type="password" id="typePasswordX" class="form-control form-control-lg" placeholder="Password" required />
                                        <label class="form-label" for="typePasswordX" ">Password</label>
                                    </div>
                                    <button class=" btn btn-outline-light btn-lg px-5" type="submit" name="login">Login</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>