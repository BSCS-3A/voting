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
                <!-- < ?php
                  // showChoices();
                ?> -->
                <div class="display-votes">
                    <tr id="display-vote-info">
                      <td id="F-preview-Position">Position:</td>
                      <td id="F-preview-CandidateName">Candidate Name</td>
                    </tr>
                    <br>
                    <tr id="display-vote-info">
                      <td id="F-preview-Position">Position:</td>
                      <td id="F-preview-CandidateName">Candidate Name</td>
                    </tr>
                    <br>
                    <tr id="display-vote-info">
                      <td id="F-preview-Position">Position:</td>
                      <td id="F-preview-CandidateName">Candidate Name</td>
                    </tr>
                    <br>
                    <tr id="display-vote-info">
                      <td id="F-preview-Position">Position:</td>
                      <td id="F-preview-CandidateName">Candidate Name</td>
                    </tr>
                    <br>
                    <tr id="display-vote-info">
                      <td id="F-preview-Position">Position:</td>
                      <td id="F-preview-CandidateName">Candidate Name</td>
                    </tr>  
                </div>
            </div>
            <br>
            <p>Your votes will be submitted. Are you sure?</p>
        </div>
        <div class="F-modal-button">
            <button type="button" id="return-button" class="F-returnBTN"><span>Return to Voting</span></button>
            <button type="button" id="confirm-button" class="F-confirmBTN"><span>Confirm Submission</span></button>
        </div>
      </div>
    </div>
  </body>
</html>