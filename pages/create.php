<?php
include '../connection/connection.php';

$name = $_POST['name'];
$mobileNr = $_POST['mobileNr'];
$errand = $_POST['errand'];
$fromDate = $_POST['fromDate'];
$endDate = $_POST['endDate'];
var_dump($name, $mobileNr, $errand, $fromDate, $endDate);

$query = "INSERT INTO visitor (name, mobilenr, errand, fromdate, enddate) VALUES ('$name','$mobileNr','$errand','$fromDate','$endDate')";
$todb = mysqli_query($db, $query);
var_dump($todb);
if($todb){
    echo "jepp";
    
}
else{
   echo "no";
}
mysqli_close($db);

header('Location: show.php');
?>



<!-- $todb = mysqli_query($db,"SELECT * FROM visitor");
var_dump($todb);
if($todb){
    echo "jepp";
    foreach($todb as $row){
        echo "<p>".$row['mobilenr']."</p>";
    } -->