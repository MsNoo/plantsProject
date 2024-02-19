<?php
include "./head.php";
include "./models/DB.php";
include 'protect.php';
if (isset($_SESSION["adminLogged_in"]));

error_reporting(0);

$DB = new DB();
if ($DB->conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT id, username, password, name FROM users";
$result = $DB->conn->query($sql);
?>

<body>
    <?php
    include "./generalHeader.php";
    ?>

    <div class="backgroundForGalleryPHP">
        <?php
        if ($result->num_rows > 0) { ?>
            <!-- Users -->
            <div class="registration2">
                <h6 style="font-size: 20px;">Information about users</h6>
            </div>
            <center>
                <div style="height: 250px; margin-bottom: 20px;" class ="scrollbarForAdminData" >
                    <table class="tablebackground scrollbarForAdminData table fontFeatures" style="width: 80%; margin-top:20px">
                        <tbody>
                            <tr>
                                <th>id</th>
                                <th>username</th>
                                <th>name</th>
                            </tr>
                            <?php
                            $i = 0;
                            while ($row = $result->fetch_assoc()) {
                                $i++;
                            ?>
                                <tr>
                                    <td> <?= $row["id"] ?> </td>
                                    <td><i><?= $row["username"] ?></i></td>
                                    <td><?= $row["name"] ?></td>
                                </tr>
                            <?php }
                            ?>
                        </tbody>
                    </table>
                </div>
                <h><b>Total: <?= $i ?></b></h6>
            </center>


        <?php } else { ?>

            <div class="registration2">
                <h6 style="font-size: 25px;">Information about users</h6>
            </div>

            <center>
                <table class="fontFeatures tablebackground scrollbarForAdminData table table-hover fontFeatures" style="width: 80%; margin-top:20px;">
                    <tbody>
                        <tr>
                            <th>id</th>
                            <th>username</th>
                            <th>name</th>
                        </tr>
                        <tr>
                            <td><i>No data</i></td>
                            <td><i>No data</i></td>
                            <td><i>No data</i></td>
                        </tr>
                    </tbody>
            </center>
        <?php   } ?>

        <!-- Notifications from Users -->
        <?php
        $sql = "SELECT id, userid, name, surname, gender, birthday, plant, address, number, email, message FROM notifications";
        $result = $DB->conn->query($sql);
        if ($result->num_rows > 0) { ?>

            <div class="registration2">
                <h6 style="font-size: 20px;">Registered notifications</h6>
            </div>

            <center>
                <div style="height: 300px; margin-bottom:20px;" class="scrollbarForAdminData">
                    <table class="fontFeatures tablebackground scrollbarForAdminData table table-hover fontFeatures" style="width: 80%; margin-top:40px;">
                        <tbody>
                            <tr>
                                <th>id</th>
                                <th>user id</th>
                                <th>name</th>
                                <th>surname</th>
                                <th>gender</th>
                                <th>birthday</th>
                                <th>plant</th>
                                <th>address</th>
                                <th>number</th>
                                <th>email</th>
                                <th>message</th>
                            </tr>
                            <?php
                            $i = 0;
                            while ($row = $result->fetch_assoc()) {
                                $i++;
                            ?>
                                <tr>
                                    <td> <?= $row["id"] ?> </td>
                                    <td> <?= $row["userid"] ?> </td>
                                    <td><i><?= $row["name"] ?></i></td>
                                    <td><?= $row["surname"] ?></td>
                                    <td><?= $row["gender"] ?></td>
                                    <td><?= $row["birthday"] ?></td>
                                    <td><?= $row["plant"] ?></td>
                                    <td><?= $row["address"] ?></td>
                                    <td><?= $row["number"] ?></td>
                                    <td><?= $row["email"] ?></td>
                                    <td><?= $row["message"] ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                   
                </div>
                <h6><b>Total: <?= $i ?></b></h6>
            </center>

        <?php } else { ?>
            <div class="registration2">
                <h6 style="font-size: 25px;">Information about notifications</h6>
            </div>

            <center>
                <div>
                    <table class="fontFeatures tablebackground scrollbarForAdminData table table-hover fontFeatures" style="width: 80%; margin-top:40px;">
                        <tbody>
                            <tr>
                                <th>id</th>
                                <th>name</th>
                                <th>surname</th>
                                <th>gender</th>
                                <th>birthday</th>
                                <th>plant</th>
                                <th>address</th>
                                <th>number</th>
                                <th>email</th>
                                <th>message</th>
                            </tr>
                            <tr>
                                <td><i>No data</i></td>
                                <td><i>No data</i></td>
                                <td><i>No data</i></td>
                                <td><i>No data</i></td>
                                <td><i>No data</i></td>
                                <td><i>No data</i></td>
                                <td><i>No data</i></td>
                                <td><i>No data</i></td>
                                <td><i>No data</i></td>
                                <td><i>No data</i></td>
                            </tr>
                        </tbody>
                    </table>
            </center>
    </div>
<?php   }
        $DB->conn->close();
?>

</body>

<?php
include "./footers/footerGeneral.php"
?>

</html>