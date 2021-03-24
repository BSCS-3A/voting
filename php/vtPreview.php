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
                <p>Voter: <a href="#" id="VoterName">Voter's Name</a></p>

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
        <div class="F-modal-footer">
            <button type="button" id="return-button" class="F-returnBTN"><span>Return to Voting</span></button>
            <button type="button" id="confirm-button" class="F-confirmBTN"><span>Confirm Submission</span></button>
        </div>
      </div>
    </div>

    <script>
      //////////////// confirmation/////////////////////
     // Get the modal
      var confirmModal = document.getElementById("confirmation");               //first modal popup

      // Get the button that opens the modal
      var confirmBtn = document.getElementById("vote-button");                   //submit button from Voting page(Rica)

      // Get the <span> element that closes the modal
      var cancelBtn = document.getElementById("return-button")[0];

      // When the user clicks the button, open the modal 
      confirmBtn.onclick = function() {
      confirmModal.style.display = "block";
      }

      // When the user clicks on <span>, close the modal
      cancelBtn.onclick = function() {
      confirmModal.style.display = "none";
      }

      // When the user clicks anywhere outside of the modal, close it
      window.onclick = function(event) {
        if (event.target == modal) {
          modal.style.display = "none";
        }
      }
      
    </script>
  </body>
</html>