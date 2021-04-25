<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta charset="utf-8">
    <link rel="icon" href="../img/BUHS LOGO.png" type="image/png">
    <link rel="stylesheet" href="../css/student_css/bootstrap_vote.css">
    <link rel="stylesheet" href="../css/student_css/font-awesome_vote.css">
    <link rel="stylesheet" type="text/css" href="../css/student_css/vote-message.css">
    <!-- <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="../css/vote-message.css"> -->
    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <title>Download receipt</title>
</head>

<body>
	<?php
		require "connect.php";
		require "vtValSan.php";

    // $table = $conn->query("SELECT * FROM ((candidate INNER JOIN student ON candidate.student_id = student.student_id) INNER JOIN candidate_position ON candidate.position_id = candidate_position.position_id) ORDER BY candidate_position.heirarchy_id"); // get positions
    // echo isValidCandidate($table, 5, 1); //

    function receiptMsg($message){
      include 'navStudent.php';
      echo '<header id="F-header"  style="text-align: center;"><b>VOTE RECEIPT</b></header><br>';
        echo '<main>';
        echo '<div id="download-receipt-page" class="F-download-receipt-container">';
        echo '<div class="F-receipt-message">';
        echo "<h3>".$message."</h3>";
        echo '</div></div>';
        echo '<div id="receipt-page-buttons" class="F-receipt-page-buttons">
        <button type="button" class="F-downloadReceiptBTN">Download Receipt</button>
        <button type="button" class="F-goToHomeBTN">Go to Home</button>
      </div>
		</main>';
    }
    if(isValidUser($conn)){
      if(!isVoted($conn)){
        $sched_row = $conn->query("SELECT * FROM `vote_event` WHERE `vote_event_id` = 1");
        $sched = $sched_row->fetch_assoc();

        
        if(empty($sched)){
          errorMessage("No election has been scheduled");
        }
        else{
          $start_time = strtotime($sched['start_date']);
          $end_time = strtotime($sched['end_date']);
          $access_time = time();

          if($access_time > $end_time){
              errorMessage("Election is already finished");
          }
          else if($access_time < $start_time){
              errorMessage("Election has not yet started");
          }
          else if($access_time >= $start_time && $access_time <= $end_time){
            require "vtSubmit.php";
            receiptMsg("Your votes were submitted successfully! Here is a copy of your vote receipt");
          }
        } 
      }
      else{ // Already Voted
        receiptMsg("You have already voted. Here is a copy of your vote receipt.");
      }
    }
    else{ // Invalid user; destroy session and return to login
      session_unset();    // remove all session variables
      session_destroy();  // destroy session
      header("Location: ../index.php");
      exit();
    }
  ?>
          <!-- <embed src="PDF/generatepdf.php" width="600px" height="800px" /> -->
  <script>
        // Get Download Receipt button
        var download = document.getElementById("receipt-page-buttons");

        // Get Home button
        var home = document.getElementById("gt-home");

        download.onclick = function() {
        location.href = "PDF/generatepdf.php"; // generate reciept & show receipt
        }

        home.onclick = function() {
        location.href = "/*Dashboard*/";
        }
  </script>
</body>
</html>
