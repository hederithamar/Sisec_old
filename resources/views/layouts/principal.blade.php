<title>Sistema de Seguimiento y Control</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Sistema de Seguimiento y control" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 
  <!-- Bootstrap Core CSS -->
  {!!Html::style('css/bootstrap.min.css')!!}
  <!-- Custom CSS -->
  {!!Html::style('css/style.css')!!}
  <!-- Graph CSS -->
  {!!Html::style('css/font-awesome.css')!!}  
  <!-- jQuery -->
  <!--webfonts-->
  {!!Html::style('//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400')!!}
  <!-- lined-icons -->
  {!!Html::style('css/icon-font.min.css')!!}
  <!-- /js -->
  {!!Html::script('js/jquery-1.10.2.min.js')!!}
</head>
<body>
	<!--/login-->
	<div class="error_page">
		<!--/login-top-->
		<div class="error-top">
			<h2 class="inner-tittle page">Sisec</h2>
				<div class="login">
					<h3 class="inner-tittle t-inner">Login</h3>
						@yield('content')
				</div>											
			</div>
		</div>
		<div class="footer">
			<div class="error-btn">
				<a class="read fourth" href="index.html">Return to Home</a>
			</div>
			<p>SISEC</p>
		</div>
		<!--footer section end-->
		<!--/404-->
<!--js -->

  {!!Html::script('js/jquery.nicescroll.js')!!}
  {!!Html::script('js/scripts.js')!!}
  {!!Html::script('js/bootstrap.min.js')!!}
</body>
</html>