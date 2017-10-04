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
                        <a class="nav-link active" href="index.html">Home</a>
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

                    <h1 class="cover-heading">Register A New Patient</h1>
                    <br>

                    <form class="form-horizontal">
                        <fieldset>

                            <!-- Form Name -->
                            <!--<legend>Patient Form</legend>-->

                            <!-- Text input-->
                            <div class="form-group">
                                <!--<label class="col-md-4 control-label" for="fname">First Name</label>-->
                                <div class="col-md-4 col-centered">
                                    <input id="fname" name="fname" type="text" placeholder="First Name" class="form-control input-md" required="">

                                </div>
                            </div>

                            <!-- Text input-->
                            <div class="form-group">
                                <!-- <label class="col-md-4 control-label" for="lname">Last Name</label> -->
                                <div class="col-md-4 col-centered">
                                    <input id="lname" name="lname" type="text" placeholder="Last Name" class="form-control input-md" required="">

                                </div>
                            </div>

                            <!-- Select Basic -->
                            <div class="form-group">
                                <!--<label class="col-md-4 control-label" for="village">Village</label>-->
                                <div class="col-md-4 col-centered">
                                    <select id="village" name="village" class="form-control">
                                        <option value="1">Bugola</option>
                                        <option value="2">Bugorola</option>
                                        <option value="3">Bukondo</option>
                                        <option value="4">Buzegwe</option>
                                        <option value="5">Gallu</option>
                                        <option value="6">Hamukoko</option>
                                        <option value="7">Hamuyebe</option>
                                        <option value="8">Igalla</option>
                                        <option value="9">Kabuhinzi</option>
                                        <option value="10">Kagunguli</option>
                                        <option value="11">Kaseni</option>
                                        <option value="12">Kazilankanda</option>
                                        <option value="13">Kigara</option>
                                        <option value="14">Muhula</option>
                                        <option value="15">Mukunu</option>
                                        <option value="16">Muluseni</option>
                                        <option value="17">Muriti</option>
                                        <option value="18">Murutilima</option>
                                        <option value="19">Ukara</option>
                                    </select>
                                </div>
                            </div>
                            <br>
                            <!-- Multiple Radios (inline) -->
                            <div class="form-group">
                                <!-- <label class="col-md-4 control-label" for="gender">Gender</label> -->
                                <div class="col-md-4 col-centered">
                                    <label class="radio-inline" for="gender-0">
                                    <input type="radio" name="gender" id="gender-0" value="male" checked="checked">
                                    male
                                    </label>&nbsp; &nbsp; &nbsp;
                                    <label class="radio-inline" for="gender-1">
                                    <input type="radio" name="gender" id="gender-1" value="female">
                                    female
                                    </label>
                                </div>
                            </div>

                            <!-- Button -->
                            <div class="form-group">
                                <!--<label class="col-md-4 control-label" for="submit">Submit</label>-->
                                <div class="col-md-4 col-centered">
                                    <button id="submit" name="submit" class="btn btn-success">Submit</button>
                                </div>
                            </div>

                        </fieldset>
                    </form>
                </div>
                <br>
                <div class="mastfoot">
                    <div class="inner">
                        <p>Digital Charts Sample for <a href="http://www.cacha.ca/">CACHA</a>, by <a href="http://mattredmond.ca">Matt</a>.</p>
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