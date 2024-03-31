<!DOCTYPE html>
<html lang="en">

   <?php include '../../assets/html_utilities/head-2.php';?>	

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
   <?php include '../../assets/html_utilities/menu-2.php';?>	
  </header><!-- End Header -->

  <main id="main">
  <?php include '../../assets/php_utilities/data_post.php';?>	
    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2><?php echo $tag?></h2>
          <ol>
            <li><a href="../../index.php">Home</a></li>
            <li><a href="../../notizie.php">Eventi e notizie</a></li>
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
                <img src="../../<?php echo $img?>" alt="" class="img-fluid">
              </div>

              <h2 class="entry-title">
                <a href="../../<?php echo $file?>"><?php echo $titolo?></a>
              </h2>
				<?php include '../../assets/php_utilities/view_entry-meta.php'; ?>

              <div class="entry-content">
                    <p>Il <a href='../../assets/img/rosari_mag21.jpg'>programma</a> completo</p>
              </div>

				<?php include '../../assets/php_utilities/view_entry-footer.php'; ?>


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