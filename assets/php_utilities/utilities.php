<?php
function inserthtml($name, $pref=''){
    if($pref == 'hr'){
        readfile("$name");
    }
    else{
        readfile($pref."html_elements/$name");
    }
    
}
?>