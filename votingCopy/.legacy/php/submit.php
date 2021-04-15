<?php  
    if (isset($_POST['submit'])){
        if(!empty($_POST[$pos_id])){
            echo "<br>Voted: <br>";
            $positions = $conn->query("SELECT * FROM candidate_position");
            while($poss = $positions->fetch_assoc()){   // loop through all positions
                $pos_nm = $poss["position_name"];       // get position name
                $pos_id = $poss["position_id"];         // select the position
                $choice = $_POST[$pos_id];              // value of chosen candidate_id
                if($choice != "None"){
                    $studd = $conn->query("SELECT * FROM candidate INNER JOIN student ON candidate.student_id = student.student_id  WHERE candidate_id = $choice"); // join candidate and student table ; search the student that was voted
                    $stud = $studd->fetch_assoc();
                    $choice = $stud["name"];            // get name of student
                }
                else{
                    $choice = "Abstain";
                }

                echo "Position $pos_nm: ", $choice, "<br>";
                $pos_id-=10;
            }
        }
    }
    else{
        echo "none";
    }
?>