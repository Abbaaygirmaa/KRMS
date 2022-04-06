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

    $select_resident = mysqli_query($conn, "SELECT * FROM `resident` WHERE residentUsername = '$resident_username'");
    $num_row = mysqli_num_rows($select_resident);
    // check id request already send
    $select_resident_id = mysqli_query($conn, "SELECT * FROM `request_id_card` WHERE  resident_username = '$resident_username'");
    $num_row_id = mysqli_num_rows($select_resident_id);
    if ($num_row > 0) {
        if ($num_row_id > 0) {
?>
<script>
alert('already sent request pls wait')
</script>
<?php
        } else if ($num_row_id <= 0) {
            $send = mysqli_query($conn, "INSERT INTO `request_id_card`(`resident_username`, `title`, `description`) VALUES ('$resident_username','$title','$description')");

        ?>
<script>
alert('Request send')
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
                                            <div class="card-title">Request ID Card</div>
                                            <form action="resident/request_id_card.php" method="post">
                                                <div class="from-group">
                                                    <label for="">Title</label>
                                                    <input type="text" name="title" class="form-control"
                                                        value="ጉዳዮ መታውቂያ  ስልመጥየቅ ይሆናል" readonly>
                                                </div>
                                                <div class="from-group mt-2">
                                                    <select name="description" class="form-control" id="description">
                                                        <option value="renewal Id Card">renewal Id Card</option>
                                                        <option value="New Id Card">New Id Card</option>
                                                    </select>
                                                </div>


                                                <div class="form-group mt-2">
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