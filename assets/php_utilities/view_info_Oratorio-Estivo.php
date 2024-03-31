<?php
include 'config.php';

// Return date/time info of a timestamp; then format the output
$mydate=getdate(date("U"));
$wd=$mydate[weekday];
$m=$mydate[month];
switch ($wd){
  case "Monday":
    $wd="Lunedì";
    break;
  case "Tuesday":
    $wd="Martedì";
    break;
  case "Wednesday":
    $wd="Mercoledì";
    break;
  case "Thursday":
    $wd="Giovedì";
    break;
  case "Friday":
    $wd="Venerdì";
    break;
  case "Saturday":
    $wd="Sabato";
    break;
  case "Sunday":
    $wd="Domenica";
    break;
}
switch ($m){
  case "January":
    $m="Gennaio";
    break;
  case "February":
    $m="Febbraio";
    break;
  case "March":
    $m="Marzo";
    break;
  case "April":
    $m="Aprile";
    break;
  case "May":
    $m="Maggio";
    break;
  case "June":
    $m="Giugno";
    break;
  case "July":
    $m="Luglio";
    break;
  case "August":
    $m="Agosto";
    break;
  case "September":
    $m="Settembre";
    break;
  case "October":
    $m="Ottobre";
    break;
  case "November":
    $m="Novembre";
    break;
  case "December":
    $m="Dicembre";
    break;
}  

//$data="$wd $mydate[mday] $m";
$datainizio=date_create("2021-06-14");
//$mydate=date_format($mydate,"Y-m-d");

echo	   "<div class='sidebar' id='Oratorio-estivo'>
              <h3 class='sidebar-title'><b>Info Oratorio Estivo</b></h3>			  
              <div class='sidebar-item'>";
              
$content="SELECT * FROM `programma-OrEs2021` WHERE `data`='".$wd.' '.$mydate[mday].' '.$m."'";
$result_content = mysqli_query($link, $content);

    if (mysqli_num_rows($result_content) > 0) {
      // output data of each row
      while($row = mysqli_fetch_assoc($result_content)) {
      $desc=$row['desc-attività'];
            echo "<p><i>Programma di oggi, ".$wd.' '.$mydate[mday].' '.$m."</i></p>";              
            echo " <p>".$desc."</p>";
            echo" <p><a href='http://www.parrocchiasanfrancescolecco.it/pdf/OREST2021_Mod_iscrizione.docx'>Programma completo</a></p>";
    }
    } else {
    if($wd!="Domenica"&&$wd!="Sabato")
        echo "<p><b>L'Oratorio Estivo 2021 &egrave terminato</b><br>Grazie a tutti!</p>";
    }
    mysqli_close($link);
echo              "</div>
            </div><!-- End Oratorio estivo-->";