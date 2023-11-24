<?php
include "../inc/dbinfo.inc"; 
session_start(); 
if(!isset($_SESSION["user"])){ 
    header("Location:login.php"); 
}
?>

<!DOCTYPE html>
 
<head>
        <link rel="stylesheet" href="activitylogstyles.css">
	<title>Activity Log</title>

            <!-- hidden  input to capture the encounter id-->
            <input type="hidden" id="hiddenEncID" name="hiddenEncID" value="$_SESSION["sessionEncId"]">
        <a href="index.php">
                <div style="text-align: left;" id="img">
                 <img src="EMESIS Logo.jpg" alt="EMESIS logo">
                </div>
        </a>
</head>

<body>

	<div class="encounter">
        <?php 
		echo "<h2>The Encounter ID is ".$_SESSION["sessionEncId"]."</h2>";
	 ?>
	</div>

        <!-- form to input new activity log line-->
        <form action="insertActivityLogLine.php" method="POST" id="form">

        <div style="text-align:center;" id="header">
                <h1>ACTIVITY LOG</h1>
                <hr style="text-align:center;" id="line">
        </div>

            <!--Label and input field for date/time of new line-->
            <label for="lineTime"> Time:</label>
            <input type="datetime-local" id="lineTime" name="lineTime" placeholder="Time"><br><br>

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

	    <!-- Label and text area for notes -->
	    <label for="lineNote"> Type notes into the box below:</label> <br>
	    <textarea id="lineNote" name="lineNote" rows="10" cols="100"> </textarea>

	<div class="buttonholder">
            <!-- button to update/submit new line for activity log-->
            <button type ="submit" name="submitNewLine" > Save </button>
	</div>

        </form>

    </body>

</html>
