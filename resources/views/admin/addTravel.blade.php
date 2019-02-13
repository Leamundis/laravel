@include('admin.layouts.head')
	<body class="nav-md">
		<div class="container body">
			<div class="main_container">
				<!-- LEFT COLUMN -->
				@include('admin.layouts.left-column')
				@include('admin.layouts.top-navigation')

				<!-- page content -->
				<div class="right_col" role="main">
					<div class="">
						<div class="page-title">
							<div class="title_left">
								<h3>Ajout d'un nouveau voyage</h3>
							</div>

							<div class="title_right">
								<div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
									<div class="input-group">
										<input type="text" class="form-control" placeholder="Search for...">
										<span class="input-group-btn">
											<button class="btn btn-default" type="button">Go!</button>
										</span>
									</div>
								</div>
							</div>
						</div>
						<div class="clearfix"></div>
						<div class="row">
							<div class="col-md-12 col-sm-12 col-xs-12">
								<div class="x_panel">
									@if ($errors->any())
										<div class="alert alert-danger">
											<ul>
												@foreach ($errors->all() as $error)
													<li>{{ $error }}</li>
												@endforeach
											</ul>
										</div>
									@endif
									<div class="x_title">
										<h2>Informations</h2>
										<ul class="nav navbar-right panel_toolbox">
											<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
											</li>
											<li class="dropdown">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
												<ul class="dropdown-menu" role="menu">
													<li><a href="#">Settings 1</a>
													</li>
													<li><a href="#">Settings 2</a>
													</li>
												</ul>
											</li>
											<li><a class="close-link"><i class="fa fa-close"></i></a>
											</li>
										</ul>
										<div class="clearfix"></div>
									</div>
									<div class="x_content">
										<br />
										<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="{{Route('admin.travels.store')}}" method="POST">
											@csrf
											<div class="form-group">
												<label class="control-label col-md-3 col-sm-3 col-xs-12" for="travel-label">Libellé<span class="required">*</span>
												</label>
												<div class="col-md-6 col-sm-6 col-xs-12">
													<input type="text" id="travel-label" name="label" class="form-control col-md-7 col-xs-12" value={{ old('label') }}>
												</div>
											</div>
											
											<div class="form-group">
												<label class="control-label col-md-3 col-sm-3 col-xs-12">Pays<span class="required">*</span></label>
												<div class="col-md-6 col-sm-6 col-xs-12">
													<input type="text" name="localisation" id="" value={{ old('localisation') }}>
												</div>
											</div>
											
											<div class="form-group">
												<label class="control-label col-md-3 col-sm-3 col-xs-12">Disponible<span class="required">*</span></label>
												<div class="col-md-6 col-sm-6 col-xs-12">
													<div id="dispo" class="btn-group" data-toggle="buttons">
														<label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
															<input type="radio" name="disponibility" value="1"> Oui
														</label>
														<label class="btn btn-default active" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
															<input type="radio" name="disponibility" value="0" selected> Non
														</label>
													</div>
												</div>
											</div>

											<div class="form-group">
												<label class="control-label col-md-3 col-sm-3 col-xs-12" for="date-begin">Date de départ<span class="required">*</span></label>
												<div class="col-md-6 col-sm-6 col-xs-12">
													<input type="date" id="date-begin" name="start_date" required="required" class="form-control col-md-7 col-xs-12" value={{ old('start_date') }}>
												</div>
											</div>

											<div class="form-group">
												<label class="control-label col-md-3 col-sm-3 col-xs-12" for="date-end">Date de retour<span class="required">*</span>
												</label>
												<div class="col-md-6 col-sm-6 col-xs-12">
													<input type="date" id="date-end" name="end_date" required="required" class="form-control col-md-7 col-xs-12" value={{ old('end_date') }}>
												</div>
											</div>
											
											<div class="form-group">
												<label class="control-label col-md-3 col-sm-3 col-xs-12" for="cost">Coût<span class="required">*</span>
												</label>
												<div class="col-md-6 col-sm-6 col-xs-12">
													<input type="number" id="cost" name="cost" required="required" class="form-control col-md-7 col-xs-12" value={{ old('cost') }}>
												</div>
											</div>
											
											<div class="form-group">
													<label class="control-label col-md-3 col-sm-3 col-xs-12" for="description">Description<span class="required">*</span>
													</label>
													<div class="col-md-6 col-sm-6 col-xs-12">
														<textarea style="width:100%" id="story" name="description" rows="5" cols="33">{{ old('description') }}</textarea>
													</div>
												</div>

											<div class="ln_solid"></div>
											<div class="form-group">
												<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
													<button class="btn btn-primary" type="button">Cancel</button>
													<button class="btn btn-primary" type="reset">Reset</button>
													<button type="submit" class="btn btn-success">Submit</button>
												</div>
											</div>

										</form>
									</div>
								</div>
							</div>
						</div>

					</div>
				</div>
				<!-- /page content -->
				@include('admin.layouts.footer')
			</div>
		</div>
		@include('admin.layouts.foot')
