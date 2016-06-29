<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title>{{ HTML_Helpers::app_name() }} | @yield('page_title') </title>
  <meta name="description" content="" />
  <meta name="csrf-token" content="{{ csrf_token() }}" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
  

  <link rel="stylesheet" href="{{ HTML_Helpers::asset_url('backend/assets/animate.css/animate.css') }}" type="text/css" />
  <link rel="stylesheet" href="{{ HTML_Helpers::asset_url('backend/assets/font-awesome/css/font-awesome.css') }}" type="text/css" />
  <link rel="stylesheet" href="{{ HTML_Helpers::asset_url('backend/jquery/waves/dist/waves.css') }}" type="text/css" />
  <link rel="stylesheet" href="{{ HTML_Helpers::asset_url('backend/styles/material-design-icons.css') }}" type="text/css" />

  <link rel="stylesheet" href="{{ HTML_Helpers::asset_url('backend/jquery/bootstrap/dist/css/bootstrap.css') }}" type="text/css" />
  <link rel="stylesheet" href="{{ HTML_Helpers::asset_url('backend/styles/font.css') }}" type="text/css" />
  <link rel="stylesheet" href="{{ HTML_Helpers::asset_url('backend/styles/app.css') }}" type="text/css" />
<link rel="stylesheet" href="{{ HTML_Helpers::asset_url('backend/styles/toastr.min.css') }}" type="text/css" />
 <link rel="stylesheet" href="{{ HTML_Helpers::asset_url('backend/styles/custom.css') }}" type="text/css" />
 @yield('after_header')
<script type="text/javascript"> var admin_url = '{{ url(HTML_Helpers::admin_prefix()) }}/'</script>
</head>
<body>
<div class="app">
