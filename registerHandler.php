<?php
    require_once "db.php";    
        
    //Receive the RAW post data.
    $content = trim(file_get_contents("php://input"));

    //Attempt to decode the incoming RAW post data from JSON.
    $decoded = json_decode($content, true); 

    $patientID = $decoded[0]->patientID;
    $visitDate = date("Y-m-d");
    $visitTime = date("h:i:s");

    $dispensery = $decoded[0]->dispensery;
    $weight = $decoded[0]->weight;
    $hr = $decoded[0]->hr;
    $temp = $decoded[0]->temp;
    $bp = $decoded[0]->bp;
    $glucose = $decoded[0]->glucose;

    $gravida = $decoded[0]->gravida;
    $para = $decoded[0]->para;
    $abortions = $decoded[0]->abortions;
    $lnmp = $decoded[0]->lnmp;
    $livingChildren = $decoded[0]->livingChildren;

    $chiefComplaint = $decoded[0]->cheifComplaint;

    $test = $decoded[0]->test;
    $med = $decoded[0]->med;
    $gyn = $decoded[0]->gyn;
    $opht = $decoded[0]->opht;
    $dent = $decoded[0]->dent;
    $v = $decoded[0]->v;

    $practicioner = $decoded[0]->practicioner;

    /*
    $pregnant = $decoded[0]->pregnant;
    $breastfeed = $decoded[0]->breastfeed;
    */

    $sql = "INSERT INTO visit (";
    $values = ") VALUES (";
    if (!empty($patientID)){
        $sql .= "PatientID,";
        $values .= "'$patientID',";
    }
    if (!empty($visitDate)) {
        $sql .= "VisitDate,";
        $values .= "'$visitDate',";
    }
    if (!empty($visitTime)) {
        $sql .= "VisitTime,";
        $values .= "'$visitTime',";
    }
    if (!empty($dispensery)){
        $sql .= "VisitedDispensary,";
        $values .= "'$dispensery',";
    }
    if (!empty($test)){
        $sql .= "TriageTesting,";
        $values .= "'$test',";
    }
    if (!empty($med)){
        $sql .= "TriageMedical,";
        $values .= "'$med',";
    }
    if (!empty($gyn)){
        $sql .= "TriageGYN,";
        $values .= "'$gyn',";
    }
    if (!empty($opht)){
        $sql .= "TriageOPHT,";
        $values .= "'$opht',";
    }
    if (!empty($dent)){
        $sql .= "TriageDENT,";
        $values .= "'$dent',";
    }
    if (!empty($v)){
        $sql .= "TriageVenDis,";
        $values .= "'$v',";
    }
    if (!empty($weight)){
        $sql .= "Weight,";
        $values .= "'$weight',";
    }
    if (!empty($temp)){
        $sql .= "Temperature,";
        $values .= "'$temp',";
    }
    if (!empty($bp)){
        $sql .= "BloodPressure,";
        $values .= "'$bp',";
    }
    if (!empty($glucose)){
        $sql .= "Glucose,";
        $values .= "'$glucose',";
    }
    if (!empty($hr)){
        $sql .= "HeartRate,";
        $values .= "'$hr',";
    }
    if (!empty($lnmp)){
        $sql .= "LastPeriod,";
        $values .= "'$lnmp',";
    }
    /*
    if (!empty($pregnant)){
        $sql .= "Pregnant,";
        $values .= "'$pregnant',";
    }
    if (!empty($breastfeed)){
        $sql .= "Breastfeed,";
        $values .= "'$breastfeed',";
    }
    */
    if (!empty($gravida)){
        $sql .= "NumOfPreg,";
        $values .= "'$gravida',";
    }
    if (!empty($abortions)){
        $sql .= "NumAbortions,";
        $values .= "'$abortions',";
    }
    if (!empty($para)){
        $sql .= "NumLivingChildren,";
        $values .= "'$para',";
    }
    if (!empty($practicioner)){
        $sql .= "Practicioners = '$practicioner',";
    }
    if(substr_compare($sql, ",", -1, 1)){
        substr_replace($sql ,")",-1);
        substr_replace($values ,")",-1);
    }
    $sql .= $values;
    	
    try{
        $stmt = mysqli_prepare($connection, $sql);
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