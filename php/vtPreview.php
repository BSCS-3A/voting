<!DOCTYPE html>
<html>
    <head>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
      <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="css/styles.css">
      <script src="js/bootstrap.js"></script>
      <script src="js/bootstrap.min.js"></script>
    </head>

  
  <body>
    <?php
    require 'connect.php';
    ?>

    <!-- Trigger/Open The Modal -->
    <!-- <button id="vote-button">Submit</button> -->

    <!-- The Modal -->
    <div id="confirmation" class="F-modal">
    <!-- Modal content -->
    <div class="F-modal-content">
        <div class="F-modal-header">
            <h2>VOTE PREVIEW</h2>
        </div>
        <div class="F-modal-body">
            <div class="F-show-votes">
                <p>Voter: <a href="#" id="VoterName"><?php echo $_SESSION['fname'].' '. $_SESSION['lname']?></a></p> 
                <div class="display-votes">
              <?php
              if(isset($_POST['vote-button'])){
                $posquery = $conn->query("SELECT * FROM candidate_position ORDER BY candidate_position.heirarchy_id");
                while($pos = $posquery->fetch_assoc()){
                 if(!empty($_POST[$pos["heirarchy_id"]])) {
                  $id = $_POST[$pos["heirarchy_id"]];
              $choice_query = $conn->query("SELECT * FROM candidate INNER JOIN student ON candidate.student_id = student.student_id WHERE candidate.candidate_id = $id");
                  while($choice = $choice_query->fetch_assoc()){
                    echo '<tr id="display-vote-info">
                              <td id="F-preview-Position">'.$pos["position_name"].':</td>
                              <td id="F-preview-CandidateName">'.$choice["fname"]. " " . $choice["lname"].'</td>
                          </tr>
                          <br>';
                      }
                    } else {
                    echo 'Please select the value.<br>';
                    }
                  }
                  }
              ?>
                
                  
                    <tr id="display-vote-info">
                      <td id="F-preview-Position">Position:</td>
                      <td id="F-preview-CandidateName">Candidate Name</td>
                    </tr>
                    <br>

                </div>
            </div>
            <br>
            <p>Your votes are about to be submitted. Are you sure?</p>
        </div>
        <div class="F-modal-button">
            <button type="button" id="return-button" class="F-returnBTN"><span>Return to Voting</span></button>
            <button type="button" id="confirm-button" class="F-confirmBTN"><span>Confirm Submission</span></button>
        </div>
      </div>
    </div>
  </body>
</html>
