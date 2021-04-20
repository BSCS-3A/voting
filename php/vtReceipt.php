<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta charset="utf-8">
    <link rel="icon" href="../img/BUHS LOGO.png" type="image/png">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="../css/layout.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="../css/errors.css">
    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <title>Download receipt</title>
</head>

<body>
    <?php
        include 'navstudent.php';
        require "connect.php";
	      require "vtValSan.php";
    ?>
    <header id="F-header" style="text-align:center"><b>VOTE RECEIPT</b></header><br>

    <main>
      <div id="download-receipt-page" class="F-download-receipt-page">			
				<div id="election-finished-msg" class="error-message">
          <div id="F-receipt-message" class="F-receipt-message">
            <!-- insert message here -->
            <?php
              if(isValidUser($conn)){
                if(isValidTime()){// Not yet implemented
                  if(!isVoted($conn)){
                    require "vtSubmit.php";
                    echo "<h3>Your votes were submitted successfully! Here is a copy of your vote receipt</h3>";
                  }
                  else{ // Already Voted
                      echo "<h3>You have already voted Here is a copy of your vote receipt.</h3>";
                  }
                }
              }
              else{ // Invalid user; destroy session and return to login
                session_unset();    // remove all session variables
                session_destroy();  // destroy session
                header("Location: ../index.php");
            }
            ?>
          </div>
          <div id="receipt-page-buttons" class="F-receipt-page-buttons">
            <button type="button" class="F-downloadReceiptBTN" id="dl-receipt">Download Receipt</button>
            <button type="button" class="F-goToHomeBTN" id="gt-home">Go to Home</button>
          </div>
        </div>
      </div>
    </main>

    <script>
      // Get Download Receipt button
      var download = document.getElementById("dl-receipt");

      // Get Home button
      var home = document.getElementById("gt-home");

      download.onclick = function() {
        location.href = "PDF/generatepdf.php";
      }

      home.onclick = function() {
        location.href = "/*Dashboard*/";
      }

    </script>
</body>

</html>
