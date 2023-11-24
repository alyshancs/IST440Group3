<?php
include "../inc/dbinfo.inc";
session_start(); 
if(!isset($_SESSION["user"])){ 
    header("Location:login.php"); 
}
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="displaylog.css">
<div style="text-align: left;" id="img">
<a href="index.php">
    <img src="EMESIS Logo.jpg" alt="EMESIS logo">
</a>
</div>

</head>

<div class="encounter">
    <?php
    $simplelogEncID = $_SESSION["sessionEncId"];
    echo "<h2>The Encounter ID is ".$simplelogEncID."</h2>";

    $sql_encounterLog = "SELECT * FROM activitylog WHERE id_emsencounter ='$simplelogEncID'ORDER BY date_time";
    $encounterResult = mysqli_query($conn, $sql_encounterLog);
    $dataencounterResults = array();
        if(mysqli_num_rows($encounterResult)>0){
            While($row_encounterResult =mysqli_fetch_assoc($encounterResult)){
                $dataencounterResults[] = $row_encounterResult;
            }
    ?>
</div>
    <h1> Encounter Record </h1>
    <table>
        <tr>
            <th>Date</th>
            <th>Notes</th>
            <th>Systolic BP</th>
            <th>Diastolic BP</th>
            <th>Pulse</th>
            <th>sp02</th>
            <th>Respiratory Rate</th>
        </tr>
        <?php
        foreach($dataencounterResults as $dataencounterResult){
            echo "<tr>
                <td>".$dataencounterResult['date_time']."</td>
                <td>".$dataencounterResult['notes']."</td>
                <td>".$dataencounterResult['systolicBP']."</td>
                <td>".$dataencounterResult['diastolicBP']."</td>
                <td>".$dataencounterResult['pulse']."</td>
                <td>".$dataencounterResult['sp02']."</td>
		<td>".$dataencounterResult['respiratory_rate']."</td>
            </tr>";
        }
        ?>
    </table>
    <?php
        }else{
            echo "No results found";
        }
    ?>

    <!-- Button to return to activitylog page to insert new line -->
    <button onclick="window.location.href='ActivityLog.php'"> Return to insert new line </button>

</html>
