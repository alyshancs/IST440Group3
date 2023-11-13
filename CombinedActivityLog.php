<?php
session_start();
include "..inc/dbinfo.inc";

        //this bit is the sql insert

        if(isset($_POST['submitCombinedLine'])){
            $alEncID=$_SESSION['sessionEncId'];

            $alLineTime=$_POST['lineTime'];
            $alLineNote=$_POST['lineNote'];
            $alSysBP=$_POST['lineSystolicBP'];
            $alDiaBP=$_POST['lineDiastolicBP'];
            $alPulse=$_POST['linePulse'];
            $alSp02=$_POST['linesp02'];
            $alResp=$_POST['lineRespiratory'];

            $sql="INSERT INTO activitylog (id_emsencounter, date_time, notes, systolicBP, diastolicBP, pulse, sp02, respiratory_rate) VALUES (?,?,?,?,?,?,?,?)";
	    $stmt=mysqli_stmt_init($conn);
            $pstmt=mysqli_stmt_prepare($stmt,$sql);

            if($pstmt){
                mysqli_stmt_bind_param($stmt,"issiiiii",$alEncID,$alLineTime, $alLineNote, $alSysBP,$alDiaBP, $alPulse, $alSp02,$alResp);
                mysqli_stmt_execute($stmt);

		//doesn't work, still general error 500
		//echo "<meta http-equiv='refresh' content='2'>";

            } else {echo "Error"; }
        }

?>

<!DOCTYPE html>

    <head>
        <title> Activity Log</title>
    </head>

    <body>
        <h1> Activity Log </h1>

            <!-- form to input new activity log line-->
           <form action="CombinedActivityLog.php" method="POST">

            <!--Label and input field for date/time of new line-->
            <label for="lineTime"> Time:</label>
            <input type="datetime-local" id="lineTime" name="lineTime" placeholder="Time">

            <!--Label and input field for notes -->
            <label for="lineNote"> Notes:</label>
            <input type="text" id="lineNote" name="lineNote" placeholder="Type notes here."><br><br>

            <!--Label and input field for systolic BP-->
            <label for="lineSystolicBP"> Systolic BP: </label>
            <input type="text" id="lineSystolicBP" name="lineSystolicBP" placeholder="ie: 120">

            <!--Label and input field for diastolic BP-->
            <label for="lineDiastolicBP"> Diastolic BP:</label>
            <input type="text" id="lineDiastolicBP" name="lineDiastolicBP" placeholder="ie: 80">


            <!--Label and input field for pulse -->
            <label for="linePulse"> Pulse rate:</label>
            <input type="text" id="linePulse" name="linePulse" placeholder="ie: 90"> <br><br>


            <!--Label and input field for spO2-->
            <label for="linesp02"> sp02:</label>
            <input type="text" id="linesp02" name="linesp02" placeholder="ie: 100">


            <!--Label and input field for respiratory rate-->
            <label for="lineRespiratory"> Respiratory Rate:</label>
            <input type="text" id="lineRespiratory" name="lineRespiratory" placeholder="ie: 18"> <br><br>

            <!-- button to update/submit new line for activity log-->
            <button type ="submit" name="submitCombinedLine" > Save </button>

        </form>
        <?php
        $combinedlogEncID = $_SESSION["sessionEncId"];
        echo "<h2>The Combined Encounter id is ".$combinedlogEncID."</h2>";

        $sql_encounterLog = "SELECT * FROM activitylog WHERE id_emsencounter ='$combinedlogEncID'";
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
                </tr>";
            }
            ?>
        </table>
    <?php
        }else{
            echo "No results found";
        }
    ?>

    </body>

</html>
