<!DOCTYPE html>
<html>
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta charset="utf-8">
    <link rel="icon" href="../img/BUHS LOGO.png" type="image/png">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="../js/scripts.js"></script>
    <title>BUCEILS HS Vote</title>


      <!-- <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
      <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"> -->
      <!-- <link rel="stylesheet" type="text/css" href="css/styles2.css"> -->
      <!-- <link rel="stylesheet" type="text/css" href="css/style.css"> -->
      <!-- <script src="js/bootstrap.js"></script>
      <script src="js/bootstrap.min.js"></script> -->
    </head>

  
  <body>
    <?php
    include '../html/navbar.html';
    require 'connect.php';
    
    ?>

    <!-- Trigger/Open The Modal -->
    <!-- <button id="vote-button">Submit</button> -->

    <!-- The Modal -->
    <!-- <div id="confirmation" class="F-modal"> -->
    <!-- Modal content -->
    <!-- <div class="F-modal-content"> -->
        <!-- <div class="F-modal-header"> -->
            <!-- <h2>VOTE PREVIEW</h2> -->
            <header id="F-header" style="text-align:center"><b>VOTE PREVIEW</b></header>
        <!-- </div> -->
        <!-- <div class="F-modal-body"> -->
            <!-- <div class="F-show-votes"> -->
                <p>Voter: <?php echo $_SESSION['fname'].' '. $_SESSION['lname']?></p> 

                <table>
                <tr id="display-vote-info">
                      <th id="F-preview-Position">Position</th>
                      <th id="F-preview-CandidateName">Candidate Name</th>
                    </tr>
                   
              <?php
              if(isset($_POST['vote-button'])){

                // header("Location: vtPreview.php");

                

                $posquery = $conn->query("SELECT * FROM candidate_position ORDER BY candidate_position.heirarchy_id");
                while($pos = $posquery->fetch_assoc()){
                 if(!empty($_POST[$pos["heirarchy_id"]])) {
                  $id = $_POST[$pos["heirarchy_id"]];
              $choice_query = $conn->query("SELECT * FROM candidate INNER JOIN student ON candidate.student_id = student.student_id WHERE candidate.candidate_id = $id");
                  while($choice = $choice_query->fetch_assoc()){
                    echo '<tr id="display-vote-info">
                              <td id="F-preview-Position">'.$pos["position_name"].':</td>
                              <td id="F-preview-CandidateName">'.$choice["fname"]. " " . $choice["lname"].'</td>
                          </tr>';
                      }
                    } else {
                    // echo 'Please select the value.<br>';
                    }
                  }
                  }
              ?>
               
                </table>
                  
                    <!-- <tr id="display-vote-info">
                      <td id="F-preview-Position">Position:</td>
                      <td id="F-preview-CandidateName">Candidate Name</td>
                    </tr>
                    <br> -->

                <!-- </div> -->
            <!-- </div> -->
            <br>
            <!-- <p>Your votes are about to be submitted. Are you sure?</p> -->
        <!-- </div> -->

        <script>
          function goBack() {
          window.history.back();
          }
        </script>


        <div class="F-modal-button">
            <button type="button" id="return-button" class="F-returnBTN" onclick="goBack()"><span>Return to Voting</span></button>
            <button type="button" id="confirm-button" class="F-confirmBTN"><span>Confirm Submission</span></button>
        </div>

          <?php // include "vtConfirm2.php" ?>



      <!-- </div> -->
    <!-- </div> -->
  </body>
</html>
