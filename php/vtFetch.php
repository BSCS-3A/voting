<?php
    function generateBallot($positions){
        $heir_id = 0;
        echo'    <div>';
        while($poss = $positions->fetch_assoc()){   // loop through all positions
            // insert position div here
            $cand = $poss["heirarchy_id"];
            if($heir_id != $cand){
                $heir_id = $cand;
                echo'    </div>';
                echo' <div id="F-container">';
                echo '<a href="#" id="F-position" style="float: left;">'.$poss["position_name"].'</a><hr>';
                // insert candidate divs here
                    echo '<div class="candidate-box" >';
                    echo '<div><label class="checkbox"><input type="radio" name="'.$poss["heirarchy_id"].'"  id="vote" value = "Abstain"><span class="checkmark"></span><br><br><b> Abstain </b></label></div></div>'; // display abstain choice
                        echo '<div class="candidate-box" >';
                        echo '<div>
                                       <label class="checkbox">
                                           <input type="radio" name="'.$poss["heirarchy_id"].'" id="vote">
                                           <span class="checkmark"></span>
                                                   <a href="#"><img src="#" class="candidate-photo" style="float: left; width: 100px; height: 100px;" alt="Candidate" ></a>
                                                   <div class="candidate-info">';
                
                        // display candidate
                        echo '<a href="#" id="F-CandidateName"><b> Candidate name:' . $poss["fname"]. " " . $poss["lname"]  . '</b></a><br><a href="#" id="F-Partylist"> Party: ' . $poss["party_name"]. '</a><br><a href="#" id="F-Platform"> Platform: ' . $poss["platform_info"]. '</a>';
                // end of candidate div
                 echo'                              </div>
                                        </label>
                                </div>
                     </div>';
            // end of position div
               
            
             
            }
            else{
                        echo '<div class="candidate-box" >';
                        echo '<div>
                                       <label class="checkbox">
                                           <input type="radio" name="'.$poss["heirarchy_id"].'" id="vote">
                                           <span class="checkmark"></span>
                                                   <a href="#"><img src="#" class="candidate-photo" style="float: left; width: 100px; height: 100px;" alt="Candidate" ></a>
                                                   <div class="candidate-info">';
                
                        // display candidate
                        echo '<a href="#" id="F-CandidateName"><b> Candidate name:' . $poss["fname"] . " " . $poss["lname"]  . '</b></a><br><a href="#" id="F-Partylist"> Party: ' . $poss["party_name"]. '</a><br><a href="#" id="F-Platform"> Platform: ' . $poss["platform_info"]. '</a>';
                // end of candidate div
                 echo'                              </div>
                                        </label>
                                </div>
                     </div>';
    
            }
        }
        echo'    </div>';
    }
?>
