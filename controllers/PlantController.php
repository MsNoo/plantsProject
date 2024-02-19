<?php
include "./models/Plant.php";

class PlantController
{
    public static function index()
    {
        $plants = Plant::all();
        return $plants;
    }

    public static function store()
    {
        session_start();
        $hasErrors = false;

        if ((strlen($_POST['name']) < 2) ||
            (strlen($_POST['name']) > 40) ||
            (strlen($_POST['latin']) < 2) ||
            (strlen($_POST['latin']) > 40) ||
            (!preg_match("/^[a-zA-Z ]*$/", $_POST['name'])) ||
            (!preg_match("/^[a-zA-Z ]*$/", $_POST['latin']))
        ) {
            $hasErrors = true;
            $_SESSION['errors'][] = "Your plant would like to have names in Latin (2-40 symbols)";
        }

        if (($_POST['age'] < 1) ||
            ($_POST['age'] > 200) ||
            ($_POST['size'] > 30) ||
            ($_POST['size'] < 1)
        ) {
            $hasErrors = true;
            $_SESSION['errors'][] = "Are you sure about the age (1-200 year) or size (1-30 ft)?";
        }

        if ((!is_numeric($_POST['age'])) ||
            (!is_numeric($_POST['size']))
        ) {
            $hasErrors = true;
            $_SESSION['errors'][] = "Age and size are numeric - keep it simple";
        }

        if ($hasErrors) {
            return true;
        } else {
            Plant::create();
            return false;
        }
    }

    public static function show()
    {
        $plant = Plant::find($_POST['id']);
        return $plant;
    }

    public static function update()
    {
        session_start();
        $hasErrors = false;

        if ((strlen($_POST['name']) < 2) ||
            (strlen($_POST['name']) > 40) ||
            (strlen($_POST['latin']) < 2) ||
            (strlen($_POST['latin']) > 40) ||
            (!preg_match("/^[a-zA-Z ]*$/", $_POST['name'])) ||
            (!preg_match("/^[a-zA-Z ]*$/", $_POST['latin']))
        ) {
            $hasErrors = true;
            $_SESSION['errors'][] = "Your plant would like to have names in Latin (2-40 symbols)";
        }

        if (($_POST['age'] < 1) ||
            ($_POST['age'] > 200) ||
            ($_POST['size'] > 30) ||
            ($_POST['size'] < 1)
        ) {
            $hasErrors = true;
            $_SESSION['errors'][] = "Are you sure about the age (1-200 year) or size (1-30 ft)?";
        }

        if ((!is_numeric($_POST['age'])) ||
            (!is_numeric($_POST['size']))
        ) {
            $hasErrors = true;
            $_SESSION['errors'][] = "Age and size are numeric - keep it simple";
        }

        if ($hasErrors) {
            return true;
        } else {
            Plant::update();
            return false;
        }
    }

    public static function destroy()
    {
        Plant::destroy();
    }
}
