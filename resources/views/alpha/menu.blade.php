<!--sidebar start-->
<aside>
	<div id="sidebar"  class="nav-collapse ">
		<!-- sidebar menu start-->
		<ul class="sidebar-menu" id="nav-accordion">
			
			@foreach ($menu as $m)
				@if (empty($m->child))
				<li>
					<a href="{{ $m->name }}" class="@if ($menuactive == 'index') active @endif">
						<i class="icon-dashboard"></i>
						<span>{{ $m->display_name }}</span>
					</a>
				</li>
				@else
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
						<li><a  href="{{ $mc->name }}">{{ $mc->display_name}}</a></li>
						@endforeach
					</ul>
				</li>
				@endif
			@endforeach

		</ul>
		<!-- sidebar menu end-->
	</div>
</aside>
<!--sidebar end-->

