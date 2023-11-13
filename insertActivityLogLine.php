<?php
session_start();
include "../inc/dbinfo.inc";


if (isset($_POST['submitNewLine']))
{
	//encounter id captured from session variable
	$alEncID=$_SESSION["sessionEncId"];

	//useful for testing purposes. Can delete
	//echo "The alEncID is ".$alEncID."<br>";
	//echo "The sessionEncId is".$_SESSION["sessionEncId"]."<br>";

	$alLineTime= $_POST['lineTime'];
	$alLineNote =$_POST['lineNote'];
	$alSysBP =$_POST['lineSystolicBP'];
	$alDiaBP =$_POST['lineDiastolicBP'];
	$alPulse =$_POST['linePulse'];
	$alSp02 =$_POST['linesp02'];
	$alResp =$_POST['lineRespiratory'];

	$sql="INSERT INTO activitylog (id_emsencounter,date_time,notes,systolicBP,diastolicBP,pulse,sp02,respiratory_rate) VALUES (?,?,?,?,?,?,?,?)";

	$stmt=mysqli_stmt_init($conn);
	$pstmt=mysqli_stmt_prepare($stmt,$sql);

	if($pstmt)
		{
   	 	mysqli_stmt_bind_param($stmt,"issiiiii",$alEncID,$alLineTime,$alLineNote,$alSysBP,$alDiaBP,$alPulse,$alSp02,$alResp);
   	 	mysqli_stmt_execute($stmt);

		//updates combined activity log screen
		//this didn't work
		//header("location:CombinedActivityLog.php");

		//directs to simple activity log
		header("location:simpleDisplayActivityLog.php");

		//useful for testing purposes
		// echo "insert success!";
		} else {
   	 	echo "Error";
		}

}
?>
