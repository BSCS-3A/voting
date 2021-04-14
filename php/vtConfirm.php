<?php

	// ordinary variable na pinangalanan kong cookied
	$cookied = array('10','11', '12','13','14');
	// $data = array('email'=>'test@test.com',
	// array("php","mysql"),
	// 'age'=>28);

	// code para malagay sa isang array $data lahat ng info
	// sample coode pang fetch galing sa form
	for($i = 0; $i <5; $i++){
		$data[$i] = $cookied[$i];
		echo $data[$i]."<br>";
	}
	// ilagay sa url ang laman ng array $data
	echo "<a href='vtConfirm.php?" . http_build_query($data) . "'>next page</a><br>";

	// echo $_GET['email']; echo "<br />";
	// kunin ang values ng array na nasa loob ng url
	for($i = 0; $i <5; $i++){
		$data[$i] = $cookied[$i];
		// echo $data[$i]."<br>";
		echo $_GET[$i]; echo "<br />";
	}
	echo $_GET[0]; echo "<br />";
	// echo $_GET['age']; echo "<br />";


	// include "connect.php";
	// // $tables = $GLOBALS["table"];

	// // get selection from ballot
	// $total = 0;
	// while($poss = $table->fetch_assoc()){
	// 	$total = $poss['heirarchy_id']; 
	// }
	// for($ctr = 1; $ctr <= $total; $ctr++){
	// 	// if(($poss["vote_allow"] == 0 && $_SESSION['grade_level'] == $poss["grade_level"]) || $poss["vote_allow"] == 1)
	// 	if(isset($_POST[$ctr])){
	// 		// echo "<script>alert('".$_POST[$ctr]."');</script>";
	// 		mysqli_data_seek($table, 0);
	// 		while($poss = $table->fetch_assoc()){
	// 			if(($poss["vote_allow"] == 0 && $_SESSION['grade_level'] == $poss["grade_level"]) || $poss["vote_allow"] == 1){
	// 				if($poss['candidate_id'] == $_POST[$ctr]){
	// 					echo $poss['fname']." ". $poss['lname']."<br>"; 
	// 				}
	// 				else if($_POST[$ctr] == "Abstain"){
	// 					echo "Abstain <br>";
	// 				}
	// 			}
	// 		}
	// 	}
	// 	else{
	// 	}
	// }

	// header();
	// echo ;



	// function showChoices(){
	// 	$positions = $conn->query("SELECT * FROM candidate_position ORDER BY heirarchy_id"); // get positions
	// 	while($poss = $positions->fetch_assoc()){
	// 		// if(($poss["vote_allow"] == 0 && $vote_glvl == $poss["grade_level"]) || $poss["vote_allow"] == 1){
	// 			$heir_id = $poss["heirarchy_id"];
	// 			// sanitize
	// 			$choice = sanitize($_POST[$heir_id]);
				
	// 			echo $choice;
	// 			echo '<tr id="display-vote-info">
	// 				<td id="F-preview-Position">'.$poss["position_name"].'</td>
	// 				<td id="F-preview-CandidateName">'.$fname.' '.$lname.'</td>
	// 			</tr>
	// 			<br>';
	// 		// }
	// 	}
	// }


    // global $output;
	// while($row = $positions->fetch_assoc()){
	// 	$position = slugify($row['description']);
	// 	$pos_id = $row['id'];
	// 	if(isset($_POST[$position])){
	// 		if($row['max_vote'] > 1){
	// 			if(count($_POST[$position]) > $row['max_vote']){
	// 				$output['error'] = true;
	// 				$output['message'][] = '<li>You can only choose '.$row['max_vote'].' candidates for '.$row['description'].'</li>';
	// 			}
	// 			else{
	// 				foreach($_POST[$position] as $key => $values){
	// 					$cmrow = $cmquery->fetch_assoc();
	// 					$output['list'] .= "
	// 						<div class='row votelist'>
	// 	                      	<span class='col-sm-4'><span class='pull-right'><b>".$row['description']." :</b></span></span> 
	// 	                      	<span class='col-sm-8'>".$cmrow['fname']." ".$cmrow['lname']."</span>
	// 	                    </div>
	// 					";
	// 				}

	// 			}
				
	// 		}
	// 		else{
	// 			$candidate = $_POST[$position];
	// 			$csrow = $csquery->fetch_assoc();
	// 			$output['list'] .= "
	// 				<div class='row votelist'>
    //                   	<span class='col-sm-4'><span class='pull-right'><b>".$row['description']." :</b></span></span> 
    //                   	<span class='col-sm-8'>".$csrow['fname']." ".$csrow['lname']."</span>
    //                 </div>
	// 			";
	// 		}

	// 	}
		
	// }

	// echo json_encode($output);


?>