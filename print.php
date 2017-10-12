<?php
    require 'db.php';
    //grab URL
    $url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    
    //parse string for id
    $parts = parse_url($url);
    parse_str($parts['query'], $query);
    
    //assign visitID
    $visitID = $query['id'];

    
    $sql = "SELECT * FROM tbl_patient INNER JOIN tbl_visit ON tbl_patient.PatientID = tbl_visit.PatientID WHERE tbl_visit.VisitID = $visitID";

    try{
      $result = mysqli_query($connect, $sql) or die(mysqli_error($connect));
      $row = mysqli_fetch_assoc($result);
      
      $patientID = $row['PatientID'];
      $visitDate = $row['VisitDate'];
      $visitTime = $row['VisitTime'];
      $visitedDispensary = $row['VisitedDispensary'];
      $triageTesting = $row['TriageTesting'];
      $triageMedical = $row['TriageMedical'];
      $triageGYN = $row['TriageGYN'];
      $triageOPHT = $row['TriageOPHT'];
      $triageDENT = $row['TriageDENT'];
      $triageVenDis = $row['TriageVenDis'];
      $weight = $row['Weight'];
      $temperature = $row['Temperature'];
      $bloodPressure = $row['BloodPressure'];
      $glucose = $row['Glucose'];
      $heartRate = $row['HeartRate'];
      $lastPeriod = $row['LastPeriod'];
      $pregnant = $row['Pregnant'];
      $breastfeed = $row['Breastfeed'];
      $numOfPreg = $row['NumOfPreg'];
      $numLiveBirth = $row['NumLiveBirth'];
      $numAbortions = $row['NumAbortions'];
      $numLivingChildren = $row['NumLivingChildren'];
      $vTest = $row['VTest'];
      $malariaTest = $row['MalariaTest'];
      $syphilisTest = $row['SyphilisTest'];
      $typhTest = $row['TyphTest'];
      $urineLeucTest = $row['UrineLeucTest'];
      $urineRBCTest = $row['UrineRBCTest'];
      $urineGlucoseTest = $row['UrineGlucoseTest'];
      $urineNitritesTest = $row['UrineNitritesTest'];
      $pregnancyTest = $row['PregnancyTest'];
      $chiefComplaint = $row['ChiefComplaint'];
      $assessment = $row['Assessment'];
      $lastHIVTest = $row['LastHIVTest'];
      $lastPZQTx = $row['LastPZQTx'];
      $lastWormTx = $row['LastWormTx'];
      $lastVitA = $row['LastVitA'];
      $prevMeds = $row['PrevMeds'];
      $dx_Healthy = $row['DX_Healthy'];
      $dx_NoTreatment = $row['DX_NoTreatment'];
      $dx_MXK = $row['DX_MXK'];
      $dx_Worms = $row['DX_Worms'];
      $dx_Asthma = $row['DX_Asthma'];
      $dx_Bronchitis = $row['DX_Bronchitis'];
      $dx_Pneumonia = $row['DX_Pneumonia'];
      $dx_Cough = $row['DX_Cough'];
      $dx_Malaria = $row['DX_Malaria'];
      $dx_Schisto = $row['DX_Schisto'];
      $dx_Typhoid = $row['DX_Typhoid'];
      $dx_Gerd = $row['DX_Gerd'];
      $dx_PUD = $row['DX_PUD'];
      $dx_Diarrhea = $row['DX_Diarrhea'];
      $dx_DiarrheaBloody = $row['DX_DiarrheaBloody'];
      $dx_Hypertension = $row['DX_Hypertension'];
      $dx_Diabetes = $row['DX_Diabetes'];
      $dx_Constipation = $row['DX_Constipation'];
      $dx_PID = $row['DX_PID'];
      $dx_STI = $row['DX_STI'];
      $dx_Syphilis = $row['DX_Syphilis'];
      $dx_Topical = $row['DX_Topical'];
      $dx_TopicalDescrip = $row['DX_TopicalDescrip'];
      $dx_Other = $row['DX_Other'];
      $dx_OtherDescrip = $row['DX_OtherDescrip'];
      $regANC = $row['RegANC'];
      $prevIPTpYes = $row['PrevIPTpYes'];
      $lastIPTpG1MonYes = $row['LastIPTpGT1MonYes'];
      $clinicalAnemia = $row['ClinicalAnemia'];
      $sulfadar = $row['Sulfadar'];
      $rx_Paracetamol = $row['Rx_Paracetamol'];
      $rx_BenzPen = $row['Rx_BenzPen'];
      $rx_Ceftriaxone = $row['Rx_Ceftriaxone'];
      $rx_Kit_PCM = $row['Rx_Kit_PCM'];
      $rx_Kit_Pregnancy = $row['Rx_Kit_Pregnancy'];
      $rx_ALU = $row['Rx_ALU'];
      $rx_PUD = $row['Rx_PUD'];
      $rx_PZQ_Tabs = $row['Rx_PZQ_Tabs'];
      $rx_PZQ_Dose = $row['Rx_PZQ_Dose'];
      $rx_Eye = $row['RX_Eye'];
      $rx_Other = $row['RX_Other'];
      $sp_PatInit = $row['SP_PatInit'];
      $sp_PatGender = $row['SP_PatGender'];
      $sp_PatPreg = $row['SP_PatPreg'];
      $sp_PatNumMonths = $row['SP_PatNumMonths'];
      $sp_PatBF = $row['SP_PatBF'];
      $sp_PatMTZ = $row['SP_PatMTZ'];
      $sp_PatDoxy = $row['SP_PatDoxy'];
      $sp_PatAmox = $row['SP_PatAmox'];
      $sp_Par1Init = $row['SP_Par1Init'];
      $sp_Par1Gender = $row['SP_Par1Gender'];
      $sp_Par1Preg = $row['SP_Par1Preg'];
      $sp_Par1NumMonths = $row['SP_Par1NumMonths'];
      $sp_Par1BF = $row['SP_Par1BF'];
      $sp_Par1MTZ = $row['SP_Par1MTZ'];
      $sp_Par1Doxy = $row['SP_Par1Doxy'];
      $sp_Par1Amox = $row['SP_Par1Amox'];
      $sp_Par2Init = $row['SP_Par2Init'];
      $sp_Par2Gender = $row['SP_Par2Gender'];
      $sp_Par2Preg = $row['SP_Par2Preg'];
      $sp_Par2NumMonths = $row['SP_Par2NumMonths'];
      $sp_Par2BF = $row['SP_Par2BF'];
      $sp_Par2MTZ = $row['SP_Par2MTZ'];
      $sp_Par2Doxy = $row['SP_Par2Doxy'];
      $sp_Par2Amox = $row['SP_Par2Amox'];
      $sp_Par3Init = $row['SP_Par3Init'];
      $sp_Par3Gender = $row['SP_Par3Gender'];
      $sp_Par3Preg = $row['SP_Par3Preg'];
      $sp_Par3NumMonths = $row['SP_Par3NumMonths'];
      $sp_Par3BF = $row['SP_Par3BF'];
      $sp_Par3MTZ = $row['SP_Par3MTZ'];
      $sp_Par3Doxy = $row['SP_Par3Doxy'];
      $sp_Par3Amox = $row['SP_Par3Amox'];
      $followUp = $row['FollowUp'];
      $returnTo = $row['ReturnTo'];
      $education = $row['Education'];
      $practitioners = $row['Practitioners'];
      $referral = $row['Referral'];
      $rxNum = $row['RXNum'];
      $firstName = $row['FirstName'];
      $lastName = $row['LastName'];
      $village = $row['village'];
      $birthday = $row['Birthday'];
      $sex = $row['sex'];

    } catch(Error $e){
        echo false;
    } finally {
       // mysqli_stmt_close($connect);
        mysqli_close($connect);
    }

    /*
    function checkboxIf($test, $id, $name, $value, $text){
      if($test != "no"){
        echo "<input type='checkbox' id='$id' name='$name' value='$value' disabled checked><span style='color:'red'>$text</span>";
      } else {
        echo "<input type='checkbox' id='$id' name='$name' value='$value' disabled>$text";
      }
    }
    */

    function checkboxIf($test, $id, $name, $value, $text){
      if($test != "no"){
        echo "<i class='fa fa-check-square-o fa-lg' style='color:#000000' aria-hidden='true'></i> <span style='padding-right:10px;font-size:10px'>$text</span>";                  
      } else {
        echo "<i class='fa fa-square-o fa-lg' style='color:#000000' aria-hidden='true'></i> <span style='padding-right:10px;font-size:10px'>$text</span>";
      }
    }

    function dropContent($text) {
      if ($text == "") {
        $text = "?";
      }
      echo "<span style='color:#000000;padding-right:10px'>$text</span>";
    }

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Latest compiled and minified CSS -->
    <!-- Bootstrap core CSS -->
    <link href="bin/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/reportStyles.css">
    <title>CACHA : Patient Report</title>
  </head>
  <body>

    <div id="container" class="small">

      <div class="row">

        <div class="col-7">
          <h4>Canada-Africa Community Health Alliance</h4>
          <div>Alliance de Sante Communitaire Canada-Afrique</div>
          Triage: <?php dropContent("Sample Text"); ?>

          <?php checkboxIf($triageTesting, "chkTesting", "Testing", "TEST", "TESTING"); ?>
          <div>
            Triage:
            <?php checkboxIf($triageMedical, "chkMed", "Med", "MED", "MED"); ?>
            <?php checkboxIf($triageGYN, "chkGyn", "Gyn", "GYN", "GYN"); ?>
            <?php checkboxIf($triageMedical, "chkOpht", "Opht", "OPHT", "OPHT"); ?>
            <?php checkboxIf($triageMedical, "chkDent", "Dent", "DENT", "DENT"); ?>
            <?php checkboxIf($triageMedical, "chkV", "V", "V", "V"); ?>
          </div>
        </div>

        <div class="col-5" style="background:#EAFFDE">
          CHART#: <?php dropContent($visitID); ?><br>
          DISPENSARY: <?php dropContent($visitedDispensary); ?><br>
          TIME: <?php dropContent($visitTime); ?><br>
          DATE: <?php dropContent($visitDate); ?><br>
        </div>

      </div>

      <div class="row">

        <div class ="col-6" style="background:#FEDEDE">
          Name: <?php dropContent($firstName . " " . $lastName); ?><br>
          Village: <?php dropContent($village); ?><br>
          <div>
            G: <?php dropContent( $numLiveBirth); ?>
            P: <?php dropContent( $numOfPreg); ?>
            A: <?php dropContent( $numAbortions); ?>
          </div>
          <div>
            #Living Children: <?php dropContent( $numLivingChildren); ?>
            LNMP: <?php dropContent( $lastPeriod); ?>
          </div>
        </div>

        <div class ="col-6" style="background:#E6A9A9">
          <div>
            <? if ($sex == "male") : ?>
              <?php checkboxIf("yes", "", "", "", "M"); ?>
              <?php checkboxIf("no", "", "", "", "F"); ?>
            <? else : ?>
              <?php checkboxIf("no", "", "", "", "M"); ?>
              <?php checkboxIf("yes", "", "", "", "F"); ?>
            <? endif ?>          
            AGE: <?php dropContent( $birthday); ?>
            WEIGHT: <?php dropContent( $weight); ?>KG
          </div>
          <div>
            TEMP: <?php dropContent($temperature); ?>
            BP: <?php dropContent($bloodPressure); ?>
          </div>
          <div>
            GLUCOSE: <?php dropContent($glucose); ?>
            HR: <?php dropContent($heartRate); ?>
          </div>
        </div>

      </div>

      <div class="row">

        <div class="col-4" style="background:#F4BB38">
          <span style="font-weight:bold">Chief Complaint:</span><br>
          <?php dropContent($chiefComplaint); ?>
        </div>

        <div class="col-8" style="background:#FFF5DC">

          <div class="row">
            <div class="col-12">
                <?php checkboxIf($pregnant, "chkPregnant", "YPreg", "PREGNANT", "Pregnant");  ?>
                <?php checkboxIf($breastfeed, "chkBreastfeeding", "Breastfeeding", "BREASTFEEDING", "Breastfeeding"); ?>
            </div>
          </div>

          <div class="row" style="padding-top:10px">
            <div class="col-2">
              <?php checkboxIf($vTest, "chkVresult", "Vresult1", "VRESULT", "V"); ?><br>
              <?php dropContent( $vTest); ?>
            </div>

            <div class="col-2">
              <?php checkboxIf($malariaTest, "chkMalaria", "Malaria1", "MALARIA", "MALARIA"); ?><br>
              <?php dropContent( $malariaTest); ?>
            </div>

            <div class="col-2">
              <?php checkboxIf($syphilisTest, "chkSyphilis", "Syphilis1", "SYPHILIS", "SYPHILIS"); ?><br>
              <?php dropContent( $syphilisTest); ?>
            </div>

            <div class="col-2">
              <?php checkboxIf($typhTest, "chkTyph", "TYPH1", "TYPH", "TYPH"); ?><br>
              <?php dropContent( $typhTest); ?>
            </div>

            <div class="col-2">
              <?php checkboxIf($pregnancyTest, "chkPregnancy", "Pregnancy1", "PREGNANCY", "PREGNANCY"); ?><br>
              <?php dropContent( $pregnancyTest); ?>
            </div>

            <div class="col-2">
              <?php checkboxIf($urineTest, "chkUrine", "URINE", "URINE", "URINE"); ?><br>
              <?php dropContent( "MISSING VAR"); ?>
            </div>
          </div>

          <div class="row" style="padding-top:10px">
            <div class="col-12">
              LEUC: <?php dropContent( $urineLeucTest); ?>
              RBC: <?php dropContent( $urineRBCTest); ?>
              GLUCLOSE: <?php dropContent( $urineGlucoseTest); ?>
              NITRITES: <?php dropContent( $urineNitritesTest); ?>
            </div>
          </div>

        </div>

      </div>

      
      <div class="row">

        <div class="col-8" style="background:#EAFFDE">
          <span style="font-weight:bold">ASSESSMENT:</span><br>
          <?php dropContent($assessment); ?>
        </div>

        <div class="col-4" style="background:#EAFFDE">
          LAST HIV TEST? <?php dropContent( $lastHIVTest); ?><br>
          LAST PZQ TX? <?php dropContent( $lastPZQTx); ?><br>
          LAST WORM TX? <?php dropContent( $lastWormTx); ?><br>
          LAST VIT A? <?php dropContent( $lastVitA); ?><br>
          PREV MEDS? <?php dropContent( $prevMeds); ?>
        </div>

      </div>

      <div class="row">

        <div class="col-7" style="background:#FEDEDE">
          <div style="border-bottom:1px solid; margin-bottom:5px;font-weight:bold">
            DX: (DON'T FORGET +, ++, or +++) AND NTR (No Treatment)
          </div>
          <div class="row">
            <div class="col-3">
              <?php checkboxIf($dx_Healthy, "", "", "", "HEALTHY"); ?>
            </div>
            <div class="col-3">
              <?php checkboxIf($MISSING, "", "", "", "NTR"); ?>
            </div>
            <div class="col-3">
              <?php checkboxIf($MISSING, "", "", "", "MSK"); ?>
            </div>
            <div class="col-3">
              <?php checkboxIf($MISSING, "", "", "", "+"); ?>
            </div>
          </div>
          <div class="row">
            <div class="col-3">
              <?php checkboxIf($MISSING, "", "", "", "++"); ?>
              </div>
            <div class="col-3">
              <?php checkboxIf($MISSING, "", "", "", "+++"); ?>
            </div>
            <div class="col-3">
              <?php checkboxIf($dx_Worms, "", "", "", "WORMS"); ?>
            </div>
            <div class="col-3">
              <?php checkboxIf($dx_Asthma, "", "", "", "ASTHMA"); ?>
            </div>
          </div>
          <div class="row">
             <div class="col-3">
              <?php checkboxIf($dx_Bronchitis, "", "", "", "BRONCHITUS"); ?>
            </div>
            <div class="col-3">
              <?php checkboxIf($dx_Pneumonia, "", "", "", "PNEUMONIA"); ?>
            </div>
            <div class="col-3">              
              <?php checkboxIf($dx_Cough, "", "", "", "COUGH"); ?>
            </div>
            <div class="col-3">
              <?php checkboxIf($dx_Malaria, "", "", "", "MALARIA"); ?>
            </div>
          </div>
          <div class="row">
            <div class="col-3">
              <?php checkboxIf($dx_Schisto, "", "", "", "SCHISTO"); ?>
            </div>
            <div class="col-3">
              <?php checkboxIf($dx_Typhoid, "", "", "", "TYPHOD"); ?>
            </div>
            <div class="col-3">
              <?php checkboxIf($dx_Gerd, "", "", "", "GERD"); ?>
            </div>
            <div class="col-3">
              <?php checkboxIf($dx_PUD, "", "", "", "PUD"); ?>
            </div>
          </div>
          <div class="row">
            <div class="col-3">
              <?php checkboxIf($dx_Constipation, "", "", "", "CONSTIPATION"); ?>
            </div>
            <div class="col-3">
              <?php checkboxIf($dx_Diarrhea, "", "", "", "DIARRHEA"); ?>
            </div>
            <div class="col-3">
              <?php checkboxIf($dx_Hypertension, "", "", "", "HYPERTENSION"); ?>
            </div>
            <div class="col-3">
              <?php checkboxIf($dx_Diabetes, "", "", "", "DIABETES"); ?>
            </div>
          </div>
          <div class="row">
            <div class="col-3">
              <?php checkboxIf($dx_PID, "", "", "", "PID"); ?>
            </div>
            <div class="col-3">              
              <?php checkboxIf($dx_STI, "", "", "", "STI"); ?>
            </div>
            <div class="col-3">
              <?php checkboxIf($dx_Syphilis, "", "", "", "SYPHILIS"); ?>
            </div>
            <div class="col-3">
              <?php checkboxIf($MISSING, "", "", "", "EYES"); ?>
            </div>
          </div>
          <div class="row">
            <div class="col-3">
              <?php checkboxIf($MISSING, "", "", "", "VITAMINS"); ?>
            </div>
            <div class="col-3">
              <?php checkboxIf($dx_Topical, "", "", "", "TOPICAL"); ?> <?php dropContent($dx_TopicalDescrip); ?>
            </div>
            <div class="col-3">
              <?php checkboxIf($dx_Other, "", "", "", "OTHER"); ?> <?php dropContent($dx_OtherDescrip); ?>
            </div>
          </div>

          <div class="row">
            <div class="col-4">
              PREGNANT: <?php dropContent($MISSING) ?> WEEKS
            </div>
            <div class="col-8">
              REGULAR ANC: 
              <? if ($regANC == "yes") : ?>
                <?php checkboxIf("yes","","","","YES"); ?>
                <?php checkboxIf("no","","","","NO"); ?>
              <? else : ?>
                <?php checkboxIf("no","","","","YES"); ?>
                <?php checkboxIf("yes","","","","NO"); ?>
              <? endif ?>
            </div>
          </div>

          <div class="row">
            <div class="col-12">
              PREVIOUS IPTp:
              <?php if($prevIPTpYes == "1") : ?>
                <?php checkboxIf("yes","","","","YES"); ?>
                <?php checkboxIf("no","","","","NO"); ?>
              <?php else : ?>
                <?php checkboxIf("no","","","","YES"); ?>
                <?php checkboxIf("yes","","","","NO"); ?>
              <?php endif ?>
            </div>
          </div>
          <div class="row">
            <div class="col-12">
              LAST  IPTp: >1 MONTH AGO 
              <?php if ($lastIPTpG1MonYes == "0") : ?>
                <?php checkboxIf("yes","","","","YES"); ?>
                <?php checkboxIf("no","","","","NO"); ?>
              <?php else : ?>
                <?php checkboxIf("no","","","","YES"); ?>
                <?php checkboxIf("yes","","","","NO"); ?>
              <?php endif ?>
            </div>
          </div>
          <div class="row">
            <div class="col-12">
              CLINICAL ANEMIA 
              <?php if ($clinicalAnemia == "yes") : ?>
                <?php checkboxIf("yes","","","","YES"); ?>
                <?php checkboxIf("no","","","","NO"); ?>
              <?php else : ?>
                <?php checkboxIf("no","","","","YES"); ?>
                <?php checkboxIf("yes","","","","NO"); ?>
              <?php endif ?>
            </div>
          </div>
          <div class="row">
            <div class="col-12">
              SULFAAR SP500/25: TABS 
              <?php if ($sulfadar == "3") : ?>
                <?php checkboxIf("yes","","","","3"); ?>
                <?php checkboxIf("no","","","","6"); ?>
                <?php checkboxIf("no","","","","9"); ?>
              <?php elseif($sulfadar == "6") : ?>
                <?php checkboxIf("no","","","","3"); ?>
                <?php checkboxIf("yes","","","","6"); ?>
                <?php checkboxIf("no","","","","9"); ?>
              <?php elseif($sulfadar == "9") : ?>
                <?php checkboxIf("no","","","","3"); ?>
                <?php checkboxIf("no","","","","6"); ?>
                <?php checkboxIf("yes","","","","9"); ?>
              <?php else : ?>
                <?php checkboxIf("no","","","","3"); ?>
                <?php checkboxIf("no","","","","6"); ?>
                <?php checkboxIf("no","","","","9"); ?>
              <?php endif ?>
            </div>
          </div>
        </div>

        <div class="col-5" style="background:#D0F8B9">
          <div class="row">
            <div class="col-4" style="font-weight:bold">ADMIN:</div>
            <div class="col-4"><?php checkboxIf($rx_Paracetamol, "chkParacetamol", "Paracetamol", "PARACET", "PARACETAMOL"); ?></div>
            <div class="col-4"><?php checkboxIf($rx_BenzPen, "chkBenz", "Benz", "BENZ", "BENZ-PEN-G 2.4 MIU"); ?></div>
          </div>
          <div class="row" style="border-bottom:1px solid">
            <div class="col-8 ml-auto"><?php checkboxIf($rx_Ceftriaxone, "chkCerftriaxone", "Ceftriaxone", "CEFTRIAXONE", "CEFTRIAXONE 250MG"); ?></div>
          </div>
          <div>
            <div class="row">
            <div class="col-2">KIT:</div>
            <div class="col-5"><?php checkboxIf($MISSING, "", "", "", "(PCM-ALB/MEB)"); ?></div>
            <div class="col-5"><?php checkboxIf($MISSING, "", "", "", "PREGNANCY KIT(VITS+FE)"); ?></div>
            </div>
            <div class="row">
            <div class="col-4"><?php checkboxIf($MISSING, "", "", "", "ALU 3/7"); ?></div>
            <div class="col-2"><?php checkboxIf($MISSING, "", "", "", "1x2"); ?></div>
            <div class="col-2"><?php checkboxIf($MISSING, "", "", "", "2x2"); ?></div>
            <div class="col-2"><?php checkboxIf($MISSING, "", "", "", "3x2"); ?></div>
            <div class="col-2"><?php checkboxIf($MISSING, "", "", "", "4x2"); ?></div>
            </div>
            <div class="row">
            <div class="col-12"><?php checkboxIf($MISSING, "", "", "", "PUD: 7/7 AMOX250 3X2 + OMEP20 1X2+ MTZ200MG 3X2"); ?></div>
            </div>
            <div class="row">
            <div class="col-4"><?php checkboxIf($MISSING, "", "", "", "PZQ600mg"); ?></div>
            <div class="col-8">#TABS STAT: <?php dropContent( $MISSING); ?></div>
            </div>
          </div>

          <div>
              <!-- THIS IS GREASY INDEED!!!! -->
              <table>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>
                        <p style="font-size:5em">V</p>
                    </td>
                    <td>
                        <table>
                            <tr><td>&nbsp;</td></tr>
                            <tr><td>val 1</td></tr>
                            <tr>
                                <td>
                                    <input type="text" id="val1" value="<?php echo $eyeVal1; ?>" style="width: 60px">
                                </td>
                            </tr>
                            <tr><td>&nbsp;</td></tr>
                            <tr>
                              <td style="text-align: center; width: 300px;">
                                val 3
                                <br>
                                <input type="text" id="val3" value="<?php echo $eyeVal3; ?>" style="width: 60px">
                              </td>
                            </tr>
                            <tr><td>&nbsp;</td></tr>
                            <tr><td>val 2</td></tr>
                            <tr>
                                <td>
                                    <input type="text" id="val2" value="<?php echo $eyeVal2; ?>" style="width: 60px">
                                </td>
                            </tr>
                            <tr><td>&nbsp;</td></tr>
                        </table>
                    </td>
                </tr>
            </table>
            <!-- THIS IS GREASY INDEED!!!! -->
          </div>

        </div>
      </div>

      <div class="row">

        <div class="col-6" style="background:#AAD6FD">
          <div style="padding-bottom:5px;">
            <span style="font-weight:bold">FOLLOW-UP:</span><br>
            <?php dropContent( $followUp); ?>
          </div>
          <div>
            RETURN DURING MISSION: <?php checkboxIf($MISSING, "", "", "", "YES"); ?>
            OR TO DISPENSARY> <?php dropContent( $MISSING); ?> DAYS
          </div>
        </div>
        <div class="col-6">

          <table style="width:100%">
            <!-- unsure about populating the rest -->
            <tr>
              <th colspan="4">STI or PID</th>
              <th colspan="2">#</th>
              <th>200MG</th>
              <th>100MG</th>
              <th>250MG</th>
            </tr>
            <tr>
              <th></th>
              <th>INITIALS</th>
              <th>SEX</th>
              <th>PREG</th>
              <th>MTH</th>
              <th>B.F.</th>
              <th>MTZ</th>
              <th>DOXY</th>
              <th>AMOX</th>
            </tr>
            <tr>
              <td>PT</td>
              <td><?php dropContent( $MISSING); ?></td>
              <td><?php dropContent( $MISSING); ?></td>
              <td><?php dropContent( $MISSING); ?></td>
              <td><?php dropContent( $MISSING); ?></td>
              <td><?php dropContent( $MISSING); ?></td>
              <td><?php dropContent( $MISSING); ?></td>
              <td><?php dropContent( $MISSING); ?></td>
              <td><?php dropContent( $MISSING); ?></td>
            </tr>
            <tr>
              <td>P1</td>
              <td><?php dropContent( $MISSING); ?></td>
              <td><?php dropContent( $MISSING); ?></td>
              <td><?php dropContent( $MISSING); ?></td>
              <td><?php dropContent( $MISSING); ?></td>
              <td><?php dropContent( $MISSING); ?></td>
              <td><?php dropContent( $MISSING); ?></td>
              <td><?php dropContent( $MISSING); ?></td>
              <td><?php dropContent( $MISSING); ?></td>
            </tr>
            <tr>
              <td>P2</td>
              <td><?php dropContent( $MISSING); ?></td>
              <td><?php dropContent( $MISSING); ?></td>
              <td><?php dropContent( $MISSING); ?></td>
              <td><?php dropContent( $MISSING); ?></td>
              <td><?php dropContent( $MISSING); ?></td>
              <td><?php dropContent( $MISSING); ?></td>
              <td><?php dropContent( $MISSING); ?></td>
              <td><?php dropContent( $MISSING); ?></td>
            </tr>
            <tr>
              <td>P3</td>
              <td><?php dropContent( $MISSING); ?></td>
              <td><?php dropContent( $MISSING); ?></td>
              <td><?php dropContent( $MISSING); ?></td>
              <td><?php dropContent( $MISSING); ?></td>
              <td><?php dropContent( $MISSING); ?></td>
              <td><?php dropContent( $MISSING); ?></td>
              <td><?php dropContent( $MISSING); ?></td>
              <td><?php dropContent( $MISSING); ?></td>
            </tr>
          </table>

        </div>
      </div>

      <div class="row">
        <div class="col-12" style="background:#FFD4AB">
          <span style="font-weight:bold">EDUCATION:</span><br>
          <?php dropContent($education); ?>
        </div>
      </div>

      <div class="row">
        <div class="col-12">
          <span style="font-weight:bold">PRACTITIONERS:</span><br>
          <?php dropContent($practitioners); ?>
        </div>
      </div>

      <div class="row">
        <div class="col-12">
          <span style="font-weight:bold">REFERRAL:</span>
          <?php if (preg_match('/tb/', $referral)) : ?>
            <?php checkboxIf("yes", "", "", "", "TB"); ?>
          <?php else : ?>
            <?php checkboxIf("no", "", "", "", "TB"); ?>
          <?php endif ?>

          <?php if (preg_match('/surgery/', $referral)) : ?>
            <?php checkboxIf("yes", "", "", "", "SURGERY"); ?>
          <?php else : ?>
            <?php checkboxIf("no", "", "", "", "SURGERY"); ?>
          <?php endif ?>
          <?php if (preg_match('/hospital/', $referral)) : ?>
            <?php checkboxIf("yes", "", "", "", "TB"); ?>
          <?php else : ?>
            <?php checkboxIf("no", "", "", "", "TB"); ?>
          <?php endif ?>
          <span style="font-weight:bold">RX #:</span> <?php dropContent($rxNum); ?>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="../../../../assets/js/vendor/jquery.min.js"></script>
    <script src="bin/bootstrap/assets/js/vendor/popper.min.js"></script>
    <script src="bin/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="bin/bootstrap/assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
