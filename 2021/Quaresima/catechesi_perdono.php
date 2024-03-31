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
          <h2>Catechesi sul perdono</h2>
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
                <img src="../../assets/img/catequay.jpg" alt="" class="img-fluid">
              </div>

              <h2 class="entry-title">
                <a href="#">Catechesi dei nostri frati sul perdono</a>
              </h2>

            <?php include '../../assets/php_utilities/view_entry-meta.php'?>

              <div class="entry-content">
	  			<p>Nei mercoledì di questa Quaresima 2021 i nostri frati ci hanno proposto un percorso di catechesi sul perdono.</p>

				<!-- ======= Elenco Section ======= -->
                   <section id="elenco-contenuti-catechesi-perdono-2021" class="services">
                    <div class="container">
                      <div class="row">
                          <?php include '../../assets/php_utilities/config.php';

                              $sql="SELECT * FROM catechesi_perdono_2021";

                              $result = mysqli_query($link, $sql);

                              if (mysqli_num_rows($result) > 0) {
                                // output data of each row
                                while($row = mysqli_fetch_assoc($result)) {
                                      echo 	"<div class='col-md-6 mt-4 mt-md-0'>
                                                  <div class='icon-box'>
                                                    <a href='". $row['video_youtube']."'><i class='icofont-video'></i></a>
                                                    <h4><a href='". $row['percorso_file']."'>". $row['nome_incontro']."</a></h4>
                                                    <p>". $row['data']." - ". $row['autore']."</p>
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