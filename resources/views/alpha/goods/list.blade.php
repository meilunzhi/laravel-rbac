@include('alpha.header')
<!--main content start-->
<section id="main-content">
	<section class="wrapper">
	<!-- page start-->
	<div class="row">
		<div class="col-lg-12">
			<section class="panel">
			<header class="panel-heading">
			菜品列表
			</header>
			<table class="table table-striped table-advance table-hover">
				<thead>
					<tr>
						<th><i class="icon-bullhorn"></i>名称</th>
						<th class="hidden-phone"><i class="icon-question-sign"></i>分类</th>
						<th><i class="icon-bookmark"></i>缩略图</th>
						<th><i class=" icon-edit"></i>原价</th>
						<th><i class=" icon-edit"></i>现价</th>
						<th>操作</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($goods as $g)
					<tr>
						<td>{{ $g->name }}</td>
						<td class="hidden-phone">{{ $g->c_name }}</td>
						<td><img src="{{ $g->cover }}" alt="{{ $g->name }}" style='width:100px;' /> </td>
						<td>{{ $g->o_price }}</td>
						<td>{{ $g->p_price }}</td>
						<td>
							<a href="/admin/edit-goods/{{ $g->id }}" class="btn btn-primary btn-xs"><i class="icon-pencil"></i></a>
							<a href="/admin/goods/del/{{ $g->id }}" class="btn btn-danger btn-xs"><i class="icon-trash "></i></a>
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
