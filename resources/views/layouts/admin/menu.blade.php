<section class="sidebar">
	<form action="#" method="get" class="sidebar-form">
    	<div class="input-group">
    		<input type="text" name="q" class="form-control" placeholder="Search...">
    			<span class="input-group-btn">
    			<button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
    			</button>
    			</span>
    	</div>
	</form>
	<ul class="sidebar-menu">

		<li class="header">MAIN NAVIGATION</li>

		<li class="{!! Request::is('users*') ? 'active' : '' !!}">
			<a href="{{ route('users.index') }}">
				<i class="fa fa-users"></i> <span>Users</span>
			</a>
		</li>
		<li class="{!! Request::is('blogs*') ? 'active' : '' !!}">
			<a href="{{ route('blogs.index') }}">
				<i class="fa fa-file-text-o"></i> <span>Blogs</span>
			</a>
		</li>
	</ul>
</section>
<!-- /.sidebar -->
