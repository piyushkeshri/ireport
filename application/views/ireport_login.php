<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="{$lang_iso}">
    <head>
        <title>{$meta_title|escape:'htmlall':'UTF-8'}</title>
        <meta name="description" content="{$meta_description|escape:html:'UTF-8'}" />
        <meta name="keywords" content="{$meta_keywords|escape:html:'UTF-8'}" />

        <meta http-equiv="Content-Type" content="application/xhtml+xml; charset=utf-8" />
        <meta name="generator" content="PrestaShop" />
        <meta name="robots" content="{if isset($nobots)}no{/if}index,follow" />
        <link rel="icon" type="image/vnd.microsoft.icon" href="{$img_ps_dir}favicon.ico?{$img_update_time}" />
        <link rel="shortcut icon" type="image/x-icon" href="{$img_ps_dir}favicon.ico?{$img_update_time}" />
        
        <link href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url('assets/css/login.css') ?>" rel="stylesheet">
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js" type="text/javascript"></script>
        <script type="text/javascript">
            window.onload = function () {
                document.getElementById("inputPassword").onchange = validatePassword;
                document.getElementById("inputConfirmPassword").onchange = validatePassword;
            }
            function validatePassword(){
            var pass2=document.getElementById("inputConfirmPassword").value;
            var pass1=document.getElementById("inputPassword").value;
            if(pass1!=pass2)
                document.getElementById("inputConfirmPassword").setCustomValidity("Passwords Don't Match");
            else
                document.getElementById("inputConfirmPassword").setCustomValidity('');  
            //empty string means no validation error
            }
        </script>
        <script>
            // Javascript to enable link to tab
            var hash = document.location.hash;
            var prefix = "tab_";
            if (hash) {
                $('.nav-tabs a[href='+hash.replace(prefix,"")+']').tab('show');
            } 
            
            // Change hash for page-reload
            $('.nav-tabs a').on('shown.bs.tab', function (e) {
                window.location.hash = e.target.hash.replace("#", "#" + prefix);
            });
        </script>
    </head>
    <body>

<div class="container">
  <div class="row col-xs-12">


    <div class="main">

      <ul class="nav nav-tabs">
        <li class="<?php echo ($activeTab == "login") ? "active" : ""; ?> col-xs-6"><a href="#login" data-toggle="tab">Log In</a></li>
        <li class="<?php echo ($activeTab == "signup") ? "active" : ""; ?> col-xs-6"><a href="#signup" data-toggle="tab">Sign Up</a></li>
      </ul>

      <div id="infoMessage"><?php echo $message; ?></div>
      
      <div id="myTabContent" class="tab-content">
        <div class="tab-pane <?php echo ($activeTab == "login") ? "active in" : "fade"; ?> row" id="login">
          <h3>Please Log In</a></h3>
          <div class="row">
            <div class="col-xs-6 col-sm-6 col-md-6">
              <a href="#" class="btn btn-lg btn-primary btn-block">Facebook</a>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6">
              <a href="#" class="btn btn-lg btn-info btn-block">Google</a>
            </div>
          </div>
      <div class="login-or">
        <hr class="hr-or">
        <span class="span-or">or</span>
      </div>

      <?php  echo form_open('ireport/user_login', array('role'=>'form')); ?>
      <!--form role="form" id="login_form" action="http://localhost/ireport/index.php/ireport/user_login"-->
        <div class="form-group <?php if(form_error('inputUsernameEmail') || $this->session->flashdata('message')) { echo "has-error"; } ?>">
          <label for="inputUsernameEmail" class="sr-only">Username or email</label>
          <input type="email" class="form-control input-lg" name="inputUsernameEmail" required value="<?php echo set_value('inputUsernameEmail'); ?>" placeholder="Enter Email Address ...">
            <p class="text-danger"><?php echo form_error('inputUsernameEmail'); ?></p>
        </div>
        <div class="form-group <?php if(form_error('inputLoginPassword') || $this->session->flashdata('message')) { echo "has-error"; } ?>">
          <label for="inputLoginPassword" class="sr-only">Password</label>
          <input type="password" class="form-control input-lg" name="inputLoginPassword" required pattern=".{6,30}" placeholder="Enter Password ...">
            <p class="text-danger"><?php echo form_error('inputLoginPassword'); ?></p>
        </div>
        <div class="error flash_error"><?php echo $this->session->flashdata('message'); ?></div>
        <div class="row forget_remember_block">
          <div class="col-xs-6 checkbox">
            <label>
              <input type="checkbox" name="remember">
              Remember me </label>
          </div>
          <div class="col-xs-6 forget_password pull-right">
            <a class="" href="#">Forgot password?</a>
          </div>
        </div>
        <button type="submit" class="btn btn btn-block btn-lg btn-primary">
          Log In
        </button>
      <!--/form-->
      <?php  echo form_close(); ?>
    </div>

    <div class="tab-pane <?php echo ($activeTab == "signup") ? "active in" : "fade"; ?> row" id="signup">
      <h3>Create Account</a></h3>
      <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6">
          <a href="#" class="btn btn-lg btn-primary btn-block">Facebook</a>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6">
          <a href="#" class="btn btn-lg btn-info btn-block">Google</a>
        </div>
      </div>
      <div class="login-or">
        <hr class="hr-or">
        <span class="span-or">or</span>
      </div>
      
      <?php  echo form_open('ireport/register', array('role'=>'form','id'=>'signupform')); ?>
      <!--form id="signup_account" method="post" action="http://localhost/ireport/index.php/ireport/register"-->
        <div class="form-group <?php if(form_error('first_name')) { echo "has-error"; } ?>">
          <label for="first_name" class="sr-only">First Name</label>
          <input type="text" class="form-control input-lg" required pattern=".{1,20}" name="first_name" value="<?php echo set_value('first_name'); ?>" placeholder="Enter First Name ...">
            <p class="text-danger"><?php echo form_error('first_name'); ?></p>
        </div>
        <div class="form-group <?php if(form_error('last_name')) { echo "has-error"; } ?>">
          <label for="last_name" class="sr-only">Last Name</label>
          <input type="text" class="form-control input-lg" name="last_name" pattern=".{,20}" value="<?php echo set_value('last_name'); ?>" placeholder="Enter Last Name ...">
            <p class="text-danger"><?php echo form_error('last_name'); ?></p>
        </div>
        <div class="form-group <?php if(form_error('inputEmail')) { echo "has-error"; } ?>">
          <label for="inputEmail" class="sr-only">Email</label>
          <input type="email" class="form-control input-lg" name="inputEmail" required value="<?php echo set_value('inputEmail'); ?>" placeholder="Enter Email Address ...">
            <p class="text-danger"><?php echo form_error('inputEmail'); ?></p>
        </div>
        <div class="form-group <?php if(form_error('inputPassword')) { echo "has-error"; } ?>">
          <label for="inputPassword" class="sr-only">Password</label>
          <input type="password" class="form-control input-lg" name="inputPassword" id="inputPassword" required pattern=".{6,30}" placeholder="Enter Password ...">
            <p class="text-danger"><?php echo form_error('inputPassword'); ?></p>
        </div>
        <div class="form-group <?php if(form_error('inputConfirmPassword')) { echo "has-error"; } ?>">
          <label for="inputConfirmPassword" class="sr-only">Confirm Password</label>
          <input type="password" class="form-control input-lg" name="inputConfirmPassword" id="inputConfirmPassword" required pattern=".{6,30}" placeholder="Confirm Password ...">
          <p class="text-danger"><?php echo form_error('inputConfirmPassword'); ?></p>
        </div>
<!--        <label>Email</label>
        <input type="text" value="" class="input-xlarge form-control">
        <label>Address</label>
        <textarea value="Smith" rows="3" class="input-xlarge"></textarea>-->

        <div>
          <br>
          <button type="submit" class="btn btn-block btn-lg btn-primary">Create Account</button>
        </div>
      <!--/form-->
      <?php  echo form_close(); ?>
    </div>

    </div> 
  </div>

  </div>
</div>


    </body>
</html>