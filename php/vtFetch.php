<?php
    function showCandidate($poss, $conn){
        echo '<label class="checkbox">
            <input type="radio" name="'.$conn->real_escape_string($poss["heirarchy_id"]).'" id="vote" value="'.$conn->real_escape_string($poss["candidate_id"]).'" onclick="document.getElementById(\''.$conn->real_escape_string($poss['heirarchy_id']).'\').innerHTML = \''.$conn->real_escape_string($poss['fname'])." ".$conn->real_escape_string($poss['lname']).'\'">
                <span class="checkmark"></span>
                    <a href=""><img src="'.$conn->real_escape_string($poss["photo"]).'" class="candidate-photo" style="float: left; width: 100px; height: 100px;" alt="Candidate" ></a>
                    
                  <div class="candidate-info">';
                  
        echo '<a href="" id="F-CandidateName"><b> Name: ' .$conn->real_escape_string($poss["fname"]). " " . $conn->real_escape_string($poss["lname"]). '</b></a><br><a href="" id="F-Partylist"> Party: ' .$conn->real_escape_string($poss["party_name"]). '</a><br><a href="" id="F-Platform"> Platform: ' . $conn->real_escape_string($poss["platform_info"]). '</a>
        </div>
        </label>';

    }
    function showAbstain($poss, $conn){
        echo'<label class="checkbox"><input type="radio" name="'.$conn->real_escape_string($poss["heirarchy_id"]).'"  id="vote" value = "0" onclick="document.getElementById(\''.$conn->real_escape_string($poss["heirarchy_id"]).'\').innerHTML = \'Abstain\'"><span class="checkmark"></span><b> Abstain </b></label></div>';
    }

    function generateBallot($table, $conn){
        $heir_id = 0;
        echo'    <div>';
        $counter = 0;
        mysqli_data_seek($table, 0);
        while($poss = $table->fetch_assoc()){   // loop through all positions
            if(($poss["vote_allow"] == 0 && $_SESSION['grade_level'] == $poss["grade_level"]) || $poss["vote_allow"] == 1){
                // position div
                if($heir_id != $poss["heirarchy_id"]){
                    $heir_id = $poss["heirarchy_id"];
                    if(($counter % 2) != 0){
                        echo'</div>';
                    }
                    $counter = 0;
                    echo'</div>';
                    echo'<div id="F-container">';
                    echo'<a href="" id="F-position" style="float: left;">'.$conn->real_escape_string($poss["position_name"]).'</a><hr>';
                    // candidate div
                    echo'<div>';
                    showAbstain($poss, $conn);         // display abstain choice
                    echo'<div class="candidate-box" ><div>';
                    showCandidate($poss, $conn);       // display candidate
                    echo'</div>';               // end of candidate div
                    $counter++;
                // end of position div 
                }
                else{
                    if(($counter % 2) != 0){
                        echo '<div>';
                        showCandidate($poss, $conn);   // display candidate
                        echo'</div>';
                        echo'</div>';           // end of candidate div
                        $counter++;
                    }
                    else{
                    echo '<div class="candidate-box" >';
                        echo'<div>';
                        showCandidate($poss, $conn);   // display candidate
                        echo'</div>';           // end of candidate div
                        $counter++;
                    }
        
                }
            }

        }
        echo'    </div>';
    }
?>