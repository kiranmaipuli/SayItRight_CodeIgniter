<!DOCTYPE html>
<html lang="en">
<head>

<link rel="stylesheet" href="<?php echo base_url('CSS/SayItRight.css'); ?>">
	
<title>Event Home</title>
</head>
<body>

	<div class="wrapper">
		<div class="start">
				<img src="<?php echo base_url();?>CSS\images\logo.jpg" height="50" width="50">
				<div class="onlyforli">
				<li><a id="active" href="<?php echo site_url('Eve_home_control/event_loading'); ?>">HOME</a></li>
				<li><a href="<?php echo site_url('Conference_admin_control/conference_admin_calling'); ?>">CONFERENCES</a></li>
				<li><a href="<?php echo site_url('Event_admin_control/event_admin_calling'); ?>">EVENTS</a></li>
				<li><a href="<?php echo site_url('Settings_control/settings_loading'); ?>">SETTINGS</a></li>
				</div>
		</div>

<?php

echo form_open('Logout_control/logout_loading');

echo form_submit(['type' => 'submit', 'name' => 'logout', 'value' => 'logout']);

echo form_close();

?>

<?php

	echo $this->session->userdata('email_id');

?>

<div class="usercontainer1">
	<div class="userinnercontainer1">
		<div class="rows">
			<div class="row1">
				<div class="firstrow1 borderGrey">
					<div class="firstrow1a">
							

							<div class="innericon">
								<p id="number">26</p>
								<p id="number1">Events and conferences</p>
							</div>

					</div>
					
					<div class="downtext">
						Total Made
					</div>
				</div>
				<div class="firstrow2 borderGrey">
					<div class="firstrow1b">
							
							<div class="innericon">
								<p id="number">20</p>
								<p id="number1">No of conferences</p>
							</div>

					</div>
					
					<div class="downtext">
						Conferences
					</div>
				</div>

				<div class="firstrow3 borderGrey">
					
					<div class="firstrow1c">
							
							<div class="innericon">
								<p id="number">30</p>
								<p id="number1">No of events</p>
							</div>

					</div>
					<div class="downtext">
						Events
					</div>
				</div>
					
				</div>
			</div>
		</div>

		</div>


		<?php include APPPATH.'views\footer.php'; ?>
	</div>
</body>
</html>
