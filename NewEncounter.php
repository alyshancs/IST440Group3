<!DOCTYPE html>
<html>
<head>
<title>New Encounter</title>
</head>
<body>
    <h1>New Encounter</h1>
    <form action="newEncounterFunction.php" method="POST">
        <!--Label and input field for patient first name-->
        <label for="first_name"> First name:</label>
        <input type="text" id="first_name" name="first_name" placeholder="Patient first name">

        <!-- label and input field for patient last name-->
        <label for="last_name"> Last name:</label>
        <input type="text" id="last_name" name="last_name" placeholder="Patient last name">

        <!-- label and input field for patien date of birth-->
        <label for="ptDOB" > Date of Birth:</label>
        <input type="date" id="ptDOB" name="ptDOB"> <br><br>

	<!-- lable and input field for DateTime-->
	<label for ="encounterDateTime"> Encounter date and time: </label>
	<input type="datetime-local" id="encounterDateTime" name="encounterDateTime"><br><br>

        <!-- label and input field for  Location Name-->
        <label for="locationName" > Location name: </label>
        <input type="text" id="locationName" name="locationName" placeholder="Name of location">

        <!-- label and input field for Location address-->
        <label for="locationAddress" > Street Address: </label>
        <input type="text" id="locationAddress" name="locationAddress" placeholder="Street address of the scene">

        <!-- label and input field for location's state-->
        <label for="locationState" > State: </label>
        <input type="text" id="locationState" name="locationState" placeholder="ie: PA">

        <!-- label and input field for city -->
        <label for="locationCity" >City: </label>
        <input type="text" id="locationCity" name="locationCity" placeholder="City where scene was located"> <br><br>


        <!--button to submit-->
        <button type ="submit" name="submitNewEncounter" > Create new encounter </button>
    </form>

</body>
</html>
