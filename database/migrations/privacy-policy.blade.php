<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- <link rel="icon" href="awa-01.png"> -->
      <link rel="icon" href="{{URL::to('/')}}/img/awa-01.png">
      <title>TeamPoker&reg;</title>



      <meta name="title" content="{{$_title or ''}}" />
    	<meta name="description" content="{{$_pg_desc or ''}}" />
    	<meta name="keywords" content="{{$_pg_keys or ''}}" />
    	<meta name="copyright" content="Team Poker, Las Vegas, Nevada, USA" />
      <!-- Latest compiled and minified CSS -->
      <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous"> -->
      <link rel="stylesheet" href="/bootstrap-3.3.7-dist/css/bootstrap.min.css" crossorigin="anonymous">

      <!-- Optional theme -->
      <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous"> -->
      <link rel="stylesheet" href="/bootstrap-3.3.7-dist/css/bootstrap-theme.min.css" crossorigin="anonymous">


      <!-- Latest compiled and minified JavaScript -->
      <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script> -->
      <script src="/bootstrap-3.3.7-dist/js/bootstrap.min.js" crossorigin="anonymous"></script>

      <!-- <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet"> -->

      <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
      <link rel="stylesheet" href="/bootstrap-3.3.7-dist/css/bootstrap.min.css">

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

      <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
      <script src="/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>

      <style>
         /*
         * Base structure
         */
         /* Move down content because we have a fixed navbar that is 50px tall */
         body {
         padding-top: 50px;
         }
         a {
         color: #ffffff;
         text-decoration: none;
         }
         /*
         * Global add-ons
         */
         .sub-header {
         padding-bottom: 10px;
         border-bottom: 1px solid #eee;
         }
         /*
         * Top navigation
         * Hide default border to remove 1px line.
         */
         .navbar-fixed-top {
         border: 0;
         }
         /*
         * Sidebar
         */
         /* Hide for mobile, show later */
         .sidebar {
         display: none;
         }
         @media (min-width: 768px) {
         .sidebar {
         position: fixed;
         bottom: 0;
         left: 0;
         z-index: 1000;
         display: block;
         padding: 20px;
         overflow-x: hidden;
         overflow-y: auto; /* Scrollable contents if viewport is shorter than content. */
         /*background-color: #f5f5f5;*/
         background-color: #11460C;
         border-right: 1px solid #eee;
         }
         }
         /* Sidebar navigation */
         .nav-sidebar {
         margin-right: -21px; /* 20px padding + 1px border */
         margin-bottom: 20px;
         margin-left: -20px;
         }
         .nav-sidebar > li > a {
         padding-right: 20px;
         padding-left: 20px;
         }
         .nav-sidebar > .active > a,
         .nav-sidebar > .active > a:hover,
         .nav-sidebar > .active > a:focus {
         color: #fff;
         background-color: #428bca;
         }
         /*
         * Main content
         */
         .main {
         padding: 20px;
         }
         @media (min-width: 768px) {
         .main {
         padding-right: 40px;
         padding-left: 40px;
	 top: 50px;
         }
         }
         .main .page-header {
         margin-top: 0;
         }
         /*
         * Placeholder dashboard ideas
         */
         .placeholders {
         margin-bottom: 30px;
         text-align: center;
         }
         .placeholders h4 {
         margin-bottom: 0;
         }
         .placeholder {
         margin-bottom: 20px;
         }
         .placeholder img {
         display: inline-block;
         border-radius: 50%;
         }
         /*For the new sidebar*/
         .nav-side-menu {
         overflow: auto;
         font-family: verdana;
         font-size: 12px;
         font-weight: 200;
         background-color: #2e353d;
         position: fixed;
         top: 50px;
         width: 200px;
         height: 100%;
         color: #e1ffff;
         }
         .nav-side-menu .brand {
         background-color: #23282e;
         line-height: 50px;
         display: block;
         text-align: center;
         font-size: 14px;
         }
         .nav-side-menu .toggle-btn {
         display: none;
         }
         .nav-side-menu ul,
         .nav-side-menu li {
         list-style: none;
         padding: 0px;
         margin: 0px;
         line-height: 35px;
         cursor: pointer;
         }
         .nav-side-menu ul :not(collapsed) .arrow:before,
         .nav-side-menu li :not(collapsed) .arrow:before {
         font-family: FontAwesome;
         content: "\f078";
         display: inline-block;
         padding-left: 10px;
         padding-right: 10px;
         vertical-align: middle;
         float: right;
         }
         .nav-side-menu ul .active,
         .nav-side-menu li .active {
         border-left: 3px solid #d19b3d;
         background-color: #4f5b69;
         }
         .nav-side-menu ul .sub-menu li.active,
         .nav-side-menu li .sub-menu li.active {
         color: #d19b3d;
         }
         .nav-side-menu ul .sub-menu li.active a,
         .nav-side-menu li .sub-menu li.active a {
         color: #d19b3d;
         }
         .nav-side-menu ul .sub-menu li,
         .nav-side-menu li .sub-menu li {
         background-color: #181c20;
         border: none;
         line-height: 28px;
         border-bottom: 1px solid #23282e;
         margin-left: 0px;
         }
         .nav-side-menu ul .sub-menu li:hover,
         .nav-side-menu li .sub-menu li:hover {
         background-color: #020203;
         }
         .nav-side-menu ul .sub-menu li:before,
         .nav-side-menu li .sub-menu li:before {
         font-family: FontAwesome;
         content: "\f105";
         display: inline-block;
         padding-left: 10px;
         padding-right: 10px;
         vertical-align: middle;
         }
         .nav-side-menu li {
         padding-left: 0px;
         border-left: 3px solid #2e353d;
         border-bottom: 1px solid #23282e;
         }
         .nav-side-menu li a {
         text-decoration: none;
         color: #e1ffff;
         }
         .nav-side-menu li a i {
         padding-left: 10px;
         width: 20px;
         padding-right: 20px;
         }
         .nav-side-menu li:hover {
         border-left: 3px solid #d19b3d;
         background-color: #4f5b69;
         -webkit-transition: all 1s ease;
         -moz-transition: all 1s ease;
         -o-transition: all 1s ease;
         -ms-transition: all 1s ease;
         transition: all 1s ease;
         }
         @media (max-width: 767px) {
         .nav-side-menu {
         position: relative;
         width: 100%;
         margin-bottom: 10px;
         top: 50px;
         }
         .nav-side-menu .toggle-btn {
         display: block;
         cursor: pointer;
         position: absolute;
         right: 10px;
         top: 10px;
         z-index: 10 !important;
         padding: 3px;
         background-color: #ffffff;
         color: #000;
         width: 40px;
         text-align: center;
         }
         .brand {
         text-align: left !important;
         font-size: 22px;
         padding-left: 20px;
         line-height: 50px !important;
         }
         }
         @media (min-width: 767px) {
         .nav-side-menu .menu-list .menu-content {
         display: block;
         }
         }
         body {
         margin: 0px;
         padding: 0px;
         }
         /*********************/
      </style>
   </head>
   <body>
   <nav class="navbar navbar-inverse navbar-fixed-top" style="background-color: #0F3C0B;">
      <div class="container-fluid">
         <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{URL::to('/')}}/"><img src="https://teampoker.com/images/mastfoot-logo.png" height="20" width="150" alt="" /></a>
         </div>
         <div id="navbar" class="navbar-collapse collapse">
            <!--<ul class="nav navbar-nav navbar-right">
               <li><a href="/download">Download</a></li>
               <li class="dropdown">
                  <a class="dropdown-toggle" data-toggle="dropdown" href="#">Help<span class="caret"></span></a>
                  <ul class="dropdown-menu">
                     <li><a href="/info-videos">Info Videos</a></li>
                     <li><a href="/getting-started">Getting Started</a></li>
                     <li><a href="/using-event-manager">Using the Event Manager</a></li>
                     <li><a href="/faq">FAQ</a></li>
                     <li><a href="/scoring">Scoring</a></li>
                  </ul>
               </li>
               <li class="dropdown">
                  <a class="dropdown-toggle" data-toggle="dropdown" href="#">daniel21<span class="caret"></span></a>
                  <ul class="dropdown-menu">
                     <li><a href="/profile">Profile</a></li>
                     <li><a href="/auth/logout">Logout</a></li>
                  </ul>
               </li>
            </ul>
            <form class="navbar-form navbar-right" action="/search">
               <input type="text" class="form-control" name="s" placeholder="Search...">
               </form>-->
         </div>
      </div>
   </nav>
   <div class="container-fluid">
      <div class="row">
         <!--<div class="nav-side-menu">
            <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>
            <div class="menu-list">
               <ul id="menu-content" class="menu-content collapse out">
                  <li  data-toggle="collapse" data-target="#products" class="collapsed">
                     <a href="#">
                        Leagues <span class="arrow"></span>
                     </a>
                  </li>
                  <ul class="sub-menu collapse" id="products">
                     <a href="/join-league">
                        <li>Join League</li>
                     </a>
                     <a href="/my-leagues">
                        <li>My Leagues</li>
                     </a>
                  </ul>
                  <li data-toggle="collapse" data-target="#service" class="collapsed">
                     <a href="#">
                        Event Manager <span class="arrow"></span>
                     </a>
                  </li>
                  <ul class="sub-menu collapse" id="service">
                     <a href="/my-events">
                        <li>My Events & Tracker</li>
                     </a>
                     <a href="/join-event">
                        <li>Join Event</li>
                     </a>
                     <a href="/event-results">
                        <li>Event Results</li>
                     </a>
                  </ul>

                  <li data-toggle="collapse" data-target="#redpages" class="collapsed">
                     <a href="#">
                        My Red Pages <span class="arrow"></span>
                     </a>
                  </li>
                  <ul class="sub-menu collapse" id="redpages">
                     <a href="/my-listings">
                        <li>My listings</li>
                     </a>
                     <a href="/create-listing">
                        <li>Create listing</li>
                     </a>
                     <a href="/search-listing">
                        <li>Search Listings</li>
                     </a>
                  </ul>

                  <a href="/club">
                     <li>Clubs</li>
                  </a>
                  <a href="/statistics">
                     <li>Statistics</li>
                  </a>
                  </a>
                  <a href="/my-videos">
                     <li>My Videos</li>
                  </a>
               </ul>
            </div>
         </div>-->
         <!--<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">-->
				 <div class="col-sm-12 col-md-12 main">
            <h1 class="page-header">{{$_title}}</h1>
            <!--{{$_content}}-->
						<?php echo $_content;?>
         </div>
      </div>
   </div>
   <!-- Bootstrap core JavaScript
      ================================================== -->
   <!-- Placed at the end of the document so the pages load faster -->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
   <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
   <script src="../../dist/js/bootstrap.min.js"></script>
   <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
   <script src="../../assets/js/vendor/holder.min.js"></script>
   <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
   <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>
