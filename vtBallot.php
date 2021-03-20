<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta charset="utf-8">
    <link rel="icon" href="img/BUHS LOGO.png" type="image/png">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <title>BUCEILS HS Vote</title>
</head>

<body>
    <?php
        include 'html/navbar.html';
    ?>

    <header id="F-header" style="text-align:center"><b>STUDENT LEADER ELECTION</b></header><br>

    <main>
        <!--Candidates-->
        <div id="voting-page">
               <?php
                    require 'php/connect.php';
                    require 'php/vtFetch.php';
                ?>
                <a href="#">
                    <div id="vote-button"><button class="btn" >SUBMIT</button></div>
                </a>

        </div>
     </main>
     <br>

    <?php
        include 'html/footer.html';
        require 'php/vtPreview.php';
        require 'php/vtReceipt.php';
        require 'php/vtConfirm.php';
        // require 'php/vtSubmit.php';
    ?>
</body>

</html>
