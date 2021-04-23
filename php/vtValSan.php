<?php
    // convert values to acceptable data types
    function fixDataType($data){
        $data = trim($data);
        // $data = cleanInput($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        $data = intval($data);
        if(is_int($data)){
            return $data;
        }
        else{
            $page = "vtBallot.php";
            $sec = "0";
            // inseert sending message to admin about tampered data
            header("url=$page");
        }
    }  

    // remove malicious bits; calls fixDataType()
    function cleanInput($input) {
        $search = array(
            '@<script[^>]*?>.*?</script>@si',   // Strip out javascript
            '@<[\/\!]*?[^<>]*?>@si',            // Strip out HTML tags
            '@<style[^>]*?>.*?</style>@siU',    // Strip style tags properly
            '@<![\s\S]*?--[ \t\n\r]*>@'         // Strip multi-line comments
        );
    
        $output = preg_replace($search, '', $input);
        $output = fixDataType($output);
        // $output = mysql_real_escape_string($input)
        return $output;
    }

     function isVoted($conn){
        // check if user has already voted
        $stud_id = $_SESSION['student_id'];
        $voter = $conn->query("SELECT * FROM student WHERE student_id = $stud_id");
        $student = $voter->fetch_assoc();
        // see if login already has voter info
        if($student['voting_status'] == 1){
            return true;
        }
        else{
            return false;
        }
    }

    function isValidUser($conn){  // checks if user is registered
        $studd_id = $_SESSION['student_id'];
        $voter = $conn->query("SELECT * FROM student WHERE student_id = $studd_id");
        $poss = $voter->fetch_assoc();
        // echo $studd_id;
        // echo $poss["fname"]." ".$poss["lname"]." ".$poss["student_id"];
        if($poss != NULL && ($poss["lname"] == $_SESSION['lname'] && $poss["fname"] == $_SESSION['fname'] && $poss["student_id"] == $_SESSION['student_id'] && $poss["bumail"] == $_SESSION['bumail'])){
            return true;
        }
        else{
            return false;
        }
    }


    function slugify($string){
        $preps = array('in', 'at', 'on', 'by', 'into', 'off', 'onto', 'from', 'to', 'with', 'a', 'an', 'the', 'using', 'for');
        $pattern = '/\b(?:' . join('|', $preps) . ')\b/i';
        $string = preg_replace($pattern, '', $string);
        $string = preg_replace('~[^\\pL\d]+~u', '-', $string);
        $string = trim($string, '-');
        $string = iconv('utf-8', 'us-ascii//TRANSLIT', $string);
        $string = strtolower($string);
        $string = preg_replace('[^-\w]+', '', $string);
        
        return $string;
        
    }

    function isValidCandidate($table, $ballot_cand_id, $ballot_heir_id){
        // checks if selection is valid candidate
        mysqli_data_seek($table, 0);
        // if($ballot_cand_id == 0){
        //     return true;
        // }
        // else{
            while($poss = $table->fetch_assoc()){
                if($ballot_cand_id == $poss['candidate_id']){
                    if($poss['heirarchy_id'] == $ballot_heir_id){
                        return true;
                    }
                    else{
                        return false;
                    }
                }
            }
            return false;
        // }
    }

    function errorMessage($message){
        echo '<link rel="stylesheet" type="text/css" href="../css/student_css/vote-message.css">';
        include 'navStudent.php';
        echo '<main>
			<div id="error-message-container" class="error-message-container">			
				<div id="election-finished-msg" class="error-message">
					<h3>'.$message.'</h3>
				</div>

				<div id="error-button" class="error-button">
            		<button type="button" id="ok-button" class="OkBTN-error">OK</button>
          		</div>
          	</div>
		</main>';
        echo '<script>
        // Get Home button
        var home = document.getElementById("ok-button");

        home.onclick = function() {
            location.href = "StudentDashboard.php";
        }
        </script>';
    }
    
    function redirect($url){
        if (headers_sent()){
          die('<script type="text/javascript">window.location.replace("'.$url.'");</script‌​>');
        }else{
          header('Location: ' . $url);
          die();
        }    
    }


?>
