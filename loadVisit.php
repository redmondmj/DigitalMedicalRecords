<?php
            
require_once "db.php";
$query = mysqli_query($connect, "select * from tbl_visit where PatientID=".$_REQUEST['patientName']);
            while($row = mysqli_fetch_array($query))
            {
                echo '<option value="'.$row['VisitID'].'">'.$row['VisitID']. '</option>';
            }