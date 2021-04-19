<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta charset="utf-8">
    <link rel="icon" href="../img/BUHS LOGO.png" type="image/png">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="../css/layout.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <title>Download receipt</title>
</head>

<body>
    <?php
        include 'navstudent.php';
        require "connect.php";
	      require "vtValSan.php";
        require "vtSubmit.php";
    ?>
    <header id="F-header" style="text-align:center"><b>VOTE RECEIPT</b></header><br>

    <main>
      <div id="download-receipt-page" class="F-download-receipt-page">
        <!-- DIV container only for PHP file -->
        <div id="receipt-preview" class="F-receipt-preview">
          <!-- < ?php 
            require "PDF/generatepdf.php";
          ?> -->
        </div>
        <div id="receipt-page-buttons" class="F-receipt-page-buttons">
          <button type="button" class="F-downloadReceiptBTN" id="dl-receipt">Download Receipt</button>
          <button type="button" class="F-goToHomeBTN" id="gt-home">Go to Home</button>
        </div>
      </div>
    </main>

    <script>
      // Get Download Receipt button
      var download = document.getElementById("dl-receipt");

      // Get Home button
      var home = document.getElementById("gt-home");

      download.onclick = function() {
        location.href = "PDF/generatepdf.php";
      }

      home.onclick = function() {
        location.href = "/*Dashboard*/";
      }

    </script>

    
    <?php
        include '../html/footer.html';
    ?>
</body>

</html>
