<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}>
  <head>
    <meta charset="utf-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }}</title>

    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keyword" content="">
    <link rel="shortcut icon" href="img/favicon.png">
    
    <title>Project Management Software</title>
	<!--      laravel app.blade file style start -->
	<!-- <script src="{{ asset('js/app.js') }}" defer></script> -->

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
	<!--   <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->

	<!--      laravel app.blade file style start end -->
    <!-- Bootstrap core CSS -->
    <link href="{{ url('/') }}/public/admin/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ url('/') }}/public/admin/css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="{{ url('/') }}/public/admin/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="{{ url('/') }}/public/admin/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen"/>
    <link rel="stylesheet" href="{{ url('/') }}/public/admin/css/owl.carousel.css" type="text/css">

    <!--right slidebar-->
    <link href="{{ url('/') }}/public/admin/css/slidebars.css" rel="stylesheet">
    <link href="{{ url('/') }}/public/admin/css/datatable.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="{{ url('/') }}/public/admin/css/style.css" rel="stylesheet">
    <link href="{{ url('/') }}/public/admin/css/style-responsive.css" rel="stylesheet" />
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
  </head>
  
    <style>
		.table th{ text-align:center; }
		.table th{ border: 1px solid #000 !important; }
		.table tr{ border: 1px solid #000 !important; }
		.table td{ border: 1px solid #000 !important; }
	</style>

  <body>

    <section id="container" >
      <!--header start-->
      <header class="header white-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
             
            
            <a href="{{ url('/') }}" class="logo">
                <img style="" width="30" src="{{ url('/') }}/public/logo.png">
                <span>License Management Software</span></a>
            
            
            
            
            <div class="top-nav ">
                <!--search & user info start-->
                <ul class="nav pull-right top-menu">
                    
                    <!-- user login dropdown start-->
                    <li class="dropdown">
                        
                            <li>
                               <!--  <a href="login.html"><i class="fa fa-key"></i> Log Out</a> -->

                              <div class="">
                    @guest  
                         <div class="user-panel">

                        <a href="{{url('/')}}/loginuser/home"><i class="fa fa-sign-in"></i> Login</a>                        
                         </div>
                     @else
                      <div class="user-panel">                      
                                
                             
                            <a class="dropdownitem" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                 {{ Auth::user()->name }} ( {{ __('Logout') }} )
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>                          
                      </div>
                    @endguest
                               </div>

                            </li>
                        </ul>
                    </li>
                    
                    <!-- user login dropdown end -->
                </ul>
                <!--search & user info end-->
            </div>
        </header>



	  @php
	  $webmenu = Request::segment(1).'/'.Request::segment(2); $urole = Auth::user()->role_id;

	    if($urole==1){
		    $menu = array(
    			
				'চালকের লাইসেন্স' => 'vehicle-license/',					
				'মালিকের লাইসেন্স' => 'owner-license/',
				'সকল চালকের লাইসেন্স' => 'all-vehicle-license/',				
				'সকল মালিকের লাইসেন্স' =>   'all-owner-license/',
    		);
		}
    
   @endphp
	  
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              
              <ul class="sidebar-menu" id="nav-accordion">
                  
				  @foreach($menu as $k=>$smn)
					  <li class="sub-menu">
						  
						  <a href="{{ url('/') }}/{{ $smn }}" style="color:@if($webmenu == $smn){{ 'white' }}@endif">
						  <i class="fa fa-cogs"></i>
						  {{ $k }}</a>	
					  </li>
				  @endforeach

              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      
      <section id="main-content">
             
            @if(session()->has('message'))
              
                <div class="alert alert-success">
                
                	{{ session()->get('message') }}					
                </div>              
            @endif
            
            @if(session()->has('err-message'))
					
				<div class="alert alert-danger">
					{{ session()->get('err-message') }}
					
				</div>
				
			@endif

            <section class="panel">
                @yield('content')
            </section>  

      </section>
      <!--main content end-->

      <!-- Right Slidebar start -->
      
      <!-- Right Slidebar end -->

      <!--footer start-->
      <footer class="site-footer">
          <div class="text-center">
              2018 - {{date('Y')}} &copy; 2A IT.
              <a href="#" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>
      </footer>
      <!--footer end-->
  </section>
    <!-- js placed at the end of the document so the pages load faster -->
    <script src="{{ url('/') }}/public/admin/js/jquery.js"></script>
    <script src="{{ url('/') }}/public/admin/js/datatable.js"></script>
    <script src="{{ url('/') }}/public/admin/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="{{ url('/') }}/public/admin/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="{{ url('/') }}/public/admin/js/jquery.scrollTo.min.js"></script>
    <script src="{{ url('/') }}/public/admin/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="{{ url('/') }}/public/admin/js/jquery.sparkline.js" type="text/javascript"></script>
    <script src="{{ url('/') }}/public/admin/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
    <script src="{{ url('/') }}/public/admin/js/owl.carousel.js" ></script>
    <script src="{{ url('/') }}/public/admin/js/jquery.customSelect.min.js" ></script>
    <script src="{{ url('/') }}/public/admin/js/respond.min.js" ></script>

    <!--right slidebar-->
    <script src="{{ url('/') }}/public/admin/js/slidebars.min.js"></script>

    <!--common script for all pages-->
    <script src="{{ url('/') }}/public/admin/js/common-scripts.js"></script>

    <!--script for this page-->
    <script src="{{ url('/') }}/public/admin/js/sparkline-chart.js"></script>
    <script src="{{ url('/') }}/public/admin/js/easy-pie-chart.js"></script>
    <script src="{{ url('/') }}/public/admin/js/count.js"></script>

  <script>

      //owl carousel

      $(document).ready(function() {
          $("#owl-demo").owlCarousel({
              navigation : true,
              slideSpeed : 300,
              paginationSpeed : 400,
              singleItem : true,
              autoPlay:true

          });
      });

      //custom select box

      $(function(){
          $('select.styled').customSelect();
          $('#myTable').DataTable();
      });



  </script>

  </body>
</html>

