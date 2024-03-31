    <section id="portfolio" class="portfolio">
      <div class="container">

        <div class="row portfolio-container">
        
        <?php include 'config.php';

        $sql="SELECT * FROM chierichetti ORDER BY `chierichetti`.`anno_liturgico` DESC";

        $result = mysqli_query($link, $sql);

        if (mysqli_num_rows($result) > 0) {
          // output data of each row
          while($row = mysqli_fetch_assoc($result)) {
                echo 	"<div class='col-lg-4 col-md-6 portfolio-item'>
                            <div class='portfolio-wrap'>
                              <img src='". $row['foto']."' class='img-fluid' alt='". $row['alt']."'>
                              <div class='portfolio-info'>
                                <h4>Anno liturgico ". $row['anno_liturgico']."</h4>
                                <p>". $row['descrizione']."</p>
                                <div class='portfolio-links'>
                                  <!--<a href='". $row['foto']."' data-gall='portfolioGallery' class='venobox' title='". $row['alt']."'><i class='bx bx-plus'></i></a>-->
                                  <a href='". $row['foto']."' data-gall='portfolioDetailsGallery' data-vbtype='iframe' class='venobox' title='". $row['alt']."'><i class='bx bx-link'></i></a>
                                </div>
                              </div>
                            </div>
                          </div>";
                  }
                } else {
                  echo "0 results";
                }
        mysqli_close($link);
        ?>    


        </div>

      </div>
    </section>