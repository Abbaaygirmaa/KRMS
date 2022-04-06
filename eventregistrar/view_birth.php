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

// $alert = false;
// $alertStatus = "";
// $alertMsg1 = "";
// $alertMsg2 = "";
if (isset($_GET['status'])) {
    echo $id = $_GET['id'];
    if ($_GET['status'] == 'active') {
        mysqli_query($conn, "UPDATE `birthregistration` SET `status`= 'active' WHERE  `id`= '$id'");
        // $alert = true;
        // $alertMsg1 = "User Active !!";
        // $alertStatus = "alert-success";
        // $alertMsg2 = " account status has been updated accordingly. ";
        header("location:./eventregistrar/viewbirth.php");
    } else if ($_GET['status'] == 'disable') {
        mysqli_query($conn, "UPDATE `birthregistration` SET `status`= 'disable' WHERE  `id`= '$id'");
        $_SESSION['delmsg'] = "User Suspend !!";
        header("location:./eventregistrar/viewbirth.php");
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
                                <div class="nk-block nk-block-lg">
                                    <div class="nk-block-head">
                                        <div class="nk-block-head-content">
                                            <h4 class="nk-block-title">Data List For Registered Child</h4>
                                            <div class="nk-block-des">

                                                <!-- <?php
                                                        if ($alert == true) {
                                                        ?>
                                                <div class="col-md-8 example-alert">
                                                    <div
                                                        class="alert alert-fill <?php echo $alertStatus ?> alert-dismissible alert-icon">
                                                        <em class="icon ni ni-chick-circle"></em>
                                                        <strong><?php echo $alertMsg1 ?></strong>.
                                                        <?php echo $alertMsg2 ?> <button class="close"
                                                            data-dismiss="alert"></button>
                                                    </div>
                                                </div>
                                                <?php
                                                        }

                                                ?> -->

                                            </div>
                                        </div>
                                    </div>
                                    <div class="card card-preview">
                                        <div class="card-inner">
                                            <div id="DataTables_Table_1_wrapper"
                                                class="dataTables_wrapper dt-bootstrap4 no-footer">

                                                <div class="datatable-wrap my-3">
                                                    <table
                                                        class="datatable-init nowrap nk-tb-list nk-tb-ulist dataTable no-footer"
                                                        data-auto-responsive="false" id="DataTables_Table_1" role="grid"
                                                        aria-describedby="DataTables_Table_1_info">
                                                        <thead>
                                                            <tr class="nk-tb-item nk-tb-head" role="row">
                                                                <th class="nk-tb-col sorting" tabindex="0"
                                                                    aria-controls="DataTables_Table_1" rowspan="1"
                                                                    colspan="1"
                                                                    aria-label="User: activate to sort column ascending">
                                                                    <span class="sub-text">ID</span>
                                                                </th>
                                                                <th class="nk-tb-col sorting" tabindex="0"
                                                                    aria-controls="DataTables_Table_1" rowspan="1"
                                                                    colspan="1"
                                                                    aria-label="User: activate to sort column ascending">
                                                                    <span class="sub-text">Child Photo</span>
                                                                </th>

                                                                <th class="nk-tb-col sorting" tabindex="0"
                                                                    aria-controls="DataTables_Table_1" rowspan="1"
                                                                    colspan="1"
                                                                    aria-label="User: activate to sort column ascending">
                                                                    <span class="sub-text">Child FullName</span>
                                                                </th>
                                                                <th class="nk-tb-col tb-col-mb sorting" tabindex="0"
                                                                    aria-controls="DataTables_Table_1" rowspan="1"
                                                                    colspan="1"
                                                                    aria-label="woreda: activate to sort column ascending">
                                                                    <span class="sub-text">sex</span>
                                                                </th>
                                                            
                                                                 <th class="nk-tb-col tb-col-lg sorting" tabindex="0"
                                                                    aria-controls="DataTables_Table_1" rowspan="1"
                                                                    colspan="1"
                                                                    aria-label="Job Location: activate to sort column ascending">
                                                                    <span class="sub-text">Date of Birth</span>
                                                                </th>
                                                                 
                                                                
                                                                 <th class="nk-tb-col tb-col-lg sorting" tabindex="0"
                                                                    aria-controls="DataTables_Table_1" rowspan="1"
                                                                    colspan="1"
                                                                    aria-label="kebele: activate to sort column ascending">
                                                                    <span class="sub-text">Kebele </span>
                                                                </th>
                                                                <th class="nk-tb-col tb-col-md sorting" tabindex="0"
                                                                    aria-controls="DataTables_Table_1" rowspan="1"
                                                                    colspan="1"
                                                                    aria-label="Status: activate to sort column ascending">
                                                                    <span class="sub-text">Status</span>
                                                                </th>
                                                                <th class="nk-tb-col nk-tb-col-tools text-right sorting"
                                                                    tabindex="0" aria-controls="DataTables_Table_1"
                                                                    rowspan="1" colspan="1" aria-label="
                                                            : activate to sort column ascending">
                                                                </th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <!-- .nk-tb-item  -->
                                                            <!-- .nk-tb-item  -->
                                                            <!-- .nk-tb-item  -->
                                                            <!-- .nk-tb-item  -->

                                                            <?php
                                                    
                                             $sql = mysqli_query($conn, "SELECT CONCAT(`custom_id`,`id`) as `customId`,`id`,`custom_id`, `constant`, `fullname`, `sex`, `date_of_birth`,`Place_of_birth` `zone`, `wereda`, `kebele`, `nationality`, `motherfullname`, `mothercitzn`, `fatherfulnam`, `fatherctznship`, `child_photo`,`status`,`date` FROM `birthregistration` WHERE `nationality`='Ethiopia");
                                    
                                                            while($row =mysqli_fetch_assoc($sql)) 
                                                            {
                                                                $customId = $row['customId'];
                                                                $id=$_POST['id'];
                                                                $constant=$_POST['constant'];
                                                                $fullname=$_POST['fullname'];
                                                                $sex=$_POST['sex'];
                                                                $date_of_birth=$_POST['date_of_birth'];
                                                                $Place_of_birth=$_POST['Place_of_birth'];
                                                                $zone=$_POST['zone'];
                                                                $wereda=$_POST['wereda'];
                                                                $kebele=$_POST['kebele'];
                                                                $nationality=$_POST['nationality'];
                                                                $motherfullname=$_POST['motherfullname'];
                                                                $mothercitzn=$_POST['mothercitzn'];
                                                                $fatherfulnam=$_POST['fatherfulnam'];
                                                                $fatherctznship=$_POST['fatherctznship'];
                                                                $status = $row['status'];
                                                                $date=date('Y-m-d H:m:s');
                                                                $child_photo = $_FILES["child_photo"]["name"] or die('can not get post');


                                                                if ($status == 'active') {
                                                                    $statCls = 'badge badge-success';
                                                                } else {
                                                                    $statCls = 'badge badge-danger';
                                                                }
                                                            ?>

                                                            <tr class="nk-tb-item even">
                                                                <td class="nk-tb-col tb-col-mb" data-order="35040.34">
                                                                    <span
                                                                        class="tb-role"><?php echo htmlspecialchars($customId) . '/13' ?></span>
                                                                </td>
                                                                <td class="nk-tb-col">
                                                                    <div class="user-card">
                                                                        <div
                                                                            class="user-avatar bg-dim-primary d-none d-sm-flex">
                                                                            <div
                                                                                class="user-avatar user-avatar-sm bg-warning">
                                                                                <img src="./images/<?php echo $child_photo ?>"
                                                                                    alt="">
                                                                            </div>
                                                                        </div>
                                                                        <div class="user-info">
                                                                            <span class="tb-lead">
                                                                                <?php echo htmlspecialchars($fullname) ?><span
                                                                                    class="dot dot-success d-md-none ml-1"></span></span>

                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td class="nk-tb-col tb-col-mb" data-order="35040.34">
                                                                    <span
                                                                        class="tb-role"><?php echo htmlspecialchars($sex) ?></span>
                                                                </td>
                                                                <td class="nk-tb-col tb-col-md">
                                                                    <span><?php echo htmlspecialchars( $motherfullname) ?></span>
                                                                </td>
                                                                <td class="nk-tb-col tb-col-lg">
                                                                    <span><?php echo htmlspecialchars($fatherfulnam) ?></span>
                                                                </td>
                                                                <td class="nk-tb-col tb-col-lg">
                                                                    <span><?php echo htmlspecialchars($mothercitzn) ?></span>
                                                                </td>
                                                                <td class="nk-tb-col tb-col-lg">
                                                                    <span><?php echo htmlspecialchars($fatherctznship) ?></span>
                                                                </td>
                                                                <td class="nk-tb-col tb-col-lg">
                                                                    <span><?php echo htmlspecialchars($nationality) ?></span>
                                                                </td>
                                                                <td class="nk-tb-col tb-col-lg">
                                                                    <span><?php echo htmlspecialchars($date_of_birth) ?></span>
                                                                </td>
                                                                <td class="nk-tb-col tb-col-lg">
                                                                    <span><?php echo htmlspecialchars($Place_of_birth) ?></span>
                                                                </td>
                                                                <td class="nk-tb-col tb-col-lg">
                                                                    <span><?php echo htmlspecialchars($zone) ?></span>
                                                                </td>
                                                                <td class="nk-tb-col tb-col-lg">
                                                                    <span><?php echo htmlspecialchars( $wereda) ?></span>
                                                                </td>
                                                                <td class="nk-tb-col tb-col-lg">
                                                                    <span><?php echo htmlspecialchars( $date) ?></span>
                                                                </td>
                                                                <td class=" nk-tb-col tb-col-lg">
                                                                    <span><?php echo htmlspecialchars($kebele )?></span>
                                                                </td>
                                                                <td class="nk-tb-col tb-col-md">

                                                                    <span class="tb-status <?php echo $statCls ?>">
                                                                        <span><?php echo htmlspecialchars($status) ?></span></span>
                                                                </td>
                                                                <td class="nk-tb-col nk-tb-col-tools">
                                                                    <ul class="nk-tb-actions gx-1">



                                                                        <li>
                                                                            <div class="drodown">
                                                                                <a href="#"
                                                                                    class="dropdown-toggle btn btn-icon btn-trigger"
                                                                                    data-toggle="dropdown"><em
                                                                                        class="icon ni ni-more-h"></em></a>
                                                                                <div
                                                                                    class="dropdown-menu dropdown-menu-right">
                                                                                    <ul class="link-list-opt no-bdr">

                                                                                        <li><a
                                                                                                href="chairman/view_resident_details.php?id=<?php echo $row['id'] ?>"><em
                                                                                                    class="icon ni ni-eye"></em><span>View
                                                                                                    Details</span></a>
                                                                                        </li>

                                                                                        <li><a
                                                                                                href="chairman/give_id_card.php?id=<?php echo $row['id'] ?>"><em
                                                                                                    class="icon ni ni-property"></em><span>Give
                                                                                                    Id Card</span></a>
                                                                                        </li>
                                                                                        <li><a
                                                                                                href="chairman/give_birth_certificates.php?id=<?php echo $row['id'] ?>"><em
                                                                                                    class="icon ni ni-sign-cc-alt2"></em><span>Give
                                                                                                    Birth
                                                                                                    Certificates</span></a>
                                                                                        </li>





                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </td>
                                                            </tr>
                                                            <?php
                                                            }


                                                            ?>


                                                        </tbody>
                                                    </table>
                                                </div>

                                            </div>
                                        </div>
                                    </div><!-- .card-preview -->
                                </div>
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