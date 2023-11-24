<?php

	try{
    $conn = mysqli_connect("emesis-test-db.cyidaot3hs35.us-east-2.rds.amazonaws.com", "MasterEMT", "14TH#boobooBu$", "emesis_test_schema");

    if($conn){
        echo "";
    }else{
        echo "Connection failed: ".mysqli_connect_error();
    }
}catch(Exception $e){
   echo 'My error:'. $e->getMessage();
}
?>
