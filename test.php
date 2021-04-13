<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  

<?php
// define variables and set to empty values
$nameErr = $emailErr = $candidateErr = $websiteErr = "";
$name = $email = $candidate = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  if (empty($_POST["candidate"])) {
    $candidateErr = "Candidate is required";
  } else {
    $candidate = test_input($_POST["candidate"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>PHP Form Validation Example</h2>
<p><span class="error">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Candidate:
  <input type="radio" name="candidate" <?php if (isset($candidate) && $candidate=="dave") echo "checked";?> value="dave">Dave
  <input type="radio" name="candidate" <?php if (isset($candidate) && $candidate=="joe") echo "checked";?> value="joe">Joe
  <input type="radio" name="candidate" <?php if (isset($candidate) && $candidate=="bob") echo "checked";?> value="bob">Bob  
  <span class="error">* <?php echo $candidateErr;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>
<input type = "radio" id = "radio1" class = "radio1" name="radio1" value="radio1">

<?php
  echo "<h2>Your Input:</h2>";
  echo $candidate;
  // $radio1 = $_POST['radio1'];
  // echo $radio1;
?>
<script>
//  var cand = {
//    "name": "Meww",
//    "species": "human"
//   }
//   cand.name
//   var arri = ["blue", "green", "red"]
//   arri[1]

//   var ming = [
//     {},
//     {}
//   ]
//   var dd = document.getElementById("blah");
//   dd.onclick = function(){
//     <h1>BB</h1>
//   }

//   var request = new XMLHttpRequest();
//   request.open('GET', '')

//   $.ajax({
//     url : "test.php",
//     type : "POST",
//     data: pass_data,
//     success : function(data) {
//         // alert radio value here
//         alert(data);
//     }
//   });

</script>
</body>
</html>