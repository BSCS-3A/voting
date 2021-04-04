<script>
      //////////////// confirmation/////////////////////
      // Get the confirmation modal
      var confirmModal = document.getElementById("confirmation");               //first modal popup

      // Get the button that opens the modal
      var confirmBtn = document.getElementById("vote-button");                   //submit button from Voting page(Rica)

      // Get the <span> element that closes the modal
      var cancelBtn = document.getElementById("return-button");

      // When the user clicks the submit button, open the modal 
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
      //////////////// receipt/////////////////////
      // Get the receipt modal
      var modal = document.getElementById("receipt");

      // Get the button that opens the modal
      // var btn = document.getElementById("confirm");
      var confirmBtn = document.getElementById("confirm-button");

      // Get the <span> element that closes the modal
      //var span = document.getElementsByClassName("close")[0];

      // When the user clicks the button, open the modal 
      confirmBtn.onclick = function() {
        confirmModal.style.display = "none";
        modal.style.display = "block";
        <?php submit()?>
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