<a href="{{URL::to('/')}}" class="logo">
	<!-- mini logo for sidebar mini 50x50 pixels -->
	<span class="logo-mini"><b>U</b>P</span>
	<!-- logo for regular state and mobile devices -->
	<span class="logo-lg"><b>User</b>Profiler</span>
</a>

<!-- Header Navbar: style can be found in header.less -->
<nav class="navbar navbar-static-top">
	<!-- Sidebar toggle button-->
	<a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
		<span class="sr-only">Toggle navigation</span>
	</a>
	<!-- Navbar Right Menu -->
	<div class="navbar-custom-menu">
		<ul class="nav navbar-nav">
			<li class="dropdown user user-menu">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">
					<img src="/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
					<span class="hidden-xs">{!! Auth::user()->name !!}</span>
				</a>
    			<ul class="dropdown-menu">
    				<!-- User image -->
    				<li class="user-header">
    					<img src="/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
    					<p>
    						{!! Auth::user()->name !!}
    						<small>{!! date('d-m-Y') !!}</small>
    					</p>
    				</li>
    				<li class="user-footer">
    					<div class="pull-left">
    						<a href="#" class="btn btn-default btn-flat">Profile</a>
    					</div>
    					<div class="pull-right">
							{!! form::open(['route'=>'logout']) !!}
								{!! form::submit('Sign Out', ['class'=>'btn btn-default btn-flat']) !!}
							{!! form::close() !!}
    					</div>
    				</li>
    			</ul>
			</li>
		</ul>
	</div>
</nav>