<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta charset="utf-8">
    <link rel="icon" href="img/BUHS LOGO.png" type="image/png">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <title>BUCEILS HS Vote</title>
</head>

<body>
    <?php
		include 'html/navbar.html';
	?>

    <header id="F-header" style="text-align:center"><b>STUDENT LEADER ELECTION</b></header><br>

    <main>
        <!--Candidates-->
               <div id="voting-page">
                   <div id="F-container">
                       <a href="#" id="F-position" style="float: left;">POSITION</a><hr>
                       <div class="candidate-box" style="order: 1;">
                               <div>
                                   <label class="checkbox">
                                       <input type="radio" name="check" id="vote">
                                       <span class="checkmark"></span>
                                               <a href="#"><img src="#" class="candidate-photo" style="float: left; width: 100px; height: 100px;" alt="Candidate" ></a>
                                               <div class="candidate-info">
                                                   <a href="#" id="F-CandidateName"><b>CANDIDATE NAME</b></a>
                                                   <br>
                                                   <a href="#" id="F-GradeSection">Grade & Section</a>
                                                   <br>
                                                   <a href="#" id="F-Partylist">Partylist</a>	
                                               </div>
                                   </label>
                               </div>
   
                               <div>
                                   <label class="checkbox">
                                       <input type="radio" name="check"  id="vote">
                                       <span class="checkmark"></span>
                                               <a href="#"><img src="#" class="candidate-photo" style="float: left; width: 100px; height: 100px;" alt="Candidate" ></a>
                                               <div class="candidate-info">
                                                   <a href="#" id="F-CandidateName">CANDIDATE NAME</a>
                                                   <br>
                                                   <a href="#" id="F-GradeSection">Grade & Section</a>
                                                   <br>
                                                   <a href="#" id="F-Partylist">Partylist</a>	
                                               </div>
                                   </label>
                               </div>
                           </div>
   
                           <div class="candidate-box" style="order: 2;">
                               <div>
                                   <label class="checkbox">
                                       <input type="radio" name="check" id="vote">
                                       <span class="checkmark"></span>
                                               <a href="#"><img src="#" class="candidate-photo" style="float: left; width: 100px; height: 100px;" alt="Candidate" ></a>
                                               <div class="candidate-info">
                                                   <a href="#" id="F-CandidateName">CANDIDATE NAME</a>
                                                   <br>
                                                   <a href="#" id="F-GradeSection">Grade & Section</a>
                                                   <br>
                                                   <a href="#" id="F-Partylist">Partylist</a>	
                                               </div>
                                   </label>
                               </div>
   
                               <div>
                                   <label class="checkbox">
                                       <input type="radio" name="check"  id="vote">
                                       <span class="checkmark"></span>
                                               <a href="#"><img src="#" class="candidate-photo" style="float: left; width: 100px; height: 100px;" alt="Candidate" ></a>
                                               
                                               <div class="candidate-info">
                                                   <a href="#" id="F-CandidateName">CANDIDATE NAME</a>
                                                   <br>
                                                   <a href="#" id="F-GradeSection">Grade & Section</a>
                                                   <br>
                                                   <a href="#" id="F-Partylist">Partylist</a>	
                                               </div>
                                   </label>
                               </div>
                           </div>
   
                   </div>
   
                   <div id="F-container">
                       <a href="#" id="F-position" style="float: left;">POSITION</a><hr>
                       <div class="candidate-box">
                               <div>
                                   <label class="checkbox">
                                       <input type="radio" name="check1" id="vote">
                                       <span class="checkmark"></span>
                                               <a href="#"><img src="#" class="candidate-photo" style="float: left; width: 100px; height: 100px;" alt="Candidate" ></a>
                                               <div class="candidate-info">
                                                   <a href="#" id="F-CandidateName">CANDIDATE NAME</a>
                                                   <br>
                                                   <a href="#" id="F-GradeSection">Grade & Section</a>
                                                   <br>
                                                   <a href="#" id="F-Partylist">Partylist</a>	
                                               </div>
                                   </label>
                               </div>
   
                               <div>
                                   <label class="checkbox">
                                       <input type="radio" name="check1"  id="vote">
                                       <span class="checkmark"></span>
                                               <a href="#"><img src="#" class="candidate-photo" style="float: left; width: 100px; height: 100px;" alt="Candidate" ></a>
                                               <div class="candidate-info">
                                                   <a href="#" id="F-CandidateName">CANDIDATE NAME</a>
                                                   <br>
                                                   <a href="#" id="F-GradeSection">Grade & Section</a>
                                                   <br>
                                                   <a href="#" id="F-Partylist">Partylist</a>	
                                               </div>
                                   </label>	
                               </div>
                           </div>
                   </div>
   
                   <div></div>
   
                   <a href="#">
                   <div id="vote-button"><button class="btn" >SUBMIT</button></div>
                   </a>
   
               </div>
     </main>

    <footer>
        BS COMPUTER SCIENCE 3A © 2021
    </footer>
  
   
</body>

</html>