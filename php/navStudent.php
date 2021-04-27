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
    <!-- <link rel="stylesheet" href="../css/student_css/style_studnav.css"> -->
    <!-- <link rel="stylesheet" type="text/css" href="../css/student_css/style_studDash.css"> -->
    
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

        window.addEventListener("auxclick", (event) => {
            if (event.button === 1) event.preventDefault();
        });
        document.addEventListener('contextmenu', function(e) {
          e.preventDefault();
        });

        $(document).keydown(function(e){ 
            if (event.keyCode == 123) { 
                return false; 
            } 
            if (e.ctrlKey && e.shiftKey && e.keyCode == 'A'.charCodeAt(0)) { 
                return false; 
            } 
            if (e.ctrlKey && e.shiftKey && e.keyCode == 'S'.charCodeAt(0)) { 
                return false; 
            } 
            if (e.ctrlKey && e.shiftKey && e.keyCode == 'D'.charCodeAt(0)) { 
                return false; 
            } 
            if (e.ctrlKey && e.shiftKey && e.keyCode == 'I'.charCodeAt(0)) { 
                return false; 
            } 
            if (e.ctrlKey && e.shiftKey && e.keyCode == 'C'.charCodeAt(0)) { 
                return false; 
            } 
            if (e.ctrlKey && e.shiftKey && e.keyCode == 'J'.charCodeAt(0)) { 
                return false; 
            } 
            if (e.ctrlKey && e.keyCode == 'U'.charCodeAt(0)) { 
                return false; 
            } 
        }); 
    </script>
</body>

</html>
