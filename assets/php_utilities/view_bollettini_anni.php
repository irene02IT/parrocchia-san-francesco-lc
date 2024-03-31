<?php echo "        
	  <script>
        function showBollettini(str) {
          if (str == '') {
            document.getElementById('BollettiniPerMese').innerHTML = '';
            return;
          } else {
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
              if (this.readyState == 4 && this.status == 200) {
                document.getElementById('BollettiniPerMese').innerHTML = this.responseText;
              }
            };
            xmlhttp.open('GET','assets/php_utilities/view_bollettini_mesi.php?q='+str,true);
            xmlhttp.send();
          }
        }
        </script>
"; 
        ?>
        <?php include("config.php");
          $sql="SELECT * FROM `bollettini_parrocchiali` GROUP BY `anno_romano` ORDER BY `anno_romano` DESC";

          $result = mysqli_query($link, $sql);
          echo "<form>
            	  <div class='form-group'>
          			<select class='form-control' name='bollettini' onchange='showBollettini(this.value)'>
                      <option value=''>Seleziona l'anno:</option>";
          if (mysqli_num_rows($result) > 0) {
            // output data of each row
            while($row = mysqli_fetch_assoc($result)) {
                    echo  "<option value='".$row['anno']."'>Anno ".$row['anno_romano']." (".$row['anno'].")</option>";
                    }
                  } else {
                    echo "0 results";
                  }
          mysqli_close($link);        
          echo "<div>
            </select>
          </form>";?>  