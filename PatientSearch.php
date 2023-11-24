<!DOCTYPE html>
<html>
<header> 
<link rel="stylesheet" type="text/css" href="styles.css">
<?php 
include "../inc/dbinfo.inc";  
session_start(); 
if(!isset($_SESSION["user"])){ 
    header("Location:login.php"); 
} 
?>

<div style="text-align: left;" id="img">
<a href="index.php">
    <img src="EMESIS Logo.jpg" alt="EMESIS logo">
</a>
</div>

<body>
<h1>Patient Search</h1>
  
       

    <?php  if(isset($_POST['submit-search'])){
        $first_name = mysqli_real_escape_string($conn, $_POST['first_name']);
        $last_name = mysqli_real_escape_string($conn, $_POST['last_name']);
        $date_of_birth = mysqli_real_escape_string($conn, $_POST['date_of_birth']);
        $sql = "SELECT * FROM patient WHERE first_name='$first_name' and last_name='$last_name' and date_of_birth ='$date_of_birth'";
        $result = mysqli_query($conn, $sql);
        $queryResult = mysqli_num_rows($result);
       

        if($queryResult > 0){
            while($row = mysqli_fetch_assoc($result)){
                $pt_id = $row["pt_id"];
                echo "<div>
                <div class='name_age'>".$row['first_name']. " " .$row['last_name']. " " .$row['gender']."</div>
                <div class='dateofbirth'>".$row['date_of_birth']."</div>
                <div class='recordlocation'>Record from PSUMed</div>
                </div><br><br><br>";

            $sql_allergy = "SELECT * FROM allergy WHERE pt_id = '$pt_id'";
            $allergyResult = mysqli_query($conn, $sql_allergy);
            $dataAllergyResults = array();
                if(mysqli_num_rows($allergyResult)>0){
                    while($row_allergy = mysqli_fetch_assoc($allergyResult)){
                        $dataAllergyResults[] = $row_allergy;
                    }
                }
                ?>
                <h1 id="allergies">Allergies</h1>
                <table>
                        <tr>
                            <th>Allergy Trigger</th>
                            <th>Allergy Type</th>
                            <th>Allergy Reaction</th>
                            <th>Allergy Severity</th>
                        </tr>  
            <?php
                 foreach($dataAllergyResults as $dataAllergyResult){
                        $allergyArrayTrigger = $dataAllergyResult['allergy_trigger'];
        
                $allergyArrayType = $dataAllergyResult['allergy_type'];
                        $allergyArrayReaction = $dataAllergyResult['reaction'];
                        $allergyArraySeverity = $dataAllergyResult['severity'];
                     echo   "<tr>
                            <td>".$allergyArrayTrigger." </td>
                            <td>".$allergyArrayType."</td>
                            <td>".$allergyArrayReaction."</td>
                            <td>".$allergyArraySeverity."</td>
                        </tr>";          
                }
                ?>
            </table>
            <?php
              
            $sql_medication = "SELECT * FROM medication WHERE pt_id = '$pt_id'"; 
            $medicationResult = mysqli_query($conn, $sql_medication);
            $dataMedicationResults = array();
                if(mysqli_num_rows($medicationResult)>0){
                    while($row_medication = mysqli_fetch_assoc($medicationResult)){
                        $dataMedicationResults[] = $row_medication;
                    }
                }
                ?>
                <h1>Medication</h1>
                <table>
                    <tr>
                    <th>Generic Name</th>
                    <th>Brand Name</th>
                    <th>Dose</th>
                    <th>Frequency</th>
                    <th>Intended Use</th>
                    </tr>
                <?php
                foreach($dataMedicationResults as $dataMedicationResult){
                    echo 
                        "<tr>
                            <td>" .$dataMedicationResult['generic_name']."</td>
                            <td>" .$dataMedicationResult['brand_name']."</td>
                            <td>" .$dataMedicationResult['dose']."</td>
                            <td>" .$dataMedicationResult['frequency']."</td>
                            <td>" .$dataMedicationResult['intended_use']."</td>
                        <tr>";
                     
                }
                ?>
                
                </table>
                
                <?php
            $sql_diagnosishx = "SELECT * FROM diagnosishx WHERE pt_id = '$pt_id'";
            $diagnosishxResult = mysqli_query($conn, $sql_diagnosishx);
            $dataDiagnosishxResults = array();
                if(mysqli_num_rows( $diagnosishxResult)>0){
                    while($row_diagnosishx = mysqli_fetch_assoc( $diagnosishxResult)){
                        $dataDiagnosishxResults[] = $row_diagnosishx;
                    }  
                }
                ?>
                <h1>Diagnosis History</h1>
                <table>
                    <tr>
                        <th>Condition</th>
                        <th>Diagnosis Date</th>
                        <th>Status</th>
                        <th>Notes</th>
                    </tr>
                <?php
                foreach( $dataDiagnosishxResults as $dataDiagnosishxResult){
                    echo "<tr> 
                        <td>" .$dataDiagnosishxResult['condition']."</td>
                        <td>" .$dataDiagnosishxResult['diagnosis_date']."</td>
                        <td>" .$dataDiagnosishxResult['status']."</td>
                        <td>" .$dataDiagnosishxResult['notes']."</td>
                     </tr>";
                }
                ?>
                </table>

                <?php
                $sql_surgicalhx = "SELECT * FROM surgicalhx WHERE pt_id = '$pt_id'";
             $surgicalhxResult = mysqli_query($conn, $sql_surgicalhx);
             $dataSurgicalhxResults = array();
                if(mysqli_num_rows( $surgicalhxResult)>0){
                    while($row_surgicalhx = mysqli_fetch_assoc( $surgicalhxResult)){
                        $dataSurgicalhxResults[] = $row_surgicalhx; 
                    }
                }
                ?>
                <h1>Surgical History</h1>
                <table>
                    <tr>
                        <th>Procedure</th>
                        <th>Date Performed</th>
                        <th>Success?</th>
                        <th>Complications</th>
                    </tr>
                <?php

                foreach( $dataSurgicalhxResults as $dataSurgicalhxResult){
                    echo "<tr> 
                        <td>" .$dataSurgicalhxResult['procedure_name']."</td>
                        <td>" .$dataSurgicalhxResult['date_performed']."</td>
                        <td>" .$dataSurgicalhxResult['success']."</td>
                        <td>" .$dataSurgicalhxResult['complications']."</td>
                     </tr>";
                }
                ?>
                </table>
                <?php
            
            }
            
           
       
            
        }
        else{
            echo "There are no results for your search!";
        }
       
    }

?>

</html>
</body>
</header>
</html>
