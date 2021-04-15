<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Voting</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="main">

        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
				<h2 class="form-title">Vote</h2>
				<form method="POST" action = "index.php" class="register-form" id="register-form">
				  	<div class="form-group">
						<?php
							$dbhost = "localhost";
							$dbuser = "root";
							$dbpass = "";
							$db = "test";
							$conn = mysqli_connect($dbhost, $dbuser, $dbpass,$db);
							if ($conn->connect_error) {
								die("Connection to database failed: ". $conn->connect_error);
							}
							showInfo($conn);
							vtSubmit();
							$conn->close();
						?>
				  </div>
					<div class="form-group form-button">
						<input type="submit" name="submit" id="1submit" class="form-submit" value="Submit"/>
					</div>
				</form>
            </div>
        </section>

    </div>

    <!-- PHP -->
<!--<?php include 'php/submit.php';?>-->
	<?php
		
		function showInfo($conn){
			$sql = "SELECT * FROM candidate WHERE position_id = 90";
			$pos_result = $conn->query($sql);
			// echo $result;
			while($cand = $pos_result->fetch_assoc()) {
				$stud = "SELECT * FROM student WHERE student_id = $cand[student_id]";
				echo $cand["candidate_id"]. " - stud id: " . $cand["student_id"]. " position" . $cand["position_id"]. " party" . $cand["party_name"]. "<br>";
			}
		}
		
		function vtSubmit(){
			$pos_id = 10;
			if (isset($_POST['submit'])){
				if(!empty($_POST[$pos_id])){
					echo "<br>Voted: <br>";
					while($pos_id < 40){
						echo "Position $pos_id: ", $_POST[$pos_id], "<br>";
						$pos_id+=10;
					}
				}
				else{
					echo "none";
				}
			}
		}
		
		function validate(){
			if(isValidCandidate() && isValidVote() && isLegitUser()){
				return true;
			}
			else{
				return false;
			}
		}
		
		function sanitize(){
			return 1;
		}
		
		function isValidCandidate(){
			// $i = $canCtr;
			// while($i>0){
				// 	while($j<)
				// 	if($candidates[$i][])
				// }
			}
	?>
    
</body>
</html>