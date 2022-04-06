<!DOCTYPE html>
<html lang="zxx" class="js">
<?php include './include/header.php' ?>
<?php include '../database/database.php' ?>
<?php include '../include/session.php' ?>
<?php require '../include/function.php' ?>
<?php
//login confirmation
confirm_logged_in();

?>

<?php

$msgClass = "";
$msg = "";
$houseerror = "";
if (isset($_POST['submit'])) {
    "<h1>It works</h1>";
    $username = $_POST['username'];


    $recordOfficerId = $_SESSION['id'];

    $houseType = $_POST['houseType'];

    $houseNumber = $_POST['houseNumber'];

    $woreda = $_POST['woreda'];

    $kebele = $_POST['kebele'];

    $numberOfFamily = $_POST['numberOfFamily'];

    $housePart = $_POST['housePart'];


    $kareMeter = $_POST['kareMeter'];

    $username = $_POST['username'];
    $hn = strlen($houseNumber);
    $status = true;
    if ($hn > 4) {
        $status = false;
    }

    if ($status) {

        // check if House number already taken
        $select_house = "SELECT * FROM `house` WHERE `kebele` = '$kebele' AND `houseNumber` = '$houseNumber'";
        $select_house = mysqli_query($conn, $select_house);
        if (mysqli_num_rows($select_house) > 0) {
            $houseerror = "Can't record house number already taken";
        } else {
            // execute if no error 
            $sql = mysqli_query($conn, "INSERT INTO `house`(`recordOfficerId`, `username`, `houseType`, `houseNumber`, `woreda`, `kebele`, `numberOfFamily`, `housePart`, `kareMeter`) VALUES ('$recordOfficerId',
    '$username','$houseType','$houseNumber','$woreda','$kebele','$numberOfFamily','$housePart','$kareMeter')");
            if ($sql) {

                $msg = "House Register Successfully 🚀!!";
            } else {
                $msgClass = "alert-danger";
                $msg = "Can't Created 👮‍♂️!!";
            }
        }
    } else {
        echo "<script>alert('pls check input length')</script>";
    }
}


?>

<body class="nk-body bg-lighter npc-general has-sidebar ">
    <div class="nk-app-root">
        <!-- main @s -->
        <div class="nk-main ">


            <!-- sidebar @s -->
            <?php include './include/sidebar.php' ?>
            <!-- sidebar @e -->
            <!-- wrap @s -->
            <div class="nk-wrap ">
                <!-- main header @s -->
                <?php include './include/navbar.php' ?>
                <!-- main header @e -->
                <!-- content @s -->
                <div class="nk-content ">
                    <div class="container-fluid">
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                                <div class="nk-block-head nk-block-head-sm">
                                    <!-- .nk-block-between -->
                                </div><!-- .nk-block-head -->
                                <div class="nk-block">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h3>Register House</h3>
                                            <h4> <?php echo $houseerror; ?></h4>
                                            <?php if ($msg != '') : ?>
                                            <div class="alert <?php echo $msgClass ?> text-center h4">
                                                <?php echo $msg ?>
                                                <button type="button" class="close" data-dismiss="alert"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <?php endif; ?>
                                            <form action="./recordOfficer/register_house.php" method="POST"
                                                enctype="multipart/form-data" class="was-validated">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group">

                                                            <label class="form-label" for="username">UserName</label>
                                                            <select name="username" id="username"
                                                                class="form-select form-control" data-search="on"
                                                                required>
                                                                <option value="">select</option>
                                                                <?php
                                                                $select_resident = mysqli_query($conn, "SELECT * FROM `user` WHERE `role`='resident'");
                                                                $num_row = mysqli_num_rows($select_resident);
                                                                if ($num_row > 0) {
                                                                    while ($data = mysqli_fetch_assoc($select_resident)) {
                                                                        $resident = $data['username'];
                                                                ?>
                                                                <option value="<?php echo $resident ?>">
                                                                    <?php echo $resident ?></option>
                                                                <?php
                                                                    }
                                                                }

                                                                ?>

                                                            </select>

                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="form-label" for="houseType">House Type</label>
                                                            <div class="form-control-wrap ">
                                                                <div class="form-control-select">
                                                                    <select name="houseType" class="form-control"
                                                                        id="houseType">
                                                                        <option value="የግል">
                                                                            የግል</option>
                                                                        <option value="የመንግስት">
                                                                            የመንግስት</option>


                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="form-label" for="houseNumber">House
                                                                Number</label>
                                                            <input type="number" id="houseNumber" name="houseNumber"
                                                                class="form-control" pattern=".([0-9]){0,3}"
                                                                title="only number and 1-3"
                                                                value="<?php echo isset($_POST['houseNumber']) ? $houseNumber : ''; ?>"
                                                                required>
                                                        </div>
                                                    </div>


                                                </div>

                                                <div class="row">

                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="form-label" for="woreda">Woreda</label>
                                                            <div class="form-control-wrap ">
                                                                <div class="form-control-select">
                                                                    <select name="woreda" class="form-control"
                                                                        id="woreda">
                                                                        <option value="1">
                                                                            Woreda 1</option>
                                                                        <option value="2">

                                                                            Woreda 2</option>
                                                                        <option value="2">

                                                                            Woreda 3</option>
                                                                        <option value="3">

                                                                            Woreda 4</option>
                                                                        <option value="4">
                                                                            Woreda 5</option>
                                                                        <option value="5">
                                                                            Woreda 6</option>
                                                                        <option value="6">
                                                                            Woreda 7</option>
                                                                        <option value="7">
                                                                            Woreda 8</option>
                                                                        <option value="8">

                                                                            Woreda 9</option>
                                                                        <option value="9">
                                                                            Woreda 10</option>
                                                                        <option value="10">



                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="form-label" for="kebele">Kebele</label>
                                                            <select name="kebele" class="form-control" id="kebele">
                                                                <option value="1">
                                                                    kebel 1</option>
                                                                <option value="2">

                                                                    kebel 2</option>
                                                                <option value="2">

                                                                    kebel 3</option>
                                                                <option value="3">

                                                                    kebel 4</option>
                                                                <option value="4">
                                                                    kebel 5</option>
                                                                <option value="5">
                                                                    kebel 6</option>
                                                                <option value="6">
                                                                    kebel 7</option>
                                                                <option value="7">
                                                                    kebel 8</option>
                                                                <option value="8">

                                                                    kebel 9</option>
                                                                <option value="9">
                                                                    kebel 10</option>
                                                                <option value="10">

                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="form-label" for="numberOfFamily">Number Of
                                                                Family</label>
                                                            <input type="text" id="numberOfFamily" name="numberOfFamily"
                                                                class="form-control" placeholder="Enter no Family"
                                                                pattern=".([0-9]){0,2}" title="only number and 1-2"
                                                                value="<?php echo isset($_POST['numberOfFamily']) ? $numberOfFamily : ''; ?>"
                                                                required>
                                                        </div>
                                                    </div>


                                                </div>




                                                <div class="row my-2">

                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="form-label" for="housePart">house Part</label>
                                                            <input type="text" id="housePart" name="housePart"
                                                                class="form-control" pattern=".([0-9]){0,3}"
                                                                title="only number and 1-14"
                                                                value="<?php echo isset($_POST['housePart']) ? $housePart : ''; ?>"
                                                                required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label class="form-label" for="kareMeter">kareMeter /የቤቱ ይዞታ
                                                                ስፋት በ ካሬ
                                                                ሜትር</label>
                                                            <input type="text" id="kareMeter" name="kareMeter"
                                                                class="form-control" pattern=".([0-9]){0,14}"
                                                                title="only number and 1-14"
                                                                value="<?php echo isset($_POST['kareMeter']) ? $kareMeter : ''; ?>"
                                                                required>
                                                        </div>
                                                    </div>
                                                </div>



                                                <button name="submit" type="submit"
                                                    class="btn btn-primary btn-inline">Submit</button>

                                            </form>
                                        </div>
                                    </div>
                                </div><!-- .nk-block -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- content @e -->
                <!-- footer @s -->
                <?php include './include/footer.php' ?>
                <!-- footer @e -->
            </div>
            <!-- wrap @e -->
        </div>
        <!-- main @e -->
    </div>
    <!-- app-root @e -->
    <!-- JavaScript -->
    <?php include '../include/script.php' ?>
</body>

</html>