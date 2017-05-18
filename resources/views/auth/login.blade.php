<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Schyns Fitness Training / Real Health</title>

    <meta name="description" content="">
    <meta name="author" content="">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="">

    <!-- BEGIN CORE CSS -->
    <link rel="stylesheet" href="../../assets/admin1/css/admin1.css">
    <link rel="stylesheet" href="../../assets/globals/css/elements.css">
    <!-- END CORE CSS -->

    <!-- BEGIN PLUGINS CSS -->
    <link rel="stylesheet" href="../../assets/globals/plugins/bootstrap-social/bootstrap-social.css">
    <!-- END PLUGINS CSS -->

    <!-- FIX PLUGINS -->
    <link rel="stylesheet" href="../../assets/globals/css/plugins.css">
    <!-- END FIX PLUGINS -->

    <!-- BEGIN SHORTCUT AND TOUCH ICONS -->
    <link rel="shortcut icon" href="../../assets/globals/img/icons/favicon.png">
    <link rel="apple-touch-icon" href="../../assets/globals/img/icons/apple-touch-icon.png">
    <!-- END SHORTCUT AND TOUCH ICONS -->

    <script src="../../assets/globals/plugins/modernizr/modernizr.min.js"></script>
</head>
<body class="bg-login printable">

    <div class="login-screen">
        <div class="panel-login blur-content">
            <div class="panel-heading"><img src="../../assets/globals/img/james_logo.png" height="80" alt=""></div><!--.panel-heading-->

            <div id="pane-login" class="panel-body active">
                <h2>Login to Dashboard</h2>

            <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                        {{ csrf_field() }}  
                <div class="form-group">
                    
                    <div class="inputer">
                        <div class="input-wrapper">
              <div class="controls">
                <input type="text" name="username" placeholder="User Name" class="form-control" required>
              </div>

                        </div>
                    </div>
                </div><!--.form-group-->

                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <div class="inputer">
                        <div class="input-wrapper">
                            <input id="password" type="password" class="form-control" name="password" placeholder="Enter your password" required >
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                        </div>
                    </div>
                </div><!--.form-group-->

                <div class="form-buttons clearfix">
                    <button type="submit" class="btn btn-success">Login</button>
                </div><!--.form-buttons-->
            </form>

            </div><!--#login.panel-body-->

        </div><!--.blur-content-->
    </div><!--.login-screen-->

    <div class="bg-blur dark">
        <div class="overlay"></div><!--.overlay-->
    </div><!--.bg-blur-->

    <svg version="1.1" xmlns='http://www.w3.org/2000/svg'>
        <filter id='blur'>
            <feGaussianBlur stdDeviation='7' />
        </filter>
    </svg>

    <!-- BEGIN GLOBAL AND THEME VENDORS -->
    <script src="../../assets/globals/js/global-vendors.js"></script>
    <!-- END GLOBAL AND THEME VENDORS -->

    <!-- BEGIN PLUGINS AREA -->
    <!-- END PLUGINS AREA -->

    <!-- PLUGINS INITIALIZATION AND SETTINGS -->
    <script src="../../assets/globals/scripts/user-pages.js"></script>
    <!-- END PLUGINS INITIALIZATION AND SETTINGS -->

    <!-- PLEASURE Initializer -->
    <script src="../../assets/globals/js/pleasure.js"></script>
    <!-- ADMIN 1 Layout Functions -->
    <script src="../../assets/admin1/js/layout.js"></script>

    <!-- BEGIN INITIALIZATION-->
    <script>
    $(document).ready(function () {
        Pleasure.init();
        Layout.init();
        UserPages.login();
    });
    </script>
    <!-- END INITIALIZATION-->

    <!-- BEGIN Google Analytics -->
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', Pleasure.settings.ga.urchin, Pleasure.settings.ga.url);
        ga('send', 'pageview');
    </script>
    <!-- END Google Analytics -->

</body>
</html>