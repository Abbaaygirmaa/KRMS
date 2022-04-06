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
$recordOfficerId = $_SESSION['id'];
$msgClass = "";
$msg = "";
$userNameError = "";
$_SESSION['error'] = "";
if (isset($_POST['submit'])) {
    "<h1>It works</h1>";
    $residentUsername = $_POST['residentUsername'];
    $firstName = $_POST['firstName'];

    $middleName = $_POST['middleName'];

    $lastName = $_POST['lastName'];

    $nationality = $_POST['nationality'];

    $woreda = $_POST['woreda'];

    $region = $_POST['region'];

    $kebele = $_POST['kebele'];
    $ageStat = true;
    $birthDate = $_POST['birthDate'];
    echo $_age = floor((time() - strtotime($birthDate)) / 31556926);

    $_SESSION['error'] = "";
    $userPhoto = $_FILES['userPhoto']['name'];

    $gender = $_POST['gender'];
    $houseNumber = $_POST['houseNumber'];
    $phoneNumber = $_POST['phoneNumber'];
    $motherFullName = $_POST['motherFullName'];
    $fatherFullName = $_POST['fatherFullName'];
    $levelOfEducation = $_POST['levelOfEducation'];
    $profession = $_POST['profession'];
    $maritalStatus = $_POST['maritalStatus'];
    $emergencyFamilyName = $_POST['emergencyFamilyName'];
    $emergencyFamilyNumber = $_POST['emergencyFamilyNumber'];

    $city = $_POST['city'];



    $target = "../images/" . basename($userPhoto);
    if (move_uploaded_file($_FILES['userPhoto']['tmp_name'], $target)) {
        //    echo $msg1 = "Image uploaded successfully";
    } else {
        //   echo  $msg1 = "Failed to upload image"; validation
    }



    // execute if no error
    // check if username already taken
    $select_username = "SELECT  `residentUsername` FROM `resident` WHERE residentUsername= '$residentUsername'";
    $select_username = mysqli_query($conn, $select_username);
    if (mysqli_num_rows($select_username) > 0) {
        $msg = "Sorry... username already taken. Try another one";
    } else {


        $sql = mysqli_query($conn, "INSERT INTO `resident`(`residentUsername`, `recordOfficerId`, `userPhoto`, `firstName`, `nationality`, `woreda`, `region`, `kebele`, `birthDate`, `gender`, `houseNumber`, `phoneNumber`, `motherFullName`, `fatherFullName`, `levelOfEducation`, `profession`, `maritalStatus`, `emergencyFamilyName`, `emergencyFamilyNumber`, `city`) VALUES ('$residentUsername','$recordOfficerId','$userPhoto','$firstName','$nationality','$woreda','$region','$kebele','$birthDate','$gender','$houseNumber','$phoneNumber','$motherFullName','$fatherFullName','$levelOfEducation','$profession','$maritalStatus','$emergencyFamilyName','$emergencyFamilyNumber','$city')");

        if ($sql) {

            $msg = "Account Created Successfully 🚀!!";
        } else {
            $msgClass = "alert-danger";
            $msg = "Can't Created 👮‍♂️!!";
        }
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
                                            <h3>Fill Resident Information</h3>
                                            <h4 class="text-danger"><?php echo $userNameError; ?></h4>
                                            <?php if ($msg != '') : ?>
                                            <div class="alert <?php echo $msgClass ?> text-center h4">
                                                <?php echo $msg ?>
                                                <button type="button" class="close" data-dismiss="alert"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <?php endif; ?>
                                            <h2>
                                                <?php
                                                if (isset($_SESSION['error'])) {
                                                    echo $_SESSION['error'];
                                                }
                                                ?>
                                            </h2>
                                            <form action="./recordOfficer/register_resident.php" method="POST"
                                                enctype="multipart/form-data" class="was-validated">

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="row">
                                                            <div class="form-group col-md-6">
                                                                <label for="userPhoto">User Image</label>
                                                                <input type="file" name="userPhoto"
                                                                    class="form-control-file" id="userPhoto"
                                                                    accept="image/*" onchange="preview_image(event)">
                                                                <img class="img-thumbnail" id="output_image"
                                                                    style="border-radius: 50%;height: auto; max-width: 50%;" />
                                                            </div>
                                                            <div class="col-md-4">

                                                                <div class="form-group">

                                                                    <label class="form-label"
                                                                        for="residentUsername">UserName</label>
                                                                    <select name="residentUsername"
                                                                        id="residentUsername"
                                                                        class="form-select form-control"
                                                                        data-search="on" required>
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

                                                        </div>

                                                    </div>



                                                </div>
                                                <div id="name"></div>

                                                <div class="row my-2">


                                                    <div class="col-md-2">
                                                        <div class="form-group">
                                                            <label class="form-label" for="region">Region</label>
                                                            <input type="text" id="region" name="region"
                                                                class="form-control" placeholder="Enter region"
                                                                value="<?php if (isset($_POST['region'])) {
                                                                                                                                                                    echo $_POST['region'];
                                                                                                                                                                } ?>"
                                                                required>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-2">
                                                        <div class="form-group">
                                                            <label class="form-label" for="birthDate">Birth date</label>
                                                            <input type="date" id="birthDate" name="birthDate"
                                                                class="form-control" placeholder="Enter Last Name"
                                                                value="<?php if (isset($_POST['birthDate'])) {
                                                                                                                                                                                echo $_POST['birthDate'];
                                                                                                                                                                            } ?>"
                                                                required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="form-group">
                                                            <label class="form-label" for="gender">Sex</label>
                                                            <select name="gender" id="gender" class="form-control">
                                                                <option value="male">Male</option>
                                                                <option value="female">Female</option>

                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row my-2">



                                                </div>
                                                <div class="row my-2">
                                                    <div class="col-md-2">
                                                        <div class="form-group">
                                                            <label class="form-label" for="houseNumber">House
                                                                Number</label>
                                                            <input type="number" id="houseNumber" name="houseNumber"
                                                                class="form-control" placeholder="Enter houseNumber"
                                                                value="<?php if (isset($_POST['houseNumber'])) {
                                                                                                                                                                                        echo $_POST['houseNumber'];
                                                                                                                                                                                    } ?>"
                                                                required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="form-group">
                                                            <label class="form-label" for="phoneNumber">Phone
                                                                Number</label>
                                                            <input type="text" id="phoneNumber" name="phoneNumber"
                                                                class="form-control" placeholder="Enter phone number"
                                                                value="<?php if (isset($_POST['phoneNumber'])) {
                                                                                                                                                                                    echo $_POST['phoneNumber'];
                                                                                                                                                                                } ?>"
                                                                pattern=".([0-9]){9,9}"
                                                                title=" phone number must be number and 10 digit"
                                                                required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label class="form-label" for="motherFullName">Mother
                                                                FullName</label>
                                                            <input type="text" id="motherFullName" name="motherFullName"
                                                                class="form-control"
                                                                placeholder="Enter Mother Full Name"
                                                                value="<?php if (isset($_POST['motherFullName'])) {
                                                                                                                                                                                                echo $_POST['motherFullName'];
                                                                                                                                                                                            } ?>"
                                                                pattern=".([A-zÀ-ž\s]){8,50}"
                                                                title="Mother name must be alphabet and 8-50" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label class="form-label" for="fatherFullName">Father Full
                                                                Name</label>
                                                            <input type="text" id="fatherFullName" name="fatherFullName"
                                                                class="form-control"
                                                                placeholder="Enter father full name"
                                                                value="<?php if (isset($_POST['fatherFullName'])) {
                                                                                                                                                                                                echo $_POST['fatherFullName'];
                                                                                                                                                                                            } ?>"
                                                                pattern=".([A-zÀ-ž\s]){8,50}"
                                                                title="Father name must be alphabet and 8-50" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="form-group">
                                                            <label class="form-label" for="levelOfEducation">Level Of
                                                                Education</label>
                                                            <select name="levelOfEducation" id="levelOfEducation"
                                                                class="form-control">
                                                                <option value="Elementary">Elementary</option>
                                                                <option value="Junior Secondary">Junior Secondary
                                                                </option>

                                                                <option value="(TVET) Level III Diploma">(TVET) Level
                                                                    III
                                                                    Diploma</option>
                                                                <option value="Bachelor of Education">Bachelor of
                                                                    Education
                                                                </option>

                                                                <option value="Master">Master</option>
                                                                <option value="other">other</option>
                                                            </select>



                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="row">


                                                </div>



                                                <div class="row my-3">

                                                    <div class="col-md-2 mt-1">
                                                        <div class="form-group">
                                                            <label class="form-label"
                                                                for="profession">Profession</label>
                                                            <input type="text" id="profession" name="profession"
                                                                class="form-control" placeholder="Enter profession"
                                                                value="<?php if (isset($_POST['profession'])) {
                                                                                                                                                                                echo $_POST['profession'];
                                                                                                                                                                            } ?>"
                                                                pattern=".([A-zÀ-ž\s]){3,50}"
                                                                title="Profession  must be alphabet and 4-50" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="form-group">
                                                            <label class="form-label" for="City">City</label>
                                                            <select class="form-control" name="city" id="city">
                                                                <option value="bekur subcity">bekur subcity</option>
                                                                <option value="adis subcity">adis subcity</option>

                                                                <option value="gubrie subcity">gubrie subcity</option>




                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="form-group">
                                                            <label class="form-label"
                                                                for="maritalStatus">MaritalStatus</label>
                                                            <select class="form-control" name="maritalStatus"
                                                                id="maritalStatus">
                                                                <option value="Unmarried">Unmarried</option>
                                                                <option value="Married">Married</option>
                                                                <option value="Divorce">Divorce</option>
                                                                <option value="Widowed">Widowed</option>

                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label class="form-label"
                                                                for="emergencyFamilyName">Emergency Contact Name</label>
                                                            <input type="text" id="emergencyFamilyName"
                                                                name="emergencyFamilyName" class="form-control"
                                                                placeholder="Enter Emergency Contact"
                                                                value="<?php if (isset($_POST['emergencyFamilyName'])) {
                                                                                                                                                                                                            echo $_POST['emergencyFamilyName'];
                                                                                                                                                                                                        } ?>"
                                                                pattern=".([A-zÀ-ž\s]){6,25}"
                                                                title="Emergency name must be alphabet and 6-25"
                                                                required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="emergencyFamilyNumber"> Emergency Phone
                                                                Number</label>
                                                            <div class="input-group mb-2">
                                                                <div class="input-group-prepend">
                                                                    <div class="input-group-text">+251</div>
                                                                </div>
                                                                <input type="text" name="emergencyFamilyNumber"
                                                                    class="form-control is-valid"
                                                                    id="emergencyFamilyNumber"
                                                                    value="<?php if (isset($_POST['emergencyFamilyNumber'])) {
                                                                                                                                                                                    echo $_POST['emergencyFamilyNumber'];
                                                                                                                                                                                } ?>"
                                                                    pattern=".([0-9]){9,9}" title="only 10 numbers"
                                                                    required>
                                                            </div>


                                                            <div class="invalid-feedback">
                                                                Please enter Phone Number </div>

                                                        </div>

                                                    </div>


                                                </div>

                                                <button name="submit" type="submit"
                                                    class="btn btn-primary btn-block">Submit</button>

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
    <script>

    </script>
    <?php include '../include/script.php' ?>
</body>

</html>