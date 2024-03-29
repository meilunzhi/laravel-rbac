@include('alpha.header')

<section id="main-content">
	<section class="wrapper">
		<div class="row">
			<div class="col-lg-12">
				<section class="panel">
					<header class="panel-heading">
						添加菜品
					</header>
					<div class="panel-body">
						<form class="form-horizontal tasi-form" method="post" action='/admin/edit-goods'>
							<input type='hidden' value="{{ $goods->id }}" name='gid' />
							<div class="form-group">
								<label class="col-sm-2 col-sm-2 control-label">名称</label>
								<div class="col-sm-10">
									<input type="text" class="form-control" name='name' value="{{ $goods->name }}" />
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 col-sm-2 control-label">分类</label>
								<div class="col-sm-10">
									<select class="form-control" name='c_id'>
										@foreach ($category as $c)
										<option value="{{ $c->id }}" @if ( $goods->c_id == $c->id) selected @endif > {{ $c->name }}</option>
										@endforeach
									</select>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 col-sm-2 control-label">原价</label>
								<div class="col-sm-10">
									<input type="text" class="form-control" name='o_price' value="{{ $goods->o_price }}" />
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 col-sm-2 control-label">现价</label>
								<div class="col-sm-10">
									<input type="text" class="form-control" name='p_price'  value="{{ $goods->p_price }}"/>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 col-sm-2 control-label">缩略图</label>
								<div class="file" style="margin-left:15px;">
									选择图片
									<input type="text" class="form-control" name='cover'  id="uploadimg" value="{{ $goods->cover }}" />
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 col-sm-2 control-label">缩略图预览</label>
								<div class="col-sm-10">
									<img  id='uploadimgpre' src="{{ $goods->cover }}" />
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 col-sm-2 control-label">图文详情</label>
								<div class="col-sm-10">
									<script id="editor" type="text/plain" name='desc' style="height:500px;">{{ $goods->desc }}</script>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 col-sm-2 control-label">是否立即显示</label>
								<div class="col-sm-1 text-center">
									<div class="switch has-switch" style='overflow:auto'>
										<input type="checkbox" @if ( $goods->is_show == 1 ) checked @endif data-toggle="switch" name='is_show' />
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

@include('alpha.footer')
