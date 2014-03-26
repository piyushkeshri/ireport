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
        <?php echo link_tag('application/views/login.css'); ?>
        <!--link href="<!?php echo base_url(); ?>application/views/login.css" rel="stylesheet" type="text/css"/-->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js" type="text/javascript"></script>
    </head>
    <body>
        <h1 align="center"> Ab tu karke dikha beta! </h1>
        <div class="container">
          <div class="row col-xs-12">
            <div class="main">
              <div class="row col-xs-12 col-sm-12 col-md-12 report">
                <a href="<?php echo site_url('ireport/view_create_form'); ?>" class="btn btn-lg btn-info btn-primary btn-block">Report</a>
              </div>
              <div class="row col-xs-12 col-sm-12 col-md-12 search">
                <a href="<?php echo site_url('ireport/view_search_form'); ?>" class="btn btn-lg btn-info btn-primary btn-block"><i class="fa fa-search "></i>Search</a>
              </div>
              <div class="row col-xs-12 col-sm-12 col-md-12 update">
                <a href="<?php echo site_url('ireport/view_update_form'); ?>" class="btn btn-lg btn-info btn-primary btn-block">Update</a>
              <br/>
              <br/>
              <br/>
              </div>
              <div class="row col-xs-12 col-sm-12 col-md-12 logout">
                <a href="<?php echo site_url('ireport/logout'); ?>" class="btn btn-lg btn-info btn-primary btn-block">Logout</a>
              </div>
            </div>
          </div>
        </div>
    </body>
</html>