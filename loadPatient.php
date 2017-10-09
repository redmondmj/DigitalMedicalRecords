<?php
require_once "db.php";
$query = mysqli_query($connect, "select * from tbl_patient");
            while($row = mysqli_fetch_array($query))
            {
                echo '<option value="'.$row['PatientID'].'">'.$row['FirstName'].' '.$row['LastName']. '</option>';
            }