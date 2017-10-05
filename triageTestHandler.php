<?php
    require_once "db.php";    
    
    //Receive the RAW post data.
    $content = trim(file_get_contents("php://input"));
    
    //Attempt to decode the incoming RAW post data from JSON.
    $decoded = json_decode($content, true); 

    $visitID = $decoded[0]->visitID;
    $malaria = $decoded[0]->malaria;
    $visitDate = date("Y-m-d");
    $visitTime = date("h:i:s");
    $v = $decoded[0]->v;
    $typh = $decoded[0]->hr;
    $syph = $decoded[0]->syhilis;
    $pregnancy = $decoded[0]->pregnancy;
    $leuc = $decoded[0]->leuc;
    $rbc = $decoded[0]->rbc;
    $glucose = $decoded[0]->glucose;
    $nitrates = $decoded[0]->nitrates;
    $lastHIV = $decoded[0]->lastHIV;
    $lastPZQ = $decoded[0]->lastPZQ;
    $lastWORM = $decoded[0]->lastWORM;
    $lastVitA = $decoded[0]->lastVitA;
    $prevMeds = $decoded[0]->paracetamol . ", " . $decoded[0]->benz . ", " . $decoded[0]->cerf . ", " . $decoded[0]->otherMeds; // or = $decoded[0]->meds
    
    $sql = "UPDATE patient (";
    if (!empty($visitTime)) {
        $sql .= "VisitTime = $visitTime,";
    }
    if (!empty($malaria)){
        $sql .= "MalariaTest = $malaria,";
    }
    if (!empty($syph)){
        $sql .= "SyphilisTest =$syph,";
    }
    if (!empty($typh)){
        $sql .= "TyphTest = $typh,";
    }
    if (!empty($leuc)){
        $sql .= "UrineLeucTest = $leuc,";
    }
    if (!empty($rbc)){
        $sql .= "UrineRBCTest = $rbc,";
    }
    if (!empty($glucose)){
        $sql .= "UrineGlucoseTest = $glucose,";
    }
    if (!empty($nitrates)){
        $sql .= "UrineNitritesTest = $nitrates,";
    }
    if (!empty($pregnancy)){
        $sql .= "PregnancyTest = $pregnancy,";
    }
    if (!empty($temp)){
        $sql .= "Temperature = $temp,";
    }
    if (!empty($bp)){
        $sql .= "BloodPressure = $bp,";
    }
    if (!empty($glucose)){
        $sql .= "Glucose = $glucose,";
    }
    if (!empty($hr)){
        $sql .= "HeartRate = $hr,";
    }
    if (!empty($lnmp)){
        $sql .= "LastPeriod = $lnmp,";
    }
    if (!empty($breastfeed)){
        $sql .= "Breastfeed = $breastfeed,";
    }
    if (!empty($gravida)){
        $sql .= "NumOfPreg = $gravida,";
    }
    if (!empty($abortions)){
        $sql .= "NumAbortions = $abortions,";
    }
    if (!empty($para)){
        $sql .= "NumLivingChildren = $para,";
    }

    if(substr_compare($sql, ",", -1, 1)){
        substr_replace($sql ,")",-1);
    }

    $sql .= "WHERE VisitID = $visitID";

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