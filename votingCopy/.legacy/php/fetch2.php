<?php
    // fetch template
    $positions = $conn->query("SELECT * FROM candidate_position"); // get positions
    while($poss = $positions->fetch_assoc()){   // loop through all positions
        // insert position div here
            echo $poss["position_name"];
            $pos_id = $poss["position_id"];
            
            // insert candidate divs here
                echo "<td><div class='Candidate'><input required type='radio' name='$pos_id' class='agree-term' value = 'None' checked = 'checked'/> Abstain </div></td>"; // display abstain choice
                $candidates = $conn->query("SELECT * FROM candidate INNER JOIN student ON candidate.student_id = student.student_id WHERE position_id = $pos_id");  // join tables for student and candidate
                while($cand = $candidates->fetch_assoc()) { // loop through all candidates in a given position
                    $can_nm = $cand["name"];
                    $can_id = $cand["candidate_id"];
            
                    // display candidate
                    echo "<td><div class='Candidate'><input required type='radio' name='$pos_id' class='agree-term' value = '$can_id'/> Candidate name: ". $can_nm . " Party: " . $cand["party_name"]. "</div></td>";
            // end of candidate div
        // end of position div
        }
    }
?>