<?php
	include '../php/connect.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link rel="icon" href="../img/buceils-logo.png" type="image/png"> 
		<title>BUCEILS Vote</title>
</head>

<body>
	<nav>
		<img class="logo-pic" src="../img/buceils-logo.png">
		<div class="logo">
			<h1>BUCEILS HS</h1>
			<p>ONLINE VOTING SYSTEM</p>
		</div>
		<ul>
			<li>
				<a class="topnav" href="#">VOTE</a>
				<ul>
					<li><a href="#">VOTE NOW</a></li>
					<li><a href="#">RECIEPT</a></li>
				</ul>
			</li>

			<li>
				<a class="topnav" href="#">ABOUT</a>
				<ul>
					<li><a href="#">ELECTION PROCESS</a></li>
					<li><a href="#">ARCHIVE</a></li>
				</ul>
			</li>

			<li>
				<a class="topnav" href="#">CANDIDATES</a>
				<ul>
					<li><a href="#">VIEW INFO</a></li>
				</ul>
			</li>

			<li>
				<a class="topnav" href="#">CHAT US</a>
			</li>

			<li>
				<a href="#"><img class="user-profile" src="../img/user.png"></a>
				<ul>
					<li><a href="#">JUAN S. DELA CRUZ</a></li>
					<li><a href="#">LOGOUT</a></li>
				</ul>
			</li>
		</ul>
	</nav>

  <header id="F-header" style="text-align:center"><b>STUDENT LEADER ELECTION</b></header><br>

  <main>
	 <!--Candidates-->
	 	<form method="POST" id="ballotForm" action="submit_ballot.php">
			<div id="voting-page">
				<div id="F-container">
					<a href="#" id="F-position" style="float: left;">PRESIDENT</a><hr>
					<div class="candidate-box" style="order: 1;">
							<div>
								<?php
									$pos_name = "Branch Manager";
									$sql = "SELECT * FROM candidate_position WHERE position_name = '$pos_name'";
									$query = $conn->query($sql);
									while($row = $query->fetch_assoc()){
										$sql = "SELECT * FROM candidate WHERE position_id='".$row['position_id']."'";
										$cquery = $conn->query($sql);
										while ($crow = $cquery->fetch_assoc()){
								?>
								<label class="checkbox">
									<input type="radio" name="check" id="vote">
									<span class="checkmark"></span>
											<a href="#"><img src="#" class="candidate-photo" style="float: left; width: 100px; height: 100px;" alt="Candidate" ></a>
											<div class="candidate-info">
												<?php
												echo '<a href="#" id="F-CandidateID"><b>'.$crow['candidate_id'].'</b></a>
												<br>
												<a href="#" id="F-CandidateName">'.$crow['student_id'].'</a>
												<br>
												<a href="#" id="F-Partylist">'.$crow['party_name'].'</a>';	
												?>
											</div>
								</label>
								<?php
										}
									}
								?>
							</div>
						</div>

				</div>

				<div></div>

				<a href="#">
				<div id="vote-button"><button class="btn" >SUBMIT</button></div>
				</a>

			</div>
		</form>
  </main>

<footer>
	<div class="footer">
  		<p>BS COMPUTER SCIENCE 3A © 2021</p>
	</div>
</footer>
</body>



</html>