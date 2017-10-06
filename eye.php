<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="bin/bootstrap/favicon.ico">

    <title>CACHA - Eye</title>

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
                            <a class="nav-link" href="register.php">Register</a>
                            <a class="nav-link" href="test.php">Test</a>
                            <a class="nav-link" href="clinic.php">Clinic</a>
                            <a class="nav-link active" href="eye.php">Eye</a>
                            <a class="nav-link" href="dental.php">Dental</a>
                            <a class="nav-link" href="pharma.php">Rx</a>
                            <a class="nav-link" href="table_view.php">Records</a>
                        </nav>
                    </div>
                </div>

<div class="inner cover">
    <h1 class="cover-heading">EYE</h1>
    <!-- Main Content Area -->
    <div class="form-horizontal border">
        <form>
            <!-- Patient/Visit -->
            <div class="form-row justify-content-center">
                <!-- Select Patient -->
                <div class="form-group">
                    <label class="col-12 control-label" for="patientName">Choose Patient:</label>
                    <div class="col-12">
                        <select id="patientName" name="patientName" class="form-control" onchange="fetch_select(this.value);">
                                <option disabled selected>Choose Patient</option>
                                <option value="1">Asriel Dreemurr</option><option value="2">Pokey Minch</option><option value="3">Morrigan Flemeth</option><option value="4">Copernicus Qwark</option><option value="5">Albert Wily</option><option value="6">Betty Kane</option><option value="7">Jessica Ford</option>                                        </select>
                    </div>
                </div>

                <!-- Select Visit -->
                <div class="form-group">
                    <label class="col-12 control-label" for="visit">Choose Visit:</label>
                    <div class="col-12">
                        <select id="visit" name="visit" class="form-control">
                                <option value="newVisit">New Visit</option>

                            </select>
                    </div>
                </div>
            </div>
            <!-- Patient/Visit -->
                        


            <div class="row">
                <label class="col-3 control-label" style="text-align: left;">Full Name:</label>
                <label class="col-3 control-label">Age:</label>
                <label class="col-3 control-label" style="text-align: left;">Village:</label>
                <label class="col-3 control-label">Case #:</label>
            </div>

            <div class="row">
                <div class="col-12" style="height: 1em;"></div>
            </div>

            <div class="row">
                <p class="col-12 control-label">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam mollis interdum sem hendrerit congue. Fusce lectus erat, maximus nec blandit sed, pellentesque sed diam. Ut iaculis viverra bibendum. </p>
            </div>

            <div class="row">
                <div class="col-2">
                    <label class="checkbox-inline" for="checkboxes-0">
                        <input type="checkbox" name="checkboxes" id="checkboxes-0" value="1" disabled>
                        Test
                    </label>
                </div>

                <div class="col-2">
                    <label class="checkbox-inline" for="checkboxes-1">
                    <input type="checkbox" name="checkboxes" id="checkboxes-1" value="2" disabled>
                        MED
                    </label>
                </div>  

                <div class="col-2">
                    <label class="checkbox-inline" for="checkboxes-2">
                    <input type="checkbox" name="checkboxes" id="checkboxes-2" value="3" disabled>
                        GYN
                    </label>
                </div>

                <div class="col-2">
                    <label class="checkbox-inline" for="checkboxes-3">
                    <input type="checkbox" name="checkboxes" id="checkboxes-3" value="4" disabled>
                        OPHT
                    </label>
                </div>

                <div class="col-2">
                    <label class="checkbox-inline" for="checkboxes-4">
                    <input type="checkbox" name="checkboxes" id="checkboxes-4" value="5" disabled>
                        DENT
                    </label>
                </div>

                <div class="col-2">
                    <label class="checkbox-inline" for="checkboxes-5">
                    <input type="checkbox" name="checkboxes" id="checkboxes-5" value="6" disabled>
                        V
                    </label>
                </div>

            </div>

        </form>
    </div>
</div>
                




                <div class="col-4 col-centered">
                        <a href="print.php">View Complete Chart</a>
                </div>

                
                <div class="mastfoot">
                    <div class="inner">
                        <p>Digital Charts Sample for <a href="http://www.cacha.ca/">CACHA</a>, by A BUNCH OF AWESOME PEOPLE.</p>
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