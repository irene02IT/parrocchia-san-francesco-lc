<?php			include 'assets/php_utilities/config.php';
                $sql="SELECT * FROM `editoriali_parroco` WHERE `cognome_parroco`='Maninetti'";
                $result = mysqli_query($link, $sql);	
                $total_record = mysqli_num_rows($result);
                $total_page = ceil($total_record/$limit);
echo  "<div class='blog-pagination' data-aos='fade-up'>
          <ul class='justify-content-center'>";                

           if($page>1){
               echo "<li><a href='editoriali.php?page=".($page-1)."'><i class='icofont-rounded-left'></i></a></li>";
            }
            
            for($i=1;$i<$total_page;$i++)
            {             	                    
              echo "<li"; if($_GET['page']==$i){ echo " class='active'";}; echo "><a href='editoriali.php?page=".$i."' >".$i."</a></li>";
            }
           if($i>$page&&$i!=$limit){
               echo "<li><a href='editoriali.php?page=".($page+1)."'><i class='icofont-rounded-right'></i></a></li>";
            }
 			else{
               echo "<li class='disabled'><i class='icofont-rounded-right'></i></li>";
            }

    
    echo "</ul>
        </div>";
         
mysqli_close($link);    
    ?>