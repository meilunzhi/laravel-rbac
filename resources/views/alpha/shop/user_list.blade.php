@include('alpha.header')
<!--main content start-->
<section id="main-content">
	<section class="wrapper">
	<!-- page start-->
	<div class="row">
		<div class="col-lg-12">
			<section class="panel">
			<header class="panel-heading">
			店员列表
			</header>
			<table class="table table-striped table-advance table-hover">
				<thead>
					<tr>
						<th><i class="icon-bullhorn"></i>手机号</th>
						<th><i class="icon-bullhorn"></i>名称</th>
						<th>操作</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($user as $u)
					<tr>
						<td>{{ $u->tel }}</td>
						<td>{{ $u->name }}</td>
						<td>
							<a href="/shop/edit-user/{{ $u->id }}" class="btn btn-primary btn-xs"><i class="icon-pencil"></i></a>
							<a href="/shop/del-user/{{ $u->id }}" class="btn btn-danger btn-xs"><i class="icon-trash "></i></a>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
			</section>
		</div>
	</div>
	<!-- page end-->
	</section>
</section>
<!--main content end-->

@include('alpha.footer')
