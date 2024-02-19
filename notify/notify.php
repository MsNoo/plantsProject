<?php 
    require_once 'C:/xampp/htdocs/plantsProject/models/DB.php';

    $DB = new DB();

  
    $firstname = $_POST['firstName'];
    $lastname = $_POST['lastName'];
    $gender = $_POST['gender'];
    $birthday = $_POST['birthday'];
    $plant = $_POST['plant'];
    $address = $_POST['address'];
    $number = $_POST['number'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    if($DB->insertIntoNotifications($firstname, $lastname, $gender, $birthday, $plant, $address, $number, $email, $message))
    {
      $myfile = fopen("notifications", "a");
      $txt = "$firstname, $lastname, $gender, $birthday, $plant, $address, $number, $email, $message\n";
      fwrite($myfile, $txt);
      fclose($myfile);
        echo "<script>
      window.location.href = 'http://localhost/plantsProject/notifyPageForm.php';
      alert('Thank you for letting us know');
      </script>";
    }
    else
    {
        echo "<script>
      window.location.href = 'http://localhost/plantsProject/notifyPageForm.php';
      alert('Something went wrong. Please try again');
      </script>";
    }
    
?>