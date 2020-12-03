<title>MWS Admin - Login Page</title>

</head>

<body>

	<?php
	$login = array(
		'name'	=> 'login',
		'id'	=> 'login',
		'value' => set_value('login'),
		'maxlength'	=> 80,
		'size'	=> 30,
		'class' => 'mws-login-username required',
		'placeholder'=>'username',
		);
	if ($login_by_username AND $login_by_email) {
		$login_label = 'Email or login';
	} else if ($login_by_username) {
		$login_label = 'Login';
	} else {
		$login_label = 'Email';
	}
	$password = array(
		'name'	=> 'password',
		'id'	=> 'password',
		'size'	=> 30,
		);
	$remember = array(
		'name'	=> 'remember',
		'id'	=> 'remember',
		'value'	=> 1,
		'checked'	=> set_value('remember'),
		'style' => 'margin:0;padding:0',
		);
	$captcha = array(
		'name'	=> 'captcha',
		'id'	=> 'captcha',
		'maxlength'	=> 8,
		);
		?>

		<div id="mws-login-wrapper">
			<div id="mws-login">
				<h1>BP3K SDMT - Admin Login</h1>
				<div class="mws-login-lock"><i class="icon-lock"></i></div>
				<div id="mws-login-form">

					<?php $attribut = array('class' => 'mws-form')?>	
					<?php echo form_open($this->uri->uri_string(), $attribut); ?>
					<div class="mws-form-row">
						<div class="mws-form-item">
							<?php echo form_input($login); ?>
							<span style="color: red;"><?php echo form_error($login['name']); ?><?php echo isset($errors[$login['name']])?$errors[$login['name']]:''; ?>
							</div>
						</div>
						<div class="mws-form-row">
							<div class="mws-form-item">
								<input type="password" name="password" class="mws-login-password required" placeholder="password">
								<span style="color: red;"><?php echo form_error($password['name']); ?><?php echo isset($errors[$password['name']])?$errors[$password['name']]:''; ?>
								</div>
							</div>

							<?php if ($show_captcha) {
								if ($use_recaptcha) { ?>
								<tr>
									<td colspan="2">
										<div id="recaptcha_image"></div>
									</td>
									<td>
										<a href="javascript:Recaptcha.reload()">Get another CAPTCHA</a>
										<div class="recaptcha_only_if_image"><a href="javascript:Recaptcha.switch_type('audio')">Get an audio CAPTCHA</a></div>
										<div class="recaptcha_only_if_audio"><a href="javascript:Recaptcha.switch_type('image')">Get an image CAPTCHA</a></div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="recaptcha_only_if_image">Enter the words above</div>
										<div class="recaptcha_only_if_audio">Enter the numbers you hear</div>
									</td>
									<td><input type="text" id="recaptcha_response_field" name="recaptcha_response_field" /></td>
									<td style="color: red;"><?php echo form_error('recaptcha_response_field'); ?></td>
									<?php echo $recaptcha_html; ?>
								</tr>
								<?php } else { ?>
								<tr>
									<td colspan="3">
										<p>Enter the code exactly as it appears:</p>
										<?php echo $captcha_html; ?>
									</td>
								</tr>
								<tr>
									<td><?php echo form_label('Confirmation Code', $captcha['id']); ?></td>
									<td><?php echo form_input($captcha); ?></td>
									<td style="color: red;"><?php echo form_error($captcha['name']); ?></td>
								</tr>
								<?php }
							} ?>

							<div id="mws-login-remember" class="mws-form-row mws-inset">
								<ul class="mws-form-list inline">
									<li>
										<?php echo form_checkbox($remember); ?>
										<?php echo form_label('Remember me', $remember['id']); ?>
										<?php echo anchor('/auth/forgot_password/', 'Forgot password'); ?>
					
									</li>
								</ul>
							</div>
							<div class="mws-form-row">
								<?php echo form_submit('submit', 'Let me in', 'class="btn btn-success mws-login-button"'); ?>
							</div>
							<?php echo form_close(); ?>
						</div>
					</div>
				</div>


