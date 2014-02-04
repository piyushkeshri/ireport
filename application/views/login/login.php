<head> 
  <meta name=viewport content="user-scalable=no,width=device-width" />
  <link rel=stylesheet href=jquery.mobile/jquery.mobile.css />
  <script src=jquery.js></script>
  <script src=jquery.mobile/jquery.mobile.js></script>
</head> 

<body> 

<div data-role=page id=home>
  <div data-role=header>
    <h1>Home</h1>
  </div>

  <div data-role=content>
    <span> Latitude : </span> <span id=lat></span> <br />
    <span> Longitude : </span> <span id=lng></span> <br />
  </div>
</div>

<script>

navigator.geolocation.getCurrentPosition (function (pos)
{
  var lat = pos.coords.latitude;
  var lng = pos.coords.longitude;
  $("#lat").text (lat);
  $("#lng").text (lng);
});

</script>
<h1><?php echo lang('login_heading');?></h1>
<p><?php echo lang('login_subheading');?></p>

<div id="infoMessage"><?php echo $message;?></div>

<?php echo form_open("login/user_login");?>

  <p>
    <?php echo lang('login_identity_label', 'username');?>
    <?php echo form_input($username);?>
  </p>

  <p>
    <?php echo lang('login_password_label', 'password');?>
    <?php echo form_input($password);?>
  </p>

  <p>
    <?php echo lang('login_remember_label', 'remember');?>
    <?php echo form_checkbox('remember', '1', FALSE, 'id="remember"');?>
  </p>


  <p><?php echo form_submit('submit', lang('login_submit_btn'));?></p>

<?php echo form_close();?>

<p><a href="forgot_password"><?php echo lang('login_forgot_password');?></a></p>