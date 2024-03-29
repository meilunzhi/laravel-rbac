@include('alpha.header')
<!--main content start-->
<section id="main-content">
	<section class="wrapper">
	<!-- page start-->
	<div class="row">
		<div class="col-lg-12">
			<section class="panel">
			<header class="panel-heading">
			分类列表
			</header>
			<table class="table table-striped table-advance table-hover">
				<thead>
					<tr>
						<th><i class="icon-bullhorn"></i>名称</th>
						<th>操作</th>
					</tr>
				</thead>
				<tbody>
					@foreach ( $category as $c)
					<tr>
						<td>{{ $c->name }}</td>
						<td>
							<a href="/admin/category-edit/{{ $c->id }}" class="btn btn-primary btn-xs"><i class="icon-pencil"></i></a>
							<a href="/admin/category-del/{{ $c->id }}" class="btn btn-danger btn-xs"><i class="icon-trash "></i></a>
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
