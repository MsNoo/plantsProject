<?php
include "./head.php";
include "./models/DB.php";
include "./controllers/PlantController.php";
include 'protect.php';
if (isset($_SESSION["adminLogged_in"]));

$db = new DB();

error_reporting(0);

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

        </center>
            <div class="inlineBlock fontFeatures " style="margin:auto; width:70%;">
                <div class="firstDiv" style="background-color: rgba(255, 255, 255, 0.481)">
                    <p class="registration">Plant Information</p>
                    <form class="fields" action="" method="post">
                        <div style="margin:auto; width: 40%">
                            <label style="text-align: center;" for="name">plant name</label>
                            <input class="textboxFeatures2" type="text" name="name" <?= isset($_POST['edit']) ? 'value="' . $plant->name . '"' : "" ?>required>
                            <label style="text-align: center;" for="latin">botanical name</label>
                            <input class="textboxFeatures2" type="text" name="latin" <?= isset($_POST['edit']) ? 'value="' . $plant->latin . '"' : "" ?>required>
                        </div>

                        <div style="margin:auto; width:40%">
                            <label style="text-align: center;" for="age">age (year)</label>
                            <input class="textboxFeatures2" type="text" name="age" <?= isset($_POST['edit']) ? 'value="' . $plant->age . '"' : "" ?>required>
                            <label style="text-align: center;" for="phoNo">size (feet)</label>
                            <input class="textboxFeatures2" type="text" name="size" <?= isset($_POST['edit']) ? 'value="' . $plant->size . '"' : "" ?>required>
                        </div>

                        <fieldset style="margin:auto; width:40%" style="margin-top: 20px; margin-bottom: 20px">
                            <legend style="text-align: center;" style="margin-bottom: 10px" class="fontFeatures"> annual?</legend>
                            <div>
                                <input style="margin:auto; width:40" type="radio" name="livingTime" value="1" checked <?= isset($_POST['edit']) ? 'value="' . $plant->livingTime . '"' : "" ?>>
                                <label style="text-align: center;" style="margin-bottom: 5px;" for="annual">yes</label>
                                <input style="margin:auto; width:40" type="radio" name="livingTime" value="0" <?= isset($_POST['edit']) ? 'value="' . $plant->livingTime . '"' : "" ?>>
                                <label style="text-align: center;" for="annual">no</label>
                            </div>
                        </fieldset>
                        <?= isset($_POST['edit']) ? '<input type="hidden" name="id" value="' . $plant->id . '">' : "" ?>
                        <button class="button" type="submit" name=<?= isset($_POST['edit']) ? '"update" > Update' : '"save" > Save' ?> </button>
                            <p class="copyright" style="text-align: center;">Good Company © 2022</p>
                    </form>
                </div>

                <div class="firstDiv">
                    <table class="tableHeadFeatures fontFeatures">
                        <tbody>
                            <tr>
                                <td style="width: 17%;">name</td>
                                <td style="width: 21%;">botanical name</td>
                                <td style="width: 15%;">annual(per.)</td>
                                <td style="width: 8%;">age</th>
                                <td style="width: 5%;">size(ft)</th>
                                <td style="width: 8%; text-align: center;">edit</td>
                                <td style="width: 16%; text-align: center;">delete</td>
                            </tr>
                        </tbody>
                    </table>

                    <div class="tablebackground scrollbar table table-hover fontFeatures ">
                        <table>
                            <tbody>
                                <tr>
                                    <?php
                                    foreach ($plants as $plant) {
                                    ?>
                                <tr>
                                    <td> <?= $plant->name ?> </td>
                                    <td><i><?= $plant->latin  ?></i></td>
                                    <td><?= $plant->livingTime ? "annual plant" : "perennial plant" ?></td>
                                    <td> <?= $plant->age ?> yr(s)</td>
                                    <td> <?= $plant->size ?> ft</td>
                                    <td>
                                        <form action="" method="post">
                                            <input type="hidden" name="id" value="<?= $plant->id ?>">
                                            <button class=" button2" type="submit" name="edit">edit</button>
                                        </form>
                                    </td>
                                    <td>
                                        <form action="" method="post">
                                            <input type="hidden" name="id" value="<?= $plant->id ?>">
                                            <button class="button3" type="submit" name="destroy">delete</button>
                                        </form>
                                    </td>
                                </tr>
                            <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </center>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </div>

</body>
    <?php
    include "./footers/footerGeneral.php"; 
    ?>

</html>