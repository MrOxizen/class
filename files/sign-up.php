<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Twitter -->
        <meta name="twitter:site" content="@themepixels">
        <meta name="twitter:creator" content="@themepixels">
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="Starlight">
        <meta name="twitter:description" content="Premium Quality and Responsive UI for Dashboard.">
        <meta name="twitter:image" content="http://themepixels.me/starlight/img/starlight-social.png">

        <!-- Facebook -->
        <meta property="og:url" content="http://themepixels.me/starlight">
        <meta property="og:title" content="Starlight">
        <meta property="og:description" content="Premium Quality and Responsive UI for Dashboard.">

        <meta property="og:image" content="http://themepixels.me/starlight/img/starlight-social.png">
        <meta property="og:image:secure_url" content="http://themepixels.me/starlight/img/starlight-social.png">
        <meta property="og:image:type" content="image/png">
        <meta property="og:image:width" content="1200">
        <meta property="og:image:height" content="600">

        <!-- Meta -->
        <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
        <meta name="author" content="ThemePixels">

        <title>Starlight Responsive Bootstrap 4 Admin Template</title>

        <!-- vendor css -->
        <link href="../lib/font-awesome/css/font-awesome.css" rel="stylesheet">
        <link href="../lib/Ionicons/css/ionicons.css" rel="stylesheet">
        <link href="../lib/select2/css/select2.min.css" rel="stylesheet">


        <!-- Starlight CSS -->
        <link rel="stylesheet" href="../css/starlight.css">
    </head>

    <body>

        <div class="d-flex align-items-center justify-content-center bg-sl-primary ht-md-100v">
            <form method="post" action="../function/sign-up.php">


                <div class="login-wrapper wd-300 wd-xs-400 pd-25 pd-xs-40 bg-white">
                    <div class="signin-logo tx-center tx-24 tx-bold tx-inverse">starlight <span class="tx-info tx-normal">admin</span></div>
                    <div class="tx-center mg-b-60">Professional Admin Template Design</div>

                    <div class="form-group">
                        <input name="user-name" type="text" class="form-control" placeholder="Enter your username">
                    </div><!-- form-group -->
                    <div class="form-group">
                        <input name="user-psw" type="password" class="form-control" placeholder="Enter your password">
                    </div><!-- form-group -->
                    <div class="form-group">
                        <input name="full-name" type="text" class="form-control" placeholder="Enter your fullname">
                    </div><!-- form-group -->
                    <div class="form-group">
                        <input name="birth-day" type="date" class="form-control" placeholder="Enter your fullname">
                    </div><!-- form-group -->
                    <div class="form-group tx-12">By clicking the Sign Up button below, you agreed to our privacy policy and terms of use of our website.</div>
                    <button type="submit" class="btn btn-info btn-block">Sign Up</button>

                    <div class="mg-t-40 tx-center">Already have an account? <a href="./sign-in.php" class="tx-info">Sign In</a></div>
                </div><!-- login-wrapper -->
            </form>
        </div><!-- d-flex -->

        <script src="../lib/jquery/jquery.js"></script>
        <script src="../lib/popper.js/popper.js"></script>
        <script src="../lib/bootstrap/bootstrap.js"></script>
        <script src="../lib/select2/js/select2.min.js"></script>
        <script>
            $(function () {
                'use strict';

                $('.select2').select2({
                    minimumResultsForSearch: Infinity
                });
            });
        </script>

    </body>
</html>
