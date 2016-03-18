@include('alpha.header')
<!--main content start-->
<section id="main-content">
	<section class="wrapper">
	<!-- page start-->
	<div class="row">
		<div class="col-sm-6 text-center">
			<section class="panel">
			<header class="panel-heading">
			所有分类
			</header>
			<table class="table table-striped table-advance table-hover">
				<thead>
					<tr>
						<th class="text-center"><i class="icon-bullhorn"></i>名称</th>
						<th class="text-center">操作</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($category as $c)
					<tr>
						<td>{{ $c->name }}</td>
						<td>
							<a href="/goods/add-category/{{ $c->id }}" class="btn btn-danger btn-xs"><i class="icon-arrow-right "></i></a>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
			</section>
		</div>

		
		<div class="col-sm-6 text-center">
			<section class="panel">
			<header class="panel-heading">
			我店里有的分类
			</header>
			<table class="table table-striped table-advance table-hover">
				<thead>
					<tr>
						<th class="text-center"><i class="icon-bullhorn"></i>名称</th>
						<th class="text-center">操作</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($shop_category as $sc)
					<tr>
						<td>{{ $sc->name }}</td>
						<td>
							<a href="/goods/del-category/{{ $sc->c_id }}" class="btn btn-danger btn-xs"><i class="icon-trash "></i></a>
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
