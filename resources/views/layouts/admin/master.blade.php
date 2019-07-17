<!DOCTYPE html>
<html>
<head>
	@include('layouts.admin.header')
	<style type="text/css">
		.box-body{
			min-width:100%;
			width:auto;
		}
	</style>
</head>
<body class="skin-blue sidebar-collapse sidebar-mini">
	<div class="wrapper">
		<header class="main-header">
			@include('layouts.admin.top_menu')
		</header>

		<aside class="main-sidebar">
			@include('layouts.admin.menu')
		</aside>

		<div class="content-wrapper">
			<section class="content">
				<div class='row'>
                	<div class='col-xs-12'>
            			@include('layouts.admin.alerts')
                		<div class="box">
                			<div class="box-body">
								@yield('content')
							</div>
						</div>
					</div>
				</div>
			</section>
		</div>
	</div>
	@include('layouts.admin.scripts')
</body>
</html>