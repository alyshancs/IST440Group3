<?php include "../inc/dbinfo.inc";
?>
<h1>Patient Search</h2>
<div class="patient-container">
<?php
    if(isset($_POST['submit-search'])){
        $search = mysqli_real_escape_string($conn, $_POST['search']);
        $sql = "SELECT * FROM patient WHERE first_name='$search'";
        $result = mysqli_query($conn, $sql);
        $queryResult = mysqli_num_rows($result);
        

        if($queryResult > 0){
            while($row = mysqli_fetch_assoc($result)){
                $pt_id = $row["pt_id"];
                echo $pt_id, ": this is your id!";
                echo "<div>
                    <h3>".$row['first_name']."</h3>
                    <p>".$row['middle_name']."</p>
                    <p>".$row['last_name']."<p>
                    <p>".$row['street_address']."<p>
                    <p>".$row['city']."<p>
                    <p>".$row['state']."<p>
                    <p>".$row['pt_id']."<p>
                </div>";
             }
        }else{
            echo "There are no results for your search!";
        }
        
    }



?>





</div>

