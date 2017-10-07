<?php
    include "db.php";

    $query = mysqli_query($connection, "select * from tbl_village");
    
    while($row = mysqli_fetch_array($query))
    {
        echo '<option value="'.$row['VillageID'].'">'.$row['Village'].'</option>';
    }