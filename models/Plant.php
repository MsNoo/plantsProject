<?php

class Plant
{
    public $id;
    public $name;
    public $latin;
    public $livingTime;
    public $age;
    public $size;

    public function __construct($id, $name, $latin, $livingTime, $age, $size)
    {
        $this->id = $id;
        $this->name = $name;
        $this->latin = $latin;
        $this->livingTime = $livingTime;
        $this->age = $age;
        $this->size = $size;
    }

    public static function find($id)
    {
        $db = new DB();
        $sql = "SELECT * FROM `plants` where `id` =" . $id;
        $result = $db->conn->query($sql);

        while ($row = $result->fetch_assoc()) {
            $plant = new Plant($row["id"], $row["name"], $row["latin"], $row["living_time"], $row["age"], $row["size"]);
        }
        $db->conn->close();
        return $plant;
    }

    public static function all()
    {
        $plants = [];
        $db = new DB();
        $sql = "SELECT * FROM `plants`";
        $result = $db->conn->query($sql);
        while ($row = $result->fetch_assoc()) {
            $plants[] = new Plant(
                $row["id"],
                $row["name"],
                $row["latin"],
                $row["living_time"],
                $row["age"],
                $row["size"]
            );
        }
        $db->conn->close();
        return $plants;
    }

    public static function create()
    {
        $db = new DB();
        $stmt = $db->conn->prepare("INSERT INTO plants (name, latin, living_time, age, size) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("ssiii", $_POST['name'], $_POST['latin'], $_POST['livingTime'], $_POST['age'], $_POST['size']);
        $stmt->execute();
        $stmt->close();
        $db->conn->close();
    }

    public static function update()
    {

        $db = new DB();
        $stmt = $db->conn->prepare("UPDATE plants SET name = ?, latin = ?, living_time = ?, age = ?, size = ? WHERE id = ?");
        $stmt->bind_param("ssiiii", $_POST['name'], $_POST['latin'], $_POST['livingTime'], $_POST['age'], $_POST['size'], $_POST['id']);
        $stmt->execute();
        $stmt->close();
        $db->conn->close();
    }

    public static function destroy()
    {
        $db = new DB();
        $stmt = $db->conn->prepare("DELETE FROM plants WHERE id = ?");
        $stmt->bind_param("i", $_POST['id']);
        $stmt->execute();
        $stmt->close();
        $db->conn->close();
    }
}
