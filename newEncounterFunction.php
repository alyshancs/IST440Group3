//<?php
//header("location:ActivityLog.php");
//?>

<?php
   // <!-- eventually should include the session security function-->
    session_start();

    include "../inc/dbinfo.inc";

    if(isset($_POST['submitNewEncounter']))
    {
        $fname=$_POST['first_name'];
        $lname=$_POST['last_name'];
        $dob =$_POST['ptDOB'];
	$encDateTime =$_POST['encounterDateTime'];
        $locName =$_POST['locationName'];
        $locAddress =$_POST['locationAddress'];
        $locState =$_POST['locationState'];
        $locCity =$_POST['locationCity'];

	//need sql to find and insert patient id for the sql below

	// prepared sqli  statement
	$newsql="INSERT INTO emsencounter (encounter_date_time,location_name,location_street_address,location_state,location_city,first_name,last_name,date_of_birth) VALUES (?,?,?,?,?,?,?,?)";
	$newstmt=mysqli_stmt_init($conn);
	$newprepstmt=mysqli_stmt_prepare($newstmt,$newsql);

	if($newprepstmt)
		{
		mysqli_stmt_bind_param($newstmt,"ssssssss",$encDateTime,$locName,$locAddress,$locState,$locCity,$fname,$lname,$dob);
		mysqli_stmt_execute($newstmt);

		//retrieves the encounter id that was just created by the insert query above. This is used by activity log to insert data into activity log
		$_SESSION["sessionEncId"]=mysqli_insert_id($conn);

		//redirects to activity log page after inserting data
		header("location:ActivityLog.php");

		//redirects to combined activitylog page after inserting encounter data
		//header("location: CombinedActivityLog.php");
		}else{

		echo "Error";
		}

      }
?>
