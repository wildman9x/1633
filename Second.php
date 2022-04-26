<html>
<head>
    <!--script that assign "John" into the variable x-->
    <script language="JavaScript" type="text/javascript">
        var x = "John";
    </script>
    <script language="JavaScript" type="text/javascript">
        //if the "go somewhere" button is clicked, then the it is redirected to google.com
        function goSomewhere() {
            window.location.href = "http://www.google.com";
        }
    </script>
    <script language="JavaScript" type="text/javascript">
        //function sum that display the sum of two numbers in each input field in an alert
        function sum() {
            var x = eval(document.getElementById("num1").value);
            var y = eval(document.getElementById("num2").value);
            var z = +x +y;
            alert(z);
        }
        function dokeypress(e) {
            e.style = "background-color: #346332";
        }
        function dokeyclick(e) {
            e.style = "background-color: #fff";
        }
        //calculate funtion, if the operation is add, display sum, if the operation is subtract display subtraction, if the operation is multiply display multiplication, if the operation is divide display division and display the result
        function calculate() {
            var x = eval(document.getElementById("num1").value);
            var y = eval(document.getElementById("num2").value);
            var z = document.getElementById("operation").value;
            //do not execute and return if either field is blank
            if (document.getElementById("num1").value == "" || document.getElementById("num2").value == "") {
                alert("Please enter a number");
                return;
            }
            if (z == "Add") {
                var z = +x +y;
                alert(z);
            }
            else if (z == "Subtract") {
                var z = +x -y;
                alert(z);
            }
            else if (z == "Multiply") {
                var z = +x *y;
                alert(z);
            }
            else if (z == "Divide") {
                var z = +x /y;
                alert(z);
            }
        }
        
        //function that change the title to "title changed"
        function changeTitle() {
            document.getElementById("title").innerHTML = "title changed";
            //change the li element with id "loginFlex" to "Register"
            document.getElementById("loginFlex").innerHTML = "Register";
        }


    </script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title id="title">Bootstrap Lab</title>
<!--Import bootstrap-->
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" typle = "text/css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link href="bootstrapLab.css" rel="stylesheet" type="text/css" />
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<!--Import jQuery before bootstrap.js-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!--Import Google Icon Font-->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
<?php
        //define function sum() that takes two integer and print sum of them
        function sum($a, $b) {
            echo $a + $b;
        }
        //create a table that contain the information of students including name, grade on scale of 10, and city
        $students = array(
            array("name" => "John", "grade" => 10, "city" => "New York"),
            array("name" => "Mary", "grade" => 9, "city" => "Paris"),
            array("name" => "Peter", "grade" => 8, "city" => "London"),
            array("name" => "Sara", "grade" => 7, "city" => "Berlin"),
            array("name" => "Mark", "grade" => 6, "city" => "Rome"),
            array("name" => "Linda", "grade" => 5, "city" => "Tokyo"),
            array("name" => "Paul", "grade" => 4, "city" => "New York"),
            array("name" => "Nancy", "grade" => 3, "city" => "Paris"),
            array("name" => "George", "grade" => 2, "city" => "London"),
            array("name" => "Sarah", "grade" => 1, "city" => "Berlin"),
            array("name" => "Mark", "grade" => 0, "city" => "Rome"),
            array("name" => "Linda", "grade" => -1, "city" => "Tokyo"),
            array("name" => "Paul", "grade" => -2, "city" => "New York"),
            array("name" => "Nancy", "grade" => -3, "city" => "Paris"),
            array("name" => "George", "grade" => -4, "city" => "London"),
            array("name" => "Sarah", "grade" => -5, "city" => "Berlin"),
            array("name" => "Mark", "grade" => -6, "city" => "Rome"),
            array("name" => "Linda", "grade" => -7, "city" => "Tokyo"),
            array("name" => "Paul", "grade" => -8, "city" => "New York"),
            array("name" => "Nancy", "grade" => -9, "city" => "Paris")
        );

        ?>
<!--Navigation bar from the file navbar-template.php-->
<header>
<?php include 'navbar-template.php'; ?>
</header>
  <!--Make a menu with 3 hyperlinks on the left of the screen, each hyperlink jump to the right article, Write 3 articles, each article has a heading with the text on column 1 and picture on column 9-->
    <div class="container" style="margin-top: 5em">
        <div class="row">
        <div class="col-md-3">
            <div class="list-group">
            <a href="#" class="list-group-item list-group-item-action active">
                Column 1
            </a>
            <a href="#" class="list-group-item list-group-item-action">Article 1</a>
            <a href="#" class="list-group-item list-group-item-action">Article 2</a>
            <a href="#" class="list-group-item list-group-item-action">Article 3</a>
            </div>
        </div>
        <div class="col-md-9">
            <div class="card">
            <div class="card-body">
                <!--Assign the value "John" into the variable x and Display the value x of javascript in the heading-->
                <h5 class="card-title">Hello, <script>document.write(x);</script></h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <script language="JavaScript" type="text/javascript">
                    //print odd number from 0 to 20
                    for (var i = 0; i <= 20; i++) {
                        if (i % 2 != 0) {
                            document.write(i + "<br>");
                        }
                    }
                </script>
                <!--Add lamie.jpg with 100% width auto height-->
                <!--Apply function goSomewhere when the button is clicked-->
                <button type="button" class="btn btn-primary" onclick="goSomewhere()">Go somewhere</button>
            </div>
            </div>
            <div class="card">
            <div class="card-body">
                <h5 class="card-title">Article 2</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary" onclick="changeTitle()">Go somewhere</a>
            </div>
            </div>
            <div class="card">
            <div class="card-body">
                <h5 class="card-title">Article 3</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
                <!--Forms that let the user enter a number into each and a button when clicked display the sum of the two numbers-->
                <form>
                    <div class="form-group">
                    <label for="num1st">First number</label>
                    <input type="number" class="form-control" id="num1" onkeypress="dokeypress(this)" placeholder="Enter first number">
                    </div>
                    <div class="form-group">
                    <label for="num2nd">Second number</label>
                    <input type="number" class="form-control" id="num2" onmouseover="dokeypress(this)" onmouseout="dokeyclick(this)" placeholder="Enter second number">
                    </div>
                    <!--a drop down option letting the user choose one of the four math operations-->
                    <div class="form-group">
                    <label for="operationDisplay">Operation</label>
                    <select name="op" class="form-control" id="operation">
                        <option>Add</option>
                        <option>Subtract</option>
                        <option>Multiply</option>
                        <option>Divide</option>
                    </select>
                    </div>
                    <button type="button" class="btn btn-primary" onclick="calculate()">Calculate</button>
                    <button type="button" class="btn btn-primary" onclick="sum()">Sum</button>

                </form>
            </div>
            </div>
            <!--Add a 4th article, in this, display the information of the students of the array in php into a table-->
            <div class="card">
            <div class="card-body">
                <h5 class="card-title">Article 4</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Grade</th>
                        <th scope="col">City</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            foreach($students as $student) {
                                echo "<tr>";
                                echo "<td>" . $student["name"] . "</td>";
                                echo "<td>" . $student["grade"] . "</td>";
                                echo "<td>" . $student["city"] . "</td>";
                                echo "</tr>";
                            }
                        ?>
                    </tbody>
                </table>
                </div>
                </div>
                <!--Add a text field for the user to input a message and a submit button, when pressed display "You just typed: " and the message in the text field using php GET method-->
                <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Article 5</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <form action="#" method="get">
                        <div class="form-group">
                        <label for="message">Message</label>
                        <input type="text" class="form-control" id="message" name="message" placeholder="Enter message">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                    <?php
                        if(isset($_GET["message"])) {
                            echo "<p>You just typed: " . $_GET["message"] . "</p>";
                        }
                    ?>
                    </div>
                    </div>
                <!--Add 2 text fields, one for username, one for password, and a submit button, when pressed display both the username and password in the text fields using php GET method on a popup-->
                <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Article 6</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <form action="#" method="get">
                        <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" id="username" name="username" placeholder="Enter username">
                        </div>
                        <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Enter password">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                    <?php
                        if(isset($_GET["username"]) && isset($_GET["password"])) {
                            echo "<p>Username: " . $_GET["username"] . "</p>";
                            echo "<p>Password: " . $_GET["password"] . "</p>";
                        }
                    ?>
                    </div>
                    </div>

                <!--Add 2 text fields, one for username, one for password, and a submit button, when pressed display both the username and password in the text fields using php POST method on a popup-->
                <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Article 7</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <form action="#" method="post">
                        <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" id="username" name="username" placeholder="Enter username">
                        </div>
                        <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Enter password">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                    <?php
                        if(isset($_POST["username"]) && isset($_POST["password"])) {
                            echo "<p>Username: " . $_POST["username"] . "</p>";
                            echo "<p>Password: " . $_POST["password"] . "</p>";
                        }
                    ?>
                    </div>
                    </div>
                <!--Create 2 array containing username and password, create a log in form, if the user input the correct credential then display success, else say failed-->
                <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Article 8</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <form action="#" method="post">
                        <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" id="username" name="username" placeholder="Enter username">
                        </div>
                        <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Enter password">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                    <?php
                        include_once("third.php");
                        $users = query("SELECT * FROM account");
                        if(isset($_POST["username"]) && isset($_POST["password"])) {
                            $username = $_POST["username"];
                            $password = $_POST["password"];
                            $found = false;
                            foreach($users as $user) {
                                if($user[1] == $username && $user[2] == $password) {
                                    $found = true;
                                    break;
                                }
                            }
                            if($found) {
                                echo "<script>alert('Success')</script>";
                            } else {
                                echo "<script>alert('Error')</script>";
                            }
                        }
                    ?>
                    </div>
                    </div>
        </div>
        </div>
    </div>


</body>
</html>