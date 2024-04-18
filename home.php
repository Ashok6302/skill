<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Student Login</title>
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />
    <style>

        a {
            color: #f5f5f5;
            text-decoration: none;
        }
        label{
            font-size: 16px;
            font-weight: 300;
        }
        button{
            font-weight:600;
            font-size: 16px;
        }
    </style>
</head>
<body>
<body>
    <?php include('includes/header.php');?>
    <div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="page-head-line">Login page</h4>

                </div>

            </div>
            <center>
            <button type="submit" name="submit" class="btn btn-info"><span class="glyphicon glyphicon-user"><a href="index.php"></span> &nbsp;User Login </a></button>&nbsp;
            <button type="submit" name="signup" class="btn btn-info"><span class="glyphicon glyphicon-user"><a href="admin/index.php"></span> &nbsp;Admin Login</a></button>&nbsp;
</center>
                </div>
                </form>
                <br><br>
                
                <!-- <div class="col-md-6"style="margin-left:180px;margin-top: 13px">
                    <div class="alert alert-info" style="margin-left:400px;margin-top: 13px">
                        This is a Study buddy app  with basic Courses. 
                        From Saveetha School of Engineering
                        <br />
                         <strong> Some of its features are given below :</strong>
                        <ul>
                            <li>
                                 Responsive Classes Used
                            </li>
                            <li>
                                Easy to use and customize
                            </li>
                            <li>
                                Font awesome icons included
                            </li>
                            <li>
                                Clean and light code used.
                            </li>
                        </ul>
                    </div>
                                    </div> -->

            </div>
        </div>
    </div>
    <!-- CONTENT-WRAPPER SECTION END-->
    <?php include('includes/footer.php');?>
    <!-- FOOTER SECTION END-->
    <!-- JAVASCRIPT AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.11.1.js"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="assets/js/bootstrap.js"></script>
</body>
</html>