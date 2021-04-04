<?php
    function showCandidate($poss){
      echo '<label class="checkbox">
                    <input type="radio" name="'.$poss["heirarchy_id"].'" id="vote" value="'.$poss["candidate_id"].'">
                    <span class="checkmark"></span>
                    <a href="#"><img src="'.$poss["photo"].'" class="candidate-photo" style="float: left; width: 100px; height: 100px;" alt="Candidate" ></a>
                    
                  <div class="candidate-info">';
            echo '<a href="#" id="F-CandidateName"><b> Candidate name:' .$poss["fname"]. " " . $poss["lname"]. '</b></a><br><a href="#" id="F-Partylist"> Party: ' .$poss["party_name"]. '</a><br><a href="#" id="F-Platform"> Platform: ' . $poss["platform_info"]. '</a>
          </div>
               </label>';

    }

    function generateBallot($positions){
      session_start();
        $voter_glvl = $_SESSION['grade_level'];
        $heir_id = 0;
        echo'    <div>';
        $counter = 0;
        while($poss = $positions->fetch_assoc()){   // loop through all positions
            if(($poss["vote_allow"] == 0 && $voter_glvl == $poss["grade_level"]) || $poss["vote_allow"] == 1){
            // insert position div here
            if($heir_id != $poss["heirarchy_id"]){
                $heir_id = $poss["heirarchy_id"];
                if(($counter % 2) != 0){
                  echo'    </div>';
                }
                echo'    </div>';
                echo' <div id="F-container">';
                $counter = 0;
                echo '<a href="#" id="F-position" style="float: left;">'.$poss["position_name"].'</a><hr>';
                echo '<div><label class="checkbox"><input type="radio" name="'.$poss["heirarchy_id"].'"  id="vote" value = "Abstain"><span class="checkmark"></span><b> Abstain </b></label></div>';
                // insert candidate divs here

                    echo '<div class="candidate-box" >';
                     // display abstain choice
                        echo '<div>';
                        // display candidate
                          showCandidate($poss);
                // end of candidate div
                        echo'</div>';
                $counter++;
            // end of position div 
            }
            else{
                if(($counter % 2) != 0){
                        echo '<div>';
                        // display candidate
                          showCandidate($poss);
                // end of candidate div
                        echo'</div>
                            </div>';
                     $counter++;
                   }
                   else{
                    echo '<div class="candidate-box" >';
                        echo '<div>';
                        // display candidate
                          showCandidate($poss);
                // end of candidate div
                        echo'</div>';
                     $counter++;
                   }
    
            }
          }

        }
        echo'    </div>';
    }


?>

