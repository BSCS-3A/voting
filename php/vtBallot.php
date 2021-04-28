<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" href="../img/BUHS LOGO.png" type="image/png">
    <link rel="stylesheet" href="../css/student_css/bootstrap_vote.css">
    <link rel="stylesheet" href="../css/student_css/font-awesome_vote.css">
    <link rel="stylesheet" type="text/css" href="../css/student_css/bootstrap.min_vote.css">
    <link rel="stylesheet" type="text/css" href="../css/student_css/bootstrap_vote.css">
    <link rel="stylesheet" type="text/css" href="../css/student_css/vote_ballot.css">
    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="../js/scripts.js"></script>
    <title>BUCEILS HS Vote</title>
</head>

<body>
    <?php
        require 'connect.php'; // Remove this when compiling
        require 'vtValSan.php';
        require 'vtFetch.php';

        if(isValidUser($conn)){
            if(!isVoted($conn)){
                $sched_row = $conn->query("SELECT * FROM `vote_event` WHERE `vote_event_id` = 1");
                $sched = $sched_row->fetch_assoc();
                
                
                if(empty($sched)){
                    errorMessage("No election has been scheduled");
                    // header("Location: ../html/no_election_scheduled.html");
                    // exit();
                }
                else{
                    $start_time = strtotime($sched['start_date']);
                    $end_time = strtotime($sched['end_date']);
                    $access_time = time();
                    
                    echo "Start: ".(date("Y-m-d h:m:sa", $start_time))."<br>";
                    echo "End: ".(date("Y-m-d h:m:sa", $end_time))."<br>";
                    echo "Now: ".(date("Y-m-d h:m:sa", $access_time))."<br>";
                    
                    if($access_time > $end_time){
                        errorMessage("Election is already finished");
                        // header("Location: ../html/election_finished.html");
                        // exit();
                    }
                    else if($access_time < $start_time){
                        errorMessage("Election has not yet started");
                        // header("Location: ../html/election_not_yet_started.html");
                        // exit();
                    }
                    else if($access_time >= $start_time && $access_time <= $end_time){
                        include 'navstudent.php';
                        echo '<header id="F-header"  style="text-align: center;"><b>STUDENT LEADER ELECTION</b></header><br>';
                        echo '<main>';
                        echo '<form id = "main-form" method="POST" action = "vtReceipt.php" class="vtBallot" id="vtBallot"><div id="voting-page">';

                        $table = $conn->query("SELECT * FROM ((candidate INNER JOIN student ON candidate.student_id = student.student_id) INNER JOIN candidate_position ON candidate.position_id = candidate_position.position_id) ORDER BY candidate_position.heirarchy_id"); // get positions
                        // echo isValidCandidate($table, "5", 1); //

                        generateBallot($table);
                        require 'vtConfirm.php';
                        echo '</div>';
                        echo '<div id="vote-button"><button id="vote-btn" name = "vote-button" class="vote-btn" type = "button">SUBMIT</button></div>
                        </form>';
                        echo '</main>';
                        echo '<br>
                        <script src = "../js/modals.js"></script>';
                    }
                }
            }
            else{ // Already Voted
                header("Location: vtReceipt.php");
                exit();
            }
        }
        else{ // Invalid user; destroy session and return to login
            notifyAdmin("Warning: A user with invalid credentials attmpted to access the Voting Page");
            session_unset();    // remove all session variables
            session_destroy();  // destroy session
            header("Location: ../index.php");
            exit();
        }
    ?>
 </body>

</html>