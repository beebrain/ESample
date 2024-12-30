<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Less cabon URU</title>

	<!-- Favicon -->
	<link rel="shortcut icon" href="<?php echo base_url() ?>/assets/images/favicon.ico" />
	<link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/backend-plugin.min.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/backend.css?v=1.0.0">
	<link rel="stylesheet" href="<?php echo base_url() ?>/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">
	<link rel="stylesheet"
		href="<?php echo base_url() ?>/assets/vendor/line-awesome/dist/line-awesome/css/line-awesome.min.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>/assets/vendor/remixicon/fonts/remixicon.css">
</head>

<body class=" ">
	<!-- loader Start -->
	<div id="loading">
		<div id="loading-center">
		</div>
	</div>
	<!-- loader END -->

	<div class="wrapper">
		<section class="login-content">
			<div class="container">
				<div class="row align-items-center justify-content-center height-self-center">
					<div class="col-lg-8">
						<div class="card auth-card">
							<div class="card-body p-0">
								<div class="d-flex align-items-center auth-content">
									<div class="col-lg-7 align-self-center">
										<div class="p-3">
											<h2 class="mb-2">เข้าระบบสมาชิก</h2>
											<form id="loginform" name="loginform">
												<div class="row">
													<div class="col-lg-12">
														<div class="floating-label form-group">
															<input class="floating-input form-control" name="email"
																id="email" type="email" placeholder=" ">
															<label>อีเมล</label>
														</div>
													</div>
													<div class="col-lg-12">
														<div class="floating-label form-group">
															<input class="floating-input form-control" type="password"
																name="password" id="password" placeholder=" ">
															<label>รหัสผ่าน</label>
														</div>
													</div>
													<div class="col-lg-6">

														<p class="bg-secondary-light pl-3 pr-3 pt-2 pb-2 rounded"
															id="message"></p>

													</div>
													<div class="col-lg-6">
														<a href="auth-recoverpw.html"
															class="text-primary float-right">ลืมรหัสผ่าน?</a>
													</div>
												</div>
												<button type="button" id="loginbutton" class="btn btn-primary">Sign
													In</button>
												<p class="mt-3">
													สร้างบัญชีผู้ใช้งาน <a
														href="<?php echo base_url() ?>index.php/login/showsignup"
														class="text-primary"> สมัครสมาชิก</a>
												</p>
											</form>
										</div>
									</div>
									<div class="col-lg-5 content-right">
										<img src="<?php echo base_url() ?>/assets/images/login/01.png"
											class="img-fluid image-right" alt="">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>

	<!-- Backend Bundle JavaScript -->
	<script src="<?php echo base_url() ?>/assets/js/backend-bundle.min.js"></script>

	<!-- Table Treeview JavaScript -->
	<script src="<?php echo base_url() ?>/assets/js/table-treeview.js"></script>

	<!-- Chart Custom JavaScript -->
	<script src="<?php echo base_url() ?>/assets/js/customizer.js"></script>

	<!-- Chart Custom JavaScript -->
	<script async src="<?php echo base_url() ?>/assets/js/chart-custom.js"></script>

	<!-- app JavaScript -->
	<script src="<?php echo base_url() ?>/assets/js/app.js"></script>

	<script>
		$(document).ready(function() {
			$('#message').hide();
		});

		$("#loginbutton").on("click", function() {



			var datastring = $("#loginform").serialize();
			console.log(datastring);

			$.ajax({
				type: "POST",
				url: "<?= base_url(); ?>index.php/Login/checklogin",
				data: datastring,
				dataType: "json", // Set the data type so jQuery can parse it for you
				success: function(data) {
					console.log(data);
					$('#message').html(data["info"]);
					$('#message').show();
					if (data.url) {
						// data.redirect contains the string URL to redirect to
						setTimeout(function() {
							window.location.href = data.url;
						}, 500);

					}
				}

			});
		});
	</script>

</body>

</html>