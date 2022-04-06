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

$all  = "SELECT * FROM `resident`";
$select_all = mysqli_query($conn, $all);
$count_all = mysqli_num_rows($select_all);

// For MaritalStatus
$Single = "SELECT * FROM `resident` WHERE `maritalStatus`='Unmarried'";
$Divorce = "SELECT * FROM `resident` WHERE `maritalStatus`='Divorce'";
$Married = "SELECT * FROM `resident` WHERE `maritalStatus`='Married'";
$Widowed = "SELECT * FROM `resident` WHERE `maritalStatus`='Widowed'";
$select_users_Single = mysqli_query($conn, $Single);
$select_users_Divorce = mysqli_query($conn, $Divorce);
$select_users_Married = mysqli_query($conn, $Married);
$select_users_Widowed = mysqli_query($conn, $Widowed);
// For MariralStatus
$count_single = mysqli_num_rows($select_users_Single);
$count_married = mysqli_num_rows($select_users_Married);
$count_divorce = mysqli_num_rows($select_users_Divorce);
$count_Widowed = mysqli_num_rows($select_users_Widowed);

$count_single = (($count_single / $count_all) * 100);
$count_married = (($count_married / $count_all) * 100);
$count_divorce = (($count_divorce / $count_all) * 100);
$count_Widowed = (($count_Widowed / $count_all) * 100);


if (!$select_users_Single && !$select_users_Divorce && !$select_users_Married) {

    die("QUERY FAILED" . mysqli_error($conn));
}


if ($count_single == 0) {

    echo "<h1> NO RESULT</h1>";
}

$dataPoints = array(
    array("label" => "Singel", "y" => $count_single),
    array("label" => "Divorce", "y" => $count_divorce),
    // array("label" => "Yemotebet", "y" => $count_divorce),
    array("label" => "Married", "y" => $count_married),
    array("label" => "Widowed", "y" => $count_Widowed)

);



// For Gender

$male = "SELECT * FROM `resident` WHERE `gender`='male'";
$female = "SELECT * FROM `resident` WHERE `gender`='female'";


$select_users_male = mysqli_query($conn, $male);
$select_users_female = mysqli_query($conn, $female);

$count_male = mysqli_num_rows($select_users_male);
$count_female = mysqli_num_rows($select_users_female);
$count_male = (($count_male / $count_all) * 100);
$count_female = (($count_female / $count_all) * 100);



$dataPoints1 = array(
    array("label" => "Male", "y" => $count_male),
    array("label" => "Female", "y" => $count_female)
);
$id_card = mysqli_query($conn, "SELECT * FROM `id_card` WHERE 1");
$id_card_num = mysqli_num_rows($id_card);
$id_card_num = (($id_card_num / $count_all) * 100);
$counALL = $count_all - $id_card_num;
$counALL = (($counALL / $count_all) * 100);


$dataPoints2 = array(
    array("label" => "Have ID Card", "y" => $count_all),
    array("label" => "no ID", "y" => $id_card_num)
);
// Education Status


$Elementary = "SELECT * FROM `resident` WHERE `levelOfEducation`='Elementary'";
$Secondary = "SELECT * FROM `resident` WHERE `levelOfEducation`='Junior Secondary'";
$TVET = "SELECT * FROM `resident` WHERE `levelOfEducation`='(TVET) Level III Diploma'";
$Bachelor = "SELECT * FROM `resident` WHERE `levelOfEducation`='Bachelor of Education'";
$Master = "SELECT * FROM `resident` WHERE `levelOfEducation`='Master'";
$other = "SELECT * FROM `resident` WHERE `levelOfEducation`='other'";

$select_users_Elementary = mysqli_query($conn, $Elementary);
$select_users_Secondary = mysqli_query($conn, $Secondary);
$select_users_TVET = mysqli_query($conn, $TVET);
$select_users_Bachelor = mysqli_query($conn, $Bachelor);
$select_users_master = mysqli_query($conn, $Master);

$select_users_other = mysqli_query($conn, $other);

// For MariralStatus
$count_Elementary = mysqli_num_rows($select_users_Elementary);
$count_TVET = mysqli_num_rows($select_users_TVET);
$count_Secondary = mysqli_num_rows($select_users_Secondary);
$count_Bachelor = mysqli_num_rows($select_users_Bachelor);
$count_master = mysqli_num_rows($select_users_master);

$count_other = mysqli_num_rows($select_users_other);


$count_Elementary = (($count_Elementary / $count_all) * 100);
$count_TVET = (($count_TVET / $count_all) * 100);
$count_Secondary = (($count_Secondary / $count_all) * 100);
$count_Bachelor = (($count_Bachelor / $count_all) * 100);
$count_master = (($count_master / $count_all) * 100);

$count_other = (($count_other / $count_all) * 100);



if (!$select_users_Elementary && !$select_users_Secondary && !$select_users_TVET) {

    die("QUERY FAILED" . mysqli_error($conn));
}


if ($count_single == 0) {

    echo "<h1> NO RESULT</h1>";
}

$dataPoints3 = array(
    array("label" => "Elementary", "y" => $count_Elementary),
    array("label" => "Junior Secondary", "y" => $count_Secondary),
    array("label" => "Master", "y" => $count_master),
    array("label" => "(TVET) Level III Diploma", "y" => $count_TVET),
    array("label" => "Bachelor of Education", "y" => $count_Bachelor),
    array("label" => "Other", "y" => $count_other)


);




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
                                    <script>
                                    window.onload = function() {


                                        var chart = new CanvasJS.Chart("chartContainer", {
                                            theme: "light2",
                                            animationEnabled: true,
                                            exportEnabled: true,
                                            title: {
                                                text: "Kebel Management System Statistics Total Resident= <?php echo   $count_all ?>  "

                                            },
                                            data: [{
                                                type: "pie",
                                                indexLabel: "{y}",
                                                yValueFormatString: "#,##0.00\"%\"",
                                                indexLabelPlacement: "inside",
                                                indexLabelFontColor: "#36454F",
                                                indexLabelFontSize: 18,
                                                indexLabelFontWeight: "bolder",
                                                showInLegend: true,
                                                legendText: "{label}",
                                                dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
                                            }]
                                        });
                                        chart.render();
                                        var chart1 = new CanvasJS.Chart("chartContainer1", {
                                            theme: "dark",
                                            animationEnabled: true,
                                            exportEnabled: true,
                                            title: {
                                                text: "Kebel Management Gender Statistics  Total Resident= <?php echo   $count_all ?>  "

                                            },
                                            data: [{
                                                type: "pie",
                                                indexLabel: "{y}",
                                                yValueFormatString: "#,##0.00\"%\"",
                                                indexLabelPlacement: "inside",
                                                indexLabelFontColor: "#36454F",
                                                indexLabelFontSize: 18,
                                                indexLabelFontWeight: "bolder",
                                                showInLegend: true,
                                                legendText: "{label}",
                                                dataPoints: <?php echo json_encode($dataPoints1, JSON_NUMERIC_CHECK); ?>
                                            }]
                                        });
                                        chart1.render();
                                        var chart2 = new CanvasJS.Chart("chartContainer2", {
                                            theme: "dark",
                                            animationEnabled: true,
                                            exportEnabled: true,
                                            title: {
                                                text: "Kebele Management Gender Statistics  Total Resident= <?php echo   $count_all ?>  "

                                            },
                                            data: [{
                                                type: "pie",
                                                indexLabel: "{y}",
                                                yValueFormatString: "#,##0.00\"%\"",
                                                indexLabelPlacement: "inside",
                                                indexLabelFontColor: "#36454F",
                                                indexLabelFontSize: 18,
                                                indexLabelFontWeight: "bolder",
                                                showInLegend: true,
                                                legendText: "{label}",
                                                dataPoints: <?php echo json_encode($dataPoints2, JSON_NUMERIC_CHECK); ?>
                                            }]
                                        });
                                        chart2.render();

                                        var chart3 = new CanvasJS.Chart("chartContainer3", {
                                            theme: "dark",
                                            animationEnabled: true,
                                            exportEnabled: true,
                                            title: {
                                                text: "Kebele Management Education Statistics  Total Resident= <?php echo   $count_all ?>  "

                                            },
                                            data: [{
                                                type: "pie",
                                                indexLabel: "{y}",
                                                yValueFormatString: "#,##0.00\"%\"",
                                                indexLabelPlacement: "inside",
                                                indexLabelFontColor: "#36454F",
                                                indexLabelFontSize: 18,
                                                indexLabelFontWeight: "bolder",
                                                showInLegend: true,
                                                legendText: "{label}",
                                                dataPoints: <?php echo json_encode($dataPoints3, JSON_NUMERIC_CHECK); ?>
                                            }]
                                        });
                                        chart3.render();
                                    }
                                    </script>
                                    <div id="chartContainer" style="height: 370px; width: 100%;">

                                    </div>
                                    <div id="chartContainer1" style="height: 370px; width: 100%;"></div>
                                    <div id="chartContainer2" style="height: 370px; width: 100%;"></div>
                                    <div id="chartContainer3" style="height: 370px; width: 100%;"></div>

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
    <script src="./assets/js/canvasjs.min.js"></script>
    <script src="./assets/js/bundle.js?ver=2.4.0"></script>
    <script src="./assets/js/scripts.js?ver=2.4.0"></script>
    <script src="./assets/js/charts/gd-default.js?ver=2.4.0"></script>
</body>

</html>