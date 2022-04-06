<!DOCTYPE html>
<html lang="zxx" class="js">

<?php include './include/header.php' ?>
<?php include '../database/database.php' ?>
<?php include '../include/session.php' ?>
<?php require '../include/function.php' ?>
<?php
//login confirmation
confirm_logged_in();
$recordOfficerId = $_SESSION['id'];
$username = $_GET['username'];
// $tid = intval($_GET['tid']);
if (isset($_GET['tid'])) {
    $tid = $_GET['tid'];
    $update_status = mysqli_query($conn, "UPDATE `transform_list` SET `status`='pending' WHERE id = '$tid'");
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
                                                $sql = mysqli_query($conn, "SELECT resident.id, transform_list.id as tID, `custom_id`, transform_list.title as title,transform_list.description as description, `residentUsername`, `recordOfficerId`, `userPhoto`, `firstName`,  `nationality`, `woreda`, `region`, `kebele`, `birthDate`, `gender`, `houseNumber`, `phoneNumber`, `motherFullName`, `fatherFullName`, `levelOfEducation`, `profession`, `maritalStatus`, `emergencyFamilyName`, `emergencyFamilyNumber`, `city`, `createdDate`, resident.status,transform_list.status as tranStatus  FROM `resident` INNER JOIN transform_list on residentUsername = transform_list.resident_username WHERE   `residentUsername` = '$username'");
                                                while ($row = mysqli_fetch_assoc($sql)) {
                                                    $tid = $row['tID'];
                                                    $residentUsername = $row['residentUsername'];
                                                    $firstName = $row['firstName'];

                                                    // $middleName = $row['middleName'];
                                                    $title = $row['title'];
                                                    $description = $row['description'];


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


                                                    $status = $row['tranStatus'];
                                                    if ($status == 'accepted') {
                                                        $statCls = 'badge badge-dim badge-sm badge-outline-success';
                                                    } else if ($status == 'pending') {
                                                        $statCls = 'badge badge-dim badge-sm badge-outline-info';
                                                    } else {
                                                        $statCls = 'badge badge-dim badge-sm badge-outline-danger';
                                                    }
                                                ?>
                                                <div class="nk-block-head nk-block-head-sm">
                                                    <div class="nk-block-between g-3">
                                                        <div class="nk-block-head-content">
                                                            <h3 class="nk-block-title page-title">Main / <strong
                                                                    class="text-primary small">Transfer Resident
                                                                    Detail</strong>
                                                            </h3>
                                                            <div class="nk-block-des text-soft">
                                                                <ul class="list-inline">
                                                                    <li> resident ID: <span
                                                                            class="text-base"><?php echo 'KMSR/004';
                                                                                                                    echo $row['id'] ?></span>
                                                                    </li>
                                                                    <li>Date: <span
                                                                            class="text-base"><?php echo date('Y/m/d'); ?>
                                                                        </span></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="nk-block-head-content">
                                                            <a href="recordOfficer/view_resident.php"
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
                                                            <div class="nk-block-head">
                                                                <div class="nk-block-head-content">
                                                                    <h5 class="nk-block-title title">Application Info
                                                                    </h5>
                                                                    <p>Submission date, approve date, status etc.</p>
                                                                </div>
                                                            </div><!-- .nk-block-head -->
                                                            <div class="card card-bordered">
                                                                <ul class="data-list is-compact">
                                                                    <li class="data-item">
                                                                        <div class="data-col">
                                                                            <div class="data-label">Submitted By</div>
                                                                            <div class="data-value">
                                                                                <?php echo htmlspecialchars($woreda) ?>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li class="data-item">
                                                                        <div class="data-col">
                                                                            <div class="data-label">Submitted At</div>
                                                                            <div class="data-value">
                                                                                <?php echo $row['createdDate'] ?>
                                                                                PM</div>
                                                                        </div>
                                                                    </li>
                                                                    <li class="data-item">
                                                                        <div class="data-col">
                                                                            <div class="data-label">Transfer Status
                                                                            </div>
                                                                            <div class="data-value"><span
                                                                                    class="<?php echo $statCls ?>">
                                                                                    <?php echo htmlspecialchars($status) ?></span>
                                                                            </div>
                                                                        </div>
                                                                    </li>

                                                                    <li class="data-item">
                                                                        <div class="data-col">
                                                                            <div class="data-label">username
                                                                            </div>
                                                                            <div class="data-value">
                                                                                <?php echo htmlspecialchars($residentUsername) ?>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div><!-- .card -->
                                                            <div class="nk-block-head">
                                                                <div class="nk-block-head-content">
                                                                    <h5 class="nk-block-title title">Resident Image
                                                                    </h5>
                                                                    <p>Here is Resident uploaded image.</p>
                                                                </div>
                                                            </div><!-- .nk-block-head -->
                                                            <div class="card card-bordered">
                                                                <ul class="data-list is-compact">
                                                                    <img src="./images/<?php echo $userPhoto ?>" alt="">
                                                                </ul>
                                                            </div><!-- .card -->
                                                        </div><!-- .col -->
                                                        <div class="col-lg-7">
                                                            <div class="nk-block-head">
                                                                <div class="nk-block-head-content">
                                                                    <h5 class="nk-block-title title">ጉዳይ ፦ መሸኛ ስልመስጠት
                                                                        ይሆናል</h5>

                                                                </div>
                                                            </div>
                                                            <div class="card card-bordered">
                                                                <ul class="data-list is-compact">
                                                                    <li class="data-item">
                                                                        <div class="data-col">
                                                                            <div class="data-label">የአመልካች ሙሉ ስም </div>
                                                                            <div class="data-value">
                                                                                <?php echo htmlspecialchars($firstName) ?>
                                                                            </div>
                                                                        </div>
                                                                    </li>


                                                                    <li class="data-item">
                                                                        <div class="data-col">
                                                                            <div class="data-label">የትውልድ ዘመን</div>
                                                                            <div class="data-value">
                                                                                <?php echo htmlspecialchars($birthDate) ?>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li class="data-item">
                                                                        <div class="data-col">
                                                                            <div class="data-label">የእናት ሙሉ ስም</div>
                                                                            <div class="data-value text-soft">
                                                                                <em><?php echo htmlspecialchars($motherFullName) ?></em>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li class="data-item">
                                                                        <div class="data-col">
                                                                            <div class="data-label">የትዳር ሁኔታ </div>
                                                                            <div class="data-value">
                                                                                <?php echo htmlspecialchars($maritalStatus) ?>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li class="data-item">
                                                                        <div class="data-col">
                                                                            <div class="data-label">የቅርብ ተጠሪ</div>
                                                                            <divወ class="data-value">
                                                                                <?php echo $nationality . ', ' . $woreda . ', kebele ' . $kebele ?>
                                                                            </divወ </div>
                                                                    </li>
                                                                    <li class="data-item">
                                                                        <p>ከላይ በርዕሱ እንደተጠቀሰው በስም ተጠቃሽ
                                                                            የሆነውና
                                                                            በፎቶግራፍ
                                                                            የተገለጸው/ችው
                                                                            አቶ/ወ/ሮ/ሪት:- <strong>
                                                                                <u><?php echo htmlspecialchars($firstName) ?></u></strong>

                                                                            <br>
                                                                            በወልቂጤ ከተማ በበኩር ወረዳ
                                                                            :-<strong>
                                                                                <u><?php echo htmlspecialchars($woreda) ?></u></strong>

                                                                            ቀበሌ ተወላጅና ነዋሪ የነበረ/ች ሲሆን በአሁኑ ወቅት በ:-
                                                                            <strong>
                                                                                <u><?php echo htmlspecialchars($description) ?></u></strong>


                                                                            ምክንያት የመኖሪያ አድራሻ የሚቀይር/የምትቀይር/ በመሆኑ የመሸኛ
                                                                            ደብዳቤ ተጽፎ መረጃ እንዲሰጠው/ጣት በቀን:-
                                                                            <strong><?php echo date('Y/m/d') ?></strong>
                                                                            ዓ.ም በተፃፈ ማመልከቻ ጠይቀውናል። <br>

                                                                            በዚህም መሰረት ግለሰቡ/ቧ በነበረችበት ክ/ከተማም ሆነ ቀበሌ
                                                                            በሥነ-ምግባሩ/ሯ ጥሩ ባህርይ ያለውና/ያላት/ በስራውም ታታሪና ቅን
                                                                            ሲሆን/ስትሆን/ በሕ/ሰቡ ዘንድ ተወዳጅ የነበረ/ች መሆኑን/ኗን/
                                                                            ይህንን የመሸኛ መረጃ መስጠታችንን እናረጋግጣለን።

                                                                            ከሰላምታ ጋር

                                                                            ግልባጭ
                                                                            ለጽህፈት ቤታችን
                                                                            ወልቂጤ?
                                                                        </p>
                                                                    </li>
                                                                    <li class="data-item">
                                                                        <a href="chairman/view_transfer_details.php?username=<?php echo $username ?>&tid=<?php echo $tid ?>"
                                                                            class="btn btn-primary"
                                                                            onClick="return confirm('Are you sure send request?')">
                                                                            Send
                                                                            Request</a>
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
    <script src="./assets/js/bundle.js?ver=2.4.0"></script>
    <script src="./assets/js/scripts.js?ver=2.4.0"></script>
    <script src="./assets/js/charts/gd-default.js?ver=2.4.0"></script>
</body>

</html>