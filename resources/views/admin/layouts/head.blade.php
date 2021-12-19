<!DOCTYPE html>
<html dir="" lang="{{ config('app.locale') }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Admin</title>
  <!-- Tell the browser to be responsive to screen width -->

  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="{{ URL::asset('/admin_style/dist/css/w3.css')}}">

  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="{{ URL::asset('/admin_style/bootstrap/css/bootstrap.min.css')}}">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ URL::asset('/admin_style/dist/css/AdminLTE.min.css')}}">

  <!-- AdminLTE Skins. Choose a skin from the css/skins
   folder instead of downloading all of them to reduce the load. -->
   <link rel="stylesheet" href="{{ URL::asset('/admin_style/dist/css/skins/_all-skins.min.css')}}">

   <!-- iCheck -->
   <link rel="stylesheet" href="{{ URL::asset('/admin_style/plugins/iCheck/flat/blue.css')}}">
   <!-- Morris chart -->
 
   <!-- jvectormap -->
   <link rel="stylesheet" href="{{ URL::asset('/admin_style/plugins/jvectormap/jquery-jvectormap-1.2.2.css')}}">

   <!-- Date Picker -->
   <link rel="stylesheet" href="{{ URL::asset('/admin_style/plugins/datepicker/datepicker3.css')}}">

   <!-- Daterange picker -->
   <link rel="stylesheet" href="{{ URL::asset('/admin_style/plugins/daterangepicker/daterangepicker.css')}}">

   <!-- bootstrap wysihtml5 - text editor -->
   <link rel="stylesheet" href="{{ URL::asset('/admin_style/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}">


   <link rel="stylesheet" href="{{ URL::asset('/admin_style/plugins/tagsinput/jquery.tagsinput.min.css')}}">


   <link rel="stylesheet" href="{{ URL::asset('/cus/alert/sweetalert.css')}}">


   <link rel="stylesheet" href="{{ URL::asset('/admin_style/plugins/checkbox/css/vswitch.min.css')}}">

   <link rel="stylesheet" href="{{ URL::asset('/admin_style/plugins/checkbox/css/vswitch-blue.min.css')}}">



<link rel="stylesheet" href="{{ URL::asset('/admin_style/plugins/datatables/dataTables.bootstrap.css')}}">
<!-- Select2 -->
<link rel="stylesheet" href="{{ URL::asset('/admin_style/plugins/select2/select2.min.css')}}">
<!-- CK Editor -->

@stack('scripts')

<style>
  .purchase
{
    position: relative;
    min-height: 680px;
    padding: 15px;
    font-family: Times New Roman;
    font-size: 20px 
}
.purchase header
{
    padding: 0px 0px 0px 0px;
    margin-bottom: 0px;
    border-bottom: 1px solid #3989c6;
}
.purchase header img
{
    max-width: 200px;
    margin-top: 0;
    margin-bottom: 0;
}
.purchase .company-details
{
    text-align: right;
    margin-top: 0;
    margin-bottom: 0;
}
.purchase main
{
    padding: 0px 0px;
    margin-bottom: 0px;
}
.purchase .to-details
{
    text-align: left;
}
.purchase .to-name
{
    font-weight: bold;
}
.purchase .to-name .to-address .to-city
{
    margin-top: 0;
    margin-bottom: 0;
}
.purchase .purchase-info
{
    text-align: right;
}
.purchase-info .info-code
{
    font-weight: bold;
}
.purchase-info .info-code .info-date
{
    margin-top: 0;
    margin-bottom: 0;
}
.table thead th
{
    margin: 0 !important;
    padding-top: 0 !important;
    padding-bottom: 0 !important;
   
}
.table td
{
    margin: 0 !important;
    padding-top: 0 !important;
    padding-bottom: 0 !important;
    border: none;
}
.table .blank-row
{
    height: 25px !important;
    border: none;
}
.table tbody
{
    min-height: 1000px !important;
}
</style>
<style>
    .chat {
      list-style: none;
      margin: 0;
      padding: 0;
    }
  
    .chat li {
      margin-bottom: 10px;
      padding-bottom: 5px;
      border-bottom: 1px dotted #B3A9A9;
    }
  
    .chat li .chat-body p {
      margin: 0;
      color: #777777;
    }
  
    .panel-body {
      overflow-y: scroll;
      height: 350px;
    }
  
    ::-webkit-scrollbar-track {
      -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
      background-color: #F5F5F5;
    }
  
    ::-webkit-scrollbar {
      width: 12px;
      background-color: #F5F5F5;
    }
  
    ::-webkit-scrollbar-thumb {
      -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,.3);
      background-color: #555;
    }

      #chat_area {
        position: relative;
         height:100%;
         padding-left: 80px;
         padding-right: 80px;
         
          }
        #send_area
        {
            position: absolute;
            width: 100%;
            padding: 31px;
            background: #fff;
        }
        .msg{max-width: 100%;}
        .msg-user {float: left;}
        .msg-admin {float: right;}
        .msg .alert {margin: 0}
        .msg-user .msg-details {float: left;}
        .msg-admin .msg-details {float: right;}
  </style>
@yield('style')

</head>