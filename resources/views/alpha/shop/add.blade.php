@include('alpha.header')

<section id="main-content">
	<section class="wrapper">
		<div class="row">
			<div class="col-lg-12">
				<section class="panel">
					<header class="panel-heading">
						添加店铺
					</header>
					<div class="panel-body">
						<form class="form-horizontal tasi-form" method="post" action='/shop/add'>
							<div class="form-group">
								<label class="col-sm-2 col-sm-2 control-label">名称</label>
								<div class="col-sm-10">
									<input type="text" class="form-control" name='name' />
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 col-sm-2 control-label">LOGO</label>
								<div class="file" style="margin-left:15px;">
									选择图片
									<input type="text" class="form-control" name='logo'  id="uploadimg" />
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 col-sm-2 control-label">LOGO预览</label>
								<div class="col-sm-10">
									<img  id='uploadimgpre' src='' />
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 col-sm-2 control-label">地址</label>
								<div class="col-sm-10">
									<div class='col-lg-3' style='padding-left:0;'>
										<select class="form-control m-bot15" name='province' id='province'>
											<option value="0">省份</option>
											@foreach ( $province as $p )
												<option value="{{ $p->code }}">{{ $p->name }}</option>
											@endforeach
										</select>
									</div>
									<div class='col-lg-3'>
										<select class="form-control m-bot15" name='city' id='city'>
											<option value="0">地级市</option>
										</select>
									</div>
									<div class='col-lg-3'>
										<select class="form-control m-bot15" name='area' id='area'>
											<option value="0">区县</option>
										</select>
									</div>
									<div class='col-lg-3'>
										<input type="text" class="form-control" name='address' placeholder='详细地址'/>
									</div>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 col-sm-2 control-label">联系电话</label>
								<div class="col-sm-10">
									<input type="text" class="form-control" name='tel' />
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 col-sm-2 control-label">联系人</label>
								<div class="col-sm-10">
									<input type="text" class="form-control" name='contacts' />
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 col-sm-2 control-label">店铺说明</label>
								<div class="col-sm-10">
									<script id="editor" type="text/plain" name='desc' style="height:500px;"></script>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 col-sm-2 control-label">是否立即显示</label>
								<div class="col-sm-1 text-center">
									<div class="switch has-switch" style='overflow:auto'>
										<input type="checkbox" checked data-toggle="switch" name='is_show' />
									</div>
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

<script>
	$('#province').bind('change' , function(){
		console.log(111111);
	});	
</script>

@include('alpha.footer')
