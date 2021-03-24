<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../css/styles.css">
  </head>

  <body>
    <!-- Trigger/Open The Modal -->
    <!-- <button id="confirm">Confirm Submission</button> -->

    <!-- The Modal -->
    <div id="receipt" class="F-modal">

      <!-- Modal content -->
        <div class="F-modal-content">
          <div class="F-modal-header">
          </div>
          <div class="F-modal-body">
            <p>Your vote has been successfully casted. Here's the copy of your votes.</p>
            <div class="F-modal-body-button">
              <button type="button" id="receipt-button" class="F-downloadReceiptBTN">Download Receipt</button>
            </div>
          </div>
          <div class="F-modal-footer">
            <button type="button" id="gotoHome-button" class="F-goToHomeBTN">Go to Home</button>
          </div>
        </div>
    </div>
  
    <script>
      //////////////// receipt/////////////////////
      // Get the modal
      var modal = document.getElementById("receipt");

      // Get the button that opens the modal
      // var btn = document.getElementById("confirm");
      var confirmBtn = document.getElementById("confirm-button")[0];

      // Get the <span> element that closes the modal
      //var span = document.getElementsByClassName("close")[0];

      // When the user clicks the button, open the modal 
      confirmBtn.onclick = function() {
      confirmModal.style.display = "none";
      modal.style.display = "block";
      }

      // When the user clicks on <span> (x), close the modal
      span.onclick = function() {
      modal.style.display = "none";
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