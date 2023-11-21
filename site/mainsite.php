/* Készíts egy esztétikus PHP oldalt, amely egy formban bekéri a felhasználói nevet (Username) és a
jelszót (echo nélkül). A bevitt információkat GET vagy POST tömb segítségével juttasd át a szerver
oldalra.
*/

<!DOCTYPE html>
<html>
<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Username: <input type="text" name="username">
  <br>
  Password: <input type="password" name="password">
  <br>
  <input type="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // collect value of input field
  $username = $_POST['username'];
  $password = $_POST['password'];
  if (empty($username) || empty($password)) {
    echo "Username or password is empty";
  } else {
    echo "Username: ".$username;
  }
}
?>

</body>
</html>