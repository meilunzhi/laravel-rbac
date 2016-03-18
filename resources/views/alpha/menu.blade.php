<!--sidebar start-->
<aside>
	<div id="sidebar"  class="nav-collapse ">
		<!-- sidebar menu start-->
		<ul class="sidebar-menu" id="nav-accordion">
			<li>
				<a href="/" class="@if ($menuactive == 'index') active @endif">
					<i class="icon-dashboard"></i>
					<span>概况</span>
					@if ($menuactive == 'index')
					<span class="dcjq-icon"></span>
					@endif
				</a>
			</li>
			
			@foreach ($menu as $m)
			<li class="sub-menu">
				<a href="javascript:;" class="@if ($menuactive == 'qxgl') active @endif">
					<i class="icon-group"></i>
					<span>{{ $m->display_name }}</span>
					@if ($menuactive == 'qxgl')
					<span class="dcjq-icon"></span>
					@endif
				</a>
				<ul class="sub">
					@foreach ($m->child as $mc)
					<li><a  href="{{ $mc->url }}">{{ $mc->display_name}}</a></li>
					@endforeach
				</ul>
			</li>
			@endforeach

		</ul>
		<!-- sidebar menu end-->
	</div>
</aside>
<!--sidebar end-->

