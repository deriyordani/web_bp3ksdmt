<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--><html lang="en"><!--<![endif]-->
<head>
<meta charset="utf-8">

    <!-- Viewport Metatag -->
    <meta name="viewport" content="width=device-width,initial-scale=1.0">

    <!-- Plugin Stylesheets first to ease overrides -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>plugins/colorpicker/colorpicker.css" media="screen">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>custom-plugins/wizard/wizard.css" media="screen">

    <!-- Required Stylesheets -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>bootstrap/css/bootstrap.min.css" media="screen">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/fonts/ptsans/stylesheet.css" media="screen">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/fonts/icomoon/style.css" media="screen">

    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/mws-style.css" media="screen">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/icons/icol16.css" media="screen">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/icons/icol32.css" media="screen">

    <!-- Demo Stylesheet -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/demo.css" media="screen">

    <!-- jQuery-UI Stylesheet -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>jui/css/jquery.ui.all.css" media="screen">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>jui/jquery-ui.custom.css" media="screen">

    <!-- Theme Stylesheet -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/mws-theme.css" media="screen">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/themer.css" media="screen">

    <!-- JavaScript Plugins -->
    <script src="<?php echo base_url()?>js/libs/jquery-1.8.3.min.js"></script>
    <script src="<?php echo base_url()?>js/libs/jquery.validate.js"></script>
    <script src="<?php echo base_url()?>js/libs/jquery.mousewheel.min.js"></script>
    <script src="<?php echo base_url()?>js/libs/jquery.placeholder.min.js"></script>
    <script src="<?php echo base_url()?>custom-plugins/fileinput.js"></script>
    
    <!-- jQuery-UI Dependent Scripts -->
    <script src="<?php echo base_url()?>jui/js/jquery-ui-1.9.2.min.js"></script>
    <script src="<?php echo base_url()?>jui/jquery-ui.custom.min.js"></script>
    <script src="<?php echo base_url()?>jui/js/jquery.ui.touch-punch.js"></script>


    <title>Admin Panel BP3K SDMT</title>
    <link href="<?php echo base_url()?>assets/theme1/images/icon.ico" rel="icon">

    <style type="text/css">
      .head-title{
        color: #c5d52b;
      }
    </style>
</head>
	<!-- Header -->
	<div id="mws-header" class="clearfix">

       <!-- Logo Container -->
       <div id="mws-logo-container">

           <!-- Logo Wrapper, images put within this wrapper will always be vertically centered -->
           <div id="mws-logo-wrap">
               <!--<img src="<?php echo base_url()?>images/logo-admin.png" alt="mws admin">-->
              <h2 class="head-title">BP3K SDMT</h2>
           </div>
       </div>

       <!-- User Tools (notifications, logout, profile, change password) -->
       <div id="mws-user-tools" class="clearfix">

           <!-- Notifications -->
           <div id="mws-user-notif" class="mws-dropdown-menu">
               <!-- <a href="#" data-toggle="dropdown" class="mws-dropdown-trigger"><i class="icon-exclamation-sign"></i></a>
 -->
               <!-- Unread notification count -->
               <!-- <span class="mws-dropdown-notif">35</span> -->

               <!-- Notifications dropdown -->
               <div class="mws-dropdown-box">
                   <div class="mws-dropdown-content">
                    <ul class="mws-notifications">
                       <li class="read">
                           <a href="#">
                            <span class="message">
                                Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                            </span>
                            <span class="time">
                                January 21, 2012
                            </span>
                        </a>
                    </li>
                    <li class="read">
                       <a href="#">
                        <span class="message">
                            Lorem ipsum dolor sit amet
                        </span>
                        <span class="time">
                            January 21, 2012
                        </span>
                    </a>
                </li>
                <li class="unread">
                   <a href="#">
                    <span class="message">
                        Lorem ipsum dolor sit amet
                    </span>
                    <span class="time">
                        January 21, 2012
                    </span>
                </a>
            </li>
            <li class="unread">
               <a href="#">
                <span class="message">
                    Lorem ipsum dolor sit amet
                </span>
                <span class="time">
                    January 21, 2012
                </span>
            </a>
        </li>
    </ul>
    <div class="mws-dropdown-viewall">
       <a href="#">View All Notifications</a>
   </div>
</div>
</div>
</div>

<!-- Messages -->
<div id="mws-user-message" class="mws-dropdown-menu">
   <!-- <a href="#" data-toggle="dropdown" class="mws-dropdown-trigger"><i class="icon-envelope"></i></a>
 -->
   <!-- Unred messages count -->
   <!-- <span class="mws-dropdown-notif">35</span> -->

   <!-- Messages dropdown -->
   <div class="mws-dropdown-box">
       <div class="mws-dropdown-content">
        <ul class="mws-messages">
           <li class="read">
               <a href="#">
                <span class="sender">John Doe</span>
                <span class="message">
                    Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                </span>
                <span class="time">
                    January 21, 2012
                </span>
            </a>
        </li>
        <li class="read">
           <a href="#">
            <span class="sender">John Doe</span>
            <span class="message">
                Lorem ipsum dolor sit amet
            </span>
            <span class="time">
                January 21, 2012
            </span>
        </a>
    </li>
    <li class="unread">
       <a href="#">
        <span class="sender">John Doe</span>
        <span class="message">
            Lorem ipsum dolor sit amet
        </span>
        <span class="time">
            January 21, 2012
        </span>
    </a>
</li>
<li class="unread">
   <a href="#">
    <span class="sender">John Doe</span>
    <span class="message">
        Lorem ipsum dolor sit amet
    </span>
    <span class="time">
        January 21, 2012
    </span>
</a>
</li>
</ul>
<div class="mws-dropdown-viewall">
   <a href="#">View All Messages</a>
</div>
</div>
</div>
</div>

<!-- User Information and functions section -->
<div id="mws-user-info" class="mws-inset">

   <!-- User Photo -->
  <!--  <div id="mws-user-photo">
       <img src="<?php echo base_url()?>example/profile.jpg" alt="User Photo">
   </div> -->

   <!-- Username and Functions -->
   <div id="mws-user-functions">
    <div id="mws-username">
        Hello, 
        <?php echo $this->tank_auth->get_username() ?>
    </div>
    <ul>
      
       <li><?php echo anchor('auth/change_password', 'Change Password', 'attributs');?></li>
       <li><a href="<?php echo base_url()?>auth/logout">Logout</a></li>
   </ul>
</div>
</div>
</div>
</div>

<!-- Start Main Wrapper -->
<div id="mws-wrapper">

   <!-- Necessary markup, do not remove -->
   <div id="mws-sidebar-stitch"></div>
   <div id="mws-sidebar-bg"></div>

   <!-- Sidebar Wrapper -->
   <div id="mws-sidebar">

    <!-- Hidden Nav Collapse Button -->
    <div id="mws-nav-collapse">
        <span></span>
        <span></span>
        <span></span>
    </div>

    <!-- Searchbox -->
   <!--  <div id="mws-searchbox" class="mws-inset">
       <form action="typography.html">
           <input type="text" class="mws-search-input" placeholder="Search...">
           <button type="submit" class="mws-search-submit"><i class="icon-search"></i></button>
       </form>
   </div> -->

   <!-- Main Navigation -->
   <div id="mws-navigation">
    <ul>
        <li class="<?php if($this->uri->segment(2) == 'admin' && !$this->uri->segment(3))echo "active"?>"><?php echo anchor('admin/admin/', '<i class="icon-home"></i> Dashboard') ?></li>
        <li class="<?php if($this->uri->segment(2) == 'contacts')echo "active"?>"><?php echo anchor('admin/contacts/', '<i class="icon-user"></i> Inbox') ?></li>
        <li class="<?php if($this->uri->segment(2) == 'news')echo "active"?>"><?php echo anchor('admin/news', '<i class="icon-newspaper"></i> News') ?></li>
        <li class="<?php if($this->uri->segment(2) == 'pages')echo "active"?>"><?php echo anchor('admin/pages', '<i class="icon-list-2"></i> Pages') ?></li>
        <!-- <li class="<?php if($this->uri->segment(2) == 'moduls')echo "active"?>"><?php echo anchor('admin/moduls', '<i class="icon-list-2"></i> Modul') ?></li> -->
        <li class="<?php if($this->uri->segment(2) == 'files')echo "active"?>"><?php echo anchor('admin/files', '<i class="icon-list-2"></i> Files') ?></li>
        <li class="<?php if($this->uri->segment(2) == 'banners' && $this->uri->segment(3) == 'index')echo "active"?>"><?php echo anchor('admin/banners/index', '<i class="icon-list-2"></i> Slide Show') ?></li>
        <li class="<?php if($this->uri->segment(2) == 'banners' && $this->uri->segment(3) == 'gallery')echo "active"?>"><?php echo anchor('admin/banners/gallery', '<i class="icon-list-2"></i> Gallery') ?></li>
        <li class="<?php if($this->uri->segment(2) == 'banners' && $this->uri->segment(3) == 'arsip')echo "active"?>"><?php echo anchor('admin/banners/arsip', '<i class="icon-list-2"></i> Arsip Images') ?></li>
        <li class="<?php if($this->uri->segment(2) == 'menus')echo "active"?>"><?php echo anchor('admin/menus', '<i class="icon-list"></i> Menu') ?></li>
        <!-- <li class="<?php if($this->uri->segment(2) == 'categories')echo "active"?>"><?php echo anchor('admin/categories', '<i class="icon-list"></i> Category') ?></li> -->
        <li class="<?php if($this->uri->segment(2) == 'comments')echo "active"?>"><?php echo anchor('admin/comments', '<i class="icon-list"></i> Comments') ?></li>
        <!-- <li class="<?php if($this->uri->segment(2) == 'peta_atm')echo "active"?>"><?php echo anchor('admin/peta_atm', '<i class="icon-newspaper"></i> Peta Sebaran') ?></li> -->
        <!-- <li class="<?php if($this->uri->segment(2) == 'simulasi_products')echo "active"?>"><?php echo anchor('admin/simulasi_products', '<i class="icon-newspaper"></i> Simulasi products') ?></li> -->
        <!-- <li class="<?php if($this->uri->segment(2) == 'polls')echo "active"?>"><?php echo anchor('admin/polls', '<i class="icon-newspaper"></i> Polls') ?></li> -->
        <!-- <li class="<?php if($this->uri->segment(2) == 'themes')echo "active"?>"><?php echo anchor('admin/themes', '<i class="icon-newspaper"></i> Themes') ?></li> -->
         <li class="<?php if($this->uri->segment(3) == 'list_user')echo "active"?>"><?php echo anchor('admin/admin/list_user', '<i class="icon-user"></i> List user') ?></li>
        <li class="<?php if($this->uri->segment(2) == 'user_groups')echo "active"?>"><?php echo anchor('admin/user_groups', '<i class="icon-users"></i> User groups') ?></li>
        <li class="<?php if($this->uri->segment(2) == 'user_permissions')echo "active"?>"><?php echo anchor('admin/user_permissions', '<i class="icon-key-2"></i> User permission') ?></li>
        <li class="<?php if($this->uri->segment(2) == 'settings')echo "active"?>"><?php echo anchor('admin/settings', '<i class="icon-newspaper"></i> Settings') ?></li>
         <!--  <li><?php echo anchor('admin/menu_posisi', '<i class="icon-list"></i> Menu Posisi') ?></li> -->
    </ul>
</div>         
</div>

<!-- Main Container Start -->
<div id="mws-container" class="clearfix">

   <!-- Inner Container Start -->
   <div class="container">
       <?php echo $this->load->view($content) ?>

   </div>
   <!-- Inner Container End -->

   <!-- Footer -->
   <div id="mws-footer">
       Copyright BP3K SDMT 2020. All Rights Reserved.
   </div>

</div>
<!-- Main Container End -->

</div>


<!-- Plugin Scripts -->
<script src="<?php echo base_url()?>plugins/datatables/jquery.dataTables.min.js"></script>
    <!--[if lt IE 9]>
    <script src="js/libs/excanvas.min.js"></script>
    <![endif]-->
  

    <script src="<?php echo base_url()?>plugins/colorpicker/colorpicker-min.js"></script>
    <script src="<?php echo base_url()?>plugins/validate/jquery.validate-min.js"></script>
    <script src="<?php echo base_url()?>custom-plugins/wizard/wizard.min.js"></script>
    <script src="<?php echo base_url()?>js/demo/demo.dashboard.js"></script>

</body>
</html>