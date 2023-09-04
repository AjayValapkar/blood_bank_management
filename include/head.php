<!doctype html>


<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="icon" href="../img/logo.jpg" type="image/x-icon">
    <title>Hello, world!</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">


        <a class="navbar-brand" href="index.php">
            <img src="img/logo.jpg" />
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <ul class="nav d-flex justify-content-between">
           
        <li class="nav-item">
               
                    <?php
                      require "login.php";
                      ?>
                
                     <!-- <?php 
                    //   require "register.php";
                    ?> -->
           
           
            <!-- <div class="nav-vl"></div>
            <li class="nav-item">
                <a class="nav-link" href="include/Register.php" data-bs-toggle="modal" data-bs-target="#exampleModal1">
                    <i class="fas fa-sign-in-alt"> Login</i>
                </a>
                <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <span class="admin">Admin Login </span>
                            </div>
                            <div class="modal-body">
                                <form action="" class="Register">
                                    <div class="modal-body">
                                        <form id="login-form" class="form" role="form" method="post"
                                            action="api/login_submit.php">

                                            <div class="input-group form-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <i class="fas fa-user"></i>
                                                    </span>
                                                </div>
                                                <input type="email" class="form-control" name="email"
                                                    placeholder="Email" required>
                                            </div>

                                            <div class="input-group form-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <i class="fas fa-lock"></i>
                                                    </span>
                                                </div>
                                                <input type="password" class="form-control" name="password"
                                                    placeholder="Password" minlength="6" required>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <input type="Reset" name="Reset" value="Reset">
                                        <button id="mybutton" class="btn btn-dark">Login</button>
                                        <script type="text/javascript">
                                            document.getElementById("mybutton").onclick = function () {
                                                location.href = "Dashboard.php";
                                            };
                                        </script>
                                    </div>
                            </div>
                        </div>
                    </div>
            </li>
            </form>

            </div>
            </div> -->
    </nav>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>