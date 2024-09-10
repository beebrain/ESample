<!doctype html>
<html lang="en">
  <head>
  	<title>Login 10</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="<?=base_url();?>/assets/css/style.css">
	<!-- <link rel="stylesheet" href="<?=base_url();?>/assets/css/core.min.css"> -->
	<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  	<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
<!-- <script src="<?=base_url();?>/assets/js/jquery.min.js"></script> -->
  <script src="<?=base_url();?>/assets/js/popper.js"></script>
  <script src="<?=base_url();?>/assets/js/bootstrap.min.js"></script>
  <script src="<?=base_url();?>/assets/js/main.js"></script>
	  <script>
 $(document).ready(function () {
  $('#tabs').tabs();
});
  </script>
	</head>
	<body class="img js-fullheight" style="background-image: url(<?=base_url();?>/assets/images/bg.jpg);">

	
	<section class="ftco-section">

		<div class="container">

			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Login เข้าระบบประเมินการสอน คณะวิทยาศาสตร์และเทคโนโลยี</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div id="tabs">
						<ul class="nav nav-pills nav-justified mb-3" id="ex1" role="tablist">
						<li class="nav-item" role="presentation">
							<a class="nav-link active" id="tab-login" data-mdb-toggle="pill" href="#tabs-1" role="tab" aria-controls="pills-login" aria-selected="true">Login</a>
						<!-- </li>
						<li class="nav-item" role="presentation">
							<a class="nav-link"   id="tab-register" data-mdb-toggle="pill" href="#tabs-2" role="tab" aria-controls="pills-register" aria-selected="false" tabindex="-1">Register</a>
						</li> -->
						</ul>
						<div id="tabs-1">
						<div class="login-wrap p-0">
<!-- 		      	
		      	<form id="signform" class="signin-form">
		      		<div class="form-group">
		      			<input type="email" class="form-control" placeholder="email" required>
		      		</div>
	            <div class="form-group">
	              <input id="password-field" type="password" class="form-control" placeholder="Password" required>
	              <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
	            </div>
	            <div class="form-group">
	            	<button type="button" id="signinemail" class="form-control btn btn-primary submit px-3">Sign In</button>
	            </div>
				<div class="form-group">
				<div class="alert alert-danger" role="alert">This is a danger alert — check it out!</div>
	            </div>
	            <div class="form-group d-md-flex">
					
	            	<div class="w-50 ">
		            	<label class="checkbox-wrap checkbox-primary">Remember Me
									  <input type="checkbox" checked>
									  <span class="checkmark"></span>
									</label> 
								 </div>
								<div class="w-50 text-md-right">
									<a href="#" style="color: #fff">Forgot Password</a>
								</div>

								
	            </div> 
	          </form>
	          <p class="w-100 text-center">&mdash; Or Sign In With &mdash;</p> -->
	          <div class="social d-flex text-center">
			  <a class="px-2 py-2 mr-md-1 rounded" href="<?php echo $login_button ?>">
    <img width="15px" style="margin-bottom:3px; margin-right:5px" alt="Google login" src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/53/Google_%22G%22_Logo.svg/512px-Google_%22G%22_Logo.svg.png" />
    Sign in with Google
  </a>
			  <!-- <a href="<?php echo $login_button ?>" class="px-2 py-2 mr-md-1 rounded"><span class="ion-logo-google mr-2"></span> Google</a> -->
	          </div>
		      </div>
						</div>
						<div id="tabs-2">
						<!--  register zone -->
						
				<form id="registerform">



                <!-- Email input -->
				<div class="form-group">
		      			<input type="email" id="registerEmail" name = "resisEmail" class="form-control" placeholder="Email" required>
		      		</div>


                <!-- Password input -->
				<div class="form-group">
		      			<input type="password" name = "regisPassword" id="registerPassword" class="form-control" placeholder="Password" required>
		      		</div>

                <!-- Repeat Password input -->

				<div class="form-group">
		      			<input type="password" name = "repassword"id="registerRepeatPassword" class="form-control" placeholder="Repeat password" required>
		      		</div>
                
               

                <!-- Submit button -->
                <button type="button" id="register" class="btn btn-primary btn-block mb-3">Register</button>
              </form>





						</div>
					</div>
					
					
				</div>
			</div>
		</div>
	</section>

	<script type="text/javascript">
      
	  $('#register').on('click', function () {
        // alert("xx");
		var datastring = $("#registerform").serialize();
    console.log(datastring);
        $.ajax({
            url: '<?=base_url(); ?>index.php/UserControl/register', // point to server-side controller method
            dataType: 'json', // what to expect back from the server
            cache: false,
            contentType: false,
            processData: false,
            uploadProgress: function(e) {
              alert("Uploading");
            },
            data: datastring,
            type: 'post',
            success: function (response) {
              console.log(response);
            },
            error: function (response) {
                console.log(response);
            },
            complete:function(response){
            //   $('#msgfile').show();
            }
        });
    });
	  </script>

	</body>
</html>

