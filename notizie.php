  <!DOCTYPE html>
<html lang="en">

  <?php include("assets/html_utilities/head.php"); ?>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">        
    <?php include('assets/html_utilities/menu.php'); ?>
  </header><!-- End Header -->
  
  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Notizie</h2>
          <ol>
            <li><a href="index.php">Home</a></li>
            <li>Notizie</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
      <div class="container">
        <div class="row">
		<?php include 'assets/php_utilities/view_posts.php';?>
        </div>
		<?php include 'assets/php_utilities/view_post_pagination.php';?>
      </div>
    </section><!-- End Blog Section -->

  </main><!-- End #main -->  
  
  <!-- ======= Footer ======= -->
	<?php include('assets/html_utilities/footer.php'); ?>
    <!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <?php include("assets/html_utilities/foot.php"); ?>
</body>

</html>