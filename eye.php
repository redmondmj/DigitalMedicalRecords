<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="bin/bootstrap/favicon.ico">

    <title>CACHA - Eye</title>
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
                            <a class="nav-link active" href="eye.php">Eye</a>
                            <a class="nav-link" href="dental.php">Dental</a>
                            <a class="nav-link" href="pharma.php">Rx</a>
                            <a class="nav-link" href="table_view.php">Records</a>
                        </nav>
                    </div>
                </div>

                <div class="inner cover">
                    <!-- Main Content Area -->
                    <div class="form-horizontal border">
                        <form>
                            <?php include "top.php"; ?>
                            <div class="row">
                        <div class="form-group col-4">
                            <label for="diagnoses">Diagnoses:</label>
                            <select class="form-control" id="diagnoses"></select>
                        </div>
                    </div>
                    <!--abondend attempt !-->
                    <!-- <div class="row form-horizontal">
                        <div class="row">
                            <div class="col-4">
                                <input type="checkbox" id="val1" value="">
                            </div>
                            <div class="col-4">
                                <!-- <p style="font-size:10em">V</p>
                                V
                            </div>
                            <div class="col-4">
                                <input type="checkbox" id="val2" value="">
                            </div>
                        </div>
                    </div> !-->
                    <!-- This is greeeasy! :S -->
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
                                <p style="font-size:15em">V</p>
                            </td>
                            <td>
                                <table>
                                    <tr><td>&nbsp;</td></tr>
                                    <tr><td>val 1</td></tr>
                                    <tr>
                                        <td>
                                            <input type="text" id="val1" value="">
                                        </td>
                                    </tr>
                                    <tr><td>&nbsp;</td></tr>
                                    <tr><td>&nbsp;</td></tr>
                                    <tr><td>&nbsp;</td></tr>
                                    <tr><td>val 2</td></tr>
                                    <tr>
                                        <td>
                                            <input type="text" id="val2" value="">
                                        </td>
                                    </tr>
                                    <tr><td>&nbsp;</td></tr>
                                </table>
                            </td>
                            <td>
                                <span style="text-align:center;">val 3</span>
                                </br>
                                <input type="text" id="val3" value="">
                            </td>
                        </tr>
                    </table>
                    <!--Submit Form-->
                    <?php include "bottom.php"; ?>  
                    <!-- FormBottom-->

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