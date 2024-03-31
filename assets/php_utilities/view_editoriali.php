<?php include 'config.php';


//    if ($_SERVER['PHP_SELF']=='/editoriali.php'){
//    $limit='6';}
//    else{
//    $limit='6';}
	$limit='6';
	if(isset($_GET["page"]))
	{
		$page=$_GET["page"];
	}
	else
	{
		$page=1;
	}

	$start_from=($page-1)*$limit;

$q = intval($_GET['q']);
$sql="SELECT * FROM `editoriali_parroco` WHERE `cognome_parroco`='Maninetti'  ORDER BY `anno` DESC LIMIT ".$start_from.",".$limit."";

$result = mysqli_query($link, $sql);
$cont=0;
if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
  if($cont==0){
  	$lg=4;
  }else{
    $lg=4;
  }
    echo  "<div class='col-lg-".$lg."  col-md-6 d-flex align-items-stretch' data-aos='fade-up'>
            <article class='entry'>
   <!--        <div class='entry-img'>
                <img src='" . $row['percorso_img']. "' alt='". $row['percorso_pdf']."' class='img-fluid'>
              </div>-->

              <h2 class='entry-title'>
                <a href='". $row['percorso_pdf']."'>". $row['titolo_editoriale']."</a>
              </h2>

              <div class='entry-meta'>
                <ul>
                  <li class='d-flex align-items-center'><i class='icofont-wall-clock'></i> <a href='". $row['percorso_pdf']."'><time datetime='". $row['anno']."'>". $row['mese']." ". $row['anno']."</time></a></li>
                  <li class='d-flex align-items-center'><i class='icofont-user'></i><a href=''>Padre ". $row['nome_parroco']." ". $row['cognome_parroco']."</a></li>
                </ul>
              </div>

              <div class='entry-content'>
                <p>
				". $row['descrizione']."
                </p>
                <div class='read-more'>
                  <a href='". $row['percorso_pdf']."'>Leggi</a>
                </div>
              </div>

            </article><!-- End blog entry  -->
          </div>";
          $cont++;
  }
} else {
  echo "0 results";
}

mysqli_free_result($result);
mysqli_close($link);   
?> 

 