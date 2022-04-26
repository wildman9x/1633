<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>1633</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter&amp;display=swap">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/Contact-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/Navigation-Clean.css">
    <link rel="stylesheet" href="assets/css/Navigation-with-Button.css">
    <link rel="stylesheet" href="assets/css/Navigation-with-Search.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    </head>
    <body>
    <header>
        <?php 
            require_once('./db.php');
            include 'navbar-template.php';
            ?>
    </header>
    <!--Login form-->
    <div class="container" style="margin-top: 9%;margin-bottom: auto;height: 58%;">
        <div class="row">
            <div class="col-md-6"><img style="width: 100%;" src="https://i.ytimg.com/vi/zv1qROEurdU/hqdefault.jpg"></div>
            <div class="col-md-6 text-center" style="color: rgba(51,58,65,0.71);">
                <h1>Log in</h1>
                <h6>Please enter your information</h6>
                <form action="signin.php" method="post" class="d-xl-flex flex-column justify-content-xl-center align-items-xl-start" style="width: 60%;margin-right: auto;margin-left: auto;">
                <label class="form-label" for="Username" style="margin-bottom: -2px;margin-left: 3.5%;">Username</label>
                <input class="form-control" type="text" id="Username" name="Username" placeholder="Username" style="border-radius: 25px;">
                <label class="form-label" for="password" style="margin-bottom: -2px;margin-top: 21px;margin-left: 3.5%;">Password</label>
                <input class="form-control" type="password" placeholder="Password" name="password" id="password" style="border-radius: 25px;">
                <button class="btn btn-primary" type="submit" style="margin-left: auto;margin-right: auto;width: 100%;margin-top: 10%;border-radius: 56px;border-style: none;background: rgb(215,149,149);height: 56px;">Log in</button>
            </form>
            </div>
        </div>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
                                <!--Check if the information input match the username and password in the table account, if yes redirect to admin.php-->
                                <?php
                                if(isset($_POST['Username']) && isset($_POST['password'])){
                                    $username1 = $_POST['Username'];
                                    $password1 = $_POST['password'];
                                    $result = query("SELECT * FROM account WHERE username = '$username1' AND password1 = '$password1'");
                                    if($result){
                                        $_SESSION['username'] = $username1;
                                        flush();
                                        if(headers_sent()){
                                            echo '<script>window.location.href="admin.php";</script>';
                                    }
                                    else{
                                        header('Location: admin.php');
                                    }
                                    }
                                    else{
                                        echo '<script>alert("Wrong username or password");</script>';
                                    }
                                    
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </body>
</html>