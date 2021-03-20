<?php
    global $output;
	while($row = $positions->fetch_assoc()){
		$position = slugify($row['description']);
		$pos_id = $row['id'];
		if(isset($_POST[$position])){
			if($row['max_vote'] > 1){
				if(count($_POST[$position]) > $row['max_vote']){
					$output['error'] = true;
					$output['message'][] = '<li>You can only choose '.$row['max_vote'].' candidates for '.$row['description'].'</li>';
				}
				else{
					foreach($_POST[$position] as $key => $values){
						$cmrow = $cmquery->fetch_assoc();
						$output['list'] .= "
							<div class='row votelist'>
		                      	<span class='col-sm-4'><span class='pull-right'><b>".$row['description']." :</b></span></span> 
		                      	<span class='col-sm-8'>".$cmrow['fname']." ".$cmrow['lname']."</span>
		                    </div>
						";
					}

				}
				
			}
			else{
				$candidate = $_POST[$position];
				$csrow = $csquery->fetch_assoc();
				$output['list'] .= "
					<div class='row votelist'>
                      	<span class='col-sm-4'><span class='pull-right'><b>".$row['description']." :</b></span></span> 
                      	<span class='col-sm-8'>".$csrow['fname']." ".$csrow['lname']."</span>
                    </div>
				";
			}

		}
		
	}

	echo json_encode($output);


?>