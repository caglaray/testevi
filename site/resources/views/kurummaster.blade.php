<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Estetik Takvimi - Kurum Paneli</title>   
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="description" content="">
    <meta name="keywords" content="coco bootstrap template, coco admin, bootstrap,admin template, bootstrap admin,">
    <meta name="author" content="Huban Creative">



    <link href="{{ URL::asset('assets/libs/jqueryui/ui-lightness/jquery-ui-1.10.4.custom.min.css') }}"    rel="stylesheet" />

    <link href="{{ URL::asset('assets/libs/bootstrap/css/bootstrap.min.css') }}"    rel="stylesheet" />
    <link href="{{ URL::asset('assets/libs/font-awesome/css/font-awesome.min.css') }}"    rel="stylesheet" />
    <link href="{{ URL::asset('assets/libs/fontello/css/fontello.css') }}"    rel="stylesheet" />
    <link href="{{ URL::asset('assets/libs/animate-css/animate.min.css') }}"    rel="stylesheet" />
    <link href="{{ URL::asset('assets/libs/nifty-modal/css/component.css') }}"    rel="stylesheet" />
    <link href="{{ URL::asset('assets/libs/magnific-popup/magnific-popup.css') }}"    rel="stylesheet" />
    <link href="{{ URL::asset('assets/libs/ios7-switch/ios7-switch.css') }}"    rel="stylesheet" />
    <link href="{{ URL::asset('assets/libs/pace/pace.css') }}"    rel="stylesheet" />
    <link href="{{ URL::asset('assets/libs/sortable/sortable-theme-bootstrap.css') }}"    rel="stylesheet" />
    <link href="{{ URL::asset('assets/libs/bootstrap-datepicker/css/datepicker.css') }}"    rel="stylesheet" />
    <link href="{{ URL::asset('assets/libs/jquery-icheck/skins/all.css') }}"    rel="stylesheet" />
    <link href="{{ URL::asset('assets/libs/prettify/github.css') }}"    rel="stylesheet" />
    <link href="{{ URL::asset('assets/css/style.css') }}"    rel="stylesheet" />
    <link href="{{ URL::asset('assets/css/style-responsive.css') }}"    rel="stylesheet" />
    <link href="{{ URL::asset('assets/libs/bootstrap-select/bootstrap-select.min.css') }}"    rel="stylesheet" />
    <link href="{{ URL::asset('assets/libs/summernote/summernote.css') }}"    rel="stylesheet" />
    <link href="{{ URL::asset('assets/css/style.css') }}"    rel="stylesheet" />
    <link href="{{ URL::asset('assets/css/style-responsive.css') }}"    rel="stylesheet" />

    

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        <link rel="shortcut icon" href="{{ URL::asset('assets/img/favicon.ico') }}" >
        <link rel="apple-touch-icon" href="{{ URL::asset('assets/img/apple-touch-icon.png') }}"  />
        <link rel="apple-touch-icon" sizes="57x57" href="{{ URL::asset('assets/img/apple-touch-icon-57x57.png') }}"  />
        <link rel="apple-touch-icon" sizes="72x72" href="{{ URL::asset('assets/img/apple-touch-icon-72x72.png') }}"  />
        <link rel="apple-touch-icon" sizes="76x76" href="{{ URL::asset('assets/img/apple-touch-icon-76x76.png') }}"  />
        <link rel="apple-touch-icon" sizes="114x114" href="{{ URL::asset('assets/img/apple-touch-icon-114x114.png') }}"  />
        <link rel="apple-touch-icon" sizes="120x120" href="{{ URL::asset('assets/img/apple-touch-icon-120x120.png') }}"  />
        <link rel="apple-touch-icon" sizes="144x144" href="{{ URL::asset('assets/img/apple-touch-icon-144x144.png') }}"  />
        <link rel="apple-touch-icon" sizes="152x152" href="{{ URL::asset('assets/img/apple-touch-icon-152x152.png') }}"  />
    </head>
    <body class="fixed-left">

        <?php $userid = Auth::user()->id; ?>
        <?php $name = Auth::user()->name; ?>
        <?php $surname = Auth::user()->surname; ?>

        <!-- Modal Start -->
        <!-- Modal Task Progress -->	
        <div class="md-modal md-3d-flip-vertical" id="task-progress">
          <div class="md-content">
             <h3><strong>Task Progress</strong> Information</h3>
             <div>
                <p>CLEANING BUGS</p>
                <div class="progress progress-xs for-modal">
                  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                   <span class="sr-only">80&#37; Complete</span>
               </div>
           </div>
           <p>POSTING SOME STUFF</p>
           <div class="progress progress-xs for-modal">
              <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 65%">
               <span class="sr-only">65&#37; Complete</span>
           </div>
       </div>
       <p>BACKUP DATA FROM SERVER</p>
       <div class="progress progress-xs for-modal">
          <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 95%">
           <span class="sr-only">95&#37; Complete</span>
       </div>
   </div>
   <p>RE-DESIGNING WEB APPLICATION</p>
   <div class="progress progress-xs for-modal">
      <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
       <span class="sr-only">100&#37; Complete</span>
   </div>
</div>
<p class="text-center">
    <button class="btn btn-danger btn-sm md-close">Close</button>
</p>
</div>
</div>
</div>

<!-- Modal Logout -->
<div class="md-modal md-just-me" id="logout-modal">
  <div class="md-content">
     <h3><strong>Çıkış</strong></h3>
     <div>
        <p class="text-center">Çıkmak istediğinize emin misiniz?</p>
        <p class="text-center">
            <button class="btn btn-danger md-close">Hayır</button>

            <a href="{{ route('logout') }}"
            class="btn btn-success md-close"
            onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">Tabi ki !</a>


            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>



        </p>
    </div>
</div>
</div>        <!-- Modal End -->	
<!-- Begin page -->
<div id="wrapper">

    <!-- Top Bar Start -->
    <div class="topbar">
        <div class="topbar-left">
            <div class="logo">
                <h1><a href="#"><img src="{{ URL::asset('assets/img/logo.png') }}" alt="Logo"></a></h1>
            </div>
            <button class="button-menu-mobile open-left">
                <i class="fa fa-bars"></i>
            </button>
        </div>
        <!-- Button mobile view to collapse sidebar menu -->
        <div class="navbar navbar-default" role="navigation">
            <div class="container">
                <div class="navbar-collapse2">
                    <ul class="nav navbar-nav hidden-xs">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-th"></i></a>
                            <div class="dropdown-menu grid-dropdown">
                                <div class="row stacked">
                                    <div class="col-xs-4">
                                        <a href="javascript:;" data-app="notes-app" data-status="active"><i class="icon-edit"></i>Notes</a>
                                    </div>
                                    <div class="col-xs-4">
                                        <a href="javascript:;" data-app="todo-app" data-status="active"><i class="icon-check"></i>Todo List</a>
                                    </div>
                                    <div class="col-xs-4">
                                        <a href="javascript:;" data-app="calc" data-status="inactive"><i class="fa fa-calculator"></i>Calculator</a>
                                    </div>
                                </div>
                                <div class="row stacked">
                                    <div class="col-xs-4">
                                        <a href="javascript:;" data-app="weather-widget" data-status="active"><i class="icon-cloud-3"></i>Weather</a>
                                    </div>
                                    <div class="col-xs-4">
                                        <a href="javascript:;" data-app="calendar-widget2" data-status="active"><i class="icon-calendar"></i>Calendar</a>
                                    </div>
                                    <div class="col-xs-4">
                                        <a href="javascript:;" data-app="stock-app" data-status="inactive"><i class="icon-chart-line"></i>Stocks</a>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </li>
                        
                    </ul>
                    <ul class="nav navbar-nav navbar-right top-navbar">
                        <li class="dropdown iconify hide-phone">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-globe"></i><span class="label label-danger absolute">0</span></a>
                            <ul class="dropdown-menu dropdown-message">
                                <li class="dropdown-header notif-header"><i class="icon-bell-2"></i> New Notifications<a class="pull-right" href="#"><i class="fa fa-cog"></i></a></li>
                                <li class="unread">
                                    <a href="#">
                                        <p><strong>John Doe</strong> Uploaded a photo <strong>&#34;DSC000254.jpg&#34;</strong>
                                            <br /><i>2 minutes ago</i>
                                        </p>
                                    </a>
                                </li>
                                <li class="unread">
                                    <a href="#">
                                        <p><strong>John Doe</strong> Created an photo album  <strong>&#34;Fappening&#34;</strong>
                                            <br /><i>8 minutes ago</i>
                                        </p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <p><strong>John Malkovich</strong> Added 3 products
                                            <br /><i>3 hours ago</i>
                                        </p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <p><strong>Sonata Arctica</strong> Send you a message <strong>&#34;Lorem ipsum dolor...&#34;</strong>
                                            <br /><i>12 hours ago</i>
                                        </p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <p><strong>Johnny Depp</strong> Updated his avatar
                                            <br /><i>Yesterday</i>
                                        </p>
                                    </a>
                                </li>
                                <li class="dropdown-footer">
                                    <div class="btn-group btn-group-justified">
                                        <div class="btn-group">
                                            <a href="#" class="btn btn-sm btn-primary"><i class="icon-ccw-1"></i> Refresh</a>
                                        </div>
                                        <div class="btn-group">
                                            <a href="#" class="btn btn-sm btn-danger"><i class="icon-trash-3"></i> Clear All</a>
                                        </div>
                                        <div class="btn-group">
                                            <a href="#" class="btn btn-sm btn-success">See All <i class="icon-right-open-2"></i></a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown iconify hide-phone">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i><span class="label label-danger absolute">0</span></a>
                            <ul class="dropdown-menu dropdown-message">
                                <li class="dropdown-header notif-header"><i class="icon-mail-2"></i> New Messages</li>
                                <li class="unread">
                                    <a href="#" class="clearfix">
                                        <img src="{{ URL::asset('images/users/chat/2.jpg') }}" class="xs-avatar ava-dropdown" alt="Avatar">
                                        <strong>John Doe</strong><i class="pull-right msg-time">5 minutes ago</i><br />
                                        <p>Duis autem vel eum iriure dolor in hendrerit ...</p>
                                    </a>
                                </li>
                                <li class="unread">
                                    <a href="#" class="clearfix">
                                        <img src="{{ URL::asset('images/users/chat/1.jpg') }}" class="xs-avatar ava-dropdown" alt="Avatar">
                                        <strong>Sandra Kraken</strong><i class="pull-right msg-time">22 minutes ago</i><br />
                                        <p>Duis autem vel eum iriure dolor in hendrerit ...</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="clearfix">
                                        <img src="{{ URL::asset('images/users/chat/3.jpg') }}" class="xs-avatar ava-dropdown" alt="Avatar">
                                        <strong>Zoey Lombardo</strong><i class="pull-right msg-time">41 minutes ago</i><br />
                                        <p>Duis autem vel eum iriure dolor in hendrerit ...</p>
                                    </a>
                                </li>
                                <li class="dropdown-footer"><div class=""><a href="#" class="btn btn-sm btn-block btn-primary"><i class="fa fa-share"></i> See all messages</a></div></li>
                            </ul>
                        </li>
                        <li class="dropdown iconify hide-phone"><a href="#" onclick="javascript:toggle_fullscreen()"><i class="icon-resize-full-2"></i></a></li>
                        <li class="dropdown topbar-profile">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="rounded-image topbar-profile-image"><img src="{{ URL::asset('images/users/user-35.jpg') }}"></span> Hoşgeldin <strong><?php echo $name." ".$surname ?></strong> <i class="fa fa-caret-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Hesabım</a></li>
                                <li><a href="#">Parola Değiştir</a></li>

                                <li class="divider"></li>
                                <li><a class="md-trigger" data-modal="logout-modal"><i class="icon-logout-1"></i> Çıkış Yap</a></li>
                            </ul>
                        </li>
                        
                    </ul>
                </div>
                <!--/.nav-collapse -->
            </div>
        </div>
    </div>
    <!-- Top Bar End -->
    <!-- Left Sidebar Start -->
    <div class="left side-menu">
        <div class="sidebar-inner slimscrollleft">

            <div class="clearfix"></div>
            <!--- Profile -->
            <div class="profile-info">
                <div class="col-xs-4">
                  <a href="profile.html" class="rounded-image profile-image"><img src="{{ URL::asset('images/users/user-100.jpg') }}"></a>
              </div>
              <div class="col-xs-8">
                <div class="profile-text">Estetik Takvimi</div>
                <div class="profile-buttons">
                  <a href="javascript:;"><i class="fa fa-envelope-o pulse"></i></a>

                  <a class="md-trigger" data-modal="logout-modal" title="Sign Out"><i class="fa fa-power-off text-red-1"></i></a>
              </div>
          </div>
      </div>
      <!--- Divider -->
      <div class="clearfix"></div>
      <hr class="divider" />
      <div class="clearfix"></div>
      <!--- Divider -->
      <div id="sidebar-menu">
          <ul>
              <li class=''><a href='/Kurum'><i class='icon-home-3 '></i><span>Ana Sayfa</span></a></li>
              
              <li class='has_sub'><a href='javascript:void(0);'><i class='icon-feather'></i><span>Üyeler</span> <span class="pull-right"><i class="fa fa-angle-down"></i></span></a>
                  <ul>
                      <li><a href='alerts.html'><span>Alerts</span></a></li>
                      <li><a href='buttons.html'><span>Buttons</span></a></li>
                      <li><a href='calendar.html'><span>Calendar</span></a></li>
                      <li><a href='grid.html'><span>Grid</span></a></li>
                      <li><a href='icons.html'><span>Icons</span></a></li>
                      <li><a href='modals.html'><span>Modals</span></a></li>
                      <li><a href='nested-list.html'><span>Nested List</span></a></li>
                      <li><a href='notifications.html'><span>Notifications</span></a></li>
                      <li><a href='portlets.html'><span>Portlets</span></a></li>
                      <li><a href='progress-bars.html'><span>Progress Bars</span></a></li>
                      <li><a href='tabs-accordions.html'><span>Tabs & Accordions</span></a></li>
                      <li><a href='typography.html'><span>Typography</span></a></li>
                  </ul></li>
                  <li class='has_sub'><a href='javascript:void(0);'><i class='icon-pencil-3'></i><span>Doktorlar</span> <span class="pull-right"><i class="fa fa-angle-down"></i></span></a>
                      <ul>
                          <li><a href='/admin/doktor/liste'><span>Doktor Listesi</span></a></li>
                          <li><a href='/admin/doktor/ekle'><span>Doktor Ekle</span></a></li>
                      </ul>
                  </li>
                  <li class='has_sub'><a href='javascript:void(0);'><i class='fa fa-table'></i><span>Kurumlar</span> <span class="pull-right"><i class="fa fa-angle-down"></i></span></a>
                      <ul>
                          <li><a href='tables.html'><span>Basic Tables</span></a></li>
                          <li><a href='datatables.html'><span>Datatables</span></a></li></ul></li>
                          <li class='has_sub'><a href='javascript:void(0);'><i class='fa fa-map-marker'></i><span>Kategoriler</span> <span class="pull-right"><i class="fa fa-angle-down"></i></span></a><ul>
                              <li><a href='google-maps.html'><span>Ana Kategori</span></a></li><li><a href='vector-maps.html'><span>Vector Maps</span></a></li></ul></li>
                              <li class='has_sub'><a href='javascript:void(0);'><i class='fa fa-envelope'></i><span>Mesajlar</span> <span class="pull-right"><i class="fa fa-angle-down"></i></span></a>
                                  <ul>
                                      <li><a href='inbox.html'><span>Inbox</span></a></li><li><a href='read-message.html'><span>View Email</span></a></li>
                                      <li><a href='new-message.html'><span>New Message</span></a></li>
                                  </ul></li>
                                  <li class='has_sub'><a href='javascript:void(0);'><i class='icon-chart-line'></i><span>Haber & Bülten</span> <span class="pull-right"><i class="fa fa-angle-down"></i></span></a>
                                      <ul>
                                          <li><a href='sparkline-charts.html'><span>Makaleler</span></a></li><li><a href='morris-charts.html'><span>Videolar</span></a></li><li><a href='rickshaw-charts.html'><span>Rickshaw Charts</span></a></li>
                                          <li><a href='other-charts.html'><span>Other Charts</span></a></li></ul></li><li class='has_sub'><a href='javascript:void(0);'><i class='icon-megaphone'></i><span>Sistem</span> <span class="pull-right"><i class="fa fa-angle-down"></i></span></a><ul><li><a href='blank.html' ><span>Ayarlar</span></a></li><li><a href='login.html'><span>Kullanıcılar</span></a></li><li><a href='register.html'><span>Banner</span></a></li><li><a href='lockscreen.html'><span>Sayfalar</span></a></li><li><a href='404.html'><span>Yorumlar</span></a></li><li><a href='500.html'><span>500 Error</span></a></li><li><a href='profile.html'><span>User Profile</span></a></li><li><a href='invoice.html'><span>Invoice</span></a></li><li><a href='gallery.html'><span>Gallery</span></a></li><li><a href='maintenance.html'><span>Maintenance</span></a></li><li class='has_sub'><a href='javascript:void(0);'><span>3 Level menu</span> <span class="pull-right"><i class="fa fa-angle-down"></i></span></a><ul><li><a href='javascript:void(0);'><span>Sub Item</span></a></li></ul></li><li class='has_sub'><a href='javascript:void(0);'><span>4 Level Menu</span> <span class="pull-right"><i class="fa fa-angle-down"></i></span></a><ul><li class='has_sub'><a href='javascript:void(0);'><span>Sub Item - level 3</span> <span class="pull-right"><i class="fa fa-angle-down"></i></span></a><ul><li><a href='javascript:void(0);'><span>Sub Item - level 4</span></a></li></ul></li></ul></li><li class='has_sub'><a href='javascript:void(0);'><span>Submenu with icons</span> <span class="pull-right"><i class="fa fa-angle-down"></i></span></a><ul><li><a href='javascript:void(0);'><i class='fa fa-camera'></i><span>Item with icon</span></a></li><li><a href='javascript:void(0);'><i class='entypo entypo-users'></i><span>Another Item</span></a></li></ul></li></ul></li></ul>                    <div class="clearfix"></div>
                                      </div>
                                      <div class="clearfix"></div>









                                      <div class="clearfix"></div><br><br><br>
                                  </div>

                              </div>

                              <!-- Start right content -->
                              <div class="content-page">
                                 <!-- ============================================================== -->
                                 <!-- Start Content here -->
                                 <!-- ============================================================== -->
                                 <div class="content">
                                   <!-- Page Heading Start -->
                                   <div class="page-heading">
                                      <h1><i class='fa fa-magic'></i> @yield('title')</h1>
                                      <!--  <h3>@yield('title')</h3> --> 
                                  </div>
                                  <!-- Page Heading End-->				
                                  <div class="row">
                                      <div class="col-md-12 portlets">


                                        @yield('content')



                                    </div>
                                </div>

                                <!-- Footer Start -->
                                <footer>
                                <div class="footer-links pull-left">

                                   " User ID = <?php echo $userid; ?> " 
                                </div>
                                <div class="footer-links pull-right">

                                  Estetik Takvimi &copy; 2017
                                </div>
                            </footer>
                            <!-- Footer End -->			
                        </div>
                        <!-- ============================================================== -->
                        <!-- End content here -->
                        <!-- ============================================================== -->

                    </div>
                    <!-- End right content -->

                </div>
                <!-- End of page -->
                <!-- the overlay modal element -->
                <div class="md-overlay"></div>
                <!-- End of eoverlay modal -->
                <script>
                  var resizefunc = [];
              </script>
              <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->


              <script src="{{ URL::asset('assets/libs/jquery/jquery-1.11.1.min.js') }}"></script>
              <script src="{{ URL::asset('assets/libs/bootstrap/js/bootstrap.min.js') }}"></script>
              <script src="{{ URL::asset('assets/libs/jqueryui/jquery-ui-1.10.4.custom.min.js') }}"></script>
              <script src="{{ URL::asset('assets/libs/jquery-ui-touch/jquery.ui.touch-punch.min.js') }}"></script>
              <script src="{{ URL::asset('assets/libs/jquery-detectmobile/detect.js') }}"></script>
              <script src="{{ URL::asset('assets/libs/jquery-animate-numbers/jquery.animateNumbers.js') }}"></script>
              <script src="{{ URL::asset('assets/libs/ios7-switch/ios7.switch.js') }}"></script>
              <script src="{{ URL::asset('assets/libs/fastclick/fastclick.js') }}"></script>
              <script src="{{ URL::asset('assets/libs/jquery-blockui/jquery.blockUI.js') }}"></script>
              <script src="{{ URL::asset('assets/libs/bootstrap-bootbox/bootbox.min.js') }}"></script>
              <script src="{{ URL::asset('assets/libs/jquery-slimscroll/jquery.slimscroll.js') }}"></script>
              <script src="{{ URL::asset('assets/libs/jquery-sparkline/jquery-sparkline.js') }}"></script>
              <script src="{{ URL::asset('assets/libs/nifty-modal/js/classie.js') }}"></script>
              <script src="{{ URL::asset('assets/libs/nifty-modal/js/modalEffects.js') }}"></script>
              <script src="{{ URL::asset('assets/libs/sortable/sortable.min.js') }}"></script>
              <script src="{{ URL::asset('assets/libs/bootstrap-fileinput/bootstrap.file-input.js') }}"></script>
              <script src="{{ URL::asset('assets/libs/bootstrap-select/bootstrap-select.min.js') }}"></script>
              <script src="{{ URL::asset('assets/libs/bootstrap-select2/select2.min.js') }}"></script>
              <script src="{{ URL::asset('assets/libs/magnific-popup/jquery.magnific-popup.min.js') }}"></script> 
              <script src="{{ URL::asset('assets/libs/pace/pace.min.js') }}"></script>
              <script src="{{ URL::asset('assets/libs/bootstrap-datepicker/js/bootstrap-datepicker.js') }}"></script>
              <script src="{{ URL::asset('assets/libs/jquery-icheck/icheck.min.js') }}"></script>
              <script src="{{ URL::asset('assets/libs/bootstrap-select/bootstrap-select.min.js') }}"></script>
              <script src="{{ URL::asset('assets/libs/bootstrap-inputmask/inputmask.js') }}"></script>
              <script src="{{ URL::asset('assets/libs/summernote/summernote.js') }}"></script>
              <script src="{{ URL::asset('assets/js/pages/forms.js') }}"></script>

              <!-- Demo Specific JS Libraries -->
              <script src="{{ URL::asset('assets/libs/prettify/prettify.js') }}"></script>

              <script src="{{ URL::asset('assets/js/init.js') }}"></script>
          </body>
          </html>