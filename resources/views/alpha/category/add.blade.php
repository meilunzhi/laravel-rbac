@include('alpha.header')

<section id="main-content">
	<section class="wrapper">
		<div class="row">
			<div class="col-lg-12">
				<section class="panel">
					<header class="panel-heading">
						添加分类
					</header>
					<div class="panel-body">
						<form class="form-horizontal tasi-form" method="post" action='/category/add'>
							<div class="form-group">
								<label class="col-sm-2 col-sm-2 control-label">名称</label>
								<div class="col-sm-10">
									<input type="text" class="form-control" name='name' />
								</div>
							</div>
							<div class="form-group text-center" >
								<button type="submit" class="btn btn-success">添加</button>
							</div>
						</form>
					</div>
				</section>
			</div>
		</div>
	</section>
</section>

@include('alpha.footer')
