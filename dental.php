<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="bin/bootstrap/favicon.ico">

    <title>CACHA - Dental</title>

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
                            <a class="nav-link active" href="dental.php">Dental</a>
                            <a class="nav-link" href="pharma.php">Rx</a>
                            <a class="nav-link" href="records.php">Records</a>
                        </nav>
                    </div>
                </div>

                <div class="inner cover">
                    <h1 class="cover-heading">Dental</h1>
                    <!-- Main Content Area -->
                    <div class="form-horizontal border">
                        <form>
                            <!-- load visit info -->   
                            <?php include "top.php"; ?>
                            <div style="padding:1em; border-style: solid; border-width: 3px; border-color: white; border-radius: 15px;">
                                
                                <div class="row">
                                    <div class="form-group col-12">
                                        <label for="dentalIndo">Dental Info:</label>
                                        <input type="textArea" class="form-control" id="dentalInfo" style="height:20em;" placeholder="APPEND to ASSESSMENT">
                                    </div>
                                </div>
                               
                            </div>
                        <!-- Buttons !-->
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