

<form action="http://localhost/idbc/tugas loop.php" method="GET">
  <label>masukan angka ajaib</label><br>
  <input type="text" name="nilai"><br>
  <input type="submit" value="kirim">
</form> 

<?php

$input = $_GET['nilai'];

echo "input = $input<br/>";

for ($i = 1; $i <= $input; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "$i ";
   }
 echo "<br/>";
}




?>