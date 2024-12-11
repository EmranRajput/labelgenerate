
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
                                        <h5 class="mb-0 steper-title">Edit Recharge Plan</h5>
                                        <p class="mb-0 steper-sub-title">Update Plan Name and Amount</p>
                                    </div>
                                    </div>
                                </div>
                        
                                </div>
                            </div>
                    </div>
                </div>
                <div class="card-body">
                
                    <div class="bs-stepper-content">
                    <form method="post" action="{{route('post.recharge.plans')}}">
                        @csrf
                        <input type="hidden" name="plan_id" value="{{$plan->id}}">
                        <div class="row g-3"> 
                            <div class="col-12 col-lg-3">
                                <label for="InputEmail" class="form-label">Plan Name*</label>
                                <input type="text" name="plan_name" class="form-control" value="{{$plan->plan_name}}" id="InputEmail" placeholder="Enter Plan Name">
                            </div>
                            <div class="col-12 col-lg-3">
                                <label for="InputEmail" class="form-label">Amount *</label>
                                <input type="text" name="amount" class="form-control" value="{{$plan->amount}}" id="InputEmail" placeholder="Enter Amount ">
                            </div>

                                <button type="submit" class="btn btn-success p-2 w-2  px-4 headingLabel" >Update</button>
                        </div><!---end row-->
                        
                        </div>

                        <div id="test-l-2" role="tabpanel" class="bs-stepper-pane" aria-labelledby="stepper1trigger2">

                    
                        
                        </div>
                    </form>




                    </div>
                    
                    
                </div>
                
            </div>
</div>        



@endsection