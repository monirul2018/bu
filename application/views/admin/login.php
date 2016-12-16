<!DOCTYPE html>
<head>
	<meta charset="utf-8" />
	<title>Login Form</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	<!-- BEGIN GLOBAL MANDATORY STYLES -->
	<link href="<?php echo base_url();?>/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
	<link href="<?php echo base_url();?>/assets/plugins/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css"/>
	<link href="<?php echo base_url();?>/assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
	<link href="<?php echo base_url();?>/assets/css/style-metro.css" rel="stylesheet" type="text/css"/>
	<link href="<?php echo base_url();?>/assets/css/style.css" rel="stylesheet" type="text/css"/>
	<link href="<?php echo base_url();?>/assets/css/style-responsive.css" rel="stylesheet" type="text/css"/>
	<link href="<?php echo base_url();?>/assets/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color"/>
	<link href="<?php echo base_url();?>/assets/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/plugins/select2/select2_metro.css" />
	<!-- END GLOBAL MANDATORY STYLES -->
	<!-- BEGIN PAGE LEVEL STYLES -->
	<link href="<?php echo base_url();?>/assets/css/pages/login-soft.css" rel="stylesheet" type="text/css"/>
	<!-- END PAGE LEVEL STYLES -->
	<link rel="shortcut icon" href="favicon.ico" />
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="login">
	<!-- BEGIN LOGO -->
	<div class="logo">
		<!-- PUT YOUR LOGO HERE -->
	</div>
	<!-- END LOGO -->
	<!-- BEGIN LOGIN -->
    <!-- END LOGO -->
    <!-- BEGIN LOGIN -->
    <div class="content">
        <!-- BEGIN LOGIN FORM -->
        <form class="form-vertical login-form" action="admin_index_controller" method="post">
            <h3 class="form-title">Login to your account</h3>
            <div class="alert alert-error hide">
                <button class="close" data-dismiss="alert"></button>
                <span>Enter any username and password.</span>
            </div>
            <div class="control-group">

                <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
                <div class="controls">
                    <div class="input-icon left">
                        <i class="icon-user"></i>
                        <?php echo form_input(
                            array(
                                'class' => "m-wrap placeholder-no-fix",
                                'type' => 'text',
                                'autocomplete' => 'off',
                                'placeholder' => 'Username',
                                'name' => 'm_user_name'
                            ));
                        ?>
                    </div>
                </div>
            </div>
            <div class="control-group">

            <div class="controls">
                <div class="input-icon left">
                    <i class="icon-lock"></i>
                    <?php echo form_input(
                        array(
                            'class' => "m-wrap placeholder-no-fix",
                            'type' => 'password',
                            'autocomplete' => 'off',
                            'placeholder' => 'Password',
                            'name' => 'password'
                        ));
                    ?>
                </div>
            </div>
    </div>
            <div class="form-actions">
                <label class="checkbox" style="    margin-left: 15px">
                    <input type="checkbox" name="remember" value="1"/> Remember me
                </label>

                <?php echo form_submit(
                    array(
                        'class' => 'btn blue pull-right',
                        'type' => 'submit',
                        'value' => 'Login'
                    ));
                ?><i class="m-icon-swapright m-icon-white"></i>

            </div>
            <div class="forget-password">
                <h4>Forgot your password ?</h4>
                <p>
                    no worries, click <a href="javascript:;"  id="forget-password">here</a>
                    to reset your password.
                </p>
            </div>
            <div class="create-account">
                <p>
                    Don't have an account yet ?&nbsp;
                    <a href="javascript:;" id="register-btn" >Create an account</a>
                </p>
            </div>
            <?php echo form_close(); ?>
        <!-- END LOGIN FORM -->
        <!-- BEGIN FORGOT PASSWORD FORM -->
        <form class="form-vertical forget-form" action="index.html" method="post">
            <h3 >Forget Password ?</h3>
            <p>Enter your e-mail address below to reset your password.</p>
            <div class="control-group">
                <div class="controls">
                    <div class="input-icon left">
                        <i class="icon-envelope"></i>
                        <?php echo form_input(
                            array(
                                'class' => "m-wrap placeholder-no-fix",
                                'type' => 'email',
                                'placeholder' => 'Email',
                                'autocomplete' => 'off',
                                'name' => 's_email'
                            ));
                        ?>
                    </div>
                </div>
            </div>
            <div class="form-actions">
                <i class="m-icon-swapleft"></i>
                <?php echo form_submit(
                    array(
                        'class' => 'btn',
                        'id' => 'back-btn',
                        'type' => 'button',
                        'value' => 'Back'
                    ));
                ?><i class="m-icon-swapright m-icon-white"></i>
                <?php echo form_submit(
                    array(
                        'class' => 'btn blue pull-right',
                        'type' => 'submit',
                        'value' => 'Submit'
                    ));
                ?><i class="m-icon-swapright m-icon-white"></i>

            </div>
            <?php echo form_close(); ?>
        <!-- END FORGOT PASSWORD FORM -->
        <!-- BEGIN REGISTRATION FORM -->
        <form class="form-vertical register-form" action="index.html" method="post">
            <h3 >Sign Up</h3>
            <p>Enter your personal details below:</p>
            <div class="control-group">
               <!-- <label class="control-label visible-ie8 visible-ie9">Full Name</label> -->
                <div class="controls">
                    <div class="input-icon left">
                        <i class="icon-font"></i>
                        <?php echo form_input(
                            array(
                                'class' => "m-wrap placeholder-no-fix",
                                'type' => 'text',
                                'placeholder' => 'Full Name',
                                'name' => 'm_name'
                            ));
                        ?>
                    </div>
                </div>
            </div>
            <div class="control-group">
                <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
                <!--    <label class="control-label visible-ie8 visible-ie9">Email</label> -->
                  <div class="controls">
                      <div class="input-icon left">
                          <i class="icon-envelope"></i>
                          <?php echo form_input(
                              array(
                                  'class' => "m-wrap placeholder-no-fix",
                                  'type' => 'text',
                                  'placeholder' => 'Email',
                                  'name' => 'm_email'
                              ));
                          ?>
                      </div>
                  </div>
              </div>
              <div class="control-group">
              <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
           <!-- <label class="control-label visible-ie8 visible-ie9">Contact</label> -->
            <div class="controls">
                <div class="input-icon left">
                    <i class="icon-envelope"></i>
                    <?php echo form_input(
                        array(
                            'class' => "m-wrap placeholder-no-fix",
                            'type' => 'number',
                            'placeholder' => 'Contact Number',
                            'name' => 'm_contact'
                        ));
                    ?>
                </div>
            </div>
            </div>
            <div class="control-group">
                <label class="control-label visible-ie8 visible-ie9">Address</label>
                <div class="controls">
                    <div class="input-icon left">
                        <i class="icon-ok"></i>
                        <input class="m-wrap placeholder-no-fix" type="text" placeholder="Address" name="m_address"/>
                    </div>
                </div>
            </div>
            <p>Enter your account details below:</p>
            <div class="control-group">
             <!--   <label class="control-label visible-ie8 visible-ie9">Username</label> -->
                <div class="controls">
                    <div class="input-icon left">
                        <i class="icon-user"></i>
                        <?php echo form_input(
                            array(
                                'class' => "m-wrap placeholder-no-fix",
                                'type' => 'text',
                                'autocomplete' => 'off',
                                'placeholder' => 'Username',
                                'name' => 'm_user_name'
                            ));
                        ?>

                    </div>
                </div>
            </div>
            <div class="control-group">
               <!-- <label class="control-label visible-ie8 visible-ie9">Password</label> -->
                <div class="controls">
                    <div class="input-icon left">
                        <i class="icon-lock"></i>
                        <?php echo form_input(
                            array(
                                'class' => "m-wrap placeholder-no-fix",
                                'type' => 'password',
                                'id' => 'register_password',
                                'autocomplete' => 'off',
                                'placeholder' => 'Password',
                                'name' => 'password'
                            ));
                        ?>

                    </div>
                </div>
            </div>
           <!-- <div class="control-group">
                <label class="control-label visible-ie8 visible-ie9">Re-type Your Password</label>
                <div class="controls">
                    <div class="input-icon left">
                        <i class="icon-ok"></i>
                        <input class="m-wrap placeholder-no-fix" type="password" autocomplete="off" placeholder="Re-type Your Password" name="rpassword"/>
                    </div>
                </div>
            </div>
            <div class="control-group">
                <div class="controls">
                    <label class="checkbox">
                        <input type="checkbox" name="tnc"/> I agree to the <a href="#">Terms of Service</a> and <a href="#">Privacy Policy</a>
                    </label>
                    <div id="register_tnc_error"></div>
                </div>
            </div> -->
            <div class="form-actions">

                <i class="m-icon-swapleft"></i>
                <?php echo form_submit(
                    array(
                        'class' => 'btn',
                        'id' => 'register-back-btn',
                        'type' => 'button',
                        'value' => 'Back'
                    ));
                ?><i class="m-icon-swapright m-icon-white"></i>
                <?php echo form_submit(
                    array(
                        'id' => 'register-submit-btn',
                        'class' => 'btn blue pull-right',
                        'type' => 'submit',
                        'value' => 'Sign Up'
                    ));
                ?><i class="m-icon-swapright m-icon-white"></i>
            </div>
            <?php echo form_close(); ?>


	<!-- END LOGIN -->
	<!-- BEGIN COPYRIGHT -->
	<div class="copyright">
		2014 &copy; <a href="http://www.justukfreebies.co.uk/">Just UK Freebies</a> Login Form
	</div>
	<!-- END COPYRIGHT -->
	<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
	<!-- BEGIN CORE PLUGINS -->   <script src="assets/plugins/jquery-1.10.1.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url();?>/assets/plugins/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
	<!-- IMPORTANT! Load jquery-ui-1.10.1.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
	<script src="<?php echo base_url();?>/assets/plugins/jquery-ui/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url();?>/assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url();?>/assets/plugins/bootstrap-hover-dropdown/twitter-bootstrap-hover-dropdown.min.js" type="text/javascript" ></script>
	<!--[if lt IE 9]>
	<script src="<?php echo base_url();?>/assets/plugins/excanvas.min.js"></script>
	<script src="<?php echo base_url();?>/assets/plugins/respond.min.js"></script>
	<![endif]-->   
	<script src="<?php echo base_url();?>/assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url();?>/assets/plugins/jquery.blockui.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url();?>/assets/plugins/jquery.cookie.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url();?>/assets/plugins/uniform/jquery.uniform.min.js" type="text/javascript" ></script>
	<!-- END CORE PLUGINS -->
	<!-- BEGIN PAGE LEVEL PLUGINS -->
	<script src="<?php echo base_url();?>/assets/plugins/jquery-validation/dist/jquery.validate.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url();?>/assets/plugins/backstretch/jquery.backstretch.min.js" type="text/javascript"></script>
	<script type="text/javascript" src="<?php echo base_url();?>/assets/plugins/select2/select2.min.js"></script>
	<!-- END PAGE LEVEL PLUGINS -->
	<!-- BEGIN PAGE LEVEL SCRIPTS -->
	<script src="<?php echo base_url();?>/assets/scripts/app.js" type="text/javascript"></script>
	<script src="<?php echo base_url();?>/assets/scripts/login-soft.js" type="text/javascript"></script>
	<!-- END PAGE LEVEL SCRIPTS --> 
	<script>
		jQuery(document).ready(function() {     
		  App.init();
		  Login.init();
		});
	</script>
	<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>