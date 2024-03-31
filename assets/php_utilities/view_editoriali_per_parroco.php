<?php echo "	  
	   <script>
        function showEditoriali(str) {
          if (str == '') {
            document.getElementById('ElencoEditoriali').innerHTML = '';
            return;
          } else {
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
              if (this.readyState == 4 && this.status == 200) {
                document.getElementById('ElencoEditoriali').innerHTML = this.responseText;
              }
            };
            xmlhttp.open('GET','assets/php_utilities/view_editoriali.php?q='+str,true);
            xmlhttp.send();
          }
        }
        </script>        

"; 
        ?>
        
<?php include("config.php");
echo "
          <div class='col-lg-4'>
            <article class='entry'>

              <div class='entry-img'>
                <img src='assets/img/pvitalema.jpg' alt='' class='img-fluid'>
              </div>

              <h2 class='entry-title'>
                <a href=''>Padre Vitale Maninetti, nostro Parroco attuale, tra noi da settembre 2020</a>
              </h2>
              <div class='entry-content'>
                <p>";


          

          $sql="SELECT `nome_parroco`, `cognome_parroco` FROM `editoriali_parroco` GROUP BY `nome_parroco` ";

          $result = mysqli_query($link, $sql);
          echo "
          		<form>
            	  <div class='form-group'>
          			<select class='form-control' name='select-parroco' onchange='showEditoriali(this.value)'>
                      ";
          if (mysqli_num_rows($result) > 0) {
            // output data of each row
            while($row = mysqli_fetch_assoc($result)) {
                    echo  "<option value='".$row['cognome_parroco']."'>Padre ".$row['nome_parroco']." ".$row['cognome_parroco']."</option>";
                    }
                  } else {
                    echo "0 results";
                  }
          mysqli_close($link);        
          echo "<div>
            </select>
          </form>

 
                </p>
              </div>

            </article><!-- End blog entry -->
      	</div>";?>  