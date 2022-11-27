<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
    <h1>Edit Database</h1>
    <!--
    <table class="table">
  <thead>
        <tr>
            <th scope="col">menu</th>
            <th scope="col">id</th>
            <th scope="col">year</th>
            <th scope="col">month</th>
            <th scope="col">date</th>
            <th scope="col">mon</th>
            <th scope="col">tue</th>
            <th scope="col">wed</th>      
        </tr>
  </thead>
  <tbody>
    -->

<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "idbc";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$id = $_GET["id"];

$sql = "SELECT * FROM syllabus WHERE id = $id;";
$result = $conn->query ($sql);

if ($result->num_rows > 0) {}

?>

 <form action="http://localhost/idbc/edit2.php" method="POST">

<?php
  $row = $result->fetch_assoc();
?>  

    
    <label>Masukkan data id</label><br>
    <input type="text" name="id" value="<?php echo $row ["id"] ?>"><br>
    <label>Masukkan data year</label><br>
    <input type="text" name="year" value="<?php echo $row ["year"] ?>"><br>
    <label>Masukkan data month</label><br>
    <input type="text" name="month" value="<?php echo $row ["month"] ?>"><br>
    <label>Masukkan data week</label><br>
    <input type="text" name="week" value="<?php echo $row ["week"] ?>"><br>
    <label>Masukkan data date</label><br>
    <input type="text" name="date" value="<?php echo $row ["date"] ?>"><br>
    <label>Masukkan data mon</label><br>
    <input type="text" name="mon" value="<?php echo $row ["mon"] ?>"><br>
    <label>Masukkan data tue</label><br>
    <input type="text" name="tue" value="<?php echo $row ["tue"] ?>"><br>
    <label>Masukkan data wed</label><br>
    <input type="text" name="wed" value="<?php echo $row ["wed"] ?>"><br>
    <input type="hidden" name="proses" value="true"><br>
    <input type="submit" value="Kirim"><br>
      

 </form>
 

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
    where   id='$_POST[id]'");
   



    echo "Data baru telah tersimpan";
    echo "<meta http-equiv=refresh content=1;URL='phpxampp.php'>";
}
?>

        </div>
    </main>
<!--</tbody>
</table>
-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>