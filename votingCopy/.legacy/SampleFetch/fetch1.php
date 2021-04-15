<?php
    // fetch template
    $positions = $conn->query("SELECT * FROM candidate_position"); // get positions
    while($poss = $positions->fetch_assoc()){   // loop through all positions
        // insert position div here
        $order_num = 0;
            echo' <div id="F-container">';
            echo '<a href="#" id="F-position" style="float: left;">'.$poss["position_name"].'</a><hr>';
            $pos_id = $poss["position_id"];
            $counter = 0;
            // insert candidate divs here
                 echo '<div class="candidate-box" style="order:'.$order_num.';">';
                echo '<div><label class="checkbox"><input type="radio" name="'.$poss["position_name"].'"  id="vote"><span class="checkmark"></span> Abstain </label></div></div>'; // display abstain choice
                $candidates = $conn->query("SELECT * FROM candidate INNER JOIN student ON candidate.student_id = student.student_id WHERE position_id = $pos_id");  // join tables for student and candidate
                while($cand = $candidates->fetch_assoc()) { // loop through all candidates in a given position
                    
                    $can_nm1 = $cand["candidate_id"];
                    $can_nm2 = $cand["student_id"];
                    if(($counter % 2) == 0){
                        $order_num++;
                    
                    echo '<div class="candidate-box" style="order:'.$order_num.';">';
                    echo '<div>
                                   <label class="checkbox">
                                       <input type="radio" name="'.$poss["position_name"].'" id="vote">
                                       <span class="checkmark"></span>
                                               <a href="#"><img src="./img/doggie.jpg" class="candidate-photo" style="float: left; width: 100px; height: 100px;" alt="Candidate" ></a>
                                               <div class="candidate-info">';
            
                    // display candidate
                    echo '<a href="#" id="F-CandidateName"><b> Candidate name:' . $can_nm1. " " . $can_nm2  . '</b></a><br><a href="#" id="F-Partylist"> Party: ' . $cand["party_name"]. '</a><br><a href="#" id="F-Platform"> Platform: ' . $cand["platform_info"]. '</a>';
            // end of candidate div
             echo'                              </div>
                                    </label>
                            </div>
                 </div>';
                 $counter++;
                 }
                 else{
                    echo '<div class="candidate-box" style="order:'.$order_num.';">';
                    echo '<div>
                                   <label class="checkbox">
                                       <input type="radio" name="'.$poss["position_name"].'" id="vote">
                                       <span class="checkmark"></span>
                                               <a href="#"><img src="#" class="candidate-photo" style="float: left; width: 100px; height: 100px;" alt="Candidate" ></a>
                                               <div class="candidate-info">';
            
                    // display candidate
                    echo '<a href="#" id="F-CandidateName"><b> Candidate name:' . $can_nm1. " " . $can_nm2  . '</b></a><br><a href="#" id="F-Partylist"> Party: ' . $cand["party_name"]. '</a><br><a href="#" id="F-Platform"> Platform: ' . $cand["platform_info"]. '</a>';
            // end of candidate div
             echo'                              </div>
                                    </label>
                            </div>
                 </div>';
                 $counter++;

                 }
        // end of position div
            echo'    </div>
   
                   <div></div>';
        }
    }
?>
