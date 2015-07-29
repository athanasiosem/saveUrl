<html>
	<head>
		<link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" >

		<link href='//fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>

		<style>
			body {
				background-image: url("images/switzerland_svizzera_schweiz_366717_o.jpg");
				background-size: cover;
				margin: 0;
				padding: 0;
				width: 100%;
				height: 100%;
				color: black;
				display: table;
				font-weight: 100;
				font-family: 'Lato';
			}
			.smaller_subheading{
				font-size:20px;
			}
			.container {
				text-align: center;
				display: table-cell;
				vertical-align: middle;
				font-weight: bold;
			}
			.loginBox{
				margin-left: auto;
				margin-right: auto;
			}
			.content {
				text-align: center;
				display: inline-block;
				font-weight:bold;
			}

			.title {
				font-size: 96px;
				margin-bottom: 40px;
				font-weight:bold;
				color:white;
			}
			.bold{
				font-weight: bold;
			}
			.quote {
				font-size: 24px;
			}
			.white{
				color:white;
			}
		</style>
	</head>
	<body>
		<div class="container">
			<div class="content">
				<div class="title">Welcome to saveUrl.<p class="smaller_subheading">{{ $numberOfLinks }} links saved. Thats {{ $dataSize }} bytes of data.</p>
</div>
				<div class="loginBox">
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-body">
					@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Whoops!</strong> There were some problems with your input.<br><br>
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif

					<form class="form-horizontal" role="form" method="POST" action="auth/login">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">

						<div class="form-group">
							<label class="col-md-4 control-label bold">E-Mail Address</label>
							<div class="col-md-6">
								<input type="email" class="form-control" name="email" value="{{ old('email') }}">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label bold">Password</label>
							<div class="col-md-6">
								<input type="password" class="form-control" name="password">
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<div class="checkbox">
									<label class="bold">
										<input type="checkbox" name="remember"> Remember Me
									</label>
								</div>
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<button type="submit" class="btn btn-primary" style="margin-right: 15px;">
									Login
								</button>

								<a href="auth/register">Register</a>

								<a href="password/email">Forgot Your Password?</a>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
<footer>
<p class="white">Athanasios Emmanouilidis 2015</p>
</footer>
			</div>
		</div>
	</body>
</html>
