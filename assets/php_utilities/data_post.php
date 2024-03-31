<?php include 'config.php';
$img = $file=$titolo= $desc=$data=$data_char=$autore=$tag='';

$data_post="SELECT * FROM `post` WHERE `percorso_file`='".$_SERVER['PHP_SELF']."'";
echo "<div>".$_SERVER['PHP_SELF']."</div>";
$result_data_post = mysqli_query($link, $data_post);

if (mysqli_num_rows($result_data_post) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result_data_post)) {
  $img=$row['percorso_img'];
  $file=$row['percorso_file'];
  $titolo=$row['titolo_post'];
  $desc=$row['descrizione'];
  $data=$row['data'];
  $autore=$row['autore'];
  $tag=$row['tag'];}
} else {
  echo "0 results";
}
mysqli_close($link);

$data_char=date_create($row['data']);

 ?>
