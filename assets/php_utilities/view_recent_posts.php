<?php include 'config.php';
	echo "<h3 class='sidebar-title'>Notizie recenti</h3>
              <div class='sidebar-item recent-posts'>";          
$sql="SELECT * FROM `post` ORDER BY `data` DESC LIMIT 4";

$result = mysqli_query($link, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {

          echo "<div class='post-item clearfix'>
                  <img src='../../".$row['percorso_img']."' alt=''>
                  <h4><a href='../..".$row['percorso_file']."'>".$row['titolo_post']."</a></h4>
                  <time datetime='".$row['data']."'>".$row['data']."</time>
                </div>";
  }
} else {
  echo "0 results";
}

mysqli_close($link);
        echo "</div><!-- End sidebar recent posts-->";
?>                