<?php
    function showCandidate($poss){

    }

    function generateBallot($table){
        session_start();
        // $voter_glvl = $_SESSION['grade_level'];
        $vote_glvl = 7;
        $heir_id = 0;
        echo'    <div>';
        $counter = 0;
        while($poss = $table->fetch_assoc()){   // loop through all positions
            if(($poss["vote_allow"] == 0 && $vote_glvl == $poss["grade_level"]) || $poss["vote_allow"] == 1)
            if($heir_id != $poss["heirarchy_id"]){
                $heir_id = $poss["heirarchy_id"];
                // insert position div here
                 if(($counter % 2) != 0){
                  echo'    </div>';
                }
                echo'    </div>';
                echo' <div id="F-container">';
                $counter = 0;
                echo '<a href="#" id="F-position" style="float: left;">'.$poss["position_name"].'</a><hr>';
                // insert candidate divs here
                    echo '<div class="candidate-box" >';
                    echo '<div><label class="checkbox"><input type="radio" name="'.$poss["heirarchy_id"].'"  id="vote" value = "Abstain"><span class="checkmark"></span><br><br><b> Abstain </b></label></div></div>'; // display abstain choice
                        echo '<div class="candidate-box" >';
                        echo '<div>
                                       <label class="checkbox">
                                           <input type="radio" name="'.$poss["heirarchy_id"].'" id="vote" value="'.$poss["candidate_id"].'">
                                           <span class="checkmark"></span>
                                                   <a href="#"><img src="'.$poss["photo"].'" class="candidate-photo" style="float: left; width: 100px; height: 100px;" alt="' . $poss["fname"]. " " . $poss["lname"]  . '" ></a>
                                                   <div class="candidate-info">';
                
                        // display candidate
                        echo '<a href="#" id="F-CandidateName"><b> Candidate name:' . $poss["fname"]. " " . $poss["lname"]  . '</b></a><br><a href="#" id="F-Partylist"> Party: ' . $poss["party_name"]. '</a><br><a href="#" id="F-Platform"> Platform: ' . $poss["platform_info"]. '</a>';
                // end of candidate div
                 echo'                              </div>
                                        </label>
                                </div>';
                     $counter++;
            // end of position div
               
            
             
            }
            else{
              if(($counter % 2) != 0){
                        echo '<div>
                                       <label class="checkbox">
                                           <input type="radio" name="'.$poss["heirarchy_id"].'" id="vote" value="'.$poss["candidate_id"].'">
                                           <span class="checkmark"></span>
                                                    <a href="#"><img src="'.$poss["photo"].'" class="candidate-photo" style="float: left; width: 100px; height: 100px;" alt="' . $poss["fname"]. " " . $poss["lname"]  . '" ></a>
                                                   <div class="candidate-info">';
                
                        // display candidate
                        echo '<a href="#" id="F-CandidateName"><b> Candidate name:' . $poss["fname"] . " " . $poss["lname"]  . '</b></a><br><a href="#" id="F-Partylist"> Party: ' . $poss["party_name"]. '</a><br><a href="#" id="F-Platform"> Platform: ' . $poss["platform_info"]. '</a>';
                // end of candidate div
                 echo'                              </div>
                                        </label>
                                </div>
                     </div>';
                     $counter++;
                   }
                   else{
                    echo '<div class="candidate-box" >';
                    echo '<div>
                                       <label class="checkbox">
                                           <input type="radio" name="'.$poss["heirarchy_id"].'" id="vote" value="'.$poss["candidate_id"].'">
                                           <span class="checkmark"></span>
                                                    <a href="#"><img src="'.$poss["photo"].'" class="candidate-photo" style="float: left; width: 100px; height: 100px;" alt="' . $poss["fname"]. " " . $poss["lname"]  . '" ></a>
                                                   <div class="candidate-info">';
                
                        // display candidate
                        echo '<a href="#" id="F-CandidateName"><b> Candidate name:' . $poss["fname"] . " " . $poss["lname"]  . '</b></a><br><a href="#" id="F-Partylist"> Party: ' . $poss["party_name"]. '</a><br><a href="#" id="F-Platform"> Platform: ' . $poss["platform_info"]. '</a>';
                // end of candidate div
                 echo'                              </div>
                                        </label>
                                </div>';
                     $counter++;
                   }
            }
        }
        echo'    </div>';
    }
?>
