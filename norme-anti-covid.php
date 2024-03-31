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
          <h2>Emergenza Covid-19</h2>
          <ol>
            <li><a href="index.php">Home</a></li>
            <li>Norme covid</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->
    
    <!-- ======= covid Section ======= -->
    <?php include 'assets/html_utilities/covid_section.php'; ?>
	<!-- End Covid Section -->
    
</main><!-- End main -->
  <!-- ======= Footer ======= -->
<?php include 'assets/html_utilities/footer.php';?>	
  <!-- End Footer -->
  
  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <?php include("assets/html_utilities/foot.php"); ?>
  
</body>

</html>