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
        * {
            font-family: sans-serif;
        }

        .card-product .img-wrap {
            border-radius: 3px 3px 0 0;
            overflow: hidden;
            position: relative;
            height: 220px;
            text-align: center;
        }

        .card-product .img-wrap img {
            max-height: 100%;
            max-width: 100%;
            object-fit: cover;
        }

        .card-product .info-wrap {
            overflow: hidden;
            padding: 15px;
            border-top: 1px solid #eee;
        }

        .card-product .bottom-wrap {
            padding: 15px;
            border-top: 1px solid #eee;
        }

        .label-rating {
            margin-right: 10px;
            color: #333;
            display: inline-block;
            vertical-align: middle;
        }

        .card-product .price-old {
            color: #999;
        }

        body {
            height: 100vh;
            width: 100vw;
            display: flex;
            align-items: center;
            justify-content: center;
            background: white;
            font-size: 16px;
            font-family: 'proxima nova', 'open sans', 'Helvetica', sans-serif;
        }

        .Marquee {
            overflow: hidden;
        }

        .Marquee-content {
            display: inline-block;
            animation: marquee 15s linear infinite;
        }

        @keyframes marquee {
            from {
                transform: translateX(100%);
            }

            to {
                transform: translateX(-100%);
            }
        }
    </style>
</head>

<body>
    <div class="navbar navbar-inverse set-radius-zero" style="height: 76px;">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <a class="navbar-brand" href="#" style=" font-size:35px; line-height:3px; ">
                    <!-- STUDY MATE -->
                    <img src="image/logo.jpg" width="70" height="70">
                </a>
                <h3>Development</h3>
            </div>

            <div class="right-div">
                <div class="navbar-collapse collapse px-0">
                    <ul id="menu-top" class="nav navbar-nav">
                        <li class=""><a href="page1.php">Home</a></li>
                        <li class=""><a href="admin/home.php">Login</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="page-head-line">WELCOME TO STUDY MATE!!</h4>
                </div>
            </div>
        </div>

        <div class="Marquee">
            <div class="Marquee-content">
                <div class="container">
                    <div class="row" style="white-space: nowrap; overflow: hidden;">
                        <div class="col-md-3">
                            <figure class="card card-product">
                                <div class="img-wrap"><img src="https://wallpapercave.com/wp/wp7250222.jpg" width="370"
                                        height="370" style="margin-left: -330px;"></div>
                                <figcaption class="info-wrap">
                                    <h4 class="title">Java</h4>
                                    <p class="desc">Java is an object-oriented programming language that produces
                                        software for multiple platforms. When a programmer writes a Java application.
                                    </p>
                                </figcaption>
                                <div class="bottom-wrap">
                                    <a href="home.php" class="btn btn-sm btn-primary float-right buy_now"
                                        data-img="//www.tutsmake.com/wp-content/uploads/2019/03/c05917807.png"
                                        data-amount="1000" data-id="1">Enroll Now</a>
                                    <div class="price-wrap h5">
                                        <span class="price-new">₹1000</span> <del class="price-old">₹1200</del>
                                    </div>
                                </div>
                            </figure>
                            
                        </div>

                        <!-- Add more content blocks here -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer Section -->
    <?php include ('includes/footer.php'); ?>
    <!-- FOOTER SECTION END-->

    <!-- JavaScript files at the bottom -->
    <script src="assets/js/jquery-1.11.1.js"></script>
    <script src="assets/js/bootstrap.js"></script>
</body>

</html>
