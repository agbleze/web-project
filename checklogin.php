<?php
include("topmenu.php");
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
$connect = mysqli_connect("localhost", "root", "", "shopping") or die("Please, check your server connection.");
$cartamount = 0;
$cartamount = $_POST['cartamount'];
$_SESSION['$_cartamount'] = $cartamount;
if (isset($_SESSION['emailaddress'])) {
    $email_address = $_SESSION['emailaddress'];
    echo "Welcome " . $email_address . ". <br/>";
}
if (isset($_SESSION['password'])) {
    $password = $_SESSION['password'];
}
if ((isset($_SESSION['emailaddress']) && $_SESSION['emailaddress'] != "") || (isset($_SESSION['password']) && $_SESSION['password'] != "")) {
 $sess = session_id();
 $query = "SELECT * FROM cart where cart_sess = '$sess'";
 $result = mysqli_query($connect, $query) or die(mysqli_error($connect));
 if (mysqli_num_rows($result) >= 1) {
    echo "If you have finished Shopping ";
    echo "<a href=shipping_info.php>Click Here</a> to supply Shipping Information";
    echo "Or You can do more purchasing by selecting items from the menu ";
 } else {
     echo "You can do purchasing by selecting items from the menu on left side ";
 }
} else {
    ?>
    <html>
    <head>
    </head>
    <body>
        <h3>Not Logged in yet </h3>
        <p>
            You are currently not logged into our system.<br>
            You can do purchasing only if you are logged in.<br>
            If you have already registered,
            <a href="signin.php">Click here </a> to login, or if you would like to create an account, <a href="create_account.php">click here</a> to register.
        </p>
    </body>
    </html>
    <?php
}

?>