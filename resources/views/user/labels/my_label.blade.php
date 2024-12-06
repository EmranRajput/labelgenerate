
@extends('user.user_index')
@section('title')
    User Dashboard
@endsection
@section('user')
<style>
 .headingLabel{
        background-color: #ec5252;
        color: white;
    }
    .steper-title{
        color: white;

    }
</style>

	<div class="page-content">
		
		<div class="card">
            <div class="card headingLabel">
                <div class="card-body "> 
                    <div id="stepper3" class="bs-stepper gap-4 vertical">
                        <div class="bs-stepper-header" role="tablist">
                            <div class="step" data-target="#test-vl-1">
                                <div class="step-trigger" role="tab" id="stepper3trigger1" aria-controls="test-vl-1">
                                <div class="">
                                    <h4 class="mb-0 steper-title">My Recent Labels</h4>
                                </div>
                                </div>
                            </div>
                     
                            </div>
                        </div>
                </div>
            </div>

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