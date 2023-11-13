

<?php
session_start();
include "../inc/dbinfo.inc";

?>




<!DOCTYPE html> 
 <head>
        <title> Activity Log</title>
    </head>

    <body>
        <h1> Activity Log </h1>
       <?php echo "The encounter id is ".$_SESSION["sessionEncId"]." <br>"; ?>

        <!-- form to input new activity log line-->
        <form action="insertActivityLogLine.php" method="POST" >

	    <!-- hidden  input to capture the encounter id-->
	    <input type="hidden" id="hiddenEncID" name="hiddenEncID" value="$_SESSION["sessionEncId"]">

            <!--Label and input field for date/time of new line-->
            <label for="lineTime"> Time:</label>
            <input type="datetime-local" id="lineTime" name="lineTime" placeholder="Time">

            <!--Label and input field for notes -->
            <label for="lineNote"> Notes:</label>
            <input type="text" id="lineNote" name="lineNote" placeholder="Type notes here."><br><br>

            <!--Label and input field for systolic BP-->
            <label for="lineSystolicBP"> Systolic BP: </label>
            <input type="number" id="lineSystolicBP" name="lineSystolicBP" placeholder="ie: 120">

            <!--Label and input field for diastolic BP-->
            <label for="lineDiastolicBP"> Diastolic BP:</label>
            <input type="number" id="lineDiastolicBP" name="lineDiastolicBP" placeholder="ie: 80">


            <!--Label and input field for pulse -->
            <label for="linePulse"> Pulse rate:</label>
            <input type="number" id="linePulse" name="linePulse" placeholder="ie: 90"> <br><br>


            <!--Label and input field for spO2-->
            <label for="linesp02"> sp02:</label>
            <input type="number" id="linesp02" name="linesp02" placeholder="ie: 100">

            <!--Label and input field for respiratory rate-->
            <label for="lineRespiratory"> Respiratory Rate:</label>
            <input type="number" id="lineRespiratory" name="lineRespiratory" placeholder="ie: 18"> <br><br>

            <!-- button to update/submit new line for activity log-->
            <button type ="submit" name="submitNewLine" > Save </button>

        </form>

    </body>

</html>
