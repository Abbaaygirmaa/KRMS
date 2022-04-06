<!DOCTYPE html>
<html lang="zxx" class="js">

<?php include 'include/header.php' ?>
<?php include 'database/database.php' ?>
<?php require 'include/session.php' ?>
  <link href="bs/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="css/cs.css" rel="stylesheet">
  <link href="css/styles.css" rel="stylesheet">
<!-- Navigation -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#"><img src="./images/favicon.png" alt=" General Logo" /></a>
    
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="indexa.php"><strong>Home</strong></a>
          </li>
          <li>
          
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true"
              aria-expanded="false"><strong>About US</strong>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
              <a class="dropdown-item" href="vi.html">Vision & Mission</a>
              <a class="dropdown-item" href="gg.html">Team</a>
            </div>
          </li>
          <li>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          </li>
          <li class="nav-item">
            <a class="nav-link" href="news.php"><strong>News</strong></a>
         
          </li>
          <li>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          </li>
          <li class="nav-item">
            <a class="nav-link" href="cont.html">
              <h><strong>Contact</strong></h></a>
          </li>
      <li>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</li>
        </ul>
      </div>

    </div>
  </nav>
  <!--End Navigation-->
    <!--Slider Controls-->
    <a class="carousel-control-prev" data-slide="prev" href="#carouselIndicators" role="button"><span class="sr-only">Previous</span></a>
    <a class="carousel-control-next" data-slide="next" href="#carouselIndicators" role="button"><span class="sr-only">Next</span></a>
  </div>
  <br>

<?php
$demo = "not working";
if (isset($_POST['login'])) {
    $username = $_POST['userName'];
    $password = md5($_POST['password']);

    $result = mysqli_query($conn, "SELECT `id`, `fullName`, `phoneNumber`, `age`, `nationality`, `woreda`, `kebele`, `role`, `jobLocation`, `userPhoto`, `username`, `password`, `date`,`status` FROM `user` WHERE `username` = '$username' AND `password` = '$password' AND `status` = 'active'");

    // $result = mysqli_query($conn, $sql);

    if ($result) {
        $numrows = mysqli_num_rows($result);
        if ($numrows == 1) {
            //store the result to a array and passed to variable found_user
            while ($row = mysqli_fetch_assoc($result)) {
                // $found_user  = mysqli_fetch_array($result);

                //fill the result to session variable
                $_SESSION['id']  = $row['id'];
                $_SESSION['userName'] = $row['username'];
                $_SESSION['userPhoto'] = $row['userPhoto'];
                $_SESSION['fullName'] = $row['fullName'];
                $_SESSION['phoneNumber'] = $row['phoneNumber'];
                $_SESSION['nationality'] = $row['nationality'];
                $_SESSION['jobLocation'] = $row['jobLocation'];
                $_SESSION['woreda'] = $row['woreda'];
                $_SESSION['kebele'] = $row['kebele'];
                $role  =  $row['role'];
                $_SESSION['role'] = $rol;
                // $_SESSION['status'] =
            }
            if ($role == "systemadministrator") {
                header("location:systemadministrator/index.php");
                $demo = "system administrator";
            } else if ($role == "chairMan") {
                header("location:chairman/index.php");
            } else if ($role == "recordOfficer") {
                header("location:recordofficer/index.php");
            } else if ($role == "resident") {
                header("location:resident/index.php");
            }else if ($role == "landadmin") {
                header("location:landadministrator/index.php");
            }else if ($role == "eventregistrar") {
                header("location:eventregistrar/index.php");
            }
        } else {
            //IF theres no result
?> 

<script type="text/javascript">
  
alert("Username or Password Not Registered! Contact Your administrator.");
window.location = "index.php";
</script>

<?php

        }
    }
}

?>

<body class="nk-body bg-white npc-general pg-auth">
    <div class="nk-app-root">
        <!-- main @s -->
        <div class="nk-main ">
            <!-- wrap @s -->
            <div class="nk-wrap nk-wrap-nosidebar">
                <!-- content @s -->
                <div class="nk-content ">
                    <div class="nk-split nk-split-page nk-split-md">
                        <div class="nk-split-content nk-block-area nk-block-area-column nk-auth-container bg-white">
                            <div class="absolute-top-right d-lg-none p-3 p-sm-5">
                                <a href="#" class="toggle btn-white btn btn-icon btn-light" data-target="athPromo"><em
                                        class="icon ni ni-info"></em></a>
                            </div>
                            <div class="nk-block nk-block-middle nk-auth-body">

                                <div class="nk-block-head">
                                    <div class="nk-block-head-content">
                                        <h5 class="nk-block-title">Sign-In</h5>
                                        <div class="nk-block-des">
                                            <p><strong>Access the kebele panel using your username and passcode.</strong></p>
                                        </div>
                                    </div>
                                </div><!-- .nk-block-head -->
                                <!-- <form> -->
                                <form action="index.php" method="post">
                                    <div class="form-group">
                                        <div class="form-label-group">
                                            <label class="form-label" for="default-01">Username</label>

                                            <button type="button" class="btn btn-sm btn-primary" data-toggle="popover"
                                                title="እርዳታ" data-content="በ ሲስተም አድሚኒስትሬተር የትሰጠዎትን username ያስገቡ">
                                                <span>help/እርዳታ</span>
                                            </button>
                                        </div>
                                        <input type="text" name="userName" class="form-control form-control-lg"
                                            id="default-01" placeholder="Enter your username">
                                    </div><!-- .foem-group -->
                                    <div class="form-group">
                                        <div class="form-label-group">
                                            <label class="form-label" for="password">Passcode</label>

                                        </div>
                                        <div class="form-control-wrap">
                                            <a tabindex="-1" href="#" class="form-icon form-icon-right passcode-switch"
                                                data-target="password">
                                                <em class="passcode-icon icon-show icon ni ni-eye"></em>
                                                <em class="passcode-icon icon-hide icon ni ni-eye-off"></em>
                                            </a>
                                            <input type="password" name="password" class="form-control form-control-lg"
                                                id="password" placeholder="Enter your passcode">
                                        </div>
                                    </div><!-- .foem-group -->
                                    <div class="form-group">
                                        <button type="submit" name="login"
                                            class="btn btn-lg btn-primary btn-block">Login</button>


                                    </div>
                                </form>

                                <!-- </form> -->
                                <!-- form -->

                            </div><!-- .nk-block -->

                        </div><!-- .nk-split-content -->
                        <?php include 'include/slide.php' ?>
                    </div><!-- .nk-split -->
                </div>
                <!-- wrap @e -->
            </div>
            <!-- content @e -->
        </div>
        <!-- main @e -->
    </div>
    <!-- app-root @e -->
    <?php include 'include/footer.php' ?>

</html>
</body>