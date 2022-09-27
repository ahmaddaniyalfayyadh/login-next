<!DOCTYPE html>
<html>
<head>
<title>Creative Colorlib SignUp Form</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="{{ URL::asset('css/style.css') }}" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom Theme files -->
<!-- web font -->
<link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
<!-- //web font -->
</head>
<body>
	<!-- main -->
	<div class="main-w3layouts wrapper">
		{{-- <h1> SignUp Form</h1> --}}
		<div class="main-agileinfo">
			<div class="agileits-top">
				<form action="/register" method="POST">
          @csrf
          <h1> Registrasi </h1>
					<input class="text email" type="text" name="username" placeholder="username" required="yes" autocomplete="off">
					<input class="text email" type="number" name="nomer" placeholder="nomer" required="yes" autocomplete="off">
					<input class="text email" type="text" name="email" placeholder="email" required="yes" autocomplete="off">
					<input class="text" type="password" name="password" placeholder="Password" required="" autocomplete="off">
          <input type="datetime-local" class="text email" placeholder="Enter Date">
        <script type="text/javascript">
          $(function() {
              $('#datepicker').datepicker();
          });
        </script>
					<input type="submit" value="SIGNUP" name="submit">
				</form>
				<p>Don't have an Account? <a href="/"> Login Now!</a></p>
			</div>
		</div>

		<ul class="colorlib-bubbles">
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
		</ul>
	</div>
	<!-- //main -->
</body>
</html>