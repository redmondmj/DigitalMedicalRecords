<?php
    require_once "db.php";    
    
    $patientID = test_input($_POST['patientID']);
    $dispensery = test_input($_POST['dispensery']);
    $visitDate = date("Y-m-d");
    $visitTime = date("h:i:s");
    $weight = test_input($_POST['weight']);
    $hr = test_input($_POST['hr']);
    $temp = test_input($_POST['temp']);
    $bp = test_input($_POST['bp']);
    $glucose = test_input($_POST['glucose']);
    $gravida = test_input($_POST['gravida']);
    $para = test_input($_POST['para']);
    $abortions = test_input($_POST['abortions']);
    $lnmp = test_input($_POST['lnmp']);
    $livingChildren = test_input($_POST['livingChildren']);
    $chiefComplaint = test_input($_POST['cheifComplaint']);
    $test = test_input($_POST['test']);
    $med = test_input($_POST['med']);
    $gyn = test_input($_POST['gyn']);
    $opht = test_input($_POST['opht']);
    $dent = test_input($_POST['dent']);
    $v = test_input($_POST['v']);
    $pregnant = $_POST['pregnant'];
    $breastfeed = $_POST['breastfeed'];
    
    
    if(!empty($_POST['gender-0'])){
        $sex = "male";
    } else if (!empty($_POST['gender-1'])){
        $sex = "female";
    }
    
    if (!empty($firstName) && !empty($lastName) && !empty($village) && !empty($birth) && !empty($sex)){
    	$sql = "INSERT INTO visit (PatientID, VisitDate, VisitTime, VisitedDispensary, TriageTesting, TriageMedical, TriageGYN, TriageOPHT, TriageDENT, TriageVenDis, Weight, Temperature, BloodPressure, Glucose, HeartRate, LastPeriod, Pregnant, Breastfeed, NumOfPreg, NumAbortions, NumLivingChildren) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
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