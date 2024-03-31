<?php include 'config.php';
$inc="SELECT * FROM `consiglio-parrocchiale` GROUP BY `incarico`";
$res = mysqli_query($link, $inc);

if (mysqli_num_rows($res) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($res)) {
        echo "
              <section id='".$row['incarico']."' class='team section-bg'>
                <div class='container'>

                  <div class='section-title'>
                    <h2>Consiglio Pastorale</h2>
                    <p>".$row['incarico']."</p>
                  </div>

                  <div class='row'>";

        $sql="SELECT * FROM `consiglio-parrocchiale` WHERE `incarico`='".$row['incarico']."'";

        $result = mysqli_query($link, $sql);

        if (mysqli_num_rows($result) > 0) {
          // output data of each row
          while($row = mysqli_fetch_assoc($result)) {
          echo "
                    <div class='col-lg-6 mt-4 mt-lg-0'>
                      <div class='member d-flex align-items-start'>
                        <div class='pic'><img src='". $row['foto']."' class='img-fluid' alt=''></div>
                        <div class='member-info'>
                          <h4>". $row['titolo']." ". $row['nome']." ". $row['cognome']."</h4>
                          <span>". $row['incarico']."</span>
                        </div>
                      </div>
                    </div>
                  ";
                  }
                } else {
                  echo "0 results";
                }

          echo "    </div>

                </div>
              </section>";
          }
        } else {
          echo "0 results";
        }
	mysqli_close($link); 



?>    