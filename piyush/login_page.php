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
        <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="login.css" rel="stylesheet" type="text/css"/>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js" type="text/javascript"></script>
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
    </body>
</html>