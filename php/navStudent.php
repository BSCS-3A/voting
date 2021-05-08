<?php
// session_start();

// if (isset($_SESSION['student_id']) && isset($_SESSION['bumail'])) {
//     $idletime=900;//after 15 minutes the user gets logged out

// if (time()-$_SESSION['timestamp']>$idletime){
//     //$_GET['inactivityError'] = "Session ended: You are logged out due to inactivity.";
//     header("Location: StudentLogout.php");
// }else{
//     $_SESSION['timestamp']=time();
// }
 ?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta charset="utf-8">
    <link rel="icon" href="../img/BUHS LOGO.png" type="image/png">
    <link rel="stylesheet" href="../css/student_css/bootstrap_studDash.css">
    <link rel="stylesheet" href="../css/student_css/font-awesome_studDash.css">
    <link rel="stylesheet" type="text/css" href="../css/student_css/style_studNav.css">
    <link rel="stylesheet" type="text/css" href="../css/student_css/modal_error_messages.css">
    <!-- <link rel="stylesheet" href="../css/student_css/style_studnav.css"> -->
    <!-- <link rel="stylesheet" type="text/css" href="../css/student_css/style_studDash.css"> -->
    <script src="../js/scripts.js"></script>
    <title>BUCEILS HS Online Voting System</title>
</head>

<body>
    <!--navbar-->
    <nav id="nav-container">
        <input id="nav-toggle" type="checkbox">
        <div class="Alogo">
            <h2><a class="Atext-link" href="StudentDashboard.php">BUCEILS HS</a></h2>
            <h3><a class="Atext-link" href="StudentDashboard.php">ONLINE VOTING SYSTEM</a></h3>
        </div>
        <label for="btn" class="Aicon"><span class="fa fa-bars"></span></label>
        <input type="checkbox" id="btn">
        <ul>
            <li>
                <label for="btn-1" class="Ashow">VOTE</label>
                <a class="topnav" href="#">VOTE</a>
            </li>
            <li>
                <label for="btn-2" class="Ashow">ELECTION</label>
                <a class="Atopnav" href="#">ELECTION</a> 
                <input type="checkbox" id="btn-2">
                <ul>
                    <li><a href="#" class="Aelec-text">ELECTION PROCESS</a></li>
                    <li><a href="#">ARCHIVE</a></li>
                    <li><a href="#">RESULTS</a></li>
                </ul>
            </li>
            <li>
                <label for="btn-3" class="Ashow">CANDIDATES</label>
                <a class="Atopnav" href="Student_CandView.php">CANDIDATES</a>
            </li>
            <li>
                <label for="btn-4" class="Ashow">CHAT US</label>
                <a class="Atopnav" href="#">CHAT US</a>
            </li>
            <li>
                <label for="btn-5" class="Ashow"><?php //echo $_SESSION['fname']." ".$_SESSION['lname']; ?></label>
                <a class="Auser" href="#"><img class="Auser-profile" src="../img/user.png"></a>
                <input type="checkbox" id="btn-5">
                <ul>
                    <li><a href="#" class="Aelec-text"><?php //echo $_SESSION['fname']." ".$_SESSION['lname']; ?></a></li>
                    <li><a href="StudentLogout.php">LOGOUT</a></li>
                </ul>
            </li>
        </ul>    
    </nav>
 
    <!-- Error Message Modal content -->
    <div id="No-election-scheduled" class="F-modal-error">
        <div class="F-modal-content-error">
          <div class="F-modal-header-error">
          </div>
          <div class="F-modal-body-error">
            <p id = "F-modal-message-text">.</p>
          </div>
          <div class="F-modal-footer-error">
            <button type="button" id="ok-button" class="F-OkBTN-error">OK</button>
          </div>
        </div>
    </div>
    <!-- for modal script and disabling inspect element -->
    <script src="../js/scripts_nav.js"></script>
    
    

    <!--Footer-->
    <!-- <footer>
        BS COMPUTER SCIENCE 3A © 2021
    </footer> -->


    <div class="footer">
        <p class="footer-txt">BS COMPUTER SCIENCE 3A © 2021</p>
    </div>

    <!--End of Footer-->

    <script>
        $('.icon').click(function () {
            $('span').toggleClass("cancel");
        });
    </script>
</body>

</html>
