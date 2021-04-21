<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  

<?php
$candidateErr = "";
$candidate = "";

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

<?php
  echo "<h2>Your Input:</h2>";
  echo $candidate;
  // $radio1 = $_POST['radio1'];
  // echo $radio1;
?>
<br>
<span id="fname">George</span>
<span id="lname">Michael</span>

<?php
  echo '<input type="radio" onclick="document.getElementById(\'fname\').innerHTML = \'Martin\';document.getElementById(\'lname\').innerHTML = \'Barrimore\'">';
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