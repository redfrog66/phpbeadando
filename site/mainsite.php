<!DOCTYPE html>
<html>
<head>
<style>
body {
    background-image: url('assets/bg.jpg');
    background-repeat: no-repeat;
    background-size: cover;
}
.container {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    height: 100vh;
}
form {
    background: rgba(255, 255, 255, 0.5);
    padding: 20px;
    backdrop-filter: blur(10px);
    font-size: 20px;
}

form input[type="text"], form input[type="password"] {
    width: 300px;
    height: 40px;
}

form label {
    font-size: 24px;
}

h1 {
    font-size: 50px;
    color: white;
}
</style>
</head>
<body>

<div class="container">
    <h1>Bejelentkezés</h1>

    <form action="" method="post">
        <label for="uname"><b>Felhasználónév</b></label><br>
        <input type="text" placeholder="Enter Username" name="uname" required><br>

        <label for="psw"><b>Jelszó</b></label><br>
        <input type="password" placeholder="Enter Password" name="psw" required><br>

        <button type="submit">Bejelentkezés</button>
    </form>
</div>

</body>
</html>

<?php
// Készíts egy esztétikus PHP oldalt, amely egy formban bekéri a felhasználói nevet (Username) és a
// jelszót (echo nélkül). A bevitt információkat GET vagy POST tömb segítségével juttasd át a szerver
// oldalra.
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // collect value of input field
  $username = $_POST['uname'];
  $password = $_POST['psw'];
  if (empty($username) || empty($password)) {
    echo "Username or password is empty";
  } else {
    echo "Username: ".$username;
  }
}
?>

</body>
</html>