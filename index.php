<?php
            // ip address fetcher
            if (!empty($_SERVER["HTTP_CLIENT_IP"])){
                $ip = $_SERVER["HTTP_CLIENT_IP"];
            }
            elseif (!empty($_SERVER["HTTP_X_FORWARDED_FOR"])){
                $ip = $_SERVER["HTTP_X_FORWARDED_FOR"];
            }
            else{
                $ip = $_SERVER["REMOTE_ADDR"];
            }
            echo "<center>YOUR IP ADDRESS is ".$ip."</center>";
            $host = gethostbyaddr($_SERVER['REMOTE_ADDR']);
            echo "<center>YOUR HostName is ".$host."</center>";


            // Rick time trigger
            $sched_row = $conn->query("SELECT * FROM `vote_event` WHERE `vote_event_id` = 1");
            $sched = $sched_row->fetch_assoc();
            $start_time = strtotime($sched['start_date']);
            $end_time = strtotime($sched['end_date']);
            $access_time = time();
            echo "<h6>Start:________".(date("Y-m-d h:m:sa", $start_time))."<br></h6>";
            echo "<h6>Ends:________".$end_time."<br></h6>";
            echo "<h6>Opened:_____".(date("Y-m-d h:m:sa", $access_time))."<br></h6>";
            echo '<h6 id = "timer">Now</h6>';
            echo '<script>
                var myVar = setInterval(myTimer, 1000);
                function myTimer() {
                    var d = new Date();
                    var t = d.toLocaleTimeString();
                    document.getElementById("timer").innerHTML = "Now:_____________________"+parseInt(d.getTime()/1000);';
            // echo    time().' '.$end_time;
            echo    'if('.$end_time.' < parseInt(d.getTime()/1000)){
                        window.location.href = "https://youtu.be/dQw4w9WgXcQ";
                    }
                }
                </script>';
?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta charset="utf-8">
    <link rel="icon" href="img/BUHS LOGO.png" type="image/png">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>


    <style>
        body {
            font-family: 'Lato';
            font-weight: 400;
            font-size: 1.4rem;
        }
        
        p {
            text-align: center;
            margin-bottom: 4rem;
        }
    </style>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>BUCEILS HS Vote</title>
</head>

<body>

    <main>
        <div id="voting-page">
               <a href = "php/vtBallot.php">
               Index
               </a>
              
        </div>
    </main>
    <button type="button">Click Me</button>
    <p></p>
    <script type="text/javascript">
        $(document).ready(function(){
            $("button").click(function(){

                $.ajax({
                    type: 'POST',
                    url: 'script.php/mark()',
                    success: function (data) {
                        alert(data);
                        $("p").text(data);

                    }
                });
    });
    });
    </script>
  
   
</body>

</html>
