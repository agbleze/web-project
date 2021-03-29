<html>
    <head>
    <script language= "JavaScript" type="text/JavaScript">
    function updateUser(username){
        var ajaxUser = document.getElementById("userinfo");
        ajaxUser.innerHTML = "Welcome " + username + "&nbsp;&nbsp;&nbsp;<a href=\"logout.php\">Log Out </a>";
    }
    </script>
    </head>
    <body>
        <?php 
            include ('topmenu.php');
            if (session_status == PHP_SESSION_NONE) {
                session_start();
            }
            $connect = mysqli_connect("localhost", "root", "", "shopping") or die("Please, check your server connection");
            $query = "SELECT email_address, password, complete_name from customers WHERE email_address like '".$_POST['emailaddress']."'".
                "AND password like  SHA1('".$_POST['password']."')";
            $result = mysqli_query($connect, $query) or die(mysqli_error($connect));
            if (mysqli_num_rows($result) == 1) {
                while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                    extract($row);
                    echo "Welcome " . $complete_name . " to our Shopping Mall <br>";
                    $_SESSION['emailaddress'] = $_POST['emailaddress'];
                    $_SESSION['password'] = $_POST['password'];
                    echo "<SCRIPT LANGUAGE=\"JavaScript\">updateUser('$complete_name');
                    </SCRIPT>";
                }
            } else {
        ?>   Invalid Email address and / or Password <br>
                Not registered?
                <a href="signup.php">Click here</a> to register.<br><br><br>
                Want to Try again?<br>
                <a href="signin.php">Click here </a> to try login again.<br>
                <?php 
            }
            ?>

    </body>
</html>