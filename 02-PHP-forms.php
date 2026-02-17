<!-- PHP Form Handling -->

<html>
    <body>
        <form action="welcome.php" method="get">
            Name: <input type="text" name="name"><br>
            E-mail: <input type="text" name="email"><br>
            <input type="submit"> 
        </form>
    </body>

</html>

<!-- PHP Form Validation -->

<html>
    <body>
        <?php
        // define variables and set to empty values 

        $name = $email = $gender = $comment = $website = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = test_input ($_POST["name"]);
            $email = test_input($_POST["email"]);
            $website = test_input($_POST["Website"]);
            $comment = test_input($_POST["Comment"]);
            $gender = test_input($_POST["gender"]);
            }

        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
        }

        ?>
    </body>
</html>

