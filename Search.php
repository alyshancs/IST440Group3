<?php include "../inc/dbinfo.inc"; ?>
<!DOCTYPE html>

<html>
    <head>
<a href="index.php">
	<div style="text-align: left;" id="img">
    <img src="EMESIS Logo.jpg" alt="EMESIS logo">
</div>
</a>
        <link rel="stylesheet" href="searchstyles.css">
    </head>

<form action="PatientSearch.php" method="POST" id="form">
                <div style="text-align:center;" id="header">
                        <h1>PATIENT SEARCH</h1>
                        <hr style="text-align:center;" id="line">
                </div>
	<div class="inputholder1">
   		 <input type="text" name="first_name" placeholder="First Name" required>
   		 <input type="text" name="last_name" placeholder="Last Name" required><br>
	</div>
	<div class="inputholder2">
   		 <input type="number" name="date_of_birth" placeholder="Date of Birth" required><br> 
	</div>
	<div class="buttonholder">
   		 <button type="submit" name="submit-search">Search for Patient</button>
	</div>
</form>
<?php
$sql_patientTest = "SELECT first_name, last_name, date_of_birth FROM patient";
$patientTestResult = mysqli_query($conn, $sql_patientTest);
$dataPatientTestResults = array();
    if(mysqli_num_rows($patientTestResult)>0){
        while($row_patientTest = mysqli_fetch_assoc($patientTestResult)){
            $dataPatientTestResults[] = $row_patientTest;
    }
}
?>
<div class="tableholder">
<table>
    <tr>
        <td>First Name</td>
        <td>Last Name</td>
        <td>Date of Birth</td>
    </tr>
    <?php
    foreach($dataPatientTestResults as $dataPatientTestResult){
        echo "<tr>
                <td>".$dataPatientTestResult['first_name']."</td>
                <td>".$dataPatientTestResult['last_name']."</td>
                <td>".$dataPatientTestResult['date_of_birth']."</td>       
        
        </tr>";

    }
    ?>
</table>
</div>
</html>
