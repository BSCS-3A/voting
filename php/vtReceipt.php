<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta charset="utf-8">
    <link rel="icon" href="../img/BUHS LOGO.png" type="image/png">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="../css/vote-message.css">
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

		<header id="F-header"  style="text-align: center;"><b>VOTE RECEIPT</b></header><br>

		<main>
			<div id="download-receipt-page" class="F-download-receipt-container">
				<div class="F-receipt-message">
					<?php
              			if(isValidUser($conn)){
                			if(!isVoted($conn)){
                    		$sched_row = $conn->query("SELECT * FROM `vote_event` WHERE `vote_event_id` = 1");
                    		$sched = $sched_row->fetch_assoc();

                    		$start_time = strtotime($sched['start_date']);
                    		$end_time = strtotime($sched['end_date']);
                    		$access_time = time();

                    		if(empty($sched)){
                        	header("Location: ../html/no_election_scheduled.html");
                        	exit();
                    		}
                    		else if($access_time > $end_time){
                        	header("Location: ../html/election_finished.html");
                        	exit();
                    		}
                    		else if($access_time < $start_time){
                        	header("Location: ../html/election_not_yet_started.html");
                        	exit();
                    		}
                    		else if($access_time >= $start_time && $access_time <= $end_time){
                      		require "vtSubmit.php";
                      		echo "<h3>Your votes were submitted successfully! Here is a copy of your vote receipt</h3>";
                    		}
                		}
                		else{ // Already Voted
                  			echo "<h3>You have already voted. Here is a copy of your vote receipt.</h3>";
                		}
            			}
            			else{ // Invalid user; destroy session and return to login
              				session_unset();    // remove all session variables
              				session_destroy();  // destroy session
              				header("Location: ../index.php");
              				exit();
            				}
            			?>
        			</div>
			</div>
				<div id="receipt-page-buttons" class="F-receipt-page-buttons">
					<button type="button" class="F-downloadReceiptBTN">Download Receipt</button>
					<button type="button" class="F-goToHomeBTN">Go to Home</button>
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
