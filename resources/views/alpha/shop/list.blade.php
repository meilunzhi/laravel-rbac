@include('alpha.header')
<!--main content start-->
<section id="main-content">
	<section class="wrapper">
	<!-- page start-->
	<div class="row">
		<div class="col-lg-12">
			<section class="panel">
			<header class="panel-heading">
			店铺列表
			</header>
			<table class="table table-striped table-advance table-hover">
				<thead>
					<tr>
						<th><i class="icon-bullhorn"></i>名称</th>
						<th><i class="icon-bullhorn"></i>LOGO</th>
						<th><i class="icon-bullhorn"></i>地址</th>
						<th>操作</th>
					</tr>
				</thead>
				<tbody>
					@foreach ( $shops as $s)
					<tr>
						<td>{{ $s->name }}</td>
						<td><img style='width:80px;height:80px' src="{{ $s->logo }}" /></td>
						<td>{{ $s->address }}</td>
						<td>
							<a href="/shop/edit-shop/{{ $s->id }}" class="btn btn-primary btn-xs"><i class="icon-pencil"></i></a>
							<a href="/shop/del-shop/{{ $s->id }}" class="btn btn-danger btn-xs"><i class="icon-trash "></i></a>
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
