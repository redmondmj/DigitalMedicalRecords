<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="bin/bootstrap/favicon.ico">
    <script src="bin/jquery-3.2.1.min.js"></script>
    <script type="text/javascript">
        function fetch_select(val) {
            $.ajax({
                type: 'post',
                url: 'loadVisit.php',
                data: {
                    patientName: val
                },
                success: function(response) {
                    document.getElementById("visit").innerHTML = response;
                }
            });
        }
    </script>
    <title>CACHA - Pharmacy</title>

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
                            <a class="nav-link" href="eye.php">Eye</a>
                            <a class="nav-link" href="dental.php">Dental</a>
                            <a class="nav-link active" href="pharma.php">Rx</a>
                            <a class="nav-link" href="records.php">Records</a>
                        </nav>
                    </div>
                </div>

                <div class="inner cover">
                    <h1 class="cover-heading">Pharmacy</h1>
                    <!-- Main Content Area -->
                    <form class="form-horizontal" method="POST">

                        <div class="form-row justify-content-center">
                            <!-- Select Patient -->
                            <div class="form-group">
                                <label class="col-12 control-label" for="patientName">Choose Patient:</label>
                                <div class="col-12">
                                    <select id="patientName" name="patientName" class="form-control" onchange="fetch_select(this.value);">
                                            <option disabled selected>Choose Patient</option>
                                            <?php include 'loadPatient.php'; ?>
                                        </select>
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
                        </fieldset>
                    </form>







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
    <!-- slim jquery does not include ajax 
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    -->
    <script>
        window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery.min.js"><\/script>')
    </script>
    <script src="bin/bootstrap/assets/js/vendor/popper.min.js"></script>
    <script src="bin/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="bin/bootstrap/assets/js/ie10-viewport-bug-workaround.js"></script>
</body>

</html>