<?php
    if (isset($_POST['confSubmit'])){
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
                    $fname = $stud["fname"];            // get name of student
                }
                else{
                    $fname = "Abstain";
                }

                echo "Position $pos_nm: ", $fname, "<br>";
                // $pos_id-=10;
                $conn->query("UPDATE candidate SET total_votes = total_votes + 1 WHERE candidate.candidate_id = 124");
            }
        }
    }
    else{
        echo "none";
    }
?>

<?php
	

	// if(isset($_POST['vote-button'])){
	// 	if(count($_POST) == 1){
	// 		$_SESSION['error'][] = 'Please vote atleast one candidate';
	// 	}
	// 	else{
	// 		$_SESSION['post'] = $_POST;
	// 		$sql = "SELECT * FROM positions";
	// 		$query = $conn->query($sql);
	// 		$error = false;
	// 		$sql_array = array();
	// 		while($row = $query->fetch_assoc()){
	// 			$position = slugify($row['description']);
	// 			$pos_id = $row['id'];
	// 			if(isset($_POST[$position])){
	// 				if($row['max_vote'] > 1){
	// 					if(count($_POST[$position]) > $row['max_vote']){
	// 						$error = true;
	// 						$_SESSION['error'][] = 'You can only choose '.$row['max_vote'].' candidates for '.$row['description'];
	// 					}
	// 					else{
	// 						foreach($_POST[$position] as $key => $values){
	// 							$sql_array[] = "INSERT INTO votes (voters_id, candidate_id, position_id) VALUES ('".$voter['id']."', '$values', '$pos_id')";
	// 						}

	// 					}
						
	// 				}
	// 				else{
	// 					$candidate = $_POST[$position];
	// 					$sql_array[] = "INSERT INTO votes (voters_id, candidate_id, position_id) VALUES ('".$voter['id']."', '$candidate', '$pos_id')";
	// 				}

	// 			}
				
	// 		}
    //     }
    // }



?>