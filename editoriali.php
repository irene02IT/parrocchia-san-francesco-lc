<!DOCTYPE html>
<html lang="en">

  <?php include("assets/html_utilities/head.php"); ?>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
		<?php include 'assets/html_utilities/menu.php';?>	
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">

      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Gli editoriali del parroco</h2>
          <ol>
            <li><a href="index.php">Home</a></li>
            <li>Editoriali</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->
    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
      <div class="container">
      <article>
           <div class="blog-author clearfix">
              <img src="assets/img/pvitalema.jpg" class="rounded-circle float-left" alt="">
              <h4>Padre Vitale Maninetti</h4>
<!--           <div class="social-links">
                <a href="https://twitters.com/#"><i class="icofont-twitter"></i></a>
                <a href="https://facebook.com/#"><i class="icofont-facebook"></i></a>
                <a href="https://instagram.com/#"><i class="icofont-instagram"></i></a>
              </div>-->
              <p>
				Di seguito sono riportati gli editoriali precedenti del nostro attuale Parroco, Padre Vitale Maninetti, con noi da settembre 2020:
              </p>
            </div><!-- End blog author bio -->
      </article>
        <div class="row" id='ElencoEditoriali'>
  
		<?php include 'assets/php_utilities/view_editoriali.php';?>     
        </div>
		<?php include 'assets/php_utilities/view_editorial_pagination.php';?>
      </div>
    </section><!-- End Blog Section -->
  </main><!-- End main -->

  <!-- ======= Footer ======= -->
		<?php include 'assets/html_utilities/footer.php';?>	
    <!-- End Footer -->
  
  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>


<?php include("assets/html_utilities/foot.php"); ?>
 
 
</body>

</html>