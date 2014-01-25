<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>bb test</title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width">
		<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
		
		<!-- build:css styles/modules.css -->
			<link rel="stylesheet" href="../bower_components/bootstrap/dist/css/bootstrap.css">
		<!-- endbuild -->
		
		<!-- build:css(.tmp) styles/main.css -->
		<link rel="stylesheet" href="../styles/admin.css">
		<!-- endbuild -->
			
		<!-- build:js scripts/vendor/modernizr.js -->
		<script src="../bower_components/modernizr/modernizr.js"></script>
		<!-- endbuild -->
	</head>
	<body>
		<!--[if lt IE 10]>
			<p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
		<![endif]-->

		<ul id="admin-list">
			
		</ul>

		<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
		<script>
			(function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
			function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
			e=o.createElement(i);r=o.getElementsByTagName(i)[0];
			e.src='//www.google-analytics.com/analytics.js';
			r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
			ga('create','UA-XXXXX-X');ga('send','pageview');
		</script>

		<!-- build:js scripts/vendor.js -->
		<script src="../bower_components/jquery/jquery.js"></script>
		<script src="../bower_components/underscore/underscore.js"></script>
		<script src="../bower_components/backbone/backbone.js"></script>
		<!-- endbuild -->
		
		<!-- build:js({.tmp,app}) scripts/main.js -->
		<script src="../scripts/admin/main.js"></script>
		
		<!-- Models -->
		<script src="../scripts/models/dish.js"></script>
		<!-- Collections -->
		<script src="../scripts/admin/collections/dishes.js"></script>
		<!-- Views -->
		<script src="../scripts/admin/views/dish.js"></script>
		<script src="../scripts/admin/views/dishes.js"></script>
		<!-- endbuild -->
	</body>
</html>
