<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge">

      <title>Khadi Gram Udyog</title>

     <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
      <link rel="shortcut icon" href="<?php echo url('frontend/kscl/assets/img/favicon.ico'); ?>" />
     
      <link rel="stylesheet" href="<?php echo url('frontend/kscl/assets/bootstrap/css/bootstrap.min.css?ver=3.3'); ?>">
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <!-- <link type="text/css" rel="stylesheet" href="<?php echo url('css/materialize.min.css?ver=3.3'); ?>"  media="screen,projection"/> -->
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">


      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="<?php echo url('css/style.css?ver='.rand()); ?>">
    
      <link rel="stylesheet" href="<?php echo url('css/media.css?ver=3.3'); ?>">
      <link rel="stylesheet" href="<?php echo url('css/jquery.sliderTabs.min.css'); ?>">
      <link class="" href="<?php echo url('css/jquery.dataTables.min.css'); ?>" rel="stylesheet" type="text/css"/>
      <link rel="stylesheet" href="<?php echo url('css/tablesaw.css'); ?>">

      <link rel="stylesheet" href="<?php echo url('css/tripplaner.css'); ?>">

      <script src="<?php echo url('js/jQuery-2.1.4.min.js'); ?>"></script>
      <script src="<?php echo url('ckeditor/ckeditor.js'); ?>"></script>
      <script type="text/javascript" src="<?php echo url('js/jquery.validate.min.js'); ?>"> 
      </script>



        <script src="https://unpkg.com/gijgo@1.9.11/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.11/css/gijgo.min.css" rel="stylesheet" type="text/css" />
   </head>
   <body class="hold-transition skin-blue sidebar-mini">
      <div class="content_container">
      <!--Header Start Here-->
      <header class="header-wrapper">
         <a href="<?php echo url('admin-dashboard') ?>" class="logo"> <span class="logo-mini">
         <img src="<?php echo url('frontend/images/profile.jpg'); ?>" style="height:40px; margin-left:5px; margin-top:10px;" alt=""/></span> <span class="logo-lg">

         <img src="<?php echo url('frontend/images/logo.png'); ?>" alt=""/></span> </a>


         <nav class="navbar navbar-static-top" role="navigation">
            <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button"> <span class="sr-only">Toggle navigation</span> </a>
            <div class="navbar-custom-menu">
               <ul class="nav navbar-nav mrg-tb10">
                  <li class="dropdown user user-menu">
                     <a href="#" class="dropdown-toggle pdn-tb10" data-toggle="dropdown">
                        <span class="user_txt left">
                        <?php echo Session::get('first_name') . ' ' . Session::get('last_name'); ?>
                        </span><i class="material-icons left col_444 down-arrow" style="line-height:20px !important; font-size:18px; margin-top:15px;">expand_more</i>
                        <?php
                           if (!empty($userPhoto['photo'])) {
                            $profile_image = url('photo/' . $userPhoto['photo']);
                           
                           } else {
                            $profile_image = url('images/profile.jpg');
                           }
                           
                           ?>
                        <img width='200' src="<?php echo $profile_image; ?>" class="user-image hidden-xs" alt="User Image" style="margin-right: 2px;">
                        <div class="clearfix"></div>
                     </a>
                     <ul class="dropdown-menu">
                        <li class="user-footer">
                           <div class="pull-left"> <a href="<?php echo url('change-password') ?>" class="waves-effect waves-light btn btn_default">Change Password</a> </div>
                           <div class="pull-right"> <a href="<?php echo url('logout') ?>" class="waves-effect waves-light btn btn_default">Sign out</a> </div>
                        </li>
                     </ul>
                  </li>
               </ul>
            </div>
         </nav>
      </header>
      <!--Header Ends Here-->
      <?php
         $segment2 = Request::segment(2);
         $segment1 = Request::segment(1);
         ?>
      <!--Sidebar Start Here-->
      <aside class="main-sidebar">
         <section class="sidebar">
            <ul class="sidebar-menu">
               
               
               

                                                      <!--    MANAGE PAGE CONTENT    -->
<!--

               
               <li class="treeview <?php if ($segment1 == 'view-page-content' || $segment1 == 'edit-page-content') {echo 'active';}?> ">
                  <a href="{{ url('view-page-content') }}" class="<?php if ($segment1 == 'view-page-content' || $segment1 == 'edit-page-content') {echo "active";}?>"> <i class="fa fa-file-text"></i> <span> Manage Page Content</span>
                     <i class="material-icons right menu_dir">keyboard_arrow_right</i>
                  </a>
               </li>

-->


               

                                                      <!--    MANAGE BOARD OF DIRECTORS    -->
               
               <!-- <li class="treeview <?php if ($segment1 == "add-boards" || $segment1 == "manage-boards" || $segment1 == "edit-boards") {echo "active";}?>">
                  <a href="javascript:void(0)" class="<?php if ($segment1 == "add-boards" || $segment1 == "manage-boards" || $segment1 == "edit-boards") {echo "active";}?>"> <i class="fa fa-newspaper-o"></i> <span>Manage Board of Directors</span>
                  <i class="material-icons right menu_dir">keyboard_arrow_down</i>
                  </a>
                  <ul class="treeview-menu" style="display:<?php if ($segment1 == "add-boards" || $segment1 == "manage-boards" || $segment1 == "edit-boards") {echo 'block;';} else {echo 'none;';}
                     ?>">
                     <li><a href="<?php echo url('add-boards') ?>" <?php if ($data["page"] == 'Add Boards') {echo 'class="activeSubLink"';}?>>
                        <i class="far fa-circle"></i>Add Board of Director</a>
                     
                     </li>
                     <li><a href="<?php echo url('manage-boards'); ?>" <?php if ($data["page"] == 'View Boards' || $data["page"] == 'Edit Boards') {echo 'class="activeSubLink"';}?>>
                        <i class="far fa-circle"></i>View/Edit Board of Director</a>
                     
                     </li>
                  </ul>
               </li>  -->




                  <!--    To Delete MANAGE FAQ    -->

        
<!--
                   <li class="treeview <?php if ($segment1 == "add-news" || $segment1 == "view-news" || $segment1 == "edit-news") {echo "active";}?>">
                  <a href="javascript:void(0)" class="<?php if ($segment1 == "add-news" || $segment1 == "view-news" || $segment1 == "edit-news") {echo "active";}?>"> <i class="fa fa-newspaper-o"></i> <span> Manage</span>
                  <i class="material-icons right menu_dir">keyboard_arrow_down</i>
                  </a>
                  <ul class="treeview-menu" style="display:<?php if ($segment1 == "add-news" || $segment1 == "view-news" || $segment1 == "edit-news") {echo 'block;';} else {echo 'none;';}
                     ?>">
                     <li><a href="<?php echo url('add-news') ?>" <?php if ($data["page"] == 'Add News') {echo 'class="activeSubLink"';}?>>
                        <i class="far fa-circle"></i> Add FAQ</a>
                     </li>
                     <li><a href="<?php echo url('view-news'); ?>" <?php if ($data["page"] == 'View News' || $data["page"] == 'Edit News') {echo 'class="activeSubLink"';}?>>
                        <i class="far fa-circle"></i> View/Edit FAQ</a>
                     </li>
                  </ul>
               </li>
-->

               <!-- Manage FAQ--->

               <li class="treeview <?php if ($segment1 == "add-news" || $segment1 == "view-news" || $segment1 == "edit-news") {echo "active";}?>">
                  <a href="javascript:void(0)" class="<?php if ($segment1 == "add-news" || $segment1 == "view-news" || $segment1 == "edit-news") {echo "active";}?>"> <i class="fa fa-newspaper-o"></i> <span> Manage FAQ</span>
                  <i class="material-icons right menu_dir">keyboard_arrow_down</i>
                  </a>
                  <ul class="treeview-menu" style="display:<?php if ($segment1 == "add-news" || $segment1 == "view-news" || $segment1 == "edit-news") {echo 'block;';} else {echo 'none;';}
                     ?>">
                     <li><a href="<?php echo url('add-faq') ?>" <?php if ($data["page"] == 'Add FAQ') {echo 'class="activeSubLink"';}?>>
                        <i class="far fa-circle"></i> Add FAQ</a>
                     </li>
                     <li><a href="<?php echo url('view-faq'); ?>" <?php if ($data["page"] == 'View faq' || $data["page"] == 'Edit News') {echo 'class="activeSubLink"';}?>>
                        <i class="far fa-circle"></i> View/Edit FAQ</a>
                     </li>
                  </ul>
               </li>


               <!--Manage Feedback/Query   -->

               <li class="treeview <?php if ($segment1 == "add-news" || $segment1 == "view-news" || $segment1 == "edit-news") {echo "active";}?>">
                  <a href="javascript:void(0)" class="<?php if ($segment1 == "add-news" || $segment1 == "view-news" || $segment1 == "edit-news") {echo "active";}?>"> <i class="fa fa-newspaper-o"></i> <span>View Feedback/Query</span>
                  <i class="material-icons right menu_dir">keyboard_arrow_down</i>
                  </a>
                  <ul class="treeview-menu" style="display:<?php if ($segment1 == "add-news" || $segment1 == "view-news" || $segment1 == "edit-news") {echo 'block;';} else {echo 'none;';}
                     ?>">
                     <li><a href="<?php echo url('view-query') ?>" <?php if ($data["page"] == 'View Query') {echo 'class="activeSubLink"';}?>>
                        <i class="far fa-circle"></i>View Query</a>
                     </li>

                     <!--
                     <li><a href="<?php echo url('view-faq'); ?>" <?php if ($data["page"] == 'View faq' || $data["page"] == 'Edit News') {echo 'class="activeSubLink"';}?>>
                        <i class="far fa-circle"></i> View/Edit FAQ</a>
                     </li>
                     -->
                  </ul>
               </li>





                                                      <!--    MANAGE ALERTS    -->
<!--
               
               <li class="treeview <?php if ($segment1 == "add-alert" || $segment1 == "view-alert" || $segment1 == "edit-alert") {echo "active";}?>">
                  <a href="javascript:void(0)" class="<?php if ($segment1 == "add-alert" || $segment1 == "view-alert" || $segment1 == "edit-alert") {echo "active";}?>"> <i class="fa fa-newspaper-o"></i> <span> Manage Alerts</span>
                  <i class="material-icons right menu_dir">keyboard_arrow_down</i>
                  </a>
                  <ul class="treeview-menu" style="display:<?php if ($segment1 == "add-alert" || $segment1 == "view-alert" || $segment1 == "edit-alert") {echo 'block;';} else {echo 'none;';}
                     ?>">
                     <li><a href="<?php echo url('add-alert') ?>" <?php if ($data["page"] == 'Add Alert') {echo 'class="activeSubLink"';}?>>
                        <i class="far fa-circle"></i> Add Alert</a>
                     </li>
                     <li><a href="<?php echo url('view-alert'); ?>" <?php if ($data["page"] == 'View Alert' || $data["page"] == 'Edit Alert') {echo 'class="activeSubLink"';}?>>
                        <i class="far fa-circle"></i> View/Edit Alert</a>
                     </li>
                  </ul>
               </li>
-->





                                                      <!--    MANAGE GALLERY    -->
<!--
               
               <li class="treeview <?php if ($segment1 == "add-gallery" || $segment1 == "view-gallery" || $segment1 == "edit-gallery") {echo "active";}?>">
                  <a href="javascript:void(0)" class="<?php if ($segment1 == "add-gallery" || $segment1 == "view-gallery" || $segment1 == "edit-gallery") {echo "active";}?>"> <i class="fa fa-newspaper-o"></i> <span> Manage Gallery</span>
                  <i class="material-icons right menu_dir">keyboard_arrow_down</i>
                  </a>
                  <ul class="treeview-menu" style="display:<?php if ($segment1 == "add-gallery" || $segment1 == "view-gallery" || $segment1 == "edit-gallery") {echo 'block;';} else {echo 'none;';}
                     ?>">
                     <li><a href="<?php echo url('add-gallery') ?>" <?php if ($data["page"] == 'Add Gallery') {echo 'class="activeSubLink"';}?>>
                        <i class="far fa-circle"></i> Add Gallery</a>
                     </li>
                     <li><a href="<?php echo url('view-gallery'); ?>" <?php if ($data["page"] == 'View Gallery' || $data["page"] == 'Edit Gallery') {echo 'class="activeSubLink"';}?>>
                        <i class="far fa-circle"></i> View/Edit Gallery</a>
                     </li>
                  </ul>
               </li>
-->





            </ul>
         </section>
      </aside>
      <!--Sidebar Ends Here-->
      <div id="loaderID" class="loader" style="display: none;"><img src="<?php echo url('images/ajax-loader.gif'); ?>"></div>