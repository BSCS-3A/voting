<?php
	// if(isset($_POST['vote-submit'])) {
	function submit(){
		echo "Lololol";
		// $positions = $conn->query("SELECT * FROM candidate_positions");
		// mysqli_data_seek($positions,0);
		// while ($poss = $positions->fetch_assoc()){
		// 	$choice =$_GET[$poss["hierarchy_id"]];
		// 	if($choice != "Abstain") {
		// 		$conn->query(" UPDATE candidate SET total_votes = total votes + 1 WHERE candidate.candidate_id = $choice");

     	// 	}
   		// }
	}
	// }

	// else
	// {
	// 	echo "none";
	// }
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