<?php 
include ('topmenu.php');
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if (isset($_SESSION['cartamount'])) {
    $cartamount = $_SESSION['cartamount'];
}

# connect to mysql database 
$connect = mysqli_connect("localhost", "root", "", "shopping") or die("Please, check the server");

# check if email and password is set in the session array, retrieve and store in a variable
$email_address = "";
if (isset($_SESSION['emailaddress'])) {
    $email_address = $_SESSION['emailaddress'];
}
if (isset($_SESSION['password'])) {
    $password = $_SESSION['password'];
}

# check if user is logged in
if ((isset($_SESSION['email_address']) && $_SESSION['emailaddress'] != "") || (isset($_SESSION['password']) && $_SESSION['password'] != "")) {
    # Construct sql statement that select the customer information ffrom the database
    $query = "SELECT * FROM customers WHERE email_address like '$email_address' and password like SHA1('$password')";
    # connect and query the database with variables already set
    $result = mysqli_query($connect, $query) or die(mysqli_error($connect));
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    extract($row);
    ?>
    <form action="purchase.php" method="post">
        <table border="0" cellspacing="1" cellpadding="3">
            <tr><td colspan="2" align="center">Your information available with us:</td></tr>
            <tr><td>Email Address:</td><td><input size="20" type="text" name="email_address" value="<?php $email_address; ?>"></td></tr>
            <tr><td>Complete name: </td><td><input size="50", type="text" name="complete_name" value="<?php echo $complete_name; ?>"></td></tr>
            <tr><td>Address: </td><td><input size="80" type="text" name="address1" value="<?php echo $address_line1; ?>"></td></tr>
            <tr><td></td><td><input size="80" type="text" name="address2" value="<?php echo $address_line2; ?>"></td></tr>
            <tr><td>City: </td><td><input size="30" type="text" name="city" value="<?php echo $city; ?>"></td></tr>
            <tr><td>Country: </td><td><input size="30" type="text" name="country" value="<?php echo $country; ?>"></td></tr>
            <tr><td>Zip Code: </td><td><input size="30" type="text" name="zipcode" value="<?php echo $zipcode; ?>"></td></tr>
            <tr><td>Phone no: </td><td><input size="30" type="text" name="phone_no" value="<?php echo $cellphone_no; ?>"</td></tr>
            <tr><td colspan = 2 align="center">Please update shipping information if different from the shown below: </td></tr>
            <tr><td> Address to deliver at: </td><td><input type="text" size="80" name="shipping_address_line1" value="<?php echo $address_line1; ?>"></td></tr>
            <tr><td></td><td><input type="text" size="80" name="shipping_address_line2" value="<?php echo $address_line2; ?>"></td></tr>
            <tr><td> City: </td><td><input size="30" type="text" name="shipping_city" value="<?php echo $city; ?>"></td></tr>
            <tr><td> State: </td><td><input size="30" type="text" name="shipping_state" value="<?php echo $state; ?>"></td></tr>
            <tr><td> Country: </td><td><input size="30" type="text" name="shipping_country" value="<?php echo $country; ?>"></tr>
            <tr><td> Zip Code: </td><td><input type="text" size="20" name="shipping_zipcode" value="<?php echo $zipcode; ?>"></tr>
            <tr><td> <input type="submit" name="submit" value="Supply Payment Information" ></td><td><input type="reset" value="Cancel"></td></tr>
        </table>
    </form>
    <?php 
}
?>
</body>
</html>