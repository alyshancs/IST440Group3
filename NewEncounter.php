<!DOCTYPE html>
<html>
<head>
    <head>
<a href="index.php">
	<div style="text-align: left;" id="img">
    <img src="EMESIS Logo.jpg" alt="EMESIS logo">
</div>
</a>
        <link rel="stylesheet" href="newencounterstyles.css">
    </head>
<title>New Encounter</title>
</head>
<body>

    <form action="newEncounterFunction.php" method="POST" id="form">
                <div style="text-align:center;" id="header">
                        <h1>NEW ENCOUNTER</h1>
                        <hr style="text-align:center;" id="line">
                </div>

        <div class="inputholder1">
                 <!--Label and input field for patient first name-->
                 <label for="first_name">First Name:</label>
       		 <input type="text" id="first_name" name="first_name" placeholder="Patient first name">

       		 <!-- label and input field for patient last name-->
                 <label for="last_name">Last Name:</label>
        	 <input type="text" id="last_name" name="last_name" placeholder="Patient last name">

       		 <!-- label and input field for patien date of birth-->
                 <label for="ptDOB">DOB:</label>
       		 <input type="date" id="ptDOB" name="ptDOB"> <br><br>
	</div>

	<div class="inputholder2">
		<!-- lable and input field for DateTime-->
		<label for ="encounterDateTime"> Encounter date and time: </label>
		<input type="datetime-local" id="encounterDateTime" name="encounterDateTime">

        	<!-- label and input field for  Location Name-->
        	<label for="locationName" > Location name: </label>
        	<input type="text" id="locationName" name="locationName" placeholder="Name of location"></br></br>
	</div>

	<div class="inputholder3">
        	<!-- label and input field for Location address-->
        	<label for="locationAddress" > Street Address: </label>
        	<input type="text" id="locationAddress" name="locationAddress" placeholder="Street address of the scene">

        	<!-- label and input field for city -->
		<laber for="locationCity" >City: </label>
		<input type="text" id="locationCity" name="locationCity" placeholder="City where scene was located"> 

		<!-- label and input field for location's state-->
        	<label for="locationState" > State: </label>
        	<input type="text" id="locationState" name="locationState" placeholder="ie: PA">

        	<!-- label and input field for city 
        	<label for="locationCity" >City: </label>
        	<input type="text" id="locationCity" name="locationCity" placeholder="City where scene was located"> </br> -->
	</div>

	<div class="buttonholder">
       		 <!--button to submit-->
       		 <button type ="submit" name="submitNewEncounter" > Create New Encounter </button>
	</div>
    </form>

</body>
</html>
