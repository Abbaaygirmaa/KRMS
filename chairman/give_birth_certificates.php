<!DOCTYPE html>
<html lang="zxx" class="js">

<?php include './include/header.php' ?>
<?php include '../database/database.php' ?>
<?php include '../include/session.php' ?>
<?php require '../include/function.php' ?>
<?php
//login confirmation
confirm_logged_in();

$uid = intval($_GET['id']);


if (isset($_POST['submit'])) {
    $user_id = $uid;
    $expired_date =  $_POST['expired_date'];
    $give_user_id = $_SESSION['id'];
    $id_image = $_FILES['userPhoto']['name'];
    $target = "../images/id_card/" . basename($id_image);
    if (move_uploaded_file($_FILES['userPhoto']['tmp_name'], $target)) {
        //    echo $msg1 = "Image uploaded successfully";
    } else {
        //   echo  $msg1 = "Failed to upload image"; validation
    }
    $sql = mysqli_query($conn, "INSERT INTO `id_card`(`user_id`, `expired_date`, `give_user_id`, `id_image`) VALUES
    ('$user_id','$expired_date','$give_user_id','$id_image')");
}
?>

<body class="nk-body bg-lighter npc-general has-sidebar ">
    <div class="nk-app-root">
        <!-- main @s -->
        <div class="nk-main ">
            <!-- sidebar @s -->
            <?php // include './include/sidebar.php' 
            ?>
            <!-- sidebar @e -->
            <!-- wrap @s -->
            <div class="nk-wrap ">
                <!-- main header @s -->
                <?php // include './include/navbar.php' 
                ?>
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
                                    <div class="card card-bordered">
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
                                        <div class="card-aside-wrap">
                                            <div class="card-content">
                                                <ul class="nav nav-tabs nav-tabs-mb-icon nav-tabs-card">
                                                    <li class="nav-item">
                                                        <a class="nav-link active" href="#"><em
                                                                class="icon ni ni-user-circle"></em><span>የልደት ካርድ/Birth
                                                                Certificate</span></a>
                                                    </li>

                                                    <li class="nav-item nav-item-trigger d-xxl-none">
                                                        <a href="#" class="toggle btn btn-icon btn-trigger"
                                                            data-target="userAside"><em
                                                                class="icon ni ni-user-list-fill"></em></a>
                                                    </li>
                                                </ul><!-- .nav-tabs -->
                                                <div class="card-inner">
                                                    <div class="nk-block">
                                                        <div class="nk-block-head d-flex justify-content-center">
                                                            <img src="./images/ehtiopia.png" alt="">
                                                            <h3 class="title align-center"> በኢትዮጵያ ፌዴራላው ዴሞክራሲያዊ
                                                                ሪፐብሊክ<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; የ ወሳኝ ኩነት
                                                                ምዝገባ <br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                                                የልደት ምስክር ወርቀት</h3>

                                                        </div><!-- .nk-block-head -->
                                                        <div class="profile-ud-list">
                                                            <div class="profile-ud-item">
                                                                <div class="profile-ud wider">
                                                                    <span class="profile-ud-label">የህጻኑ/ኗ ሙሉ ስም</span>
                                                                    <span
                                                                        class="profile-ud-value"><?php echo $firstName  ?></span>
                                                                </div>
                                                            </div>
                                                            <div class="profile-ud-item">
                                                                <div class="profile-ud wider">
                                                                    <span class="profile-ud-label">ጾታ </span>
                                                                    <span
                                                                        class="profile-ud-value"><?php echo htmlspecialchars($gender) ?></span>
                                                                </div>
                                                            </div>
                                                            <div class="profile-ud-item">
                                                                <div class="profile-ud wider">
                                                                    <span class="profile-ud-label">ልደቱ የተመዘገበበት ቀን
                                                                    </span>
                                                                    <span
                                                                        class="profile-ud-value"><?php echo htmlspecialchars($birthDate) ?></span>
                                                                </div>
                                                            </div>
                                                            <div class="profile-ud-item">
                                                                <div class="profile-ud wider">
                                                                    <span class="profile-ud-label">ዜግነት </span>
                                                                    <span
                                                                        class="profile-ud-value"><?php echo htmlspecialchars($nationality) ?></span>
                                                                </div>
                                                            </div>
                                                            <div class="profile-ud-item">
                                                                <div class="profile-ud wider">
                                                                    <span class="profile-ud-label">የትውልድ ቦታ</span>
                                                                    <span
                                                                        class="profile-ud-value"><?php echo htmlspecialchars($city) ?></span>
                                                                </div>
                                                            </div>
                                                            <!-- <div class="profile-ud-item">
                                                                <div class="profile-ud wider">
                                                                    <span class="profile-ud-label">Email Address</span>
                                                                    <span
                                                                        class="profile-ud-value">info@softnio.com</span>
                                                                </div>
                                                            </div> -->
                                                        </div><!-- .profile-ud-list -->
                                                    </div><!-- .nk-block -->

                                                    <div class="nk-block">
                                                        <div class="nk-block-head nk-block-head-line">
                                                            <h6 class="title overline-title text-base">Family
                                                                Information</h6>
                                                        </div><!-- .nk-block-head -->
                                                        <div class="profile-ud-list">
                                                            <div class="profile-ud-item">
                                                                <div class="profile-ud wider">
                                                                    <span class="profile-ud-label">የ አባት ሙሉ ስም </span>
                                                                    <span
                                                                        class="profile-ud-value"><?php echo htmlspecialchars($fatherFullName) ?></span>
                                                                </div>
                                                            </div>

                                                            <div class="profile-ud-item">
                                                                <div class="profile-ud wider">
                                                                    <span class="profile-ud-label">የእናት አባት</span>
                                                                    <span
                                                                        class="profile-ud-value"><?php echo htmlspecialchars($motherFullName) ?></span>
                                                                </div>
                                                            </div>
                                                            የ
                                                        </div><!-- .profile-ud-list -->
                                                    </div><!-- .nk-block -->
                                                    <div class="nk-block">
                                                        <div class="nk-block-head nk-block-head-line">
                                                            <h6 class="title overline-title text-base">መዝገብ ሹም</h6>
                                                        </div><!-- .nk-block-head -->
                                                        <div class="profile-ud-list">
                                                            <div class="profile-ud-item">
                                                                <div class="profile-ud wider">
                                                                    <span class="profile-ud-label">የምስክር ወረቀት የተሰጠበት ቀን
                                                                    </span>
                                                                    <span
                                                                        class="profile-ud-value"><?php echo date("Y/m/d"); ?></span>
                                                                </div>
                                                            </div>

                                                            <div class="profile-ud-item">
                                                                <div class="profile-ud wider">
                                                                    <span class="profile-ud-label">የክብር መዝገብ ሹም ሙሉ ስም
                                                                    </span>
                                                                    <span
                                                                        class="profile-ud-value"><?php echo $_SESSION['fullName'] ?></span>
                                                                </div>
                                                            </div>

                                                        </div><!-- .profile-ud-list -->
                                                    </div><!-- .nk-block -->
                                                    <div class="nk-divider divider md"></div>

                                                </div><!-- .card-inner -->
                                            </div><!-- .card-content -->


                                        </div><!-- .card-aside-wrap -->
                                        <?php } ?>
                                    </div><!-- .card -->
                                </div><!-- .nk-block -->
                            </div>
                        </div><!-- .card-preview -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- content @e -->
    <!-- footer @s -->
    <?php // include './include/footer.php' 
    ?>
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