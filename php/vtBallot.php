<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta charset="utf-8">
    <link rel="icon" href="../img/BUHS LOGO.png" type="image/png">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="../js/scripts.js"></script>
    <title>BUCEILS HS Vote</title>
</head>

<body>
    <?php
        require 'vtSanVal.php';
        // insert ajax here (jquery)
        // for automatic time based access control
        require 'connect.php';
        include '../html/navbar.html';
        require 'vtFetch.php';
        
        // require 'php/vtConfirm.php';
        // require 'php/vtSubmit.php';
    ?>

    <header id="F-header" style="text-align:center"><b>STUDENT LEADER ELECTION</b></header><br>

    <main>
        <!--Candidates-->
        <!-- <form method="POST" action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" class="vtBallot" id="vtBallot"> -->
        <div id="voting-page">
               <?php
                    generateBallot($table, $_SESSION['grade_level']);
                ?>
                    <div id="vote-button"><button id="vote-btn" name = "vote-button" class="btn" >SUBMIT</button></div>
        </div>
        <!-- </form> -->
     </main>
     <br>

    <?php
        include '../html/footer.html';
        require 'vtPreview.php';
        require 'vtReceipt.php';
    ?>
    <script src = "../js/modals.js"></script>
</body>

</html>
