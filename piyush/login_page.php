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
        <link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jquerymobile/1.4.2/jquery.mobile.min.css" />
        <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<!--        <script src="//ajax.googleapis.com/ajax/libs/jquerymobile/1.4.2/jquery.mobile.min.js"></script>
-->        <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js" type="text/javascript"></script>
        
        <link href="login.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>

<div class="container">
  <div class="row col-xs-12">


    <div class="main">

      <ul class="nav nav-tabs">
        <li class="active col-xs-6"><a href="#login" data-toggle="tab">Log In</a></li>
        <li class="col-xs-6"><a href="#signup" data-toggle="tab">Sign Up</a></li>
      </ul>

      <div id="myTabContent" class="tab-content">
        <div class="tab-pane active in row" id="login">
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

      <form role="form" id="login_form" action="post">
        <div class="form-group">
          <label for="inputUsernameEmail" class="sr-only">Username or email</label>
          <input type="text" class="form-control input-lg" id="inputUsernameEmail" placeholder="Enter Email Address ...">
        </div>
        <div class="form-group">
          <label for="inputPassword" class="sr-only">Password</label>
          <input type="password" class="form-control input-lg" id="inputPassword" placeholder="Enter Password ...">
        </div>
        <div class="row forget_remember_block">
          <div class="col-xs-6 checkbox">
            <label>
              <input type="checkbox">
              Remember me </label>
          </div>
          <div class="col-xs-6 forget_password pull-right">
            <a class="" href="#">Forgot password?</a>
          </div>
        </div>
        <button type="submit" class="btn btn btn-block btn-lg btn-primary">
          Log In
        </button>
      </form>
    
    </div>

    <div class="tab-pane fade row" id="signup">
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
      
      <form id="signup_account" action="post">
        <div class="form-group">
          <label for="inputUsernameEmail" class="sr-only">Username or email</label>
          <input type="text" class="form-control input-lg" id="inputUsernameEmail" placeholder="Enter Email Address ...">
        </div>
        <div class="form-group">
          <label for="inputPassword" class="sr-only">Password</label>
          <input type="password" class="form-control input-lg" id="inputPassword" placeholder="Enter Password ...">
        </div>
        <div class="form-group">
          <label for="inputConfirmPassword" class="sr-only">Confirm Password</label>
          <input type="password" class="form-control input-lg" id="inputConfirmPassword" placeholder="Confirm Password ...">
        </div>
<!--        <label>Email</label>
        <input type="text" value="" class="input-xlarge form-control">
        <label>Address</label>
        <textarea value="Smith" rows="3" class="input-xlarge"></textarea>-->

        <div>
          <br>
          <button class="btn btn-block btn-lg btn-primary">Create Account</button>
        </div>
      </form>
    </div>

    </div> 
  </div>

  </div>
</div>

<div class="container" style="margin-top:10px;">
    <div class="row col-xs-12 form-group" style="max-width: 320px;margin: 0 auto;">
    <div class="col-xs-12">
        <div class="panel panel-default">
            <div class="panel-image hide-panel-body">
                <img src="http://666a658c624a3c03a6b2-25cda059d975d2f318c03e90bcf17c40.r92.cf1.rackcdn.com/unsplash_52cf9489095e8_1.JPG" class="panel-image-preview" />
            </div>
            <div class="panel-body">
                <h4>Title of Image</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed in lobortis nisl, vitae iaculis sapien. Phasellus ultrices gravida massa luctus ornare. Suspendisse blandit quam elit, eu imperdiet neque semper et.</p>
            </div>
            <div class="panel-footer text-center">
                <a href="#download"><span class="glyphicon glyphicon-download"></span></a>
                <!--<a href="#facebook"><span class="fa fa-facebook"></span></a>
                <a href="#twitter"><span class="fa fa-twitter"></span></a>-->
                <a href="#share"><span class="glyphicon glyphicon-share-alt"></span></a>
            </div>
        </div>
    </div>
    </div>
</div>

<div class="container">
  <div class="row col-xs-12">
    <div class="main">
      <div class="row col-xs-12 col-sm-12 col-md-12 report">
        <a href="#" class="btn btn-lg btn-info btn-primary btn-block">Report</a>
      </div>
      <div class="row col-xs-12 col-sm-12 col-md-12 search">
        <a href="#" class="btn btn-lg btn-info btn-primary btn-block"><i class="fa fa-search "></i>Search</a>
      </div>
      <div class="row col-xs-12 col-sm-12 col-md-12 vote">
        <a href="#" class="btn btn-lg btn-info btn-primary btn-block">Vote</a>
      </div>
    </div>
  </div>
</div>

<div class="container">
    <h3>jQuery Checkbox Buttons<br />
        <small>Buttons that change the state of their own hidden checkboxes, and vice-versa!</small>
    </h3>
    <br />

    <span class="button-checkbox">
        <button type="button" class="btn" data-color="primary">Unchecked</button>
        <input type="checkbox" class="hidden" />
    </span>
    <span class="button-checkbox">
        <button type="button" class="btn" data-color="primary">Checked</button>
        <input type="checkbox" class="hidden" checked />
    </span>
    
    <hr />
    
    <!-- All colors -->
    <span class="button-checkbox">
        <button type="button" class="btn" data-color="default">Default</button>
        <input type="checkbox" class="hidden" checked />
    </span>
    <span class="button-checkbox">
        <button type="button" class="btn" data-color="primary">Primary</button>
        <input type="checkbox" class="hidden" checked />
    </span>
    <span class="button-checkbox">
        <button type="button" class="btn" data-color="success">Success</button>
        <input type="checkbox" class="hidden" checked />
    </span>
    <span class="button-checkbox">
        <button type="button" class="btn" data-color="info">Info</button>
        <input type="checkbox" class="hidden" checked />
    </span>
    <span class="button-checkbox">
        <button type="button" class="btn" data-color="warning">Warning</button>
        <input type="checkbox" class="hidden" checked />
    </span>
    <span class="button-checkbox">
        <button type="button" class="btn" data-color="danger">Danger</button>
        <input type="checkbox" class="hidden" checked />
    </span>
    <span class="button-checkbox">
        <button type="button" class="btn" data-color="link">Link</button>
        <input type="checkbox" class="hidden" checked />
    </span>
    
    <hr />
    
    <!-- Icons -->
    <span class="button-checkbox">
        <button type="button" class="btn" data-color="primary"><i class="glyphicon glyphicon-envelope"></i></button>
        <input type="checkbox" class="hidden" checked />
    </span>
    <span class="button-checkbox">
        <button type="button" class="btn" data-color="primary"><i class="glyphicon glyphicon-phone"></i></button>
        <input type="checkbox" class="hidden" />
    </span>
</div>

<!-- jQuery Mobile Style -->
<!--
<div data-role="fieldcontain">
    <fieldset data-role="controlgroup">
      <legend>Agree to the terms:</legend>
      <input type="checkbox" name="checkbox-1" id="checkbox-1" class="custom" />
      <label for="checkbox-1">I agree</label>
    </fieldset>
</div>

<fieldset data-role="controlgroup">
	<legend>Choose a pet:</legend>
     	<input type="radio" name="radio-choice" id="radio-choice-1" value="choice-1" checked="checked" />
     	<label for="radio-choice-1">Cat</label>

     	<input type="radio" name="radio-choice" id="radio-choice-2" value="choice-2"  />
     	<label for="radio-choice-2">Dog</label>

     	<input type="radio" name="radio-choice" id="radio-choice-3" value="choice-3"  />
     	<label for="radio-choice-3">Hamster</label>

     	<input type="radio" name="radio-choice" id="radio-choice-4" value="choice-4"  />
     	<label for="radio-choice-4">Lizard</label>
</fieldset>
-->
<div class="container">
  
  <div class="row col-xs-12 button-checkbox">
      <button type="button" class="btn btn-lg btn-block" data-color="primary"><span class="button_text">Electricity</span><span class="button_img"><i class="fa fa-bolt"></i></span></button>
      <input type="checkbox" class="hidden" />
  </div>
  
  <div class="row col-xs-12 button-checkbox">
      <button type="button" class="btn btn-lg btn-block" data-color="primary">Water / Sewage</button>
      <input type="checkbox" class="hidden" />
  </div>

</div>
<br/><br/>
<div class="container">
  
  <div class="row col-xs-12 button-radio">
      <button type="button" class="btn btn-lg btn-block" data-color="primary">
        <label>
          <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" class="">
          <span class="button_text">Electricity</span>
          <span class="button_img"><i class="fa fa-bolt"></i></span>
        </label>
      </button>
  </div>
  
  <div class="row col-xs-12 button-radio">
      <button type="button" class="btn btn-lg btn-block" data-color="primary">
        <label>
          <input type="radio" name="optionsRadios" id="optionsRadios2" class="" value="option2">
          <span class="button_text">Water</span>
          <span class="button_img"><i class="fa fa-bolt"></i></span>
        </label>
      </button>
  </div>
  
  <div class="row col-xs-12 button-radio">
      <button type="button" class="btn btn-lg btn-block" data-color="primary">
        <label>
          <input type="radio" name="optionsRadios" id="optionsRadios3" class="" value="option3">
          <span class="button_text">Sewage</span>
          <span class="button_img"><i class="fa fa-bolt"></i></span>
        </label>
      </button>
  </div>

</div>
<br/><br/>

<script type="text/javascript">
  $(function () {
    $('.button-checkbox').each(function () {
        // Settings
        var $widget = $(this),
            $button = $widget.find('button'),
            $checkbox = $widget.find('input:checkbox'),
            color = $button.data('color'),
            settings = {
                on: {
                    icon: 'glyphicon glyphicon-check'
                },
                off: {
                    icon: 'glyphicon glyphicon-unchecked'
                }
            };

        // Event Handlers
        $button.on('click', function () {
            $checkbox.prop('checked', !$checkbox.is(':checked'));
            $checkbox.triggerHandler('change');
            updateDisplay();
        });
        $checkbox.on('change', function () {
            updateDisplay();
        });

        // Actions
        function updateDisplay() {
            var isChecked = $checkbox.is(':checked');

            // Set the button's state
            $button.data('state', (isChecked) ? "on" : "off");

            // Set the button's icon
            $button.find('.state-icon')
                .removeClass()
                .addClass('state-icon ' + settings[$button.data('state')].icon);

            // Update the button's color
            if (isChecked) {
                $button
                    .removeClass('btn-default')
                    .addClass('btn-' + color + ' active');
            }
            else {
                $button
                    .removeClass('btn-' + color + ' active')
                    .addClass('btn-default');
            }
        }

        // Initialization
        function init() {

            updateDisplay();

            // Inject the icon if applicable
            if ($button.find('.state-icon').length == 0) {
                $button.prepend('<i class="state-icon ' + settings[$button.data('state')].icon + '"></i>');
            }
        }
        init();
    });
});
</script>

<script type="text/javascript">
  var prev_data;
  $(function () {
    $('input:radio').change(function () {
      var name = $(this).attr('name');
      if (prev_data) {
        //uncheck();
        var data = $('input:radio[name='+name+'][value='+prev_data+']');
        $(data).parent().closest('label').removeClass("btn-primary");
      }
      var data = $('input:radio[name='+name+']:checked');
      var div = $(data).parent().closest('label').addClass("btn-primary");
      prev_data = data.val();
    });
  });
</script>

    </body>
</html>