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
$userNameError = "";
if (isset($_POST['submit'])) {
    "<h1>It works</h1>";
    $fullName = $_POST['fullName'];

    $phoneNumber = $_POST['phoneNumber'];

    $age = $_POST['age'];

    $nationality = $_POST['nationality'];

    $woreda = $_POST['woreda'];

    $kebele = $_POST['kebele'];

    $role = $_POST['role'];

    $jobLocation = $_POST['jobLocation'];

    $userPhoto = $_FILES['userPhoto']['name'];

    $password = md5($_POST['password']);

    $username = $_POST['username'];

    $username = $_POST['username'];
    $fileExt = explode('.', $userPhoto);
    $fileActExt = strtolower(end($fileExt));
    $allowImg = array('png', 'jpeg', 'jpg');
    $fileNew = rand() . "$username" . "." . $fileActExt;  // rand function create the rand number
    $userPhoto = '../images/' . $fileNew;

    // check if username already taken
    $select_username = "SELECT  `username` FROM `user` WHERE username= '$username'";
    $select_username = mysqli_query($conn, $select_username);
    if (mysqli_num_rows($select_username) > 0) {
        $userNameError = "Sorry... username already taken. Try another one";
    } else {
        if (move_uploaded_file($_FILES['userPhoto']['tmp_name'], $userPhoto)) {
            //    echo $msg1 = "Image uploaded successfully";
        } else {
            //   echo  $msg1 = "Failed to upload image"; validation
        }
        // execute if no error
        $sql = mysqli_query($conn, "INSERT INTO `user`(`custom_id`,`fullName`, `phoneNumber`, `age`, `nationality`, `woreda`, `kebele`, `role`, `jobLocation`, `userPhoto`, `username`, `password`) VALUES ('KMSE/','$fullName','$phoneNumber','$age','$nationality','$woreda','$kebele','$role','$jobLocation','$fileNew','$username','$password')");
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
                                            <h3>Create Account For Employee</h3>
                                            <?php echo $userNameError; ?>
                                            <?php if ($msg != '') : ?>
                                            <div class="alert <?php echo $msgClass ?> text-center h1">
                                                <?php echo $msg ?>
                                                <button type="button" class="close" data-dismiss="alert"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <?php endif; ?>
                                            <form action="./systemadministrator/create_account.php" method="POST"
                                                enctype="multipart/form-data" class="was-validated">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group ">
                                                            <label for="userPhoto">User Image</label>
                                                            <input type="file" name="userPhoto"
                                                                class="form-control-file" id="userPhoto"
                                                                accept="image/*" onchange="preview_image(event)">
                                                            <img class="img-thumbnail" id="output_image"
                                                                style="border-radius: 50%;height: auto; max-width: 50%;" />
                                                        </div>


                                                        <div class="form-group">
                                                            <label class="form-label" for="fullName">Full Name</label>
                                                            <input type="text" id="fullName" name="fullName"
                                                                class="form-control" placeholder="Enter Full Name"
                                                                placeholder="Enter username"
                                                                pattern=".([A-zÀ-ž\s]){5,40}" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="phoneNumber">Phone Number</label>
                                                            <div class="input-group mb-2">
                                                                <div class="input-group-prepend">
                                                                    <div class="input-group-text">+251</div>
                                                                </div>
                                                                <input type="text" name="phoneNumber"
                                                                    class="form-control is-valid" id="phoneNumber"
                                                                    value="<?php if (isset($_POST['phoneNumber'])) {
                                                                                                                                                                echo $_POST['phoneNumber'];
                                                                                                                                                            } ?>"
                                                                    pattern=".([0-9]){9,9}" title="only 10 numbers"
                                                                    required>
                                                            </div>


                                                            <div class="invalid-feedback">
                                                                Please enter Phone Number </div>

                                                        </div>
                                                        <div class="row">
                                                            <div class="form-group col-md-6">
                                                                <label class="form-label" for="age">Age</label>
                                                                <input type="number" id="age" name="age"
                                                                    class="form-control" placeholder="Enter Age"
                                                                    required>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label class="form-label"
                                                                    for="nationality">Nationality</label>
                                                                <input type="text" id="nationality" name="nationality"
                                                                    class="form-control" placeholder="Enter Nationality"
                                                                    required>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label class="form-label"
                                                                        for="woreda">Woreda</label>
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
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="kebele">Kebel</label>
                                                                    <div class="form-control-select">
                                                                        <select name="kebele" class="form-control"
                                                                            id="kebele">
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
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="form-label" for="jobTitle">Job
                                                                    Title</label>
                                                                <div class="form-control-wrap ">
                                                                    <div class="form-control-select">
                                                                        <select name="role" class="form-control"
                                                                            id="jobTitle-06">
                                                                            <option value="recordOfficer">
                                                                                Record Officer</option>
                                                                            <option value="chairMan">
                                                                                chairMan
                                                                            </option>
                                                                            <option value="eventregistrar">
                                                                                Event Registrar</option>

                                                                            <option value="landadmin">
                                                                                Land Admin</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="form-group col-md-6">
                                                            <label class="form-label" for="jobTitle">Job
                                                                Location</label>
                                                            <div class="form-control-wrap ">
                                                                <div class="form-control-select">
                                                                    <select name="jobLocation" class="form-control"
                                                                        id="jobTitle-06">
                                                                        <option value="Kebel One">
                                                                            Kebele One</option>

                                                                        <option value="Kebel Two">
                                                                            Kebele Two</option>

                                                                        <option value="Kebel Three">
                                                                            Kebele Three</option>

                                                                        <option value="Kebel Four">
                                                                            Kebele Four</option>

                                                                        <option value="Kebel Five">
                                                                            Kebele Five</option>

                                                                        <option value="Kebel Six">
                                                                            Kebele Six</option>

                                                                        <option value="Kebel Seven">
                                                                            Kebele Seven</option>

                                                                        <option value="Kebel Eight">
                                                                            Kebele Eight</option>


                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="form-group col-md-6">
                                                                <label class="form-label"
                                                                    for="userName">UserName</label>
                                                                <input type="text" name="username" class="form-control"
                                                                    placeholder="Enter username"
                                                                    pattern=".([A-zÀ-ž0-9]){3,15}"
                                                                    title="4 to 30 characters" required>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="password">Password</label>
                                                                <input id="password" type="password" name="password"
                                                                    class="form-control"
                                                                    pattern=".([A-zÀ-ž0-9\s]){5,15}"
                                                                    title="6 to 30 characters" required>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>



                                                <div class="row">
                                                    <div class="col-md-4">

                                                    </div>

                                                </div>

                                                <button name="submit" type="submit"
                                                    class="btn btn-primary btn-inline mt-3">Submit</button>

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