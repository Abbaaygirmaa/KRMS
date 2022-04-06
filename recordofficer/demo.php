<?php include '../database/database.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    if (isset($_POST['send'])) {

        echo $birthday = $_POST['date'];
        echo $_age = floor((time() - strtotime($birthday)) / 31556926);
        if ($_age < 18) {
            echo "age must be above 18";
        }
    }
    ?>
    <form action="" method="post">

        <input type="date" name="date" id="" value="<?php echo $_POST['date']; ?>">
        <button type="submit" name='send'>Send</button>
    </form>

</body>

</html>