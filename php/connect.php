<?php

    $dbhost = "localhost";
    $dbuser = "id16218880_webhostingbscs3a";
    $dbpass = "t9%~bjqmK)uHAwe[";
    $db = "id16218880_buceils";
    $conn = mysqli_connect($dbhost, $dbuser, $dbpass,$db);
    if ($conn->connect_error) {
        die("Connection to database failed: ". $conn->connect_error);
    }
    // Remove this section when inserting into mainline
    session_start();
    $_SESSION['bumail'] = "a@gmail.com";
    $_SESSION['fname'] = "George";
    $_SESSION['lname'] = "Lucas";
    $_SESSION['student_id'] = 123456;
    $_SESSION['grade_level'] = 7;
    $_SESSION['timestamp']=time();
    // Remove this section when inserting into mainline

    //  $dbhost = "localhost";
    //  $dbuser = "root";
    //  $dbpass = "";
    //  $db = "votetest";
    //  $conn = mysqli_connect($dbhost, $dbuser, $dbpass,$db);
    //  if ($conn->connect_error) {
    //      die("Connection to database failed: ". $conn->connect_error);
    //  }
    
    $table = $conn->query("SELECT * FROM ((candidate INNER JOIN student ON candidate.student_id = student.student_id) INNER JOIN candidate_position ON candidate.position_id = candidate_position.position_id) ORDER BY candidate_position.heirarchy_id"); // get positions
?>