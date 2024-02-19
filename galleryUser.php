<?php
include "./head.php";
include "./models/DB.php";
include "./controllers/PlantController.php";



error_reporting(0);

$db = new DB();

if ($_SERVER['REQUEST_METHOD'] == "POST") {

    if (isset($_POST['save'])) {
        $hasErrors = PlantController::store();
        if (!$hasErrors) {
            header("location:" . $_SERVER['REQUEST_URI']);
        }
    }

    if (isset($_POST['edit'])) {
        $plant = PlantController::show();
    }

    if (isset($_POST['update'])) {
        $hasErrors = PlantController::update();
        if (!$hasErrors) {
            $plant = PlantController::update();
            header("location:" . $_SERVER['REQUEST_URI']);
        }
    }

    if (isset($_POST['destroy'])) {
        $plant = PlantController::destroy();
        header("location:" . $_SERVER['REQUEST_URI']);
    }
}

$plants = PlantController::index();
?>

<body>
    <?php
    include "./generalHeader.php";
    ?>

    <div class="backgroundForGalleryPHP">
        <?php
        if (isset($_SESSION) && isset($_SESSION['errors'])) {
            foreach ($_SESSION['errors'] as $error) { ?>
                <div style="width: 460px" class="alert alert-info" role="alert">
                    <?= $error ?>
                </div>
        <?php }
            unset($_SESSION['errors']);
        } ?>
                <center>
            <div style="height: 800px" class="scrollbarForAdminData">
                <table class="fontFeatures tablebackground scrollbarForAdminData table table-hover fontFeatures" style="width: 60%;">
                    <tbody>
                        <tr>
                            <th>name</th>
                            <th>botanical name</th>
                            <th>annual(per.)</th>
                            <th>age</th>
                            <th>size(ft)</th>
                        </tr>
                        <?php
                        foreach ($plants as $plant) {
                        ?>
                            <tr>
                                <td> <?= $plant->name ?> </td>
                                <td><i><?= $plant->latin  ?></i></td>
                                <td><?= $plant->livingTime ? "annual plant" : "perennial plant" ?></td>
                                <td> <?= $plant->age ?> yr(s)</td>
                                <td> <?= $plant->size ?> ft</td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </center>
            
            <form action="./creatDoc.php">
                <button class="buttonPrint m-l-s m-t-s" type="submit">Print</button>
            </form>
            </div>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    </div>
    <?php
    include "./footers/footerGeneral.php"
    ?>
</body>

</html>