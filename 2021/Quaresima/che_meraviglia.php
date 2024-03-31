<!DOCTYPE html>
<html lang="en">

   <?php include '../../assets/html_utilities/head-2.php';?>   

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
   <?php include '../../assets/html_utilities/menu-2.php';?>	
  </header><!-- End Header -->

  <main id="main">

<?php include '../../assets/php_utilities/data_post.php';	?>
    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Che meraviglia</h2>
          <ol>
            <li><a href="../../index.php">Home</a></li>
            <li><a href="#">Quaresima 2021</a></li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
      <div class="container">

        <div class="row">

          <div class="col-lg-8 entries">

            <article class="entry entry-single">

              <div class="entry-img">
                <img src="../../assets/img/pasqua2021.jpg" alt="" class="img-fluid">
              </div>

              <h2 class="entry-title">
                <a href="#">Pasqua 2021</a>
              </h2>

            <?php include '../../assets/php_utilities/view_entry-meta.php'?>

              <div class="entry-content">
	  			<p>Tutti i video di Padre Gabriele sulla Quaresima 2021:</p>

				<!-- ======= Elenco Section ======= -->
                   <section id="elenco-contenuti" class="services">
                    <div class="container">
                      <div class="row">
                          <?php include '../../assets/php_utilities/config.php';

                              $sql="SELECT * FROM `che-meraviglia-2021`";

                              $result = mysqli_query($link, $sql);

                              if (mysqli_num_rows($result) > 0) {
                                // output data of each row
                                while($row = mysqli_fetch_assoc($result)) {
                                      echo 	"<div class='col-md-6 mt-4 mt-md-0'>
                                                  <div class='icon-box'>
                                                    <a href='". $row['percorso_file']."'><i class='icofont-video'></i></a>
                                                    <h4><a href='". $row['percorso_file']."'>Che meraviglia... <br><h2>". $row['nome']."</h2>". $row['settimana']." </a></h4>
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
                  </section><!-- End Elenco Section -->	


              </div>

            <?php include '../../assets/php_utilities/view_entry-footer.php'?>

            </article><!-- End blog entry -->

          </div><!-- End blog entries list -->
          <div class="col-lg-4">
            <div class="sidebar">
				<?php include '../../assets/php_utilities/view_recent_posts.php';?>             
            </div><!-- End sidebar -->

          </div><!-- End blog sidebar -->

        </div>
      </div>

    </section><!-- End Blog Section -->

  </main><!-- End #main -->
  
  <!-- ======= Footer ======= -->
  <?php include '../../assets/html_utilities/footer-2.php';?>	
  <!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <?php include '../../assets/html_utilities/foot-2.php';?>	

</body>

</html>