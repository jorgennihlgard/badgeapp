
<?php
include('../partials/header.php');
include('../connection/connection.php');
if(!isset($_GET['id'])){
$query = "SELECT * FROM visitor WHERE id = (SELECT MAX(id) FROM visitor);";

}
else{
    $id = $_GET['id'];
    $query = "SELECT * FROM visitor  WHERE id = '$id'";
}
$logoQuery = "SELECT * FROM logo";

$result = mysqli_query($db, $query);
$row = mysqli_fetch_assoc($result);

$logoresult = mysqli_query($db, $logoQuery);
$logorow = mysqli_fetch_assoc($logoresult);
?>

<div class="wrap showbadge">
    <table>
        <?php echo "<tr><th>Namn:</th><td>" . $row['name'] . "</td></tr>" .
                  "<tr><th>Ärende: </th><td>" . $row['errand'] . "</td></tr>" .
                 "<tr><th>Startdatum: </th><td>" . $row['fromdate'] . "</td></tr>" .
                 "<tr><th>Slutdatum</th><td>" . $row['enddate'] . "</td><tr>" .
                 "<img id='logo' src=" . $row['image'] . ">" .
                 "<img id='logo' src=" . $logorow['image'] . ">"
        ?>
    </table>
   
</div>
<button class="btn btn-primary indexBtn" onclick="window.location.href = 'index.php';">Till startsida</button>
<button class="btn btn-primary indexBtn" onclick="window.location.href = 'showall.php';">Till inskrivna</button>

<?php
include('../partials/footer.php');
?>

<!--if($result){echo "yess";}else{ echo "noo";}-->