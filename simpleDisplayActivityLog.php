<?php
session_start();
include "../inc/dbinfo.inc";
?>

<!DOCTYPE html>
<html>
    <head></head>


    <?php
    $simplelogEncID = $_SESSION["sessionEncId"];
    echo "<h2>The Encounter id is ".$simplelogEncID."</h2>";

    $sql_encounterLog = "SELECT * FROM activitylog WHERE id_emsencounter ='$simplelogEncID'";
    $encounterResult = mysqli_query($conn, $sql_encounterLog);
    $dataencounterResults = array();
        if(mysqli_num_rows($encounterResult)>0){
            While($row_encounterResult =mysqli_fetch_assoc($encounterResult)){
                $dataencounterResults[] = $row_encounterResult;
            }
        
    ?>
    <h1> Encounter Record </h1>
    <table>
        <tr>
            <td>Date</td>
            <td>Notes</td>
            <td>Systolic BP</td>
            <td>Diastolic BP</td>
            <td>Pulse</td>
            <td>sp02</td>
            <td>Respiratory Rate</td>
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
