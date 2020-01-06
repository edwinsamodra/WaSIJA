<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="assets/img/logo1.png" type="image/x-icon">
    <title><?= $title ?></title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="assets/css/fontawesome-free/css/all.min.css">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- Material Design Bootstrap -->
    <link rel="stylesheet" href="assets/css/mdb.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="assets/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <!-- My CSS -->
    <link rel="stylesheet" href="assets/css/wasija.css">
</head>
<body>
    <main>
    	<div class="container-fluid">
    		<div class="row">
    			<div class="col-md-4"></div>
    			<div class="col-md-4 login-box z-depth-5 rounded mb-50">
    				<div class="px-4 py-4">
    					<center><a href="#" class="view zoom"><img class="front-logo" src="assets/img/logo2.png"></a></center>
    					<div class="md-form">
    						<i class="fas fa-user prefix"></i>
    						<input class="form-control" type="text" name="" id="log_nis" required>
    						<label for="log_nis">Username</label>
    					</div>
    					<div class="md-form">
    						<i class="fas fa-key prefix"></i>
    						<input class="form-control" type="password" name="" id="log_pas" required>
    						<label for="log_pas">Password</label>
    					</div> <br />
                        <center>
                            <button class="btn btn-primary waves-effect" id="btn_submit"><i class="fas fa-sign-in-alt mr-1"></i>&nbsp;Sign In</button><br />
                            <span class="text-gray">- atau -</span><br /><a href="#" class="">Belum Punya Akun ?</a>
                        </center>
    				</div>
    			</div>
    			<div class="col-md-4"></div>
    		</div>
    	</div>
    </main>
    <!-- JQuery -->
    <script type="text/javascript" src="assets/js/jquery.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="assets/js/mdb.min.js"></script>
    <!-- AdminLTE App -->
    <script type="text/javascript" src="assets/js/adminlte.min.js"></script>
    <!-- My JS -->
    <script type="text/javascript" src="assets/js/wasija.js"></script>
</body>
</html>