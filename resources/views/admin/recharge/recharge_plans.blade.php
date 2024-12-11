
@extends('admin.admin_index')
@section('title')
    Recharge Plans
@endsection
@section('admin')
 <div class="page-content">
        <div class="card">
                <div class="card headingLabel">
                    <div class="card-body "> 
                        <div id="stepper3" class="bs-stepper gap-4 vertical">
                            <div class="bs-stepper-header" role="tablist">
                                <div class="step" data-target="#test-vl-1">
                                    <div class="step-trigger" role="tab" id="stepper3trigger1" aria-controls="test-vl-1">
                                    <div class="">
                                        <h5 class="mb-0 steper-title">Create Recharge Plan</h5>
                                        <p class="mb-0 steper-sub-title">Enter Plan Name and Amount</p>
                                    </div>
                                    </div>
                                </div>
                        
                                </div>
                            </div>
                    </div>
                </div>
                <div class="card-body">
                
                    <div class="bs-stepper-content">
                    <form method="post" action="{{route('submit.recharge.plans')}}">
                        @csrf

                        <div class="row g-3">
                            
                        
                        
                            
                            <div class="col-12 col-lg-3">
                                <label for="InputEmail" class="form-label">Plan Name*</label>
                                <input type="text" name="plan_name" class="form-control" id="InputEmail" placeholder="Enter Plan Name">
                            </div>
                            <div class="col-12 col-lg-3">
                                <label for="InputEmail" class="form-label">Amount *</label>
                                <input type="text" name="amount" class="form-control" id="InputEmail" placeholder="Enter Amount ">
                            </div>
                        
                                <button type="submit" class="btn btn-success p-2 w-2  px-4 headingLabel" >Submit</button>
                            
                        
                        
                        
                        </div><!---end row-->
                        
                        </div>

                        <div id="test-l-2" role="tabpanel" class="bs-stepper-pane" aria-labelledby="stepper1trigger2">

                    
                        
                        </div>
                    </form>




                    </div>
                    
                    
                </div>
                <div class="table-responsive">
					<table class="table mb-0">
						<thead class="table-light">
							<tr>
								<th>#</th>
								<th>Plan Name </th>
								<th>Amount</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
                            @foreach($plans as $key=> $item)
							<tr>
								<td>
									<div class="d-flex align-items-center">
										
										<div class="ms-2">
											<h6 class="mb-0 font-14">{{$key+1}}</h6>
										</div>
									</div>
								</td>
								<td>{{$item->plan_name}}</td>
								<td>${{$item->amount}}</td>
								<td>
									<div class="d-flex order-actions">
										<a href="{{route('edit.recharge.plans', $item->id)}}" class=""><i class='bx bxs-edit'></i></a>
										<a href="{{route('delete.recharge.plans',$item->id)}}" class="ms-3"><i class='bx bxs-trash'></i></a>
									</div>
								</td>
							</tr>
						@endforeach
						</tbody>
					</table>
				</div>
            </div>
</div>        



@endsection