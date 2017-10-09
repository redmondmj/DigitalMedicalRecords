<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="bin/bootstrap/favicon.ico">

    <title>CACHA - Register</title>

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
                            <a class="nav-link" href="index.php">Home</a>
                            <a class="nav-link active" href="register.php">Register</a>
                            <a class="nav-link" href="test.php">Test</a>
                            <a class="nav-link" href="clinic.php">Clinic</a>
                            <a class="nav-link" href="eye.php">Eye</a>
                            <a class="nav-link" href="dental.php">Dental</a>
                            <a class="nav-link" href="pharma.php">Rx</a>
                            <a class="nav-link" href="tableView.php">Records</a>
                        </nav>
                    </div>
                </div>

                <div class="inner cover">
                <div class="form-horizontal border">
                <form>
                    <!-- load the visit -->
                    <?php include "top.php"; ?>
                    <!-- <div class="well"> -->
                    <!-- Basic Info section !-->
                    <div style="padding:1em; border-style: solid; border-width: 3px; border-color: white; border-radius: 15px; padding: 1em">
                        <div class="row">
                            <div class="form-group col-4">
                                <label for="dispensery">Dispensery:</label>
                                <select class="form-control" id="dispensery"></select>
                            </div>
                            <div class="form-group col-3">
                                <label for="weight">Weight:</label>
                                <input type="number" class="form-control" id="weight">
                            </div>
                            <div class="col-1"></div>
                            <div class="form-group col-4">
                                <label for="hr">HR:</label>
                                <input type="text" class="form-control" id="hr">
                            </div>
                        </div>
                        <!--             Next Form Row            !-->
                        <div class="row">
                            <div class="col-12"><br></div>  <!-- empty line for spacing !-->
                        </div>
                        <!--             Next Form Row            !-->
                        <div class="row">
                            <div class="form-group col-3">
                                <label for="temp">Temp:</label>
                                <input type="number" class="form-control" id="temp">
                            </div>
                            <div class="col-1"></div>
                            <div class="form-group col-3">
                                <label for="bp">BP:</label>
                                <input type="number" class="form-control" id="bp">
                            </div>
                            <div class="col-1"></div>
                            <div class="col-3 form-group">
                                <label for="glucose">Glucose:</label>
                                <input type="number" class="form-control" id="glucose">
                            </div>
                            <div class="col-1"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12"><br></div>  <!-- empty line for spacing !-->
                    </div>
                    <!-- Family Info section !-->
                    <div class="row">
                        <div class="form-group col-12">
                            <h3>Family Info</h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12"><br></div>  <!-- empty line for spacing !-->
                    </div>
                    <div style="padding:1em; border-style: solid; border-width: 3px; border-color: white; border-radius: 15px;">
                        
                        <div class="row">
                            <div class="form-group col-3">
                                <label for="livingChildren">Living Children:</label>
                                <input type="number" class="form-control" id="livingChildren">
                            </div>
                            <div class="form-group col-3">
                                <label for="gravita">Gravida:</label>
                                <input type="number" class="form-control" id="livingChildren">
                            </div>
                            <div class="form-group col-3">
                                <label for="para">Para:</label>
                                <input type="number" class="form-control" id="para">
                            </div>
                            <div class="form-group col-3">
                                <label for="abortions">Abortions:</label>
                                <input type="number" class="form-control" id="abortions">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-5">
                            </div>
                            <div class="form-group col-2">
                                <label for="lnmp">LNMP:</label>
                                <input type="number" class="form-control" id="lnmp">
                            </div>
                            <div class="form-group col-5">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12"><br></div>  <!-- empty line for spacing !-->
                    </div>
                    <!-- Chief Complaint section !-->
                    <div class="row">
                        <div class="form-group col-12">
                            <h3>Chief Complaint</h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12"><br></div>  <!-- empty line for spacing !-->
                    </div>
                    <div style="padding:1em; border-style: solid; border-width: 3px; border-color: white; border-radius: 15px;">
                        <div class="row">
                            <div class="form-group col-12">
                                <label for="chiefComplaint">Chief Complaint:</label>
                                <input type="textArea" class="form-control" id="chiefComplaint" style="height:10em;">
                            </div>
                        </div>
                    </div>
                    <!-- Stations section !-->
                    <div class="row">
                        <div class="form-group col-12">
                            <h3>Stations</h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12"><br></div>  <!-- empty line for spacing !-->
                    </div>
                    <div style="padding:1em; border-style: solid; border-width: 3px; border-color: white; border-radius: 15px;">
                        <div class="row">
                            <div class="col-2">
                                <label class="checkbox-inline" for="test">
                                    <input type="checkbox" name="checkboxes" id="test" value="">
                                    Test
                                </label>
                            </div>
                            <div class="col-2">
                                <label class="checkbox-inline" for="med">
                                <input type="checkbox" name="checkboxes" id="med" value="2" >
                                    MED
                                </label>
                            </div>  
                            <div class="col-2">
                                <label class="checkbox-inline" for="gyn">
                                <input type="checkbox" name="checkboxes" id="gyn" value="3" >
                                    GYN
                                </label>
                            </div>
                            <div class="col-2">
                                <label class="checkbox-inline" for"opht">
                                <input type="checkbox" name="checkboxes" id="opht" value="4" >
                                    OPHT
                                </label>
                            </div>
                            <div class="col-2">
                                <label class="checkbox-inline" for="dent">
                                <input type="checkbox" name="checkboxes" id="dent" value="5" >
                                    DENT
                                </label>
                            </div>
                            <div class="col-2">
                                <label class="checkbox-inline" for="v">
                                <input type="checkbox" name="checkboxes" id="v" value="6">
                                    V
                                </label>
                            </div>
                        </div>
                    </div>
                   <!--Submit Form-->
                    <?php include "bottom.php"; ?>  
                </form>
                
            </div>
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