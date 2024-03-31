<?php
include 'assets/php_utilities/config.php';
error_reporting(0);
$keyword = $desc='';
$data_head="SELECT * FROM `head` WHERE `head`.`percorso_file`='".$_SERVER['PHP_SELF']."'";
$result_data_head = mysqli_query($link, $data_head);
if (mysqli_num_rows($result_data_head) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result_data_head)) {
  $desc=$row['description-content'];
  $keyword=$row['keyword-content'];}
} else {
  echo "0 results";
}
mysqli_close($link);
echo "<head>
  <meta charset='utf-8'>
  <meta content='width=device-width, initial-scale=1.0' name='viewport'>

  <title>Parrocchia San Francesco</title>
  <meta content='".$desc."' name='description'>
  <meta content='".$keyword."' name='keywords'>

  <link href='".$_SERVER['PHP_SELF']."' rel='canonical'>

    <!-- Favicons -->
  <link href='assets/img/logoT.ico' rel='icon'>
  <link href='assets/img/logoT.ico' rel='apple-touch-icon'>

  <!-- Google Fonts -->
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i' rel='stylesheet'>
  
  <!-- Vendor CSS Files -->
  <link href='assets/vendor/bootstrap/css/bootstrap.min.css' rel='stylesheet'>
  <link href='assets/vendor/icofont/icofont.min.css' rel='stylesheet'>
  <link href='assets/vendor/boxicons/css/boxicons.min.css' rel='stylesheet'>
  <link href='assets/vendor/animate.css/animate.min.css' rel='stylesheet'>
  <link href='assets/vendor/remixicon/remixicon.css' rel='stylesheet'>
  <link href='assets/vendor/venobox/venobox.css' rel='stylesheet'>
  <link href='assets/vendor/owl.carousel/assets/owl.carousel.min.css' rel='stylesheet'>

  <!--my JS File -->
  <script src='assets/js/my_utilities.js'></script>
  
  <!-- Template Main CSS File -->
  <link href='assets/css/style.css' rel='stylesheet'>

  <!-- =======================================================
  * Template Name: Sailor - v2.0.0
  * Template URL: https://bootstrapmade.com/sailor-free-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/

  *	Other authors: Irene Erba
  ======================================================== -->

</head>";
  ?>