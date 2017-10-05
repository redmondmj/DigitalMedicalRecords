<?php
    require_once "db.php";
    
    //Receive the RAW post data.
    $content = trim(file_get_contents("php://input"));
    
    //Attempt to decode the incoming RAW post data from JSON.
    $decoded = json_decode($content, true); 
    
    $firstName = $decoded[0]->first;
    $lastName = $decoded[0]->last;
    $village = $decoded[0]->village;
    $birth = $decoded[0]->age;
    $sex = $decoded[0]->sex;

    $sql = "INSERT INTO patient (";
    $values = ") VALUES (";
    if (!empty($firstName)){
        $sql .= "FirstName,";
        $values .= "$firstName,";
    }
    if (!empty($lastName)) {
        $sql .= "LastName,";
        $values .= "$lastName,";
    }
    if (!empty($village)) {
        $sql .= "Village,";
        $values .= "$village,";
    }
    if (!empty($birth)){
        $sql .= "Birthday,";
        $values .= "$birth,";
    }
    if (!empty($sex)){
        $sql .= "Sex,";
        $values .= "$sex,";
    }

    if(substr_compare($sql, ",", -1, 1)){
        substr_replace($sql ,")",-1);
        substr_replace($values ,")",-1);
    }

    $sql .= $values;
    
    try{
        $stmt = mysqli_prepare($connection, $sql);
        $query = mysqli_query($connection, $stmt) or die(mysqli_error($connection));
        if(mysqli_stmt_execute($connection, $sql)){
            echo true;
        }
    } catch(Error $e){
        echo false;
    } finally {
        mysqli_stmt_close();
        mysqli_close();
    }
?>