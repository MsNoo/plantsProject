<?php
 require_once './models/DB.php';
 if(isset($_REQUEST["password"]))
{
$db = new DB();

$username = $_REQUEST["username"]; 
$password = $_REQUEST["password"];

$query = $db->conn->prepare("SELECT * FROM users WHERE username = ?");
$query->bind_param('s', $username);
$query->execute();
$result = $query->get_result();

if(mysqli_num_rows($result) == 1){ 
   $client = mysqli_fetch_assoc($result);
   $hash = hash('sha512', $password); 
   echo $client['password']; 
   echo $hash;

  if($client['password'] == $hash){ 

    if ($client['username'] == "admin"){
      session_start();
      $_SESSION["username"] = $client["username"];
      $_SESSION["id"] = $client["id"];
      $_SESSION["adminLogged_in"] = true; 
      header("location:index.php");
    }
    else{
      session_start();
      $_SESSION["username"] = $client["username"];
      $_SESSION["name"] = $client["name"];
      $_SESSION["id"] = $client["id"];
      $_SESSION["userLogged_in"] = true; 
      setcookie("user", $username, time() + 86400, "/"); // check syntax for function params
      header("location:index.php");
    }
  
  }else{
    //if the number of rows is not one then show this message
    setcookie("error", "wrong username or password", time()+3);
    echo "<script>
      window.location.href = 'http://localhost/plantsProject/loginForm.php';
      alert('Wrong username or password. Please try again');
      </script>";
  }

}else{
  //if the password provided by user and hash do not match
  setcookie("error", "wrong username or password", time()+3);
  echo "<script>
      window.location.href = 'http://localhost/plantsProject/loginForm.php';
      alert('Wrong username or password. Please try again');
      </script>";
}
}
