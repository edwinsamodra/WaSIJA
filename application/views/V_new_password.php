<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="<?= base_url("assets/img/logo1.png") ?>" type="image/x-icon">
    <title><?= $title ?></title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url("assets/fontawesome-free-5.11.2/css/all.min.css") ?>">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="<?= base_url("assets/bootstrap-4.4.1/bootstrap.min.css") ?>">
    <link rel="stylesheet" href="<?= base_url("assets/sweetalert2-9.5.4/sweetalert2.min.css") ?>">
    <!-- Material Design Bootstrap -->
    <link rel="stylesheet" href="<?= base_url("assets/mdb-free-4.11.0/mdb.min.css") ?>">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url("assets/adminlte-3.0.1/adminlte.min.css") ?>">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <!-- My CSS -->
    <link rel="stylesheet" href="<?= base_url("assets/wasija-1.0/wasija.css") ?>">
    <!-- Ionicons -->
	<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
</head>
<body>
    <main>
    	<div class="container-fluid">
    		<div class="row">
    			<div class="col-md-4"></div>
    			<div class="col-md-4 login-box z-depth-5 rounded mb-50">
    				<div class="px-4 py-4">
                        <center><a href="#AboutWaSIJA" id="btnMdlAbout" class="view zoom"><img class="front-logo" src="<?= base_url("assets/img/logo2.png") ?>"></a></center>
                        <form autocomplete="off" class="form-horizontal" action="<?= base_url('Start_With/setNewPassword');?>" method="post">
                            <div class="md-form">
                                <i class="fas fa-key prefix"></i>
                                <input class="form-control" type="password" name="password_register" id="password_register" required>
                                <label for="password_register">Password</label>
                            </div>
                            <div class="md-form">
                                <i id="addicon" class="fas fa-times prefix" style="color: red"></i>
                                <input class="form-control" type="password" name="password_confirm" id="password_confirm" required>
                                <label for="password_confirm">Confirm Password</label>
                                <a href="#ShowPassword" onclick="showPassword()">Show Password</a> <br />
                            </div> <br />
                            <center>
                                <button class="btn btn-danger btn-sm waves-effect" onclick="window.history.go(-1)"><i class="fas fa-times mr-1"></i>&nbsp;Cancel</button>
                                <button class="btn btn-primary btn-sm waves-effect" disabled="true" id="btn_submit"><i class="fas fa-search mr-1"></i>&nbsp;Change Password</button>
                            </center>
                        </form>
    				</div>
    			</div>
    			<div class="col-md-4"></div>
    		</div>
    	</div>
    </main>
    <script type="text/javascript">
        $(function () {
            $('#password_register').focus();
        });
    </script>
    <!-- JQuery -->
    <script type="text/javascript" src="<?= base_url("assets/jquery-3.4.1/jquery.min.js") ?>"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="<?= base_url("assets/bootstrap-4.4.1/bootstrap.min.js") ?>"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="<?= base_url("assets/mdb-free-4.11.0/mdb.min.js") ?>"></script>
    <!-- AdminLTE App -->
    <script type="text/javascript" src="<?= base_url("assets/adminlte-3.0.1/adminlte.min.js") ?>"></script>
    <!-- Sweet Alert -->
    <script type="text/javascript" src="<?= base_url("assets/sweetalert2-9.5.4/sweetalert2.min.js") ?>"></script>
    <!-- My JS -->
    <script type="text/javascript" src="<?= base_url("assets/wasija-1.0/wasija.js") ?>"></script>
</body>
</html>