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
        <script>
            window.fbAsyncInit = function() {
            FB.init({
              appId      : '693361157352079',
              status     : true, // check login status
              cookie     : true, // enable cookies to allow the server to access the session
              xfbml      : true,  // parse XFBML
              oath       : true
            });
          
          
            
          
            // Here we subscribe to the auth.authResponseChange JavaScript event. This event is fired
            // for any authentication related change, such as login, logout or session refresh. This means that
            // whenever someone who was previously logged out tries to log in again, the correct case below 
            // will be handled. 
            FB.Event.subscribe('auth.authResponseChange', function(response) {
              // Here we specify what we do with the response anytime this event occurs. 
              if (response.status === 'connected') {
                // The response object is returned with a status field that lets the app know the current
                // login status of the person. In this case, we're handling the situation where they 
                // have logged in to the app.
                testAPI();
              } else if (response.status === 'not_authorized') {
          
          
                // In this case, the person is logged into Facebook, but not into the app, so we call
                // FB.login() to prompt them to do so. 
                // In real-life usage, you wouldn't want to immediately prompt someone to login 
                // like this, for two reasons:
                // (1) JavaScript created popup windows are blocked by most browsers unless they 
                // result from direct interaction from people using the app (such as a mouse click)
                // (2) it is a bad experience to be continually prompted to login upon page load.
           FB.login(function(response) {
             if (response.authResponse) {
               console.log('Welcome!  Fetching opt1.... ');
               FB.api('/me', function(response) {
                 console.log('Good to see you :) ' + response.name + '.');
               });
             } else {
               console.log('User cancelled login or did not fully authorize.');
             }
           });
          
          
               // FB.login({scope: 'email,user_likes'});
              } else {
                // In this case, the person is not logged into Facebook, so we call the login() 
                // function to prompt them to do so. Note that at this stage there is no indication
                // of whether they are logged into the app. If they aren't then they'll see the Login
                // dialog right after they log in to Facebook. 
                // The same caveats as above apply to the FB.login() call here.
          
                 FB.login(function(response) {
             if (response.authResponse) {
               console.log('Welcome!  opt2... ');
               FB.api('/me', function(response) {
                 console.log('AUthorized, Good to see you opt2, ' + response.name + '. - \n');
               });
             } else {
               console.log('User cancelled login or did not fully authorize.');
             }
           });
                //FB.login({scope: 'email,user_likes'});
              }
            });
            };
          
            // Load the SDK asynchronously
            (function(d){
             var js, id = 'facebook-jssdk', ref = d.getElementsByTagName('script')[0];
             if (d.getElementById(id)) {return;}
             js = d.createElement('script'); js.id = id; js.async = true;
             js.src = "//connect.facebook.net/en_US/all.js";
             ref.parentNode.insertBefore(js, ref);
            }(document));
          
            // Here we run a very simple test of the Graph API after login is successful. 
            // This testAPI() function is only called in those cases. 
            function testAPI() {
              //console.log('Welcome!  Fetching your information.... ');
              FB.api('/me', function(response) {
          
                document.getElementById("FBemail").value = response.email;
                console.log(response);
                console.log('OK to see you,' + response.name + " _ "+response.email +'.');
              });
            }
          
            function FBlogin(){
            FB.login(function(response) {
             if (response.authResponse) {
               console.log('Welcome!  Fetching opt1.... ');
               FB.api('/me', function(response) {
                 console.log('Good to see you :) ' + response.name + '.');
               });
             } else {
               console.log('User cancelled login or did not fully authorize.');
             }
           },{scope:'email,user_likes'})};

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

      <div id="infoMessage"><?php //echo $message; ?></div>
      
      <div id="myTabContent" class="tab-content">
        <div class="tab-pane <?php echo ($activeTab == "login") ? "active in" : "fade"; ?> row" id="login">
          <h3>Please Log In</a></h3>
          <div class="row">
            <div class="col-xs-6 col-sm-6 col-md-6">
              <a href="#" onclick="FBlogin()" class="btn btn-lg btn-primary btn-block">Facebook</a>
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
          <a href="#" onclick="FBlogin()" class="btn btn-lg btn-primary btn-block">Facebook</a>
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

<div class="container position-center">
  <div class="row">
    <form class="form-signin mg-btm">
      <h3 class="heading-desc">
        <div id="fb-root"></div>
        
<fb:login-button show-faces="true" width="200" max-rows="1"></fb:login-button>
    <button type="button" class="close pull-right" aria-hidden="true">×</button>
    Login to iReport</h3>
    <div class="social-box">
      <div class="row mg-btm">
             <div class="col-md-12">
                <a href="#" onclick="FBlogin()" class="btn btn-primary btn-block">
                  <i class="icon-facebook"></i>   Login with Facebook
                </a>
      </div>
      </div>
      <div class="row">
      <div class="col-md-12">
                <a href="#" class="btn btn-info btn-block" >
                  <i class="icon-twitter"></i>   Login with Google
                </a>
            </div>
          </div>
    </div>
    <div class="main">  
        
    <input type="text" class="form-control" placeholder="Email" autofocus>
        <input type="password" class="form-control" placeholder="Password">
   <input id="FBemail" type="text" class="form-control" placeholder="FB Email" autofocus>
     
        <!--Are you a business? <a href=""> Get started here</a> -->
    <span class="clearfix"></span>  
        </div>
    <div class="login-footer">
    <div class="row">
                        <div class="col-xs-6 col-md-6">
                            <div class="left-section">
                <a href="">Forgot your password?</a>
                <a href="">Sign up now</a>
              </div>
                        </div>
                        <div class="col-xs-6 col-md-6 pull-right">
                            <button type="submit" class="btn btn-large btn-danger pull-right">Login</button>
                        </div>
                    </div>
    
    </div>
      </form>
  </div>
</div>

    </body>
</html>