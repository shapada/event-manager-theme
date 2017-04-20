<?php get_header(); ?>
<?php get_sidebar(); ?>
	<!-- page content -->
	<div class="right_col" role="main">
		<div class="">
			<div class="page-title">
				<div class="title_left">
					<h3><?php the_title(); ?></h3>
				</div>

				<div class="title_right">
					<div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
						<div class="input-group">
							<input type="text" class="form-control" placeholder="Search for...">
							<span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go</button>
                    </span>
						</div>
					</div>
				</div>
			</div>

			<div class="clearfix"></div>

			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="x_panel">
					<div class="x_title">
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

						<div class="table-responsive">
							<table class="table table-striped jambo_table bulk_action">
								<thead>
								<tr class="headings">
									<th>
										<input type="checkbox" id="check-all" class="flat">
									</th>
									<th class="column-title">Name </th>
									<th class="column-title">Type</th>
									<th class="column-title">Location</th>
									<th class="column-title no-link last"><span class="nobr">Availability</span>
									</th>
									<th class="bulk-actions" colspan="7">
										<a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
									</th>
								</tr>
								</thead>

								<tbody>
								<tr class="even pointer">
									<td class="a-center ">
										<input type="checkbox" class="flat" name="table_records">
									</td>
									<td class=" ">Venue 1</td>
									<td class=" ">Theater</td>
									<td class=" ">921 Skyview Ln, Rochester MN</td>
									<td class=" last"><a href="#">View</a>
									</td>
								</tr>
								<tr class="odd pointer">
									<td class="a-center ">
										<input type="checkbox" class="flat" name="table_records">
									</td>
									<td class=" ">Venue 2</td>
									<td class=" ">Wedding Hall</td>
									<td class=" ">322 Caliber Drive, Rochester MN</td>
									<td class=" last"><a href="#">View</a>
									</td>
								</tr>
								<tr class="even pointer">
									<td class="a-center ">
										<input type="checkbox" class="flat" name="table_records">
									</td>
									<td class=" ">Venue 3</td>
									<td class=" ">School University</td>
									<td class=" ">545 7th Ave, Rochester MN</td>
									<td class=" last"><a href="#">View</a>
									</td>
								</tr>
								<tr class="odd pointer">
									<td class="a-center ">
										<input type="checkbox" class="flat" name="table_records">
									</td>
									<td class=" ">Venue 4</td>
									<td class=" ">Night Club</td>
									<td class=" ">420 Tazer Ln, Rochester MN</td>
									<td class=" last"><a href="#">View</a>
									</td>
								</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /page content -->


<?php get_footer(); ?>