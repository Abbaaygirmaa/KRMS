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
$resident_username = $_SESSION['userName'];
if (isset($_POST['send'])) {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $transformKebel = $_POST['transformKebel'];
    $select_resident = mysqli_query($conn, "SELECT * FROM `resident` WHERE residentUsername = '$resident_username'");
    $num_row = mysqli_num_rows($select_resident);
    if ($num_row > 0) {
        $send = mysqli_query($conn, "INSERT INTO `transform_list`(`resident_username`, `title`, `description`, `transformKebel`)
    VALUES ('$resident_username','$title','$description','$transformKebel')");
        if ($send) {
?>
<script>
alert('Request sent')
</script>
<?php
        }
    } else {
        ?>
<script>
alert('You are not resident')
</script>
<?php

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
                                    <div class="card col-md-6">
                                        <div class="card-body">
                                            <div class="card-title">Send Request</div>
                                            <form action="resident/send_request.php" method="post">
                                                <div class="from-group">
                                                    <label for="">Title</label>
                                                    <input type="text" name="title" class="form-control"
                                                        value="ጉዳዮ መሽኛ ስልመጥየቅ ይሆናል" readonly>
                                                </div>
                                                <div class="from-group mt-2">
                                                    <label for="description">Description/የሚለቁበት ምክያት</label>
                                                    <textarea class="form-control" name="description" id="description"
                                                        cols="30" rows="5"></textarea>
                                                </div>
                                                <div class="form-group mt-2">
                                                    <label for="">Transform kebele/ መሸኘት የሚፈልጉብት ቀበሌ</label>
                                                    <select name="transformKebel" class="form-control"
                                                        id="transformKebel">
                                                        <?php
                                                        $select_job_location = mysqli_query($conn, "SELECT * FROM `user` WHERE role = 'recordOfficer'");
                                                        while ($row = mysqli_fetch_assoc($select_job_location)) {
                                                            $joblocation = $row['jobLocation'];
                                                        ?>
                                                        <option value="<?php echo $joblocation ?>">
                                                            <?php echo $joblocation ?></option>
                                                        <?php
                                                        }
                                                        ?>


                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <button type="submit" name="send"
                                                        class="btn btn-primary">send</button>
                                                </div>


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
    <script src="./assets/js/bundle.js?ver=2.4.0"></script>
    <script src="./assets/js/scripts.js?ver=2.4.0"></script>
    <script src="./assets/js/charts/gd-default.js?ver=2.4.0"></script>
</body>

</html>