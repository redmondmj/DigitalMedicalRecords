<?php
            
$connection = mysqli_connect("localhost", "cacha_web", "p2DaavTC03Vr") or die(mysqli_error($connection));
$db = @mysqli_select_db($connection, cacha_medrec) or die(mysqli_error($connection));
$query = mysqli_query($connection, "select * from tbl_visit where PatientID=".$_REQUEST['patientName']);
            while($row = mysqli_fetch_array($query))
            {
                echo '<option value="'.$row['VisitID'].'">'.$row['VisitID']. '</option>';
            }