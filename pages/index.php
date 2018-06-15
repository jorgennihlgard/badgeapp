
<?php  
include '../connection/connection.php';
include('../partials/header.php');
?>
    <h1>Besöksbricka</h1>

    
        
        <form class="clearfix" action="create.php" method="POST">
        <div class="wrapper clearfix" >
        <p><span class="rowname">Namn:</span> <input type="text" class="rowvalue" required autofocus name="name" value="<?php $name ?>"></p>
        <p><span class="rowname">Mobil:</span> <input type="text" class="rowvalue" required name="mobileNr" value="<?php $mobileNr ?>"></p>
        <p><span class="rowname">Ärende:</span> <input type="text" class="rowvalue" required name="errand" value="<?php $errand ?>"></p>
        <p><span class="rowname">Startdatum:</span> <input type="date" class="rowvalue" required name="fromDate" value="<?php $fromDate ?>"></p>
        <p><span class="rowname">Slutdatum:</span> <input type="date" class="rowvalue" required name="endDate" value="<?php $endDate ?>"></p>

        
       
       
        </div>
        <p class="indexBtn" ><input type="submit" class="btn btn-success btn-lg" name="submit" value="Registrera"></p>
    </form>
    
   
    <button class="indexBtn btn btn-primary" onclick="window.location.href = 'showall.php';">Visa &nbsp inskrivna</button>    
   
    
<?php
mysqli_close($db);

include('../partials/footer.php');
?>

