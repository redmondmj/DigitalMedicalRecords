<?php
    require_once "db.php";    
    
    $firstName = test_input($_POST['fName']);
    $lastName = test_input($_POST['lName']);
    $village = test_input($_POST['village']);
    $birth = test_input($_POST['dob']);
    if(!empty($_POST['gender-0'])){
        $sex = "male";
    } else if (!empty($_POST['gender-1'])){
        $sex = "female";
    }
    
    if (!empty($firstName) && !empty($lastName) && !empty($village) && !empty($birth) && !empty($sex)){
    	$sql = "INSERT INTO patient (FirstName, LastName, Birthday, Sex, Village) VALUES (?,?,?,?,?)";
        try{
            $stmt = mysqli_prepare($connection, $sql);
            mysqli_stmt_bind_param($stmt, $firstName, $lastName, $birth, $sex, $village);
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
    }

    function test_input($data) {
	    $data = trim($data);
	    $data = stripslashes($data);
	    $data = htmlspecialchars($data);
	    return $data;
    }
?>