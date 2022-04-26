<html>
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
            require('./db.php');
            include 'navbar-template.php';
            ?>
        </header>
        <!--Create a sign up form which add a new account into the database-->
        
    <div class="container" style="margin-top: 9%;margin-bottom: auto;height: 58%;">
        <div class="row">
            <div class="col-md-6"><img style="width: 100%;" src="https://i.ytimg.com/vi/zv1qROEurdU/hqdefault.jpg"></div>
            <div class="col-md-6 text-center" style="color: rgba(51,58,65,0.71);">
                <h1>Sign up</h1>
                <h6>Please enter your information</h6>
                <form action = "signup.php" method = "POST"class="d-xl-flex flex-column justify-content-xl-center align-items-xl-start" style="width: 60%;margin-right: auto;margin-left: auto;">
                <label class="form-label" for="username" style="margin-bottom: -2px;margin-left: 3.5%;">Username</label>
                <input class="form-control" type="text" id="username" name="username" placeholder="Username" style="border-radius: 25px;">
                <label class="form-label" for="password" style="margin-bottom: -2px;margin-top: 21px;margin-left: 3.5%;">Password</label>
                <input class="form-control" type="password" id="password" placeholder="Password" name="password" style="border-radius: 25px;">
                <label class="form-label" for="email" style="margin-bottom: -2px;margin-top: 21px;margin-left: 3.5%;">Email address</label>
                <input class="form-control" type="text" id="email" name="email" placeholder="Email address" style="border-radius: 25px;">
                <label class="form-label" for="fullname" style="margin-bottom: -2px;margin-top: 21px;margin-left: 3.5%;">Full name</label>
                <input class="form-control" type="text" id="fullname" name="fullname" placeholder="Full name" style="border-radius: 25px;">
                <label class="form-label" for="address" style="margin-bottom: -2px;margin-top: 21px;margin-left: 3.5%;">Address</label>
                <input class="form-control" type="text" id="address" name="address" placeholder="Address" style="border-radius: 25px;">
                <label class="form-label" for="phone" style="margin-bottom: -2px;margin-top: 21px;margin-left: 3.5%;">Phone number</label>
                <input class="form-control" id="phone" type="tel" name="phone" placeholder="XXX-xxx-xxxx" style="border-radius: 25px;">
                <button class="btn btn-primary" name="submit" type="submit" style="margin-left: auto;margin-right: auto;width: 100%;margin-top: 10%;border-radius: 56px;border-style: none;background: rgb(215,149,149);">Sign up</button>
            </form>
            </div>
        </div>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>

        <?php
        // If the form is submitted
        if (isset($_POST['submit'])) {
            // Get the submitted data
            $usernamecus = $_POST['username'];
            $passwordcus = $_POST['password'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $fullname = $_POST['fullname'];
            $address = $_POST['address'];
            //error message if any of the field is empty
            if (empty($usernamecus) || empty($passwordcus) || empty($email) || empty($phone) || empty($fullname) || empty($address)) {
                echo '<script language="javascript">';
                echo 'alert("Please fill all the fields")';
                echo '</script>';
            } else {
               
            
            // Check if the username is already in the table
            $sqlUser = "SELECT username FROM customer WHERE username = '$usernamecus'";
            $sqlEmail = "SELECT email FROM customer WHERE email = '$email'";
            $resultUser = query($sqlUser);
            $resultEmail = query($sqlEmail);
            $rowUser = $resultUser;
            $rowEmail = $resultEmail;
            //if mysqli_sql_exception duplication entry
            if ($rowEmail || $rowUser) {
                if ($rowEmail && $rowUser) {
                    echo "<script>alert('Username and Email are already in the database')</script>";
                } else if ($rowEmail) {
                    echo "<script>alert('Email is already in the database')</script>";
                } else if ($rowUser) {
                    echo "<script>alert('Username is already in the database')</script>";
                }
            } else {
                // Insert the submitted data into the database
                $sql = "INSERT INTO customer (username, password, email, phone, fullname, address) VALUES ('$usernamecus', '$passwordcus', '$email', '$phone', '$fullname', '$address')";
                $result = execsql("INSERT INTO customer (username, password, email, phone, fullname, address) VALUES ('$usernamecus', '$passwordcus', '$email', '$phone', '$fullname', '$address')");
                if ($result) {
                    echo "<script>alert('Sign up successfully!')</script>";
                } else {
                    echo "<script>alert('Sign up failed!')</script>";
                }
            }
            } // end of else

            
        }
        ?>
        
        
    </body>
</html>