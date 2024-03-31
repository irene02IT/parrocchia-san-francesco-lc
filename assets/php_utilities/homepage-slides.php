<?php include 'config.php';

echo "      <div id='heroCarousel' class='carousel slide carousel-fade' data-ride='carousel'>

      <ol class='carousel-indicators' id='hero-carousel-indicators'></ol>

      <div class='carousel-inner' role='listbox'>";

$sql="SELECT * FROM `hero-slides` ORDER BY `number` ASC";

$result = mysqli_query($link, $sql);
$cont=1;
if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
	
    echo  "	<!-- Slide ".$cont." -->
    ";
    if ($cont==1){
    echo "	<div class='carousel-item active' style='background-image: url(".$row['img'].")'>";}else{
    echo "	<div class='carousel-item' style='background-image: url(".$row['img'].")'>";}
    
    echo  "<div class='carousel-container'>
            <div class='container'>
              <h2 class='animate__animated animate__fadeInDown'>".$row['titolo']."</h2>
              <p class='animate__animated animate__fadeInUp'>".$row['sottotitolo']."</p>
              ".$row['button']."
            </div>
          </div>
        </div>";
        $cont++;

              
  }
} else {
  echo "0 results";
}

echo "
	</div>	     	
      </div>	  

      <a class='carousel-control-prev' href='#heroCarousel' role='button' data-slide='prev'>
        <span class='carousel-control-prev-icon icofont-simple-left' aria-hidden='true'></span>
        <span class='sr-only'>Previous</span>
      </a>

      <a class='carousel-control-next' href='#heroCarousel' role='button' data-slide='next'>
        <span class='carousel-control-next-icon icofont-simple-right' aria-hidden='true'></span>
        <span class='sr-only'>Next</span>
      </a>";

mysqli_free_result($result);
mysqli_close($link);   
?> 
