
@extends('user.user_index')
@section('title')
    User Dashboard
@endsection
@section('user')
	<div class="page-content">
		<div class="row row-cols-1 row-cols-md-2 row-cols-xl-4">
			
			<div class="col">
				<div class="card radius-10 bg-success">
					<div class="card-body">
						<div class="d-flex align-items-center">
							<div>
								<p class="mb-0 text-white">Revenue</p>
								<h4 class="my-1 text-white">$4805</h4>
								<p class="mb-0 font-13 text-white"><i class="bx bxs-up-arrow align-middle"></i>$34 from last week</p>
							</div>
							<div class="widgets-icons bg-white text-success ms-auto"><i class="bx bxs-wallet"></i>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col">
				<div class="card radius-10 bg-info">
					<div class="card-body">
						<div class="d-flex align-items-center">
							<div>
								<p class="mb-0 text-dark">Total Customers</p>
								<h4 class="my-1 text-dark">8.4K</h4>
								<p class="mb-0 font-13 text-dark"><i class="bx bxs-up-arrow align-middle"></i>$24 from last week</p>
							</div>
							<div class="widgets-icons bg-white text-dark ms-auto"><i class="bx bxs-group"></i>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col">
				<div class="card radius-10 bg-danger">
					<div class="card-body">
						<div class="d-flex align-items-center">
							<div>
								<p class="mb-0 text-white">Store Visitors</p>
								<h4 class="my-1 text-white">59K</h4>
								<p class="mb-0 font-13 text-white"><i class="bx bxs-down-arrow align-middle"></i>$34 from last week</p>
							</div>
							<div class="widgets-icons bg-white text-danger ms-auto"><i class="bx bxs-binoculars"></i>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col">
				<div class="card radius-10 bg-warning">
					<div class="card-body">
						<div class="d-flex align-items-center">
							<div>
								<p class="mb-0 text-dark">Bounce Rate</p>
								<h4 class="my-1 text-dark">34.46%</h4>
								<p class="mb-0 font-13 text-dark"><i class="bx bxs-down-arrow align-middle"></i>12.2% from last week</p>
							</div>
							<div class="widgets-icons bg-white text-dark ms-auto"><i class='bx bx-line-chart-down'></i>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--end row-->
		<div class="card">
			<div class="card-body">
				<div class="d-lg-flex align-items-center mb-4 gap-3">
					<div class="position-relative">
						<input type="text" class="form-control ps-5 radius-30" placeholder="Search Subscription"> <span class="position-absolute top-50 product-show translate-middle-y"><i class="bx bx-search"></i></span>
					</div>
					<div class="ms-auto"><a href="javascript:;" class="btn btn-primary radius-30 mt-2 mt-lg-0"><i class="bx bxs-plus-square"></i>Create Label</a></div>
				</div>
				<div class="table-responsive">
					<table class="table mb-0">
						<thead class="table-light">
							<tr>
								<th>#</th>
								<th>Paid </th>
								<th>Added</th>
								<th>Used</th>
								<th>Remaining</th>
								<th>Created At	</th>
								<th>Message</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>
									<div class="d-flex align-items-center">
										<div>
											<input class="form-check-input me-3" type="checkbox" value="" aria-label="...">
										</div>
										<div class="ms-2">
											<h6 class="mb-0 font-14">#OS-000354</h6>
										</div>
									</div>
								</td>
								<td>$85</td>
								<td><div class="badge rounded-pill text-success bg-light-success p-2 text-uppercase px-3"><i class='bx bxs-circle me-1'></i>FulFilled</div></td>
								<td>$485.20</td>
								<td>$85.20</td>
								<td><button type="button" class="btn btn-primary btn-sm radius-30 px-4">June 10, 2020</button></td>
								<td>
									<div class="d-flex order-actions">
										<a href="javascript:;" class=""><i class='bx bxs-edit'></i></a>
										<a href="javascript:;" class="ms-3"><i class='bx bxs-trash'></i></a>
									</div>
								</td>
							</tr>
						
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
@endsection