var xhttp = new XMLHttpRequest();
// Get the modals
var confirmModal = document.getElementById("confirmation");
var receiptModal = document.getElementById("receipt");

// Get the buttons
var confirmBtn = document.getElementById("vote-btn"); 
var confBtn = document.getElementById("confirm-button");
var cancelBtn = document.getElementById("return-button");

//////////////// confirmation/////////////////////

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
  if (event.target == receiptModal) {
    receiptModal.style.display = "none";
  }
}
//////////////// receipt/////////////////////


// When the user clicks the button, open the modal 
confBtn.onclick = function() {
  confirmModal.style.display = "none";
  receiptModal.style.display = "block";
  // < ?php submit()?>
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  receiptModal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == receiptModal) {
    receiptModal.style.display = "none";
  }
}