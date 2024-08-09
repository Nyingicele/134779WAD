?php
/*******
 this is a php file to enable users processes. Including signup,signin,edit/update and delete.
 /*** */
 //Import the database connection
 require_once "../config/dbConnect.php";
//Signup process
 if (isset($_POST["signup"])){
    //Variable declaration
$fullname = mysqli_real_escape_string($dbConn,$_POST["fullname"]);
$email = mysqli_real_escape_string($dbConn,$_POST["email"]);
$username = mysqli_real_escape_string($dbConn,$_POST["username"]);
$password = mysqli_real_escape_string($dbConn,$_POST["password"]);
$confirmpassword= mysqli_real_escape_string($dbConn,$_POST["confirmpassword"]);
$usertype = mysqli_real_escape_string($dbConn,$_POST["usertype"]);
//Check if the password and confirm-password are similar
if ($password !=$confirmpassword) {
    header("Location: ../Register.html");
    exit();

}
//Encrypting the password
$hash_password =password_hash($confirmpassword, PASSWORD_DEFAULT);
//Inserting data into the users table
$user_insert = "INSERT INTO user's(fullname, username, email, password,usertype ,created)VALUES('$fullname', '$username', '$email', '$hash_password', '$usertype', UNIX_TIMESTAMP()"
 //Executing the sql query
 if ($dbConn->query($user_insert) === TRUE) {
    header("Location: ../Login.html");
    exit();
 }
