<?php
require_once "./models/DB.php";

error_reporting(0);

$errors = [];
$DB = new DB();

if (isset($_POST['register-btn'])) {

  $username = $_POST['username'];
  $password = hash('sha512', $_POST['password']);
  $name = $_POST['name'];


  $stmt = $DB->conn->prepare("SELECT * FROM users WHERE username = ? LIMIT 1");
  $stmt->bind_param("s", $username);
  $stmt->execute();
  $result = $stmt->get_result();
  $row = $result->fetch_assoc();
  if ($result->num_rows > 0) {
    echo "<script>
      window.location.href = 'http://localhost/plantsProject/register.php';
      alert('A user with this username already exists! Please, try again');
      </script>";
  } else {
    if ($DB->insertIntoUsers($username, $password, $name)) {
      echo "<script>
      window.location.href = 'http://localhost/plantsProject/loginForm.php';
      alert('Congratulations, you have successfully registered! You can now login');
      </script>";
    } else {
      echo "<script>
      window.location.href = 'http://localhost/plantsProject/register.php';
      alert('Sorry... Something went wrong. Please, try again');
      </script>";
    }
  }
}

  // $row = $DB->selectUserInfo("admin");
  // echo $row["username"];
