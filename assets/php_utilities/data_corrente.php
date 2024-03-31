<?php

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
    
echo "$wd $mydate[mday] $m $mydate[year]";
?>