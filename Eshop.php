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
    //include 'third.php'; 
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
    ?>
    
        </header>
    <!--Make a side menu that display categories and all products and display all products--> 
    <!--When a category is clicked, only products of the specified category are displayed-->
    <!--When a product is clicked, the product details are displayed-->
    <!--When a product is added to the cart, the product details are displayed-->
    <div class="carousel slide" data-bs-ride="carousel" id="carousel-1" style="border-radius: 287px;border-style: none;width: 98%;height: 90%;margin-right: auto;margin-left: auto;">
        <div class="carousel-inner" style="height: 307.531px;border-radius: 25px;">
            <div class="carousel-item active"><img class="w-100 d-block" src="https://img-14.stickers.cloud/packs/db4eb286-a1a9-49d2-bcdc-85b3c03c07e3/webp/2a9c9c09-4cb6-4998-8d96-b4656672eb20.webp" alt="Slide Image" style="height: 307.531px;"></div>
            <div class="carousel-item"><img class="w-100 d-block" src="https://cdn.bootstrapstudio.io/placeholders/1400x800.png" alt="Slide Image" style="height: 307.531px;"></div>
            <div class="carousel-item"><img class="w-100 d-block" src="https://cdn.bootstrapstudio.io/placeholders/1400x800.png" alt="Slide Image" style="height: 307.531px;"></div>
        </div>
        <div><a class="carousel-control-prev" href="#carousel-1" role="button" data-bs-slide="prev"><span class="carousel-control-prev-icon"></span><span class="visually-hidden">Previous</span></a><a class="carousel-control-next" href="#carousel-1" role="button" data-bs-slide="next"><span class="carousel-control-next-icon"></span><span class="visually-hidden">Next</span></a></div>
        <ol class="carousel-indicators" style="transform: scale(0.84);border-radius: 137px;">
            <li data-bs-target="#carousel-1" data-bs-slide-to="0" class="active" style="width: 10px;height: 10px;border-radius: 100%;background-color: #703f3f;"></li>
            <li data-bs-target="#carousel-1" data-bs-slide-to="1" style="width: 10px;height: 10px;border-radius: 100%;background-color: #703f3f;"></li>
            <li data-bs-target="#carousel-1" data-bs-slide-to="2" style="width: 10px;   height: 10px;   border-radius: 100%; background-color: #703f3f"></li>
        </ol>
    </div>
    <div class="container" style="margin-bottom: -4%;margin-top: 1%;">
        <h1 style="text-align: center;"><?php echo $categoryDisplay[0][1]?> Products</h1>

    </div>
    <div class="container-fluid" style="width: 100%;text-align: center;">
        <div class="row" style="width: 100%;margin-top: 7%;margin-left: 2%;margin-right: 2%;">
            <div class="col-xl-3 col-xxl-2" style="background: #594d4d;border-radius: 33px;color: rgb(231,208,206);">
                <div></div>
                <h2 style="text-align: center;margin-top: 2%;">Category</h2>
                <ul class="list-group" style="background: rgba(255,255,255,0);border-style: none;color: rgb(231, 208, 206);text-align: center;">
                    <?php foreach ($categories as $category) : ?>
                        <a style="text-decoration: none" href="eshop.php?category=<?php echo $category[0]; ?>"><li class="list-group-item" style="background: rgba(255,255,255,0);color: rgb(230,213,211);border-style: none;"><span><?php echo $category[1]; ?></span></li></a>
                    <?php endforeach; ?>
                    <a style="text-decoration: none" href="eshop.php?category=<?php echo"all";?>"><li class="list-group-item" style="background: rgba(255,255,255,0);color: rgb(230,213,211);border-style: none;"><span>All products</span></li></a>
                </ul>
            </div>
            <div class="col-lg-9 col-xl-8 col-xxl-9" style="margin-right: 0%;margin-left: 2%;border-style: none;border-radius: 56px;">
                <div></div>
                <div class="row">
                    <?php foreach ($productsfull as $product) : ?>
                        <div class="col-xxl-3 col-xl-3  justify-content-xxl-center align-items-xxl-center">
                            <div class="card" style="border-radius: 12px; margin-bottom:3%">
                                <div class="card-body"><img src="<?php echo $product[2]; ?>" height="128">
                                    <h4 class="card-title"><?php echo $product[1]; ?></h4>
                                    <h6 class="card-subtitle mb-2 text-muted">$<?php echo $product[3]; ?></h6>
                                    <h6 class="text-muted card-subtitle mb-2"><?php echo $product[8]; ?></h6>
                                    <p class="card-text" style="font-size: 11px;"><?php echo $product[6]; ?></p><a class="card-link" href="product.php?id=<?php echo $product[0]; ?>" style="text-decoration: none;border-style: none;border-color: rgb(68,68,68);color: rgb(72,72,72);">View detail</a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="w-100"></div>
            <div class="w-100"></div>
        </div>
    </div>
    
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
</body>

</html>