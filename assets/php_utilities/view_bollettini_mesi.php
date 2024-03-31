	  
<?php include 'config.php';

$q = intval($_GET['q']);
$sql="SELECT * FROM bollettini_parrocchiali  WHERE `bollettini_parrocchiali`.`anno` = ".$q." ORDER BY `bollettini_parrocchiali`.`percorso_file` DESC";

$result= mysqli_query($link, $sql);
if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
        echo 	"<div class='col-md-6 mt-4 mt-md-0'>
                    <div class='icon-box'>
                      <i class='icofont-newspaper'></i>
                      <h4><a href='". $row['percorso_file']."'>". $row['mese']."</a></h4>
                      <p></p>
                    </div>
                  </div>";
          }
        } else {
          echo "0 results";
        }
mysqli_close($link);
?>    