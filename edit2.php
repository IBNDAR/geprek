<?php
include "koneksi.php";

var_dump($_POST);

  if(isset($_POST['proses'])){
    mysqli_query($koneksi,"update syllabus set
  
    year='$_POST[year]',
    month='$_POST[month]',
    week='$_POST[week]',
    date='$_POST[date]',
    mon='$_POST[mon]',
    tue='$_POST[tue]',
    wed='$_POST[wed]'
    where id='$_POST[id]'");

    echo "Data baru telah tersimpan";
    echo "<meta http-equiv=refresh content=1;URL='phpxampp.php'>";
  }
 ?>