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
        require 'connect.php'; // Remove this when compiling
        include '../html/navbar.html';
        require 'vtSanVal.php';
        // insert ajax here (jquery)
        // for automatic time based access control
        require 'vtFetch.php';
        // require 'php/vtConfirm.php';
        // require 'php/vtSubmit.php';
    ?>

    <header id="F-header" style="text-align:center"><b>STUDENT LEADER ELECTION</b></header><br>

    <main>
        <!--Candidates-->
        <form id = "main-form" method="POST" action = "
        <?php 
        // echo 'vtConfirm.php'; 
        // echo 'vtPreview.php';
        echo 'vtSubmit.php';
        // echo htmlspecialchars($_SERVER["PHP_SELF"])."?id=2";
        ?>" class="vtBallot" id="vtBallot">
        <div id="voting-page">
               <?php
                    if(isValidTime()){// Not yet implemented
                        if(isValidUser($conn)){
                            if(!isVoted($table)){
                                generateBallot($table);
                                require 'vtPreview.php';
                                require 'vtReceipt.php';
                            }
                        }
                        else{
                            // destroy session and return to login
                        }
                    }
                ?>
                <!-- <form method = "POST" action = "vtPreview.php"> -->
                    <div id="vote-button"><button id="vote-btn" name = "vote-button" class="btn" type = "button">SUBMIT</button></div>
                <!-- </form> -->
        </div>
        </form>
     </main>
     <br>

    <?php
        include '../html/footer.html';
    ?>
    <script src = "../js/modals.js"></script>
 </body>

</html>
