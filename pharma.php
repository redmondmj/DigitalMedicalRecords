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
                    <div class="form-horizontal border"
                        <form class="form-horizontal" method="POST">
                            <!-- load the visit -->
                            <?php include "top.php"; ?>
                            <!-- FORM LAYOUT BEGINS -->
                            <div class="form-horizontal border" >
                            <button data-toggle="collapse" data-target="#msk" class="btn btn-default">MSK (click for drugs)</button>
                            <div class="row collapse" id="msk">
                                <h4>MSK</h4>
                                <div class="row">
                                    <div class="col-4">
                                            <label class="control-label" for="1">Sample 1</label>
                                            <input type="checkbox" value="1">
                                    </div>
                                    <div class="col-4">
                                            <label class="control-label" for="2">Sample 2</label>
                                            <input type="checkbox" value="2">
                                    </div>
                                    <div class="col-4">
                                            <label class="control-label" for="3">Sample 3</label>
                                            <input type="checkbox" value="3">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-4">
                                            <label class="control-label" for="4">Sample 4</label>
                                            <input type="checkbox" value="5">
                                    </div>
                                    <div class="col-4">
                                            <label class="control-label" for="5">Sample 5</label>
                                            <input type="checkbox" value="5">
                                    </div>
                                    <div class="col-4">
                                            <label class="control-label" for="6">Sample 6</label>
                                            <input type="checkbox" value="6">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-4">
                                            <label class="control-label" for="7">Sample 7</label>
                                            <input type="checkbox" value="7">
                                    </div>
                                    <div class="col-4">
                                            <label class="control-label" for="8">Sample 8</label>
                                            <input type="checkbox" value="8">
                                    </div>
                                    <div class="col-4">
                                            <label class="control-label" for="9">Sample 9</label>
                                            <input type="checkbox" value="9">
                                    </div>
                                </div>
                            </div>
                        </div>
                                <!-- FORM LAYOUT ENDS -->
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