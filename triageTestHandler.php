<?php
    require_once "db.php";    
    
    $visitID = test_input($_POST['visitID']);
    $malaria = test_input($_POST['malaria']);
    $visitDate = date("Y-m-d");
    $visitTime = date("h:i:s");
    $v = test_input($_POST['v']);
    $typh = test_input($_POST['hr']);
    $syph = test_input($_POST['syhilis']);
    $pregnancy = test_input($_POST['pregnancy']);
    $leuc = test_input($_POST['leuc']);
    $rbc = test_input($_POST['rbc']);
    $glucose = test_input($_POST['glucose']);
    $nitrates = test_input($_POST['nitrates']);
    $lastHIV = test_input($_POST['lastHIV']);
    $lastPZQ = test_input($_POST['lastPZQ']);
    $lastWORM = test_input($_POST['lastWORM']);
    $lastVitA = test_input($_POST['lastVitA']);

    $prevMeds = $_POST['paracetamol'] . ", " . $_POST['benz'] . ", " . $_POST['cerf'] . ", " . $_POST['otherMeds'];
    
    
    
    if(!empty($_POST['gender-0'])){
        $sex = "male";
    } else if (!empty($_POST['gender-1'])){
        $sex = "female";
    }
    
    if (!empty($firstName) && !empty($lastName) && !empty($village) && !empty($birth) && !empty($sex)){
    	$sql = "UPDATE visit (VisitID, VisitDate, VisitTime, MalariaTest, SyohilisTest, TyphTest, UrineLeucTest, UrineRBCTest, UrineGlucoseTest, UrineNitritesTest, PregnancyTest, Temperature, BloodPressure, Glucose, HeartRate, LastPeriod, Pregnant, Breastfeed, NumOfPreg, NumAbortions, NumLivingChildren) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?) WHERE visitID=$visitID";
        try{
            $stmt = mysqli_prepare($connection, $sql);
            mysqli_stmt_bind_param($patientID, $visitDate, $visitTime, $dispensary, $test, $med, $gyn, $opht, $dent, $v, $weight, $temp, $bp, $glucose, $hr, $lnmp, $pregnant, $breastfeed, $gravadia, $abortions, $para);
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