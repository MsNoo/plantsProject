<?php
include "./models/DB.php";
include "./controllers/PlantController.php";
header("Content-Disposition: attachment;Filename=Invasive_plants.doc");
header("Content-type: application/vnd.ms-word");
error_reporting(0);

$plants = PlantController::index(); 
echo 'Invasive Plants List';
echo "\n"; ?>

<?php
foreach ($plants as $plant) { ?>
    <?php echo "\n" ?>
    Plant name: <?= $plant->name ?>
    <?php echo "\n" ?>
    In Latin: <?= $plant->latin  ?>
    <?php echo "\n" ?>
    <?= $plant->livingTime ? "annual plant" : "perennial plant" ?>
    <?php echo "\n" ?>
    age: <?= $plant->age ?> yr(s)
    size(ft): <?= $plant->size ?> ft
    <?php echo "\n" ?>
    <?php echo "----------------------------------------" ?>
<?php  } ?>
