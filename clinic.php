<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="bin/bootstrap/favicon.ico">

    <title>CACHA - Clinic</title>
    <!-- load jQuery -->
    <script src="bin/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap core CSS -->
    <link href="bin/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="cover.css" rel="stylesheet">
</head>

<body>

    <div class="site-wrapper">

        <div class="site-wrapper-inner">

            <div class="cover-container">

                <div class="masthead clearfix">
                    <div class="inner">
                        <h3 class="masthead-brand">CACHA</h3>
                        <nav class="nav nav-masthead">
                            <a class="nav-link" href="index.html">Home</a>
                            <a class="nav-link" href="register.php">Register</a>
                            <a class="nav-link" href="test.php">Test</a>
                            <a class="nav-link active" href="clinic.php">Clinic</a>
                            <a class="nav-link" href="eye.php">Eye</a>
                            <a class="nav-link" href="dental.php">Dental</a>
                            <a class="nav-link" href="pharma.php">Rx</a>
                            <a class="nav-link" href="records.php">Records</a>
                        </nav>
                    </div>
                </div>

                <div class="inner cover" style="margin-top: 5em;">
                <!-- Main Content Area -->
<!-- FORM LAYOUT BEGINS -->
<div class="form-horizontal border" >
                        
                        <form>
                        <?php include "top.php"; ?>
                            <!-- ROW1 -->
                            <div class="row">
                                <div class="col-12 borderDiv">
                                    <label class="control-label" for="assesmentNotes">Assessment Notes</label>
                                    <textarea class="form-control" id="assesmentNotes" name="assesmentNotess" style="height: 10em;"></textarea>
                                    <div class="col-12" style="height: 2em;"></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12" style="height: 2em;"></div>
                            </div>
                        
                            <!-- ROW2 -->
                            <div class="row">
                                <div class="col-3">
                                        <label class="control-label" for="hiv">Last HIV Tx</label>
                                        <select id="hiv" name="hiv" class="form-control">
                                            <option value="unknown">Unknown</option>
                                            <option value="never">Never</option>
                                            <option value="under3">Under 3 Months</option>
                                            <option value="over3">Over 3 Months</option>
                                        </select>
                                </div>
                                <div class="col-3">
                                        <label class="control-label" for="pzq">Last PZQ Tx</label>
                                        <select id="pzq" name="pzq" class="form-control">
                                            <option value="unknown">Unknown</option>
                                            <option value="never">Never</option>
                                            <option value="under3">Under 3 Months</option>
                                            <option value="over3">Over 3 Months</option>
                                        </select>
                                </div>
                                <div class="col-3">
                                        <label class="control-label" for="worm">Last WORM Tx</label>
                                        <select id="nitrates" name="nitrates" class="form-control">
                                            <option value="unknown">Unknown</option>
                                            <option value="never">Never</option>
                                            <option value="under3">Under 3 Months</option>
                                            <option value="over3">Over 3 Months</option>
                                        </select>
                                </div>
                                <div class="col-3">
                                        <label class="control-label" for="vita">Last Vit A</label>
                                        <select id="vita" name="vita" class="form-control">
                                            <option value="unknown">Unknown</option>
                                            <option value="never">Never</option>
                                            <option value="under3">Under 3 Months</option>
                                            <option value="over3">Over 3 Months</option>
                                        </select>
                                </div>
                            </div>
                            <!--ROW3-->
                            <div class="row">
                                <div class="col-3">
                                    <label class="control-label" for="vita">Last Vit A</label>
                                    <select id="vita" name="vita" class="form-control">
                                        <option value="unknown">Unknown</option>
                                        <option value="never">Never</option>
                                        <option value="under3">Under 3 Months</option>
                                        <option value="over3">Over 3 Months</option>
                                    </select>
                                </div>
                                <div class="col-9"></div>
                            </div>
                            
                            <div class="row">
                                <div class="col-12" style="height: 2em;"></div>
                            </div>
                            
                            <!--ROW4 -->
                            
                            <div class="row">
                                <div class="col-4">
                                    <label class="control-label" for="healthy">Healthy?</label>
                                    <input type="checkbox" value="healthy">
                                </div>      
                                <div class="col-4">
                                    <label class="control-label" for="NTR">NTR?</label>
                                    <input type="checkbox" value="ntr">
                                </div> 
                                <div class="col-4"></div>
                            </div>
                            
                            <div class="row">
                                <div class="col-12" style="height: 1em;"></div>
                            </div>
                            
                            <!--ROW5-->
                            <div class="row">
                                <div class="col-4">
                                    <label class="control-label" for="MSK">MSK</label>
                                    <select id="MSK" name="MSK" class="form-control">
                                        <option value="null">N/A</option>
                                        <option value="1">+</option>
                                        <option value="2">++</option>
                                        <option value="3">+++</option>
                                    </select>
                                </div>
                                <div class="col-4">
                                    <label class="control-label" for="WORMS">WORMS</label>
                                    <select id="WORMS" name="WORMS" class="form-control">
                                        <option value="null">N/A</option>
                                        <option value="1">+</option>
                                        <option value="2">++</option>
                                        <option value="3">+++</option>
                                    </select>
                                </div>
                                <div class="col-4">
                                    <label class="control-label" for="ASTHMA">ASTHMA</label>
                                    <select id="ASTHMA" name="ASTHMA" class="form-control">
                                        <option value="null">N/A</option>
                                        <option value="1">+</option>
                                        <option value="2">++</option>
                                        <option value="3">+++</option>
                                    </select>
                                </div>
                            </div>
                            <!--ROW6-->
                            <div class="row">
                                <div class="col-4">
                                    <label class="control-label" for="BRONCHITIS">BRONCHITIS</label>
                                    <select id="BRONCHITIS" name="BRONCHITIS" class="form-control">
                                        <option value="null">N/A</option>
                                        <option value="1">+</option>
                                        <option value="2">++</option>
                                        <option value="3">+++</option>
                                    </select>
                                </div>
                                <div class="col-4">
                                    <label class="control-label" for="PENUMONIA">PENUMONIA</label>
                                    <select id="PENUMONIA" name="PENUMONIA" class="form-control">
                                        <option value="null">N/A</option>
                                        <option value="1">+</option>
                                        <option value="2">++</option>
                                        <option value="3">+++</option>
                                    </select>
                                </div>
                                <div class="col-4">
                                    <label class="control-label" for="COUGH">COUGH</label>
                                    <select id="COUGH" name="COUGH" class="form-control">
                                        <option value="null">N/A</option>
                                        <option value="1">+</option>
                                        <option value="2">++</option>
                                        <option value="3">+++</option>
                                    </select>
                                </div>
                            </div>
                            <!--ROW7-->
                            <div class="row">
                                <div class="col-4">
                                    <label class="control-label" for="MALARIA">MALARIA</label>
                                    <select id="MALARIA" name="MALARIA" class="form-control">
                                        <option value="null">N/A</option>
                                        <option value="1">+</option>
                                        <option value="2">++</option>
                                        <option value="3">+++</option>
                                    </select>
                                </div>
                                <div class="col-4">
                                    <label class="control-label" for="SCHISTO">SCHISTO</label>
                                    <select id="SCHISTO" name="SCHISTO" class="form-control">
                                        <option value="null">N/A</option>
                                        <option value="1">+</option>
                                        <option value="2">++</option>
                                        <option value="3">+++</option>
                                    </select>
                                </div>
                                <div class="col-4">
                                    <label class="control-label" for="TYPHOID">TYPHOID</label>
                                    <select id="TYPHOID" name="TYPHOID" class="form-control">
                                        <option value="null">N/A</option>
                                        <option value="1">+</option>
                                        <option value="2">++</option>
                                        <option value="3">+++</option>
                                    </select>
                                </div>
                            </div>
                            <!--ROW8-->
                            <div class="row">
                                <div class="col-4">
                                    <label class="control-label" for="GERD">GERD</label>
                                    <select id="GERD" name="GERD" class="form-control">
                                        <option value="null">N/A</option>
                                        <option value="1">+</option>
                                        <option value="2">++</option>
                                        <option value="3">+++</option>
                                    </select>
                                </div>
                                <div class="col-4">
                                    <label class="control-label" for="PUD">PUD</label>
                                    <select id="PUD" name="PUD" class="form-control">
                                        <option value="null">N/A</option>
                                        <option value="1">+</option>
                                        <option value="2">++</option>
                                        <option value="3">+++</option>
                                    </select>
                                </div>
                                <div class="col-4">
                                    <label class="control-label" for="HYPERTENSION">HYPERTENSION</label>
                                    <select id="HYPERTENSION" name="HYPERTENSION" class="form-control">
                                        <option value="null">N/A</option>
                                        <option value="1">+</option>
                                        <option value="2">++</option>
                                        <option value="3">+++</option>
                                    </select>
                                </div>
                            </div>
                            <!--ROW9-->
                            <div class="row">
                                <div class="col-4">
                                    <label class="control-label" for="DIABETES">DIABETES</label>
                                    <select id="DIABETES" name="DIABETES" class="form-control">
                                        <option value="null">N/A</option>
                                        <option value="1">+</option>
                                        <option value="2">++</option>
                                        <option value="3">+++</option>
                                    </select>
                                </div>
                                <div class="col-4">
                                    <label class="control-label" for="CONSTIPATION">CONSTIPATION</label>
                                    <select id="CONSTIPATION" name="CONSTIPATION" class="form-control">
                                        <option value="null">N/A</option>
                                        <option value="1">+</option>
                                        <option value="2">++</option>
                                        <option value="3">+++</option>
                                    </select>
                                </div>
                                <div class="col-4">
                                    <label class="control-label" for="PID">PID</label>
                                    <select id="PID" name="PID" class="form-control">
                                        <option value="null">N/A</option>
                                        <option value="1">+</option>
                                        <option value="2">++</option>
                                        <option value="3">+++</option>
                                    </select>
                                </div>
                            </div>
                            <!--ROW10-->
                            <div class="row">
                                <div class="col-4">
                                    <label class="control-label" for="STI">STI</label>
                                    <select id="STI" name="STI" class="form-control">
                                        <option value="null">N/A</option>
                                        <option value="1">+</option>
                                        <option value="2">++</option>
                                        <option value="3">+++</option>
                                    </select>
                                </div>
                                <div class="col-4">
                                    <label class="control-label" for="SYPHILIS">SYPHILIS</label>
                                    <select id="SYPHILIS" name="SYPHILIS" class="form-control">
                                        <option value="null">N/A</option>
                                        <option value="1">+</option>
                                        <option value="2">++</option>
                                        <option value="3">+++</option>
                                    </select>
                                </div>
                                <div class="col-4">
                                    <label class="control-label" for="TOPICAL">TOPICAL</label>
                                    <select id="TOPICAL" name="TOPICAL" class="form-control">
                                        <option value="null">N/A</option>
                                        <option value="1">+</option>
                                        <option value="2">++</option>
                                        <option value="3">+++</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4"></div>
                                <div class="col-4">
                                    <label class="control-label" for="DIARRHEA">DIARRHEA</label>
                                    <select id="DIARRHEA" name="DIARRHEA" class="form-control">
                                        <option value="null">N/A</option>
                                        <option value="blood">Bloody</option>
                                        <option value="water">Watery</option>
                                        <option value="bloodwater">Bloody & Watery</option>
                                    </select>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-12" style="height: 2em;"></div>
                            </div>
                            
                            <!--ROW11-->
                            <div class="row">
                                <div class="col-12">
                                    <label class="control-label" for="otherDX">Other Dx</label>
                                    <textarea class="form-control" id="assesmentNotes" name="assesmentNotess" style="height: 8em;"></textarea>
                                    <div class="col-12" style="height: 2em;"></div>
                                </div>
                            </div>

                            
                            
                            
                        <!--Submit Form-->
                        <?php include "bottom.php"; ?>   
                        </form>
                        
                    </div>
                    <!-- FORM ENDS -->


                </div>


            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>
        window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery.min.js"><\/script>')
    </script>
    <script src="bin/bootstrap/assets/js/vendor/popper.min.js"></script>
    <script src="bin/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="bin/bootstrap/assets/js/ie10-viewport-bug-workaround.js"></script>
</body>

</html>