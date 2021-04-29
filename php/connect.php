<?php
    date_default_timezone_set('Asia/Manila');
    $dbhost = "localhost";
    $dbuser = "id16218880_webhostingbscs3a";
    $dbpass = "t9%~bjqmK)uHAwe[";
    $db = "id16218880_buceils";
    // Proceduaral connection
    // $conn = mysqli_connect($dbhost, $dbuser, $dbpass,$db);
    // if ($conn->connect_error) {
    //     die("Connection to database failed: ". $conn->connect_error);
    // }

    // OOP COnnection
    @$conn = new mysqli($dbhost, $dbuser, $dbpass,$db);
    if ($conn -> connect_errno) {
        // echo "Failed to connect to MySQL: " . $conn -> connect_error;
        require 'vtValSan.php';
        errorMessage("There seems to be an error. <br> It's not you, it's us. We're trying our best to make this work. ");
        exit();
    }
    // Remove this section when inserting into mainline
    session_start();
    $_SESSION['bumail'] = "dhanjaphetverastigue.ador@bicol-u.edu.ph";
    $_SESSION['fname'] = "Maria";
    $_SESSION['lname'] = "Hanway";
    $_SESSION['student_id'] = 1;
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
    
    

    
    $candidateErr = "";
    $candidate = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty($_POST["candidate"])) {
        $candidateErr = "Candidate is required";
    } else {
        $candidate = test_input($_POST["candidate"]);
    }
    }

    // function test_input($data) {
    // $data = trim($data);
    // $data = stripslashes($data);
    // $data = htmlspecialchars($data);
    // return $data;
    // }
?>