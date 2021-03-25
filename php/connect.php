<?php

    $dbhost = "localhost";
    $dbuser = "id16218880_webhostingbscs3a";
    $dbpass = "t9%~bjqmK)uHAwe[";
    $db = "id16218880_buceils";
    $conn = mysqli_connect($dbhost, $dbuser, $dbpass,$db);
    if ($conn->connect_error) {
        die("Connection to database failed: ". $conn->connect_error);
    }
        
    //  $dbhost = "localhost";
    //  $dbuser = "root";
    //  $dbpass = "";
    //  $db = "votetest";
    //  $conn = mysqli_connect($dbhost, $dbuser, $dbpass,$db);
    //  if ($conn->connect_error) {
    //      die("Connection to database failed: ". $conn->connect_error);
    //  }
    
    $positions = $conn->query("SELECT * FROM ((candidate INNER JOIN student ON candidate.student_id = student.student_id) INNER JOIN candidate_position ON candidate.position_id = candidate_position.position_id) ORDER BY candidate_position.heirarchy_id"); // get positions
?>