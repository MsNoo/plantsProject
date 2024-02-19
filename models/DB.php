<?php
error_reporting(0);

session_start();

class DB
{
    public $conn;

    function __construct()
    {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $db = "plantsforcrud";
        $this->conn = new mysqli($servername, $username, $password, $db);
    }


    function insertIntoUsers($username, $password, $name)
    {
        try {
            $stmt = $this->conn->prepare("INSERT INTO users(username, password, name) VALUES (?, ?, ?)");
            $stmt->bind_param("sss", $username, $password, $name);
            $stmt->execute();
            return true;
        } catch (Exception $e) {
            return false;
        }
    }

    function selectUserInfo($username)
    {
        try {
            $stmt = $this->conn->prepare("SELECT * FROM users WHERE username = ?");
            $stmt->bind_param("s", $username);
            $stmt->execute();
            $result = $stmt->get_result();
            $row = $result->fetch_assoc();
            return $row;
        } catch (Exception $e) {
            return false;
        }
    }

    function insertIntoNotifications($firstname, $lastname, $gender, $birthday, $plant, $address, $number, $email, $message)
    {
        try {
            $stmt = $this->conn->prepare("INSERT INTO notifications(userid, name, surname, gender, birthday, plant, address, number, email, message) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
            $stmt->bind_param("isssssssss", $_SESSION["id"], $firstname, $lastname, $gender, $birthday, $plant, $address, $number, $email, $message);
            $stmt->execute();

            return true;
        } catch (Exception $e) {
            return false;
        }
    }
}
