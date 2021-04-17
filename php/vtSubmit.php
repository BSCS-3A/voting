<?php
	require "connect.php";
	mysqli_data_seek($table, 0);
	$heir_id = 0;
	echo'    <div>';
	$counter = 0;
	while($poss = $table->fetch_assoc()){   // loop through all positions
		$choice = $_POST[$poss['candidate_id']];
		$candidate = $poss['candidate_id'];
		echo $poss["position_name"].": ".$poss["fname"].$poss["lname"];
		if($poss['candidate_id'] == $choice){
			$conn->query("UPDATE candidate SET total_votes = total_votes + 1 WHERE candidate.candidate_id = $candidate");
			$conn->query("");
			
			echo "Voted <br>";
		}
		else{
			echo "Abstain <br>";
		}
	}
	
	// // echo "Candidates: <br>"; // remove
	// if(isset($_POST['confirm-button'])){
	// 	// echo "Blah"; 	// remove
	// 	// echo $_POST['2']; // remove
	// 	if(count($_POST) == 1){
	// 		$_SESSION['error'][] = 'Please vote atleast one candidate';
	// 	}
	// 	else{
	// 		// $_SESSION['post'] = $_POST;
	// 		// $sql = "SELECT * FROM positions";
	// 		// $query = $conn->query($sql);
	// 		// $error = false;
	// 		// $sql_array = array();
	// 		$row = $table->fetch_assoc();
	// 		$pos_id = $row['heirarchy_id'];
	// 		mysqli_data_seek($table, 0);
	// 		while($row = $table->fetch_assoc()){
	// 			if($pos_id == $row['position_id']){
	// 				$pos_id = $row['position_id'];
	// 			}
	// 			if(isset($_POST[$pos_id])){
	// 				if($row['max_vote'] > 1){
	// 					if(count($_POST[$pos_id]) > $row['max_vote']){
	// 						$error = true;
	// 						$_SESSION['error'][] = 'You can only choose '.$row['max_vote'].' candidates for '.$row['description'];
	// 					}
	// 					else{
	// 						foreach($_POST[$pos_id] as $key => $values){
	// 							$sql_array[] = "INSERT INTO votes (voters_id, candidate_id, position_id) VALUES ('".$voter['id']."', '$values', '$pos_id')";
	// 						}
	// 					}
						
	// 				}
	// 				else{
	// 					$candidate = $_POST[$pos_id];
	// 					$sql_array[] = "INSERT INTO votes (voters_id, candidate_id, position_id) VALUES ('".$voter['id']."', '$candidate', '$pos_id')";
	// 				}

	// 			}
	// 			$pos_id++;
				
	// 		}

	// 		if(!$error){
	// 			foreach($sql_array as $sql_row){
	// 				$conn->query($sql_row);
	// 			}

	// 			unset($_SESSION['post']);
	// 			$_SESSION['success'] = 'Ballot Submitted';

	// 		}

	// 	}

	// }
	// else{
	// 	$_SESSION['error'][] = 'Select candidates to vote first';
	// }
?>