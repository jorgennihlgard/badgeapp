<?php
include('../partials/header.php');
include('../connection/connection.php');



$query = "SELECT * FROM visitor WHERE DATE(fromdate) <= CURDATE() AND DATE(enddate) >= CURDATE()";

$result = mysqli_query($db, $query);
if($result){
$row = mysqli_fetch_assoc($result);
}else{
    echo "no match";
}
?>


<div>
<table id="allVisitors" class="table table-striped">
        <thead>
          <tr>
            <th>Namn</th>
            <th>MobilNummer</th>
            <th>Ärende</th>
            <th>Startdatum</th>
            <th>Slutdatum</th>
          </tr>
      </thead>
      <tbody>
      <?php foreach($result as $row){ ?>
        <tr>   
        <td><?php echo $row['name']?></td>
        <td><?php echo $row['mobilenr']?></td>
        <td><?php echo $row['errand']?></td>
        <td><?php echo $row['fromdate']?></td>
        <td><?php echo $row['enddate']?></td>
        <td><a href="show.php?id=<?php echo $row['id'];?>" class="btn btn-primary">Se bricka</a></td>
        </tr>
      <?php } ?>
      </tbody>
</table>
</div>
<button class="btn btn-primary indexBtn" onclick="window.location.href = 'index.php';">Tillbaka till startsida</button>


<?php
include('../partials/footer.php');
?>



