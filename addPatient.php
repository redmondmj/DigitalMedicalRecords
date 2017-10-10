<?php
    require_once "db.php";
    
    // GET POST data
    
    $firstName = $_POST['fname'];
    $lastName = $_POST['lname'];
    $village = $_POST['village'];
    $birth = $_POST['age'];
    $sex = $_POST['sex'];

    // $practicioner = $_POST[practitioner];

    $sql = "INSERT INTO tbl_patient (FirstName, LastName, Village, Birthday, Sex) VALUES ('$_POST[fname]', '$_POST[lname]', '$_POST[village]', '$_POST[age]', '$_POST[sex]')";



    // if (!empty($firstName)){
    //     $sql .= "FirstName,";
    //     $values .= "'$firstName',";
    // }
    // if (!empty($lastName)) {
    //     $sql .= "LastName,";
    //     $values .= "'$lastName',";
    // }
    // if (!empty($village)) {
    //     $sql .= "Village,";
    //     $values .= "'$village',";
    // }
    // if (!empty($birth)){
    //     $sql .= "Birthday,";
    //     $values .= "'$birth',";
    // }
    // if (!empty($sex)){
    //     $sql .= "Sex,";
    //     $values .= "'$sex',";
    // }
    // if (!empty($practicioner)){
    //     $sql .= "Practicioners = '$practicioner',";
    // }

    // if(substr_compare($sql, ",", -1, 1)){
    //     substr_replace($sql ,")",-1);
    //     substr_replace($values ,")",-1);
    // }

    // $sql .= $values;
   
    // $sql .= ");";


    
    // $stmt = mysqli_prepare($connect, $sql);

    // try{
    //     $stmt = mysqli_prepare($connect, $sql);
    //     if(mysqli_stmt_execute($connect, $sql)){
    //         echo true;
    //     }
    // } catch(Error $e){
    //     echo false;
    // } finally {
    //     //mysqli_stmt_close($connection, $sql);
    //     mysqli_close($connect);
    // }

    $result = mysqli_query($connect, $sql) or die(mysqli_error($connect));

    echo "Done - giver (redirect) to registration";