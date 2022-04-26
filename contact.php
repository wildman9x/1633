<!DOCTYPE html>
<html lang="en">

    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title id="title">Bootstrap Lab</title>
<!--Import bootstrap-->
<!-- CSS only -->
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="bootstrapLab.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="assets/css/styles.css">
<!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<!--Import jQuery before bootstrap.js-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/Contact-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/Navigation-Clean.css">
    <link rel="stylesheet" href="assets/css/Navigation-with-Button.css">
    <link rel="stylesheet" href="assets/css/Navigation-with-Search.css">
    </head>

    <body>
        <header>
    <?php
    require('./db.php');
    include 'navbar-template.php';
    $categories = query("SELECT * FROM category");
    // brand name of each product by joining the category table and product table
    $productsfull = query("SELECT * FROM product LEFT JOIN category ON product.CatId = category.CatId");
    //if the user clicked on a category, show the products in that category
    if (isset($_GET['category']) && $_GET['category'] != "all") {
        $category = $_GET['category'];
        $categoryDisplay = query("SELECT * FROM category WHERE CatId = $category");
        $productsfull = query("SELECT * FROM product LEFT JOIN category ON product.CatId = category.CatId WHERE product.CatId = $category");
    } else {
        $productsfull = query("SELECT * FROM product LEFT JOIN category ON product.CatId = category.CatId");
        $categoryDisplay[0][1] = "All";
    }

    //Search function
    if (isset($_GET['search'])) {
        $search = $_GET['search'];
        $productsfull = query("SELECT * FROM product LEFT JOIN category ON product.CatId = category.CatId WHERE product.ProductName LIKE '%$search%'");
    }

    //contact form
    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        //if any of the fields are empty, show an error message
        if (empty($name) || empty($email) || empty($message)) {
            echo "<script>alert('Please fill in all fields')</script>";
            //do not insert data and return to contact.php
            
        } else {
        $result = execsql("INSERT INTO contact (fullname, Email, messagesent) VALUES ('$name', '$email', '$message')");
        if ($result) {
            echo "<script>alert('Message sent successfully!')</script>";
        } else {
            echo "<script>alert('Message failed to send!')</script>";
        }
    }
    }
    ?>
    </header>
    <div class="container" style="margin-top: 9%;margin-bottom: auto;height: 58%;">
        <div class="row">
            <div class="col-md-6"><img style="width: 100%;" src="https://i.ytimg.com/vi/zv1qROEurdU/hqdefault.jpg"></div>
            <div class="col-md-6 text-center" style="color: rgba(51,58,65,0.71);">
                <h1 style="text-align: left;">Contact us</h1>
                <h6 style="text-align: left;">Please enter your information so we can support you</h6>
                <form action="contact.php" method="post" style="width: 100%;">
                    <div class="mb-3"><input class="form-control" type="text" id="name" name="name" placeholder="Name" style="width: 45%;border-radius: 32px;"></div>
                    <div class="mb-3"><input class="form-control is-invalid" type="email" id="email" name="email" placeholder="Email" style="width: 45%;border-radius: 40px;"><small class="form-text text-danger">Please enter a correct email address.</small></div>
                    <div class="mb-3"><textarea class="form-control" name="message" id="message" placeholder="Message" rows="14" style="border-radius: 11px;height: 194px;"></textarea></div>
                    <div class="mb-3"><button class="btn btn-primary" id="submit" name="submit" type="submit" style="background: #c26f6f;width: 22%;height: 51px;border-radius: 43px;border-style: none;margin-left: 78%;">Send</button></div>
                </form>
            </div>
        </div>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    </body>
</html>