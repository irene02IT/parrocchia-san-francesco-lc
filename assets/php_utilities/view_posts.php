<?php include 'config.php';


    if ($_SERVER['PHP_SELF']=='/index.php'){
    $limit='2';}
    else{
    $limit='6';}

	if(isset($_GET["page"]))
	{
		$page=$_GET["page"];
	}
	else
	{
		$page=1;
	}

	$start_from=($page-1)*$limit;


$sql="SELECT * FROM `post` ORDER BY `data` DESC LIMIT ".$start_from.",".$limit."";

$result = mysqli_query($link, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo  "<div class='col-lg-4  col-md-6 d-flex align-items-stretch' data-aos='fade-up'>
            <article class='entry'>
              <div class='entry-img'>
                <img src='" . $row['percorso_img']. "' alt='". $row['percorso_file']."' class='img-fluid'>
              </div>

              <h2 class='entry-title'>
                <a href='". $row['percorso_file']."'>". $row['titolo_post']."</a>
              </h2>

              <div class='entry-meta'>
                <ul>
                  <li class='d-flex align-items-center'><i class='icofont-wall-clock'></i> <a href='". $row['percorso_file']."'><time datetime='". $row['data']."'>". $row['data']."</time></a></li>
                </ul>
              </div>

              <div class='entry-content'>
                <p>
				". $row['descrizione']."
                </p>
                <div class='read-more'>
                  <a href='". $row['percorso_file']."'>Leggi</a>
                </div>
              </div>

            </article><!-- End blog entry  -->
          </div>";
  }
} else {
  echo "0 results";
}

mysqli_free_result($result);
mysqli_close($link);   
?> 

 
