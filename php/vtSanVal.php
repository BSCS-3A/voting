<?php
    // convert values to acceptable data types
    function fixDataType($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        if(is_int($data)){
            return $data;
        }
        else{
            $page = $_SERVER['PHP_SELF'];
            $sec = "0";
            header("Refresh: $sec; url=$page");
        }
    }

    // remove malicious bits
    function cleanInput($input) {
        $search = array(
            '@<script[^>]*?>.*?</script>@si',   // Strip out javascript
            '@<[\/\!]*?[^<>]*?>@si',            // Strip out HTML tags
            '@<style[^>]*?>.*?</style>@siU',    // Strip style tags properly
            '@<![\s\S]*?--[ \t\n\r]*>@'         // Strip multi-line comments
        );
    
        $output = preg_replace($search, '', $input);
        return $output;
    }

    // Uses the function above, as well as adds slashes as to not screw up database functions.
    function sanitize($input) {
        if (is_array($input)) {
            foreach($input as $var=>$val) {
                $output[$var] = sanitize($val);
            }
        }
        else {
            if (get_magic_quotes_gpc()) {
                $input = stripslashes($input);
            }
            $input  = cleanInput($input);
            $output = mysql_real_escape_string($input);
        }
        return $output;
    }

    function validate(){
        // return true if vote is valid, false if not
        return (isValidCandidate() && isValidTime() && isValidUser() && isNotRepeated());
    }

    function isValidCandidate(){
        // checks if selection is valid candidate
        // $i = $canCtr;
        // while($i>0){
            // 	while($j<)
            // 	if($candidates[$i][])
            // }
        return true;
    }

    function isValidTime(){
        // checks if vote is made at scheduled time
        $date_pr = new DateTime(date("Y-m-d H:i:s"));       // submit date/ time
        $date_st = new DateTime("2021-03-20 08:00:00");     // start sched date
        $date_en = new DateTime("2021-03-30 16:00:00");     // end sched date

        // Compare the dates 
        // if ($date_pr > $date_st && $date_pr < $date_en) {
        //     echo $date1->format("Y-m-d") . " is later than " . $date2->format("Y-m-d"); 
        // }
        // else{
        //     echo $date1->format("Y-m-d") . " is older than " . $date2->format("Y-m-d"); 
            return true;
        // }
    }

    function isValidUser($studd_id){  // checks if user is registered
        $voter = $conn->query("SELECT * FROM student WHERE student_id = $studd_id");
        if($voter["lname"] == $_SESSION['lname'] && $voter["fname"] == $_SESSION['fname'] && $voter["student_id"] == $_SESSION['student_id']){
            return true;
        }
        else{
            return true;
        }
    }

    function isNotRepeated(){
        // checks if voter has voted already
        return true;
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
?>