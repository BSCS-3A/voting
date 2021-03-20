<?php
    function validate(){
        // return true if vote is valid, false if not
        return (isValidCandidate() && isValidTime() && isLegitUser() && isNotRepeated());
    }
    
    function sanitize(){
        // convert values to acceptable data types
        return 1;
    }

    function isValidCandidate(){
        // checks if selection is valid candidate
        // $i = $canCtr;
        // while($i>0){
            // 	while($j<)
            // 	if($candidates[$i][])
            // }
    }

    function isValidTime(){
        // checks if vote is made at scheduled time
        $date_pr = new DateTime(date("Y-m-d H:i:s"));       // submit date/ time
        $date_st = new DateTime("2021-03-20 08:00:00");     // start sched date
        $date_en = new DateTime("2021-03-30 16:00:00");     // end sched date

        // Compare the dates 
        if ($date_pr > $date_st && $date_pr < $date_en) {
            echo $date1->format("Y-m-d") . " is later than " . $date2->format("Y-m-d"); 
        }
        else{
            echo $date1->format("Y-m-d") . " is older than " . $date2->format("Y-m-d"); 
        }
    }

    function isValidUser(){
        // checks if user is registered
    }

    function isNotRepeated(){
        // checks if voter has voted already
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