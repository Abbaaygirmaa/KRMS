<?php
include "../database/database.php";
$category_id = $_POST["category_id"];

$result = mysqli_query($conn, "SELECT * FROM user where username = '$category_id'");
?>

<?php
while ($row = mysqli_fetch_assoc($result)) {
?>

<div class="col-md-12">
    <div class="row">
        <div class="col-md-3">
            <div class="form-group">
                <label class="form-label" for="firstName">First
                    Name</label>
                <input type="text" id="firstName" name="firstName" class="form-control" placeholder="Enter First Name"
                    value="<?php echo $row['fullName'] ?>" readonly>
            </div>
        </div>
        <div class="col-md-2">
            <div class="form-group">
                <label class="form-label" for="nationality">Nationality</label>
                <input type="text" id="nationality" name="nationality" class="form-control"
                    placeholder="Enter Nationality" value="<?php echo $row['nationality'] ?>" readonly>
            </div>
        </div>
        <div class="col-md-2">
            <div class="form-group">
                <label class="form-label" for="kebele">Kebele</label>
                <input type="text" id="kebele" name="kebele" class="form-control" placeholder="Enter kebele"
                    value="<?php echo $row['kebele'] ?>" readonly>
            </div>
        </div>
        <div class="col-md-2">
            <div class="form-group">
                <label class="form-label" for="woreda">Woreda</label>
                <input type="text" id="woreda" name="woreda" class="form-control" placeholder="Enter Woreda"
                    value="<?php echo $row['woreda'] ?>" readonly>
            </div>
        </div>
        <div class="col-md-1">
            <div class="form-group">

                <input type="text" id="middleName" name="middleName" class="form-control"
                    placeholder="Enter Middle Name" value="" hidden>
            </div>
        </div>
        <div class="col-md-1">
            <div class="form-group">

                <input type="text" id="lastName" name="lastName" class="form-control" placeholder="Enter Last Name"
                    value="" hidden>
            </div>
        </div>
    </div>
</div>
<?php
}
?>