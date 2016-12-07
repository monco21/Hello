<?PHP
$output = null;

if(isset($_POST['submit'])){
    //Connect to db
    $mysqli =  NEW MySQLi('eu-cdbr-azure-north-e.cloudapp.net','bf059db43a1be2','a1369579','sms');

    $username = $mysqli->real_escape_string($_POST['username']);
    $password = $mysqli->real_escape_string ($_POST['password']);
    $rpassword = $mysqli->real_escape_string($_POST['rpassword']);
    $email =    $mysqli->real_escape_string ($_POST['email']);

    $query = $mysqli->query("SELECT * FROM users WHERE username = '$username'");
    if($query->num_rows != 0){
        $output = "That User Name already taken ";
    }

}
?>

<form method="post">
    <table>
    <tr>
        <td>Username:</td>
        <td><input type="text" name="username"/></td>
    </tr>
        <tr>
            <td>Password:</td>
            <td><input type="password" name="password"/></td>
        </tr>
        <tr>
            <td>Repeat Password:</td>
            <td><input type="password" name="rpassword"/></td>
        </tr>
        <tr>
            <td>Email:</td>
            <td><input type="email" name="email"/></td>
        </tr>
    </table>

    <input type="submit" name="submit" value="Register"/>
</form>

<?PHP
echo $output;
?>