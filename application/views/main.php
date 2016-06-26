<!DOCTYPE html>
<html lang="en" ng-app="tmg">
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">

    <!-- CSS Global Compulsory -->
    <!-- Basic Styles -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('static/css/style.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('static/lib/bootstrap/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('static/lib/font-awesome-4.6.3/css/font-awesome.min.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('static/lib/bootstrap/fonts/glyphicons-halflings-regular.eat'); ?>">
</head>

<body ng-controller="MainCtrl">
	<div class="container wrapper">
		<div class="row">
			<div class="col-lg-2 nav" style="background-color: red; padding:0;">
				<ul>
                    <li ng-class="{'active': nav.url == current}" ng-repeat="nav in navs">
                        <i class="fa fa-home"></i>
                        <a href="#/{{nav.url}}">
                            {{'nav.'+nav.name | i18next}}
                        </a>
                    </li>
                </ul>
            </div>

			<div class="col-lg-10">
				<div class="header">
					{{'nav.'+current | i18next}}
				</div>
				<div class="content" ui-view></div>
				<div class="footer">
		            <div class="row">
		                <div class="col-lg-4 clock">
		                    {{clock | date: 'dd'}} {{ 'time.month.'+(clock | date: 'MM') | i18next}} {{ clock | date:'HH:mm:ss'}}
		                </div>

		                <div class="col-lg-4" text-align="center" style="text-align:center;">
		                    <img class="img-responsive" src="<?php echo base_url('static/img/print-logo.jpg'); ?>"/>  
		                </div>

		                <div class="col-lg-4">
		                	<div ng-repeat="flag in flags" class="flag-list">
		                        <div class="flag-item" ng-click="$locales.changeLang(flag.code)" alt="{{'language.'+flag.code | i18next}}">
		                            <div class="img-wrap">
		                                <img src="<?php echo base_url('static/img/flag/square/{{flag.name}}_square_icon.png'); ?>"/>
		                            </div>
		                        </div>
		                    </div>
		                </div>
		            </div>
		        </div>
			</div>
		</div>
	</div>
	
	<!-- JS Global Compulsory -->
	<script src="<?php echo base_url('static/lib/jquery/jquery-1.11.1.min.js'); ?>"></script>

	<script src="<?php echo base_url('static/lib/bootstrap/js/bootstrap.min.js'); ?>"></script>
	
	<script type='text/javascript' src='<?php echo base_url('static/lib/angular/angular.min.js'); ?>'></script>
	<script type='text/javascript' src='<?php echo base_url('static/lib/ui-router/angular-ui-router.min.0.2.18.js'); ?>'></script>
	<script type='text/javascript' src='<?php echo base_url('static/lib/angular/angular-cookies.min.js'); ?>'></script>
	<script type='text/javascript' src='<?php echo base_url('static/lib/angular/angular-sanitize.min.js'); ?>'></script>

	<script type="text/javascript" src="<?php echo base_url('static/lib/underscore/underscore-min.js'); ?>"></script>

	<script type="text/javascript" src="<?php echo base_url('static/lib/i18next/i18next-1.7.4.min.js'); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('static/lib/ng-i18next/ng-i18next.min.0.5.2.js'); ?>"></script>

	<script type="text/javascript" src="<?php echo base_url('static/scripts/app.js'); ?>"></script>

	<script type="text/javascript" src="<?php echo base_url('static/scripts/services/locales.js'); ?>"></script>

	<script type="text/javascript" src="<?php echo base_url('static/scripts/controllers/main.js'); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('static/scripts/controllers/page/home.js'); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('static/scripts/controllers/page/info.js'); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('static/scripts/controllers/page/contact.js'); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('static/scripts/controllers/page/certificate.js'); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('static/scripts/controllers/page/policy.js'); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('static/scripts/controllers/page/about.js'); ?>"></script>

	<div title="" style="position: fixed; bottom: 5px; right: 5px; opacity: 0; cursor: pointer;" id="topcontrol"></div>
</body>
</html>