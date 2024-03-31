	  
<?php include 'config.php' ;

$sql="SELECT * FROM iniziative_in_evidenza";

$result = mysqli_query($link, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
        echo 	"<div class='col-md-6 mt-4 mt-md-0'>
                    <div class='icon-box'>
                      <i class='". $row['icona']."'></i>
                      <h4><a href='". $row['percorso_file']."'>". $row['titolo_iniziativa']."</a></h4>
                      <p>". $row['descrizione']."</p>
                    </div>
                  </div>";
          }
        } else {
          echo "0 results";
        }
mysqli_close($link);
?>    