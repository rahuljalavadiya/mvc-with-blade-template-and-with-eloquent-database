<?php
global $config;
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title><?php echo e($config->app_name()); ?> | Authentication</title>
  <meta name="description" content="app, web app, responsive, responsive layout, admin, admin panel, admin dashboard, flat, flat ui, ui kit, AngularJS, ui route, charts, widgets, components" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
  <link rel="stylesheet" href="<?php echo e($config->asset_url('backend/assets/animate.css/animate.css')); ?>" type="text/css" />
  <link rel="stylesheet" href="<?php echo e($config->asset_url('backend/assets/font-awesome/css/font-awesome.css')); ?>" type="text/css" />
  <link rel="stylesheet" href="<?php echo e($config->asset_url('backend/jquery/waves/dist/waves.css')); ?>" type="text/css" />
  <link rel="stylesheet" href="<?php echo e($config->asset_url('backend/styles/material-design-icons.css')); ?>" type="text/css" />

  <link rel="stylesheet" href="<?php echo e($config->asset_url('backend/jquery/bootstrap/dist/css/bootstrap.css')); ?>" type="text/css" />
  <link rel="stylesheet" href="<?php echo e($config->asset_url('backend/styles/font.css')); ?>" type="text/css" />
  <link rel="stylesheet" href="<?php echo e($config->asset_url('backend/styles/app.css')); ?>" type="text/css" />
<link rel="stylesheet" href="<?php echo e($config->asset_url('backend/styles/toastr.min.css')); ?>" type="text/css" />
</head>
<body>
<div class="app">
  <div class="overlay_box"></div>

  <div class="center-block w-xxl w-auto-xs p-v-md">
    <div class="navbar">
      <div class="navbar-brand m-t-lg text-center">
        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve" style="
                width: 24px; height: 24px;">
          <path d="M 50 0 L 100 14 L 92 80 Z" fill="rgba(139, 195, 74, 0.5)"></path>
          <path d="M 92 80 L 50 0 L 50 100 Z" fill="rgba(139, 195, 74, 0.8)"></path>
          <path d="M 8 80 L 50 0 L 50 100 Z" fill="#fff"></path>
          <path d="M 50 0 L 8 80 L 0 14 Z" fill="rgba(255, 255, 255, 0.6)"></path>
        </svg>
        <span class="m-l inline"><?php echo e($config->app_name()); ?></span>
      </div>
    </div>

    <div class="p-lg panel md-whiteframe-z1 text-color m">
      <div class="m-b text-sm">
        Sign in with your <?php echo e($config->app_name()); ?> Account
      </div>
      
      <form method="post" action="" data-url="<?php echo e($config->admin_url('login/dologin')); ?>" class="ajax_process_form" id="signin_form">
        <div class="md-form-group float-label">
          <input type="email" class="md-input required" name="email" required>
          <label>Email</label>
        </div>
        <div class="md-form-group float-label">
          <input type="password" class="md-input required" name="password" required>
          <label>Password</label>
        </div>      
        <div class="m-b-md">        
          <label class="md-check">
            <input type="checkbox"><i class="indigo"></i> Keep me signed in
          </label>
        </div>
        <button md-ink-ripple type="submit" class="md-btn md-raised pink btn-block p-h-md">Sign in</button>
      </form>
    </div>

    
  </div>



</div>

<script src="<?php echo e($config->asset_url('backend/jquery/jquery/dist/jquery.js')); ?>"></script>
<script src="<?php echo e($config->asset_url('backend/jquery/bootstrap/dist/js/bootstrap.js')); ?>"></script>
<script src="<?php echo e($config->asset_url('backend/jquery/waves/dist/waves.js')); ?>"></script>

<script src="<?php echo e($config->asset_url('backend/scripts/ui-load.js')); ?>"></script>
<script src="<?php echo e($config->asset_url('backend/scripts/ui-jp.config.js')); ?>"></script>
<script src="<?php echo e($config->asset_url('backend/scripts/ui-jp.js')); ?>"></script>
<script src="<?php echo e($config->asset_url('backend/scripts/ui-nav.js')); ?>"></script>
<script src="<?php echo e($config->asset_url('backend/scripts/ui-toggle.js')); ?>"></script>
<script src="<?php echo e($config->asset_url('backend/scripts/ui-form.js')); ?>"></script>
<script src="<?php echo e($config->asset_url('backend/scripts/ui-waves.js')); ?>"></script>
<script src="<?php echo e($config->asset_url('backend/scripts/ui-client.js')); ?>"></script>
<script src="<?php echo e($config->asset_url('backend/scripts/toastr.min.js')); ?>"></script>
<script src="<?php echo e($config->asset_url('backend/scripts/custom.js')); ?>"></script>
</body>
</html>
