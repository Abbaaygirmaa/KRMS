<!DOCTYPE html>
<html lang="zxx" class="js">

<?php include './include/header.php' ?>
<?php include '../database/database.php' ?>
<?php include '../include/session.php' ?>
<?php require '../include/function.php' ?>
<?php
//login confirmation
confirm_logged_in();
function getAge($date)
{

    $dob = new DateTime($date);

    $now = new DateTime();

    $difference = $now->diff($dob);

    $age = $difference->y;

    return  $age;
}
$uid = intval($_GET['id']);
$oldImage = "";

if (isset($_POST['submit'])) {
    $user_id = $uid;
    $expired_date =  $_POST['expired_date'];
    $oldImage = $_POST['oldImage'];

    $give_user_id = $_SESSION['id'];
    $id_image = $_FILES['userPhoto']['name'];
    if ($id_image == "") {
        $id_image = $oldImage;
    }
    $target = "../images/id_card/" . basename($id_image);
    if (move_uploaded_file($_FILES['userPhoto']['tmp_name'], $target)) {
        //    echo $msg1 = "Image uploaded successfully";
    } else {
        //   echo  $msg1 = "Failed to upload image"; validation
    }
    $sql = mysqli_query($conn, "UPDATE `id_card` SET `id_image` = '$id_image', `expired_date` ='$expired_date' WHERE `user_id` = '$user_id'");
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
                                    <div class="container-fluid">
                                        <div class="nk-content-inner">
                                            <div class="nk-content-body">
                                                <?php
                                                $msg = '';

                                                if (isset($_POST['insert'])) {
                                                    $age = mysqli_query($conn, "SELECT * FROM `resident` WHERE `id` = '$uid'");
                                                    while ($age_data = mysqli_fetch_assoc($age)) {
                                                        $birthDate = $age_data['birthDate'];
                                                    }

                                                    $age_stat = getage($birthDate);
                                                    if ($age_stat > 18) {



                                                        $user_id = $uid;
                                                        $expired_date =  $_POST['expired_date'];


                                                        echo $give_user_id = $_SESSION['id'];
                                                        $id_image = $_FILES['userPhoto']['name'];
                                                        echo "<script> console.log('$give_user_id')</script>";
                                                        $target = "../images/id_card/" . basename($id_image);
                                                        if (move_uploaded_file($_FILES['userPhoto']['tmp_name'], $target)) {
                                                            //    echo $msg1 = "Image uploaded successfully";
                                                        } else {
                                                            //   echo  $msg1 = "Failed to upload image"; validation
                                                        }
                                                        $sql = mysqli_query($conn, "INSERT INTO `id_card`(`user_id`, `expired_date`, `give_user_id`, `id_image`)
                                                    VALUES ('$user_id','$expired_date','$give_user_id','$id_image')");
                                                    } else {
                                                ?>
                                                <script>
                                                alert("Age must be > 18 ")
                                                </script>
                                                <?php
                                                    }
                                                }
                                                ?>
                                                <?php

                                                $sql = mysqli_query($conn, "SELECT * FROM `resident` WHERE `id` = '$uid'");
                                                while ($row = mysqli_fetch_assoc($sql)) {
                                                    $residentUsername = $row['residentUsername'];
                                                    $firstName = $row['firstName'];

                                                    // $middleName = $row['middleName'];

                                                    // $lastName = $row['lastName'];

                                                    $nationality = $row['nationality'];

                                                    $woreda = $row['woreda'];

                                                    $region = $row['region'];

                                                    $kebele = $row['kebele'];

                                                    $birthDate = $row['birthDate'];

                                                    $userPhoto = $row['userPhoto'];




                                                    $gender = $row['gender'];
                                                    $houseNumber = $row['houseNumber'];
                                                    $phoneNumber = $row['phoneNumber'];
                                                    $motherFullName = $row['motherFullName'];
                                                    $fatherFullName = $row['fatherFullName'];
                                                    $levelOfEducation = $row['levelOfEducation'];
                                                    $profession = $row['profession'];
                                                    $maritalStatus = $row['maritalStatus'];
                                                    $emergencyFamilyName = $row['emergencyFamilyName'];
                                                    $emergencyFamilyNumber = $row['emergencyFamilyNumber'];

                                                    $city = $row['city'];


                                                    $status = $row['status'];
                                                    if ($status == 'active') {
                                                        $statCls = 'badge badge-dim badge-sm badge-outline-success';
                                                    } else {
                                                        $statCls = 'badge badge-dim badge-sm badge-outline-danger';
                                                    }
                                                ?>
                                                <div class="nk-block-head nk-block-head-sm">
                                                    <div class="nk-block-between g-3">
                                                        <div class="nk-block-head-content">
                                                            <h3 class="nk-block-title page-title">Main / <strong
                                                                    class="text-primary small">Resident Detail</strong>
                                                            </h3>
                                                            <div class="nk-block-des text-soft">
                                                                <ul class="list-inline">
                                                                    <li> resident ID: <span
                                                                            class="text-base"><?php echo $row['id'] ?></span>
                                                                    </li>
                                                                    <li>Register At: <span
                                                                            class="text-base"><?php echo $row['createdDate'] ?>
                                                                            PM</span></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="nk-block-head-content">
                                                            <a href="chairman/view_resident.php"
                                                                class="btn btn-outline-light bg-white d-none d-sm-inline-flex"><em
                                                                    class="icon ni ni-arrow-left"></em><span>Back</span></a>
                                                            <a href="chairman/view_resident.php"
                                                                class="btn btn-icon btn-outline-light bg-white d-inline-flex d-sm-none"><em
                                                                    class="icon ni ni-arrow-left"></em></a>
                                                        </div>
                                                    </div>
                                                </div><!-- .nk-block-head -->
                                                <div class="nk-block">
                                                    <div class="row gy-5">
                                                        <div class="col-lg-5">
                                                            <?php

                                                                $checkuser = mysqli_query($conn, "SELECT * FROM `id_card` WHERE `user_id` = '$uid'");
                                                                $numrows = mysqli_num_rows($checkuser);
                                                                if ($numrows > 0) {

                                                                    while ($data = mysqli_fetch_assoc($checkuser)) {


                                                                        echo $postTest = "Already Register";
                                                                        $id_image = $data['id_image'];
                                                                        $expired_date = $data['expired_date'];


                                                                ?>

                                                            <!-- Form Content -->
                                                            <form action="" method="post" enctype="multipart/form-data">


                                                                <div class="card card-bordered p-auto">
                                                                    <img src="./images/id_card/<?php echo $id_image ?>"
                                                                        width="300px" height="300px" alt="id card">
                                                                    <div class="form-group ">
                                                                        <label for="userPhoto">ID Card Image</label>
                                                                        <input type="file" name="userPhoto"
                                                                            class="form-control-file" id="userPhoto"
                                                                            accept="image/*"
                                                                            onchange="preview_image(event)">
                                                                        <img class="img-thumbnail" id="output_image"
                                                                            style="border-radius: 50%;height: auto; max-width: 50%;" />
                                                                    </div>
                                                                    <input type="text" name="oldImage"
                                                                        value="<?php echo $id_image ?>" hidden>

                                                                    <div class="form-group">
                                                                        <label class="form-label"
                                                                            for="expired_date">Expired Date
                                                                        </label>
                                                                        <input type="date" id="expired_date"
                                                                            name="expired_date"
                                                                            value="<?php echo $expired_date ?>"
                                                                            class="form-control">
                                                                    </div>
                                                                    <div class="col-md-6 text-center"><button
                                                                            name="submit" type="submit"
                                                                            class="btn btn-primary btn-block">Update</button>
                                                                    </div>



                                                                </div><!-- .card -->



                                                            </form>


                                                            <?php  }
                                                                } else {

                                                                    ?>

                                                            <form action="" method="post" enctype="multipart/form-data">


                                                                <div class="card card-bordered p-auto">
                                                                    <div class="form-group ">
                                                                        <label for="userPhoto">User Image</label>
                                                                        <input type="file" name="userPhoto"
                                                                            class="form-control-file" id="userPhoto"
                                                                            accept="image/*"
                                                                            onchange="preview_image(event)">
                                                                        <img class="img-thumbnail" id="output_image"
                                                                            style="border-radius: 50%;height: auto; max-width: 50%;" />
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <label class="form-label"
                                                                            for="expired_date">Expired Date
                                                                        </label>
                                                                        <input type="date" id="expired_date"
                                                                            name="expired_date" class="form-control"
                                                                            required>
                                                                    </div>
                                                                    <button name="insert" type="insert"
                                                                        class="btn btn-primary btn-block<?php $msg ?>">Submit</button>


                                                                </div><!-- .card -->



                                                            </form><!-- .col -->

                                                            <?php } ?>
                                                        </div>
                                                        <div class="col-lg-7">
                                                            <div class="nk-block-head">
                                                                <div class="nk-block-head-content">
                                                                    <h5 class="nk-block-title title">Applicant
                                                                        Information</h5>
                                                                    <p>Basic info, like name, phone, address, country
                                                                        etc.</p>
                                                                </div>
                                                            </div>
                                                            <div class="card card-bordered">
                                                                <ul class="data-list is-compact">
                                                                    <li class="data-item">
                                                                        <div class="data-col">
                                                                            <div class="data-label">full Name</div>
                                                                            <div class="data-value">
                                                                                <?php echo htmlspecialchars($firstName) ?>
                                                                            </div>
                                                                        </div>
                                                                    </li>

                                                                    <li class="data-item">
                                                                        <div class="data-col">
                                                                            <div class="data-label">City</div>
                                                                            <div class="data-value">
                                                                                <?php echo htmlspecialchars($city) ?>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li class="data-item">
                                                                        <div class="data-col">
                                                                            <div class="data-label">Phone Number</div>
                                                                            <div class="data-value text-soft">
                                                                                <em><?php echo htmlspecialchars($phoneNumber) ?></em>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li class="data-item">
                                                                        <div class="data-col">
                                                                            <div class="data-label">Date of Birth</div>
                                                                            <div class="data-value">
                                                                                <?php echo htmlspecialchars($birthDate) ?>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li class="data-item">
                                                                        <div class="data-col">
                                                                            <div class="data-label">Full Address</div>
                                                                            <div class="data-value">
                                                                                <?php echo $nationality . ', ' . $woreda . ', kebele ' . $kebele ?>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li class="data-item">
                                                                        <div class="data-col">
                                                                            <div class="data-label">Country of Residence
                                                                            </div>
                                                                            <div class="data-value">
                                                                                <?php echo htmlspecialchars($nationality) ?>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li class="data-item">
                                                                        <div class="data-col">
                                                                            <div class="data-label">Father Full Name
                                                                            </div>
                                                                            <div class="data-value">
                                                                                <?php echo htmlspecialchars($fatherFullName) ?>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li class="data-item">
                                                                        <div class="data-col">
                                                                            <div class="data-label">Mother Full Name
                                                                            </div>
                                                                            <div class="data-value">
                                                                                <?php echo htmlspecialchars($motherFullName) ?>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li class="data-item">
                                                                        <div class="data-col">
                                                                            <div class="data-label">Emergency Contact
                                                                                Name
                                                                            </div>
                                                                            <div class="data-value">
                                                                                <?php echo htmlspecialchars($emergencyFamilyName) ?>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li class="data-item">
                                                                        <div class="data-col">
                                                                            <div class="data-label">Emergency Contact
                                                                                Number
                                                                            </div>
                                                                            <div class="data-value">
                                                                                <?php echo htmlspecialchars($emergencyFamilyNumber) ?>
                                                                            </div>
                                                                        </div>
                                                                    </li>



                                                                </ul>
                                                            </div>
                                                        </div><!-- .col -->
                                                    </div><!-- .row -->
                                                </div><!-- .nk-block -->
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--nk block -->
                            </div>
                        </div><!-- .card-preview -->
                    </div>
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